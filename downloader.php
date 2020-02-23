<?php
if(!isset($_GET['p'])||!isset($_GET['url']))exit();
require 'phpQuery.php';
$url = $_GET['url'];
$p = $_GET['p'];
$main_dir = substr($p, 0, strrpos($p, '/'));
if(strpos($main_dir, '/'))
    $home_dir = substr($main_dir, 0, strpos($main_dir, '/'));
else
    $home_dir = $main_dir;
$path = $p;
while (strpos($path, '/')){
    $dir .= substr($path, 0, strpos($path, '/')) . "/";
    $path = substr($path, strpos($path, '/') + 1, strlen($path) - strpos($path, '/') - 1);
    mkdir("$dir", 0777);
    echo "mkdir(\"$dir\", 0777);<BR>";
}
mkdir($main_dir, 0777, true);

$data = downloadFile($url, $p);
echo $data;
$doc = phpQuery::newDocumentHTML($data);
if(is_string($data)) {
    $data = str_replace("href=\"/", "href=\"" . mydir() . "/" . $home_dir . "/", $data);
    $data = str_replace("src=\"/", "src=\"" . mydir() . "/" . $home_dir . "/", $data);

    $WriteFile = fopen($p, "wb");
}
if ($WriteFile)
    fwrite($WriteFile, $data);
$url = substr($url, 0, strrpos($url, '/') );

$domain = parse_url($url, PHP_URL_SCHEME) . "://" . parse_url($url, PHP_URL_HOST);



$attrs = $doc->find("*[src], link[href]");
foreach ($attrs as $at){
 $at = pq($at);
    if($at->attr('src')) {

        $src = $at->attr('src') ;
        file_proc($src);

    }
    else if($at->attr('href')) {

        $src = $at->attr('href') ;
        file_proc($src);

    }

}

function downloadFile ($URL, $PATH) {
    $data = file_get_contents($URL);
    file_put_contents($PATH, $data);
    return $data;
}


function file_proc($src){

    global $url, $main_dir, $domain, $home_dir;

    $path = $src;
    $dir = '';
    while (strpos($path, '/')){
        $dir .= '/' . substr($path, 0, strpos($path, '/'));
        $path = substr($path, strpos($path, '/') + 1, strlen($path) - strpos($path, '/') - 1);
        mkdir("$main_dir/$dir", 0777);
    }
    try {
        if($src[0] != '/')
            downloadFile($url . $src, "$main_dir/$src");
        else {
            downloadFile($domain . $src, "$home_dir$src");

        }
    }catch (Exception $e){

    }

}

function mydir(){
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];
    $url = substr($url , 0, strrpos($url, '/'));

    return $url;
}