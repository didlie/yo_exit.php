<?php

/********************************************************/
/*********************  YO_EXIT()  **********************/
/********************************************************/
/*************** implemented in didlie.com **************/
/********************************************************/
/**** Isaac Jacobs :: July 9, 2018 :: www.didlie.com ****/
/********************************************************/
/******* free to use, change, sell, distribute **********/
/**** license: Isaac Jacobs(c) === MIT License **********/
/********************************************************/

$p = "Hey Google, just try to break that one with a multiple request attack!";

	function yo_exit($p=""){
		print_r($p);
		while(true){
			exit();
			yo_exit($p=".".$p);
		}
	}
  

yo_exit($p);
//outputs: Hey Google, just try to break that one with a multiple request attack!
  
 
