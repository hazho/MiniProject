<?php 


	$blogData = $con->getBlog($_GET['id'])[0]; 
// echo "<pre>";print_r($blogData);
	$title = $blogData['title'];
	$description = $blogData['description'];
	$content = $blogData['content'];
	
  	include_once('post/header.php'); 
  	include_once('post/postn.php');

?>