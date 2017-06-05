<main class="container" >
<div class="form">
<?php echo form_open('testCtrl/insert'); ?>
<fieldset><legend>Test</legend>
<div class="row" >
	<div class="col-6 form-group">
	<label  class="" >Test Name</label> 
	<input type="text" class="form-control" id="" name="test_name" placeholder="Test Name" value=""/>
	<i class="fa fa-id-card fa-2x"></i>
	</div>
	<div class="col-6 form-group" >
		<label  class="" >Test Date</label> 
		<input type="date" class="form-control" id="" name="test_date"  value="" />
	</div>
</div>
</fieldset>
<div class="row ">
	<div class="col-6 form-group " >
		<input type="reset"  class="btn btn-danger"  value="Reset" />
		<input type="submit" class="btn btn-success" value="Create Test"  id="" /> 
		<input type="button" class="btn btn-warning" value="Cancel"  id="" />
	</div>
	<div class="col-6 form-group " >
		
	</div>
</div>

<?php echo form_close(); ?>
</div>
</main>