<?php

// strip_tags

$contents = "<b>sample</b>";
$contents = strip_tags($contents);
echo $contents;

// array_push

$fruits = array("apple", "banana", "grape");
array_push ($fruits, "orange", "strawberry");
print_r($fruits);

// array_merge

$fruits1 = ["apple", "banana", "lemon"];
$fruits2 = ["strawberry", "peach", "lime"];

$fruits = array_merge($fruits1, $fruits2);

print_r($fruits);

// time

echo time();

// mktime

echo mktime(date('H'),date('i'),date('s'),date('n'),date('j'),date('Y'))."<br/>\n";

// date

echo date('Y/m/d');
echo ("\n");