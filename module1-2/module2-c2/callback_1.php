<?php

use function PHPSTORM_META\map;

$person=[
    ["name"=>"a","Gender"=>"f"],
    ["name"=>"b","Gender"=>"m"],
    ["name"=>"c","Gender"=>"f"],
    ["name"=>"d","Gender"=>"m"],
    ["name"=>"e","Gender"=>"m"]
];
function isMale($person){
    if($person["Gender"]=="m"){
        return true;
    }else {
        return false;
    }
}
function isFemale($person){
    if($person["Gender"]=="f"){
        return true;
    }else {
        return false;
    }
}
$result=array_filter($person,"isMale");
print_r($result);
$fm=array_filter($person,"isFemale");
print_r($fm);