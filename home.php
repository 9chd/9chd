<!DOCTYPE php>
<?php
	/*
	To create the homepage I've used a combination of html and php in a php file.  This si the only
	way that you can include both these types together.  Trying to put php into a html file does not
	render correctly.  The same happens with trying to put javascript into a php file.  In this situation
	you wrap the javascript in a html document and use the readfile function.
	*/
  	readfile('header.html');
	readfile('chart.html');

	include('fetchData2.php');

	readfile('chart.html');

  	
?>
