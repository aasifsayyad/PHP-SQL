<?php 
                 //$this->db->where('fuel_mgt_id',$param2);
               $this->db->select('fuel_receipt.*,tbl_vendor.vendor_name,tbl_vendor.vendor_contact,tbl_supervisor.supervisor_name,tbl_supervisor.supervisor_contact,fuel_mgt.*,tbl_vehicle.vehicle_no,tbl_driver.driver_name,tbl_driver.driver_contact');
		$this->db->join('tbl_vendor','tbl_vendor.vendor_id=fuel_receipt.vendor_id');
		$this->db->join('tbl_supervisor','tbl_supervisor.supervisor_id=fuel_receipt.supervisor_id');
		$this->db->join('fuel_mgt','fuel_mgt.fuel_mgt_id=fuel_receipt.fuel_mgt_id');
		$this->db->join('tbl_vehicle','tbl_vehicle.vehicle_id=fuel_mgt.vehicle_id');
		$this->db->join('tbl_driver','tbl_driver.driver_id=fuel_mgt.driver_id');
$fuel_mgt_info = $this->db->get_where('fuel_receipt', array('fuel_receipt_id' => $param2))->result_array();
 foreach ($fuel_mgt_info as $row) {
?>
<style>
        .required{
            color:red;
        }
    </style>
    <section id="main-content">
        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="card-header m-b-20">
                                        <h4>Fuel Filled Receipts</h4>                                        
                                    </div>
                                </div>
                                <div class="row">
                                     <table class="table table-bordered" style="">
                                    <thead>                                        
                                        <tr>
                                            <th>Fuel Pump Name</th>
                                            <td><?php echo $row['vendor_name'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Fuel Pump Contact</th>
                                            <td><?php echo $row['vendor_contact'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Vehicle No</th>
                                            <td><?php echo $row['vehicle_no'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Driver Name</th>
                                            <td><?php echo $row['driver_name'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Driver Contact</th>
                                            <td><?php echo $row['driver_contact'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Cost For Fuel(<i class="fa fa-inr"></i>)</th>
                                            <td><i class="fa fa-inr"></i><?php echo number_format($row['cost'],2);?></td>
                                        </tr>
                                        <tr>
                                            <th>Actual Filled Cost(<i class="fa fa-inr"></i>)</th>
                                            <td><i class="fa fa-inr"></i><?php echo number_format($row['filled_cost'],2);?></td>
                                        </tr>
                                         <tr>
                                            <th>Fuel Filled Qty(Ltr.)</th>
                                            <td><?php echo $row['fuel_limit'];?> Litre</td>
                                        </tr>
                                        <tr>
                                            <th>Supervisor Name</th>
                                            <td><?php echo $row['supervisor_name'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Supervisor Contact</th>
                                            <td><?php echo $row['supervisor_contact'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <td><?php echo $row['date'];?></td>
                                        </tr>
                                        <tr>
                                            <th>Receipt Image</th>
                                            <td>
                                                <a href="<?php echo base_url().'assets/uploads/receipts/'.$row['receipt_path'];?>" target="_blank">
                                                    <img src="<?php echo base_url().'assets/uploads/receipts/'.$row['receipt_path'];?>" alt="Receipt Image Not Visible">
                                                </a>
                                            </td>
                                        </tr>
                                    </thead>
                                    
                                </table>                                   
                                    <div class="modal-footer">
                                        <button type="button" onClick="PrintElem('main-content')" class="btn btn-info btn-lg  border-none sbmt-btn"><i class="ti-printer"></i> Print</button>
                                            <button type="button" class="btn btn-primary btn-lg border-none sbmt-btn" data-dismiss="modal"><i class="ti-close"></i> Close</button>
                                        </div> 
                                </div>                                
                              
                            </div>
                        </div>
                    </div>
                  
                    
         
                    
   </section>

    <!-- scripit init-->
<?php }?>
<script type="text/javascript">
 function PrintElem(el){
    
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
        
	window.print();
        
	document.body.innerHTML = restorepage;
        window.location.reload();
      // return true;
}
</script>  