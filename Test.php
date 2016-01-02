<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 01/01/16
 * Time: 7:29 PM
 */
$content = "[text-color->'white']This is my content[text-color]
    1. Hello.
    [button->'btn-blue']hello[button]
        [link->'facebook.com']Hello[link]
";

echo everything_in_tags($content);

$content = str_replace(' ', '&nbsp;', $content);

$content = str_replace(']', '>', $content);

$content = str_replace('[link->', '<a href=', $content);
$content = str_replace('[link', '</a', $content);

$content = str_replace('[text-color->', '<font color=', $content);
$content = str_replace('[text-color', '</font', $content);

$content = str_replace('[button->', '<button class=', $content);
$content = str_replace('[button', '</button', $content);

echo nl2br($content);

