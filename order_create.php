<main class="container" >
<div class="form" >

<?php echo form_open('orderCtrl/insert'); ?>

<div class="row" >
	<div class="col-6 form-group has-feedback" >
		<label  class="" >Order Id</label> 
		<input type="text" class="form-control" id="" name="order_id" placeholder="Default order Id" 
		value=""  />
		<i class="fa fa-user fa-2x"></i>
	</div>
	<div class="col-6 form-group" >
		<label  class="" >Order Status Id</label> 
		<input type="text" class="form-control" id="" name="order_status_id" placeholder="Default User Id" value=""  />
		<i class="fa fa-user-o fa-2x" aria-hidden="true" ></i>
	</div>
</div>

<div class="row" >
	<div class="col-6 form-group">
		<label  class="" >Order date</label> 
		<input type="date" class="form-control" id="" name="order_date" placeholder="Chemist email id" 
		value="" 	/>
		
	</div>
	<div class="col-6 form-group">
		<label  class="" >Customer Id</label> 
		<input type="text" class="form-control" id="" name="customer_id" placeholder="Chemist password" 
		value=""  />
		<i class="fa fa-user-o fa-2x"></i>
	</div>
</div>
<div class="row" >
	<div class="col-6 form-group" >
		<label  class="" >Chemist Id</label>
		<select class="form-control" id="" name="chemist_type_id" placeholder="Chemist Type" disabled="disabled" >
		<option>Select Chemist Type</option>
		<option selected="selected" value="" >
			1
		</option>
		</select>
		<i class="fa fa-list fa-2x"></i>
	</div>
	<div class="col-6 form-group" >
		<label  class="" >Invoice Id</label>
		<select class="form-control" id="" name="invoice_id" placeholder="Invoice Id" disabled="disabled" >
		<option>Select INvoice Id</option>
		<option selected="selected" value="" >
			1
		</option>
		</select>
		<i class="fa fa-list fa-2x"></i>
	</div>
	
</div>


<div class="col-6 form-group" >
	<!--<input type="submit" value="Submit" class="btn btn-success" id="" /> -->
</div>
</form>
</div>
</main>