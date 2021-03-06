<?php include 'header-top.php';?>

<body>

    <!-- # sidebar -->
    <?php include 'sidebar.php';?>
    <!-- /# sidebar -->


    <!-- # header -->
    <?php include 'header.php';?>
    <!-- /# header -->
    
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
               <!---page title-->
                <?php include 'page-title.php';?>
                <!---/page-title--->
                <!-- /# row -->
                <section id="main-content">
                    <!---system messages---->                    
                    <?php include 'system_msgs.php';?>
                    <!---/system messages---->
                    
                    <div class="row">
                        <div class="col-lg-12">
<!--                            <div class="addbtn">
                                <button class="btn btn-primary" >Add Subadmin</button>
                             </div>-->
                             <div class="card alert">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SR.</th>
                                                    <th>Fuel Pump Info.</th>
                                                    <th>Vehicle No.</th>
                                                    <th>Driver Info.</th>
                                                    <th>Supervisor Info.</th>
                                                    <th>Cost(<i class="fa fa-inr"></i>)</th>
                                                      <th>Filled Cost</th>
                                                    <th>Date</th>
                                                    <th style="text-align: left">Receipt</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sr=1; foreach($fuel_Receipt_info as $row){?>
                                                <tr>
                                                    <td><?php echo $sr;?></td>
                                                    <td><?php echo $row->vendor_name;?><br>
                                                        <?php echo $row->vendor_contact;?></td>
                                                    <td><?php echo $row->vehicle_no;?></td>
                                                    <td><?php echo $row->driver_name;?><br>
                                                        <?php echo $row->driver_contact;?></td>
                                                    <td><?php echo $row->supervisor_name;?><br>
                                                        <?php echo $row->supervisor_contact;?></td>
                                                    <td><i class="fa fa-inr"></i><?php echo number_format($row->cost,2);?></td>
                                                     <td><i class="fa fa-inr"></i><?php echo number_format($row->filled_cost,2);?></td>
                                                    <td><?php echo $row->createdAt;?></td>
                                                    <td style="text-align: left">
                                                        <a data-toggle="tooltip" style="cursor:pointer" onclick="showAjaxModal('<?php echo base_url();?>Subadmin/popup/myadmin/viewFuelReceipt/<?php echo $row->fuel_receipt_id;?>');" class="table-link">
                                                        <span class="tooltiptext">View Info</span>
                                                        <span  class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="ti-eye ti-eyes fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                        </a>
                                                        
                                                        
                                                    <!--<a data-toggle="tooltip" title="Release Vehicle" href="<?php echo base_url(); ?>Subadmin/vehiclestoFuel/delete/<?php echo $row->fuel_mgt_id;?>" class="table-link danger">
                                                        <span class="fa-stack" onclick="return checkDelete();">
                                                        <i class="fa fa-square fa-stack-2x"></i> 
                                                        <i class="ti-close ti-clos fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                        </a>-->
                                                    </td>
                                                </tr>
                                                <?php $sr++; }?>    
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <!-- /# row -->
                    <!--FOOTER CONTENTS--->
                     <?php include 'footer-contents.php';?>
                    <!---/FOOTER CONTENTS-->
                </section>
            </div>
        </div>
    </div>



     <!-- # footer -->
    <?php include 'footer.php';?>
    <!-- /# footer -->

     <script>
       $(document).ready(function() {
           function hidetab(){    
            $('#mssg').hide();
          }
            setTimeout(hidetab,4000);
       });
    </script>
</body>


</html>