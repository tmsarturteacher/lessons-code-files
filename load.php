<?php

// fopen - открывает файл или URL
// scheme://...
// open_basedir, allow_url_fopen

//$arr = ["a", "b"];

//die(print_r($arr));


//$handle = fopen("resource.txt", "r");
//$handle = fopen("http://www.google.com/", "r");

$filePath = "resource.txt";

$stream = fopen($filePath, "r") or die("Не удалось открыть файл");

//if ($handle) {
//    while (($buffer = fgets($handle, 1)) !== false) {
//        echo $buffer;
//    }
//    if (!feof($handle)) {
//        echo "Ошибка!!";
//    }
//}


//$text = fgets($handle);
//feof() - проверяет достигнут ли конец файла

//fread() - бинарно-безопасное чтение файла

//$text = fread($handle, filesize($filePath));
//$textWithTags = nl2br($text);
//
//echo $textWithTags;


// file_get_contents - читает содержимое файла в строку

//$text = file_get_contents($filePath, false, null, 3, 5);
//var_dump($text);

//echo $text;

// fwrite - бинарно-безопасное запись файла

//fwrite($handle, "Добавим текст к файлу 2222\n");

//fwrite($handle, "hello file!");

// fseek() - смещает указатель

//fseek($stream, 3);
//
//$data = fread($stream, filesize($filePath));
//
//echo $data;

fclose($stream);

// unlink - удаление файла
//unlink($filePath);


//$dirs = scandir("./folderForTestScandir/../");
//
//echo "<pre>";
//print_r($dirs);
//echo "</pre>";




// include, require

require "./folderForTestScandir/index1.php";

//echo "include {$test}";


function testFunc() {
    include "./folderForTestScandir/index.php";
}


//include_once "./folderForTestScandir/index.php";
//require_once "./folderForTestScandir/index.php";


require_once "./folderForTestScandir/calculate.php";

echo plus(3, 4);
echo minus();
















