<?php include('header.php');?>

<div id="page-wrapper" class="container">
<div class="row">

<?php include('navigation.php');?>


<div class="row">
<div class="col-lg-12">
<div class="main-box clearfix">
<header class="main-box-header clearfix">
 <?php if ($this->session->flashdata('msg')){?>
     <div id="mssg" style="margin-bottom:0px;margin-top:5px;color: green;text-align: center;background-color: #fff; width: 75%;margin-left: 100px;padding: 7px; border: 1px solid green;border-radius: 2px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            <i class="fa fa-times-circle fa-fw fa-lg" style="color:green"></i>
        </button><?php echo $this->session->flashdata('msg'); ?>
    </div>  
<?php $this->session->set_flashdata('msg', '');}?>
 
    <?php if ($this->session->flashdata('err_msg')){?>
  <div id="mssg" style="margin-bottom:0px;margin-top:5px;color: RED;text-align: center;background-color: #fff; width: 75%;margin-left: 100px;padding: 7px; border: 1px solid red;border-radius: 2px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            <i class="fa fa-times-circle fa-fw fa-lg" style="color:RED"></i>
        </button><?php echo$this->session->flashdata('err_msg'); ?>
    </div> 
<?php $this->session->set_flashdata('err_msg', '');}?> 
    
<a onclick="showAjaxModal('<?php echo base_url();?>index.php/modal/popup/add_environment/');"  class="btn btn-primary pull-right">
<i class="fa fa-plus-circle fa-lg"></i> Add Environment
</a>
</header>

<div class="main-box-body clearfix">
<div class="table-responsive">
<table id="table-example" class="table table-hover">
<thead>
<tr>
<th>SR No</th>
<th>Environment Name</th> 
<th>Added date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php $sr=1; foreach ($environment_info as $row) { ?>   
<tr>
<td><?php echo $sr;?></td>
<td><?php echo ucfirst($row['environment_name']);?></td>

<td><?php echo $row['createdAt'];?></td>
<td>
<a style="cursor:pointer" onclick="showAjaxModal('<?php echo base_url();?>index.php/modal/popup/edit_environment/<?php echo $row['environment_id'];?>');" class="table-link">
<span  class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a  href="<?php echo base_url(); ?>index.php/TestApp/testEnvironment/delete/<?php echo $row['environment_id'];?>" class="table-link danger">
<span class="fa-stack" onclick="return checkDelete();">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
<?php $sr++; }?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
 
</div>
</div>



<?php //include('skin.php');?>

<!----footer-min start********-->

<?php include('footer-min.php');?>