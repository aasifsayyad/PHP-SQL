<?php $supervisor_info = $this->db->get_where('tbl_supervisor', array('supervisor_id' => $param2))->result_array();
 foreach ($supervisor_info as $row) {

?><!-- Styles -->
    <link href="<?php echo base_url();?>mypanel/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
       <section id="main-content">
        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="card-header m-b-20">
                                        <h4>Update Supervisor</h4>                                        
                                    </div>
                                </div>
                                <form action="<?php echo base_url();?>Subadmin/supervisors/editSupervisor/<?php echo $row['supervisor_id'];?>" method="post">   
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Supervisor Name <span class="required">*</span></label>
                                                    <input type="text"  name="supervisor_name" value="<?php echo $row['supervisor_name'];?>" required="" class="form-control border-none input-flat  bg-ash" placeholder="Supervisor Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Contact No.<span class="required">*</span></label>
                                                    <input type="text"  name="supervisor_contact" value="<?php echo $row['supervisor_contact'];?>" readonly required="" pattern="[0-9]{10,10}" maxlength="10" minlength="10"  class="form-control border-none input-flat  bg-ash" placeholder="Contact Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="email"  name="supervisor_email" value="<?php echo $row['supervisor_email'];?>" readonly  required="" class="form-control border-none input-flat  bg-ash" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Alternate No.</label>
                                                    <input type="text"  name="supervisor_alternet_contact" value="<?php echo $row['supervisor_alternet_contact'];?>" pattern="[0-9]{10,10}" maxlength="10" minlength="10" autocomplete="off" class="form-control border-none input-flat  bg-ash" placeholder="Alternate Number">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control border-none input-flat bg-ash"  placeholder="Enter Supervisor Address" rows="3" name="supervisor_address"><?php echo $row['supervisor_address'];?></textarea>
                                            </div>
                                        </div>
                                    </div>  
                                    
                                                      
                                                                       
                                    <div class="col-md-12">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info btn-lg  border-none sbmt-btn"><i class="ti-pencil-alt"></i> Update Supervisor</button>
                                            <button type="button" class="btn btn-primary btn-lg border-none sbmt-btn" data-dismiss="modal"><i class="ti-close"></i> Close</button>
                                        </div>  
                                   </div>
                                </div>                                
                                </form>
                            </div>
                        </div>
                    </div>
                  
                    
         
                    
   </section>
 <?php } ?>
    <!-- scripit init-->
