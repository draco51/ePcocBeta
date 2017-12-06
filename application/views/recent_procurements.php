<div class="main">
  
  <div class="main-inner">

      <div class="container">
        
       <div class="row">
          
          <div class="span12">
          <div class="info-box" style="padding: 15px; ">
        <!-- Table start -->
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Procurement History <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Most recent past procurements are listed below</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class="column-title" style="display: table-cell;">Request ID </th>
                            <th class="column-title" style="display: table-cell;">Last updated </th>
                            <th class="column-title" style="display: table-cell;">Item Name </th>
                            <th class="column-title" style="display: table-cell;">Department</th>
                            <th class="column-title" style="display: table-cell;">Status </th>
                            <th class="column-title" style="display: table-cell;">Amount </th>
                            <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7" style="display: none;">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>


<?php
foreach ($past_procs_array as $key => $row) {
echo "
                          <tr class='even pointer'>
                            <td class ='a-center'>
                              <div class='icheckbox_flat-green' style='position: relative;''><input type='checkbox' class='flat' name='table_records' style='position: absolute; opacity: 0;'><ins class='iCheck-helper' style='position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;'></ins></div>
                            </td>
                            <td class=''>{$row['requestid']}</td>
                            <td class=''>{$row['datee']}</td>
                            <td class=''>121000210 <i class='success fa fa-long-arrow-up'></i></td>
                            <td class=''>{$row['departmentid']}</td>
                            <td class=''>Paid</td>
                            <td class='a-right a-right '>{$row['estimatedcost']}</td>
                            <td class=' last'><a href=''>View</a>
                            </td>
                          </tr>
";
}
?>

                        </tbody>
                      </table>
                    </div>
              
            
                  </div>
                </div>
              </div>

               
           <!-- Table end here -->
         </div>
         </div>    </div>  
          
        <!-- /row -->
  
        <!-- /row -->
        
        
        
        
      
        
        
      </div> <!-- /container -->
      
  </div> <!-- /main-inner -->
    
</div> <!-- /main -->