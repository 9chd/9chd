<?php
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">	
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<head>
<title>SiMoS-IoT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: "Trirong", serif;
}

/* Style the header */
header 
	{

  		margin: auto; 
		height: 80px;
  		padding: 20px 10px 10px 100px;
  		text-align: left;
		font-size: 36px;
		background-color: black;
		color: white;
	}
subheader
	{
  		margin: auto; 
		height: 60px;
  		padding: 20px 0px 10px 0px;
  		text-align: right;
		font-size: 36px;
		background-color: black;
		color: white;
	}


	
ul {
  list-style-type: none;
	  border-bottom: DodgerBlue solid 10px;
  margin: 0;
  padding: 40px, 40px, 20px, 100px;
  overflow: hidden;
  background-color: black;
	font-size: 20px;
	height: 60px;

}
	
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 5px 10px 10px 60px;
  text-decoration: none;

}

li a:hover {
  background-color: #111111;
	}
	
clock {

        }
	
/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 15%;
  height: 600px; /* only for demonstration, should be removed */
  background: rgb(225,225,225);
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
  font-size: 25px;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: white;
  height: 600px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer 
footer {
  background-color: black;
  height: 40px;
  padding: 20px;
  text-align: right;
  color: white;
}
*/
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

	<header>
		9chd Smart Home Dashboard
	</header>

	<subheader>
		<ul>
  			<li><a href="#home">Devices    </a></li>
  			<li><a href="#news">Feeds    </a></li>
  			<li><a href="#contact">Dashboard    </a></li>
  			<li><a href="#about">About    </a></li>

			<div id="clock"></div>
			
		</ul>
	</subheader>

	
<script src="/js/Clock.js"></script>
	<section>
	<article>

		<div id="myChart" style="width:100%; max-width:600px; height:333px;"></div>
		<script src="/js/drawChart.js"></script>
		
		<div id="myData"</div>
		<?php>
		echo "PHP goes here...";
		include 'fetchData2.php';
		
		?>

<table style="width:50%">
  <tr>
    <th>Datestamp</th>
    <th>Temperature</th>
    <th>Humidity</th>
  </tr>

</table>
		
			  
	</article>
	</section>



<!-- THis is where we add the left side navigation items -->
<section>
  
</section>



</body>
</html>
