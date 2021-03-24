
<html>
<head>
<title>Search by Title</title>
</head>
<style>
        h1 {text-align: center; vertical-align: middle;}
        div {text-align: center; vertical-align: middle;}

        </style>
<link rel="stylesheet" type="text/css" href="View\websiteDesign.css" />
<body>  
<h1 id="title">Pager Flipper Search</h1>
<form action="C:\xampp\htdocs\programs\pageflipping-main (4)\pageflipping-main\loadsearch.php" method="POST">
    
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

