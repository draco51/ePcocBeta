<!DOCTYPE html>
<html>
<head>
	<title>purchase Request</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/pr_final.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
<body>
<div class="container">
	<div class="row" style="text-align: center;">
		<h3><b>University of Colombo School of Computing</b></h3>
		<h4><strong>No.35 Reid Avenue Colombo 00700</strong></h4>
		<div class="row" style="background:grey; height:30px">
			<h4 style="color:white">FINANCE DIVISION-PROCUREMENT BRANCH</h4>
		</div>
		<hr style="height:3px; background:black;">
	</div>

	<div class="row" style="text-align: center;">
		<h4><b><u>FIXED ASSETS/CONSUMABLES PURCHASE REQUISITION FORM</u></b></h4>
		<h5>[Items not available in the store]</h5>
	</div>
</div>

<div class="container middle" >
	<div class="row" style="height:10px;"></div>
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<td scope="row"><b>Date</b></td>
				<td><input type="text" name="date" class="tdata" ></td>
			</tr>
			<tr>
				<td scope="row"><b>Department/Division/Center Name</b></td>
				<td><input type="text" name="date" class="tdata" style="width:800px;" readonly></td>
			</tr>
		</table>
	</div>
</div>

<div class="row" style="height:20px;"></div>
<div class="container middle" style="border:1px solid #cecece;">
	<h5><strong>DESCRIPTION OF THE ASSETS/ITEMS</strong></h5>
	<table class="table table-bordered" >
	  <thead>
	    <tr class="thead" >
	      <th class="col-md-1">Item No</th>
	      <th class="col-md-5">Description of the Assets/Items</th>
	      <th class="col-md-2">Required Quantity</th>
	      <th class="col-md-2">Estimated Cost</th>
	      <th class="col-md-2">Date of Required</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td><textarea name="description" class="tdata info" readonly></textarea></td>
	      <td><input type="text" name="quantity" class="tdata" readonly></td>
	      <td><input type="text" name="estimated_cost" class="tdata" readonly></td>
	      <td><input type="date" name="date_of_required" class="tdata" readonly></td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td><textarea name="description" class="tdata info" readonly></textarea></td>
	      <td><input type="text" name="quantity" class="tdata" readonly></td>
	      <td><input type="text" name="estimated_cost" class="tdata" readonly></td>
	      <td><input type="date" name="date_of_required" class="tdata" readonly></td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td><textarea name="description" class="tdata info" readonly></textarea></td>
	      <td><input type="text" name="quantity" class="tdata" readonly></td>
	      <td><input type="text" name="estimated_cost" class="tdata" readonly></td>
	      <td><input type="date" name="date_of_required" class="tdata" readonly></td>
	    </tr>
	    <tr>
	      <th scope="row">4</th>
	      <td><textarea name="description" class="tdata info" readonly></textarea></td>
	      <td><input type="text" name="quantity" class="tdata" readonly></td>
	      <td><input type="text" name="estimated_cost" class="tdata" readonly></td>
	      <td><input type="date" name="date_of_required" class="tdata" readonly></td>
	    </tr>
	    <tr>
	      <th scope="row">5</th>
	      <td><textarea name="description" class="tdata info" readonly></textarea></td>
	      <td><input type="text" name="quantity" class="tdata" readonly></td>
	      <td><input type="text" name="estimated_cost" class="tdata" readonly></td>
	      <td><input type="date" name="date_of_required" class="tdata" readonly></td>
	    </tr>
	    
	  </tbody>
	</table>
</div>

<div class="container middle">
	<label for="purpose"><b>Purpose of Requirement:</label>
	<textarea name="purpose" style="width:800px;height:50px;position:relative;top:30px;" readonly></textarea>
	
</div>
<div class="row" style="height:50px;"></div>

<div class="container middle">
	<div class="row">
	<table class="table">
		<tr>
			<td scope="row" >Division/Room Number which Fixed Assets to be located:</td>
			<td><input type="text" name="location" class="tdata" style="width:800px;" readonly></td>
		</tr>
	</table>
	</div>
</div>

<div class="row" style="height:30px;"></div>
<div class="container middle">
	<div class="col-md-6">
		<label for="date">Date</label>
		<input type="date" name="date" class="tdata" readonly>
	</div>
	<div class="col-md-6">
		<button class="btn btn-success" id="accept">Accept</button>
		<label for="accept">Signature of HOD</label>
	</div>
</div>
<div class="row" style="height:30px;"></div>
<div class="container middle">
	<div class="col-md-6">
		<label for="date">Date</label>
		<input type="date" name="date" class="tdata" readonly>
	</div>
	<div class="col-md-6">
	<div class="row">
	<div class="col-md-6">
		<a href="<?php echo base_url()?>AddItem/acceptedByDirector"><button class="btn btn-success" id="accept">Accept</button></a>
		<label for="accept">Director/UCSC</label>
	</div>

	<div class="col-md-6">
		<a href="<?php echo base_url()?>AddItem/rejectedByDirector"><button class="btn btn-danger" id="reject">Reject</button></a>
		<label for="reject">Director/UCSC</label>
	</div>
	</div>
	</div>
</div>
</body>
</html>