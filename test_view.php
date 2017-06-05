<main class="container" >
<div class="form">
<?php //echo form_open('test/insert'); ?>
<fieldset><legend>Test</legend>
<div class="row" >
	<div class="col-6 form-group">
		<label  class="" >Test Id</label> 
		<input type="text" class="form-control" id="" name="test_id" placeholder="Test Id" value="<?= $data[0]->test_id; ?>"  readonly />
	</div>
	<div class="col-6 form-group">
	<label  class="" >Test Name</label> 
	<input type="text" class="form-control" id="" name="test_name" placeholder="Test Name" value="<?= $data[0]->test_name; ?>"  readonly />
	<i class="fa fa-id-card fa-2x"></i>
	</div>
</div>
<div class="row" >
	<div class="col-6 form-group" >
		<label  class="" >Test Date</label> 
		<input type="date" class="form-control" id="" name="test_date"  value="<?= $data[0]->test_date; ?>" readonly />
	</div>
</div>
</fieldset>
<?php //echo form_close(); ?>
</div>
</main>