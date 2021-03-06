<?php $driver_info = $this->db->get_where('tbl_driver', array('driver_id' => $param2))->result_array();
 foreach ($driver_info as $row) {

?><!-- Styles -->
    <link href="<?php echo base_url();?>mypanel/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
       <section id="main-content">
        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="card-header m-b-20">
                                        <h4>Update Driver</h4>                                        
                                    </div>
                                </div>
                                <form action="<?php echo base_url();?>Subadmin/drivers/editDriver/<?php echo $row['driver_id'];?>" method="post">   
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Driver Name <span class="required">*</span></label>
                                                    <input type="text"  name="drivername" value="<?php echo $row['driver_name'];?>" required="" class="form-control border-none input-flat  bg-ash" placeholder="Driver Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Contact No.<span class="required">*</span></label>
                                                    <input type="text"  name="driver_contact" value="<?php echo $row['driver_contact'];?>" required="" pattern="[0-9]{10,10}" maxlength="10" minlength="10"  class="form-control border-none input-flat  bg-ash" placeholder="Contact Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control border-none input-flat bg-ash"  placeholder="Enter Driver Address with Proper Details" rows="6" name="address"><?php echo $row['driver_address'];?></textarea>
                                            </div>
                                        </div>
                                    </div> 
                                
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <label>Alternate No.</label>
                                                <input type="text" name="alternat_contact" value="<?php echo $row['alternat_contact'];?>" pattern="[0-9]{10,10}" maxlength="10" minlength="10" class="form-control border-none input-flat bg-ash" placeholder="Alternate Contact No.">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <label>License No.</label>
                                                <input type="text" name="license" value="<?php echo $row['license'];?>" class="form-control border-none input-flat bg-ash" placeholder="License Number">
                                            </div>
                                        </div>
                                    </div>                      
                                                                       
                                    <div class="col-md-12">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info btn-lg  border-none sbmt-btn"><i class="ti-pencil-alt"></i> Update Driver</button>
                                            <button type="button" class="btn btn-primary btn-lg border-none sbmt-btn" data-dismiss="modal"><i class="ti-close"></i> Close</button>
                                        </div>  
                                   </div>
                                </div>                                
                                </form>
                            </div>
                        </div>
                    </div>
                  
                    
         
                    
   </section>
 <?php }?>
    <!-- scripit init-->
