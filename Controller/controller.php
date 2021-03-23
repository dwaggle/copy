<?php

include "Model/dashboard.php";

class siteController {

    public $model, $view;
	
	function __construct() {	
	}
	
	function viewMenu(){		
		
		$this->view = new homeView();
	}	
	
	function actions($flag) {	
	
 	   //  $this->viewMenu();	//(for site header)
	    	
		
		
		include "Model/registerModel.php";
		$this->model = new registerModel();
		
		if($flag=="register"){
		   echo '';
		   include "View/registerMenu.html";
		}  
		
		if($flag=="insertRecord"){		  		
		
			$this->model->insertRecord($_REQUEST['email'], $_REQUEST['password']);		  
			
		}
		
		if($flag=="login"){		 
			include "View/loginView.html";
		}
		
		include "Model/loginModel.php";
		$this->model = new loginModel();
			
	    if($flag=="authenticateUser"){		  		
		
			$this->model->authenticateUser($_REQUEST['email'], $_REQUEST['password']);
		}
		
		if($flag=="forgotpassword") {
		    //include "View/lostPassword.html";
		    include "View/searchPage.html";
		}
		
		if($flag=="searchWithoutLogin") {
		    //include "View/lostPassword.html";
		    include "View/searchPage.html";
		}
		
		if($flag=="terms") {
			include "View/Terms-and-Conditions-Template.txt";
		}
		
		if($flag=="passwordIsChanged"){
			include "Model/logoutModel.php";
			echo "<h3>Password changed successfully</h3>";
			include "View/loginView.html";
		}
	}
}

?>