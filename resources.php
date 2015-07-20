<html>
<head>
<title>Lab Resources</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>

<script language="javascript">
<!--
var where = new Array(4);
function comefrom(loca,divide) { this.loca = loca; this.divide = divide; }
//where[0]= new comefrom("Select...","Select...");
where[0] = new comefrom("Antibodies","Name|Species|Location|Company|Product"); 
where[1] = new comefrom("Vectors","Name|Source|Sequence|Location");
where[2] = new comefrom("Chemical","Name|Number|Location");
where[3] = new comefrom("SILAC","Name|Organism|Tissue|Type|Keeper|Location");
function select() {
with(document.creator.resourceType) { var loca2 = options[selectedIndex].value; }
for(i = 0;i < where.length;i ++) {
if (where[i].loca == loca2) {
loca3 = (where[i].divide).split("|");
for(j = 0;j < loca3.length;j++) { with(document.creator.inquireMethod) { length = loca3.length; options[j].text = loca3[j]; options[j].value = loca3[j]; var loca4=options[selectedIndex].value;}}
break;
}}
} 
function init() {
with(document.creator.resourceType) {
length = where.length;
for(k=0;k<where.length;k++) { options[k].text = where[k].loca; options[k].value = where[k].loca; }
options[selectedIndex].text = where[0].loca; options[selectedIndex].value = where[0].loca;
}
with(document.creator.inquireMethod) {
loca3 = (where[0].divide).split("|");
length = loca3.length;
for(l=0;l<length;l++) { options[l].text = loca3[l]; options[l].value = loca3[l]; }
options[selectedIndex].text = loca3[0]; options[selectedIndex].value = loca3[0];
}} 
-->
</script>

<!-- CuFon ends -->
</head>
<body onload="init()">

<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><span>Figeys' Lab</span> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>

      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
      </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
 
      <div class="mainbar">
        <div class="article">
          <h2>Lab Resources</h2><div class="clr"></div> 
  	      </div><div class="meeting">
     	  	<form action="resourcesDisplay.php"  method="post" name="creator" enctype="multipart/form-data">
		<b>Inquiry:</b>
		Type: <select name="resourceType" onChange = "select()"></select>　
		Inquire by: <select name="inquireMethod" onChange = "select()"></select>
		<input type="text" name="searchText" /> 
		<input type="submit" name="search"   value="Search" /> 
		</form>
	<div>Antibodies  
<?php
			include('conn.php');
			mysql_query("SET NAMES 'utf8'");
			$result = mysql_query("SELECT * FROM antibodies  order by An_Id limit 5");
	
			echo "<table id='schedule'>
			<tr>
			<th>Name</th>
			<th>Species</th>
			<th>Location</th>
			<th>Company</th>
			<th>Product #</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Species'] . "</td>";
			  echo "<td>" . $row['Location'] . "</td>";
			  echo "<td>" . $row['Company'] . "</td>";
			  echo "<td>" . $row['Product'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
			

	
	?>
</div> 
	
<div>Vectors  
<?php
			$result = mysql_query("SELECT * FROM vectors  order by Vec_Id limit 5");
	
			echo "<table id='schedule'>
			<tr>
			<th>Vector name</th>
			<th>Source</th>
			<th>Vector Sequence (A/NA)</th>
			<th>Location</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Source'] . "</td>";
			  echo "<td>" . $row['Sequence'] . "</td>";
			  echo "<td>" . $row['Location'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
	?>
	
	
</div>

<div>Chemicals  
<?php
			$result = mysql_query("SELECT * FROM chemical order by Ch_Id limit 5");
	
			echo "<table id='schedule'>
			<tr>
			<th>Product Name</th>
			<th>Product Number</th>
			<th>Location</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Number'] . "</td>";
			  echo "<td>" . $row['Location'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
	?>
	
	
</div>

<div>SILAC cell lines  
<?php
			$result = mysql_query("SELECT * FROM silac  order by Si_Id limit 5");
	
			echo "<table id='schedule'>
			<tr>
			<th>Cell name</th>
			<th>Organism</th>
			<th>Tissue</th>
			<th>Cell Type/ morphology</th>
			<th>Keeper</th>
			<th>Location</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Organism'] . "</td>";
			  echo "<td>" . $row['Tissue'] . "</td>";
			  echo "<td>" . $row['Type'] . "</td>";
			  echo "<td>" . $row['Keeper'] . "</td>";
			  echo "<td>" . $row['Location'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
	
	
			mysql_close($con);
			?>
</div>

     	  
    	  </div>
</div>

      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="meeting.php"><strong>Lab Meeting</strong></a></li>
            <li><a href="resources.php"><strong>Lab Resources</strong></a></li>
            <li><a href="fridge.php"><strong>Freezer and Fridge</strong></a></li>
            <li><a href="msstatus.php"><strong>MS Utility Status</strong></a></li>

          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright © <a href="#">2014 OISB</a>. All rights reserved.</p>
      <ul class="fmenu">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>

</body>

</html>