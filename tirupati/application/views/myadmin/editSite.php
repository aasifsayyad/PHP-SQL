<?php  $vendors=$this->db->get('tbl_vendor')->result(); 
$sites_info = $this->db->get_where('sites', array('site_id' => $param2))->result_array();
 foreach ($sites_info as $row) {
      $test_entries    = json_decode($row['vendor_id']);
      ?>
<!-- Styles -->
 <section id="main-content">
        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="card-header m-b-20">
                                        <h4>Update Site Info.</h4>                                        
                                    </div>
                                </div>
                                <form action="<?php echo base_url();?>Adminity/sites/editSite/<?php echo $row['site_id'];?>" method="post">   
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Site Name <span class="required">*</span></label>                                                    
                                            </div>
                                        </div>
                                    </div>  
                                    
                                     <div class="col-md-9">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <input type="text"  name="site_name" required="" value="<?php echo $row['site_name'];?>" class="form-control border-none input-flat  bg-ash" placeholder="Site Name">
                                            </div>
                                        </div>
                                    </div>  
                                    
                                    <div class="col-md-3">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Vendors <span class="required">*</span></label>                                                    
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-9"> 
                                                        <?php                       
                                                        foreach($vendors as $each)
                                                        { 
                                                         ?>                                         
                                                        <div class="col-md-6">                                                            
                                                        <div class="basic-form">
                                                           <div class="form-group">                                                             
                                                             <input type="checkbox" <?php foreach ($test_entries as $vendor_id){ if($each->vendor_id == $vendor_id){ echo "checked";} }?> style="height: 17px;width: 17px;" name="vendor_id[]" value="<?php echo $each->vendor_id;?>"> <?php echo $each->vendor_name;?>
                                                           </div>
                                                        </div>
                                                        </div>                                                        
                                                        <?php }
                                                        ?> 
                                                </div>
                                         </div>
                                  
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info btn-lg  border-none sbmt-btn"><i class="ti-pencil-alt"></i> Update Site</button>
                                            <button type="button" class="btn btn-primary btn-lg border-none sbmt-btn" data-dismiss="modal"><i class="ti-close"></i> Close</button>
                                        </div>  
                                   </div>
                                </form>
                               </div>                                
                                
                            </div>
                        </div>
               
                  
                    
         
                    
   </section>
 <?php } ?>
    <!-- scripit init-->
