<?php


include "View/homeView.php";

class controller {

    public $model, $view;
	
	function __construct() {	
	}
	
	function viewMenu(){		
		
		$this->view = new homeView();
	}	
	
	function actions($flag) {	
	
	    //$this->viewMenu();	
	    	
		if($flag=="register"){
		   include "View/registerView.html";
		}  
		
		include "Model/registerModel.php";
		$this->model = new registerModel();
		
		if($flag=="insertRecord"){		  		
		
			$this->model->insertRecord($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['email']);		  
		}
		
		if($flag=="login"){		 
			include "View/loginView.html";
		}
		
		include "Model/loginModel.php";
		$this->model = new loginModel();
		
		
		
	}
}	

?>