<style>
div {
  background-color: DeepSkyBlue;
}
</style>

<html>
<head>
  
<div style="background-image: url('View\Images\Background.jpg');">
<title>Search by Title</title>
</head>
<style>
        h1 {text-align: center; vertical-align: middle;}
        div {text-align: center; vertical-align: middle;}

        </style>
<link rel="stylesheet" type="text/css" href="View\websiteDesign.css" />
<body>  
<h1 id="title" href="C:\xampp\htdocs\programs\pageflipping-main (4)\pageflipping-main\View\searchPage.html">Pager Flipper Search</h1>
<form action="../Model/eBaySearch.php" method="POST">
    
    <div>
        <input type="text" name="query"  placeholder="Enter Book Title or ISBN"  />    
        Under:  $<select name="maxPrice">
			<option value="10">10</option>
			<option value="25">25</option>
			<option value="50">50</option>
		</select>
		<button type="submit" >Go!</button>
    </div>
  </form>
  </body>

</html>

<?php
 
  $maxPrice = $_POST['maxPrice'];

  $searchURL = "https://books.googleapis.com/books/v1/volumes?q="; //Google Books API call
  $query = urlencode($_POST['query']); //User inputted search query
  $url = $searchURL.$query;

  $string = file_get_contents($url);

  $data = json_decode($string, true);
  
  echo "********Google Books Results********";
  echo "<hr>";
  
  foreach($data['items'] as $items) {
    if ('listPrice' !=0) {
    $title = $items['volumeInfo']['title']; 
    error_reporting(E_ERROR | E_PARSE);
	$amount = $items['saleInfo']['listPrice']['amount'];	
  error_reporting(E_ERROR | E_PARSE);
	
	if($amount <= $maxPrice){
	
		echo "Title : ";
		echo $title . "<br>";
		
		if($items['saleInfo']['saleability'] == "FOR_SALE"){
				
		  echo "Price : $";
		  echo $amount;
		  echo "<hr>";
		  
		}
		else {

		  echo "Price : ";	
		  echo "No list price";
		  echo "<hr>";	

		}	
	}else{
		echo "";
	}
  }
  }
  
  // Ebay API request variables
  $endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
  $version = '1.0.0';  // API version supported by your application
  $appid = 'ImranGha-cosc465-PRD-18bbc5abd-a56d9f9e';  // Replace with your own AppID - Production API
  $globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
  //$query = $_POST['query'];  // You may want to supply your own query
  //$safequery = urlencode($query);  // Make the query URL-friendly
  
  // Construct the findItemsByKeywords HTTP POST call
  $apicall = "$endpoint?";
  $apicall .= "OPERATION-NAME=findItemsByKeywords";
  $apicall .= "&SERVICE-VERSION=$version";
  $apicall .= "&SECURITY-APPNAME=$appid";
  $apicall .= "&GLOBAL-ID=$globalid";
  $apicall .= "&keywords=$query";
  $apicall .= "&paginationInput.entriesPerPage=10";
  
  //print_r( $apicall); exit; //Testing purposes
  
  // Load the call and capture the document returned by eBay API
  $resp = simplexml_load_file($apicall);
  
  //print_r($resp); exit;
  
  // Check to see if the request was successful, else print an error
  if ($resp->ack == "Success") {
	
	echo "********Ebay Results********";
	echo "<hr>";
	
    // If the response was loaded, parse it and build links
    foreach($resp->searchResult->item as $item) {
	
      $title = $item->title;
	  $price = $item->sellingStatus->currentPrice;
	  
	  if($price <= $maxPrice){
	  
		  echo "Title : ";
		  echo $title . "<br>";
		  
		  if($item->sellingStatus->sellingState == "Active") {  
		 
			echo "Price : $";
			echo $price;	
			echo "<hr>";
			
		  }
		  else {
		  
			echo "Price : ";	
			echo "Not currently for sale";
			echo "<hr>";
		  
		  }
	  }else{
		  echo "";
	  }	  
    }
  }
  // If the response does not indicate 'Success,' print an error
  else {
    $results  = "<h3>Oops! The request was not successful. Make sure you are using a valid ";
    $results .= "AppID for the Production environment.</h3>";
  }


?>