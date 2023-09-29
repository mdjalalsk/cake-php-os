<?php
include_once "function.php";
$item= "Coffee";
$quantity= "4 cups";

//without parameters
serve();
//with parameters
serve($quantity,$item);