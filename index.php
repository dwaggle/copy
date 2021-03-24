<?php

 include "Controller/controller.php";

 $record = new siteController();
 
 
 
  if(!isset($_REQUEST['flag'])){
	 
      $record->viewMenu();
 }else{
	 
	 $record->actions($_REQUEST['flag']);
 }
 


?>