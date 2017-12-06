<!DOCTYPE HTML>  
<html>
<head>
</head>

<body>  

<h2>Form Example</h2>
<p><span class="error">* required field.</span></p>
<form method="POST" action="<?php echo base_url().'Purchase_req/req_insert';?>">  

  <br><br>
  depID: <input type="text" name="depName" value="dd@gmail.com">

  <br><br>
  purpose: <input type="text" name="description">

  <br><br>
  location: <textarea name="location" rows="5" cols="40"></textarea>
  <br><br>
	 date of required: <input type="date" name="description">
  <br><br>

  <input type="submit" name="submit" value="Submit">  


</form>


</body>
</html>

