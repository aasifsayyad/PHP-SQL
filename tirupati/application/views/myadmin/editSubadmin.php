<?php $subadmin_info = $this->db->get_where('tbl_subadmin', array('subadmin_id' => $param2))->result_array();
 foreach ($subadmin_info as $row) {
?><!-- Styles -->
    <link href="<?php echo base_url();?>mypanel/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
       <section id="main-content">
        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="card-header m-b-20">
                                        <h4>Update Subadmin</h4>                                        
                                    </div>
                                </div>
                                <form action="<?php echo base_url();?>Adminity/subadmin/editSubadmin/<?php echo $row['subadmin_id'];?>" method="post">   
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Subadmin Name <span class="required">*</span></label>
                                                    <input type="text"  name="subadmin_name" value="<?php echo $row['subadmin_name'];?>" required="" class="form-control border-none input-flat  bg-ash" placeholder="Subadmin Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Contact No.<span class="required">*</span></label>
                                                    <input type="text"  name="subadmin_contact" value="<?php echo $row['subadmin_contact'];?>" readonly  required="" pattern="[0-9]{10,10}" maxlength="10" minlength="10"  class="form-control border-none input-flat  bg-ash" placeholder="Contact Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="email"  name="subadmin_email" value="<?php echo $row['subadmin_email'];?>" required="" class="form-control border-none input-flat  bg-ash" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Alternate No.</label>
                                                    <input type="text"  name="subadmin_alt_contact" value="<?php echo $row['subadmin_alt_contact'];?>" pattern="[0-9]{10,10}" maxlength="10" minlength="10" autocomplete="off" class="form-control border-none input-flat  bg-ash" placeholder="Alternate Number">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control border-none input-flat bg-ash"  placeholder="Enter Sudadmin Address" rows="3" name="address"><?php echo $row['address'];?></textarea>
                                            </div>
                                        </div>
                                    </div>  
                                               
                                                                       
                                    <div class="col-md-12">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info btn-lg  border-none sbmt-btn"><i class="ti-pencil-alt"></i> Update Subadmin</button>
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
