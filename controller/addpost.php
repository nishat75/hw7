<?php

session_start();

$caption=$_REQUEST['caption'];
$detail=$_REQUEST['detail'];
$author=$_REQUEST['author'];

$results=[];

if (empty($caption)) {
    $results['caption_error']="Missing caption";
} else if (strlen($caption)>=50) {
    $results['caption_error']="character limit exceeded";
}

if (empty($detail)) {
    $results['detail_error']="Missing detail";
}else{
    echo "You have successfully entered the page!";
}


if (count($results)>0) {
    $_SESSION['form_error']=$results;
    header("Location:../postsystem.php");
}