
<html>
<head>This page will contain  the chat</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('Include\header.php');
//include ('Include\nav.php');



?>
 
 </head>
 <body>

 
<body>
<form class="logout" action="index.php" method="post" />
<input type ="submit" name="logout" value="LOGOUT"/>
</form>


<form class="chat"action="controller.php"  method ="POST">
<input type="hidden" name="action" value="chat" method ="POST"/>
<fieldset class="chat" method = "post"  >



  <input type = "text"
    id = "txtName" />
	<input type = "button"
    value = "send"
    onclick = "sayHi()"/> 
 
   <meta charset = "UTF-8">

 <script type = "text/javascript">
 
  function sayHi(){
  var txtName = document.getElementById("txtName");
  var txtOutput = document.getElementById("txtOutput");
  var name = txtName.value;
  txtOutput.value = " " + name + " "
  } 
 </script>
 

</fieldset>

 <form action = "">
 
 
 
  
  <input type = "text"
    id = "txtOutput" />

</form>


<?php
 

//Below is  a photo viewer 
?>

<?php
//var Dropzone = require("dropzone");
//require("javascript_files/dropzone");
?>
<?php
/*<script src="./javascript_files/dropzone.js"></script>

<form action="/file-upload">
      class="dropzone"
      id="my-awesome-dropzone"></form>
<input type="file" name="file" />*/
?>
<main data-images="<?php echo count($images); ?>">

	<h1>Upload Images</h1>
	<form action="controller.php" enctype="multipart/form-data" method="post">
		<label for="image-ip">Choose An Image</label>
		<input id="image-ip" type="file" name="image"/>
		<input type="submit" value="Upload"/>
	</form>

	<hr/>
	<!---<h3>Contents of directory: <?php echo __DIR__; ?>/images</h3> --->


	<?php
	
	if (count($images)==0)
		echo "<p>No images found</p>";
	else {
		echo '<p id="count">Image count: <span></span></p>';
		echo '<ul>';
		foreach ($images as $img) {
			echo '<li>
					<img src="'.$img.'"/>
					<span>'.basename($img).'</span>
					</li>';
		}
		echo '</ul>';
	}
	?>

</main>
</body>

<?php
include ('Include\footer.php');
?>