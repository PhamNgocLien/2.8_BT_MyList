<?php
include 'MyList.php';

$myList = new MyList([1,'min',2,'max']);

$myList->insert(2,'and');
var_dump($myList->reset());