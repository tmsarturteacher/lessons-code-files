<?php

//class TextHelper
//{
//    private static array $translit = [
//        'а' => 'a',
//        'п' => 'p',
//        'р' => 'r',
//        'и' => 'i',
//        'в' => 'v',
//        'е' => 'e',
//        'т' => 't',
//    ];
//
//    public static function translit(string $string)
//    {
//        $string = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
//        $resultString = "";
//        foreach ($string as $str) {
//            $resultString .= self::$translit[$str];
//        }
//
//        return $resultString;
//    }
//}
//
//class App
//{
//    public function getTranslit(string $string)
//    {
//        return TextHelper::translit(htmlspecialchars($string));
//    }
//}
//
//
//$app = new App();
//echo $app->getTranslit("привет");

