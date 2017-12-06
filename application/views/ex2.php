<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/css/ex2.css'; ?>">
<title> Purchase Request View</title>
</head>
<body>

<!--container-->
<h2 id="pr">Purchase Request</h2>
<div class="container" id="c1" style="border:1px solid #cecece;">
	 <form class="form-horizontal" role="form">
                
                <div class="col-md-6"> 
	                <div class="form-group">
	                    <label for="tran" class="col-sm-3 control-label">Tran No</label>
	                    <div class="col-sm-9">
	                        <input type="text"  name="tran" class="form-control" readonly>
	                    </div>
	                </div>


	 				<div class="form-group">
				        <label for="selectUser" style="float:left;padding: 6px 12px 2px 12px;">Department</label>
				        <select name="selectUser" style="width:auto;" class="form-control selectWidth">
				          <option class="">Dept 1</option>
				          <option class="" disabled>Dept 2</option>
				          <option class="" disabled>Dept 3</option>
				        </select>
			        </div>
      	
	      		 </div>  

	      		 <div class="col-md-6"> 
	                <div class="form-group">
	                    <label for="date" class="col-sm-3 control-label">Date</label>
	                    <div class="col-sm-9">
	                        <input type="text"  name="date" class="form-control" readonly>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="requestedBy" class="col-sm-3 control-label">Requested By</label>
	                    <div class="col-sm-9">
	                        <input type="text"  name="requestedBy" class="form-control" readonly>
	                    </div>
	                </div>

	 			</div> 

	 			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#view">View More</button>
			    <div id="view" class="collapse">
			    	<div class="row" style="height:1000px"></div>
			    </div>
	</form>

</div>
<div class="row" style="height:70px"></div>

<div class="container" style="border:1px solid #cecece;">
	<div class="row" style="height: 20px"></div>
	<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#view">Add item</button>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#view">Save PR</button>
	<button type="button" class="btn btn-default" data-toggle="collapse" data-target="#view">Print</button>
	<div class="row" style="height: 20px"></div>
	<div class="box-body">
  	<table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>Item Code</th>
          <th>Item Name</th>
          <th>Description</th>
          <th>Unit</th>
          <th>Qty</th>
          <th>Unit Cost</th>
          <th>Total Cost</th>
          <th>Option</th>
        </tr>
        </thead>
        <tbody>
        <tr style="height:40px">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          		<select name="selectUser" style="width:auto;" class="form-control selectWidth">
				          <option class="">unit 1</option>
				          <option class="" disabled>unit 2</option>
				          <option class="" disabled>unit 3</option>
				</select>

          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr style="height:40px">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          	<select name="selectUser" style="width:auto;" class="form-control selectWidth">
				          <option class="">unit 1</option>
				          <option class="" disabled>unit 2</option>
				          <option class="" disabled>unit 3</option>
			</select>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr style="height:40px">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          	<select name="selectUser" style="width:auto;" class="form-control selectWidth">
				          <option class="" disabled>unit 1</option>
				          <option class="" disabled>unit 2</option>
				          <option class="">unit 3</option>
			</select>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr style="height:40px">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          	<select name="selectUser" style="width:auto;" class="form-control selectWidth">
				          <option class="" disabled>unit 1</option>
				          <option class="">unit 2</option>
				          <option class="" disabled>unit 3</option>
			</select>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr style="height:40px">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          	<select name="selectUser" style="width:auto;" class="form-control selectWidth">
				          <option class="" disabled>unit 1</option>
				          <option class="" disabled>unit 2</option>
				          <option class="">unit 3</option>
			</select>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr style="height:40px">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          	<select name="selectUser" style="width:auto;" class="form-control selectWidth">
				          <option class="" disabled>unit 1</option>
				          <option class="" disabled>unit 2</option>
				          <option class="" disabled>unit 3</option>
			</select>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
    	</tbody>
  	</table>
	</div>
</div>	

	        


   
</body>
</html>