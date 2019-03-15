<?php
if ($msg == "main") {
	$msg = "";
} elseif ($msg == "empty") {
	$msg = "Please fill out all required fields";
} elseif ($msg == "created") {
	$msg = "Created Successfully";
} elseif ($msg == "edit") {
	$msg = "Edited Successfully";
} elseif ($msg == "delete") {
	$msg = "Deleted Successfully";
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Inventory</a></li>
            <li class="active"><?php echo $msg; ?></li>
        </ol>
    </div>
</section>

<!-- /.container -->
<section id="main">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.html" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inventory</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_medicine_presentation/main"
                        class="list-group-item">
                        <span class="	fa fa-capsules" aria-hidden="true"></span> Insert Medicine Info.</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_generic_name/main" class="list-group-item">
                        <span class="fa fa-plus-circle" aria-hidden="true"></span> Purchase Statement</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_medicine_name/main" class="list-group-item">
                        <span class="fa fa-pills" aria-hidden="true"></span> Supplier Payment</a>
                    <a href="<?php echo base_url(); ?>ShowForm/create_product_name/main" class="list-group-item">
                        <span class="fa fa-plus" aria-hidden="true"></span> Ledger</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Insert Medicine Purchase Information</h3>
                    </div>

                    <div class="panel-body">

                        <!-- /.Panel End -->
                        <?php echo form_open_multipart('Insert/medicine_purchase_info'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-3" style="">
                                    <label for="medicine_name">Medicine Name</label>
									<select name="medicine_name" id="medicine_name" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_medicine as $info) { ?>
											<option value="<?php echo $info->medicine_name; ?>"><?php echo $info->medicine_name; ?></option>
										<?php } ?>
									</select>
                                </div>
								<div class="col-sm-3" style="">
									<label for="generic">Generic</label>
									<select name="generic" id="generic" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_generic as $info) { ?>
											<option value="<?php echo $info->generic_name; ?>"><?php echo $info->generic_name; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-3" style="">
									<label for="presentation">Presentation</label>
									<select name="presentation" id="presentation" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_presen as $info) { ?>
											<option value="<?php echo $info->medicine_presentation; ?>"><?php echo $info->medicine_presentation; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-3" style="">
									<label for="supplier">Supplier Company</label>
									<select name="supplier" id="supplier" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_sup as $info) { ?>
											<option value="<?php echo $info->company_name; ?>"><?php echo $info->company_name; ?></option>
										<?php } ?>
									</select>
								</div>
                            </div>
                            <div class="row">
								<div class="col-sm-3">
									<label for="qty">Total Quantity</label>
									<input type="text" class="form-control" id="qty" name="qty">
								</div>
                                <div class="col-sm-3" style="">
                                    <label for="unit_price">Unit Price</label>
                                    <input type="text" class="form-control" id="unit_price"  name="unit_price">
                                </div>
								<div class="col-sm-3">
									<label for="purchase_price">Total Amount</label>
									<input type="text" class="form-control" id="purchase_price" placeholder="Tk"
										   name="purchase_price">
								</div>
								<div class="col-sm-3">
									<label for="unit_sales_price">Selling Price</label>
									<input type="text" class="form-control" id="unit_sales_price" placeholder="Tk"
										   name="unit_sales_price">
								</div>
                            </div>
                            <div class="row">
								<div class="col-sm-3">
									<label for="unit">Unit</label>
									<select name="unit" id="unit" class="form-control selectpicker"
											data-live-search="true">
										<option value="Pcs">Pcs</option>
									</select>
								</div>
								<div class="col-sm-3">
									<label for="purchase_paid">Purchase Paid</label>
									<input type="text" class="form-control" id="purchase_paid" placeholder="Tk"
										   name="purchase_paid">
								</div>
								<div class="col-sm-3">
									<label for="purchase_due">Purchase Due</label>
									<input type="text" class="form-control" id="purchase_due" placeholder="Tk"
										   name="purchase_due">
								</div>
								<div class="col-sm-3">
									<label for="ex_date">Expire Date</label>
									<input type="text" class="form-control new_datepicker" id="ex_date"
										   value="<?php echo date('Y-m-d'); ?>" placeholder="Date" name="ex_date" autocomplete="off">
								</div>
                            </div>
							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="submit" class="pull-left btn btn-primary">Create</button>
								</div>
							</div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.Panel End -->
			</div>
                <!-- /.Panel 2nd -->
			<div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form method="post" action="<?php echo base_url(); ?>export_csv/export">
                            <h3 class="panel-title">Medicine List   <input type="submit" name="export"
                                    class="btn btn-success btn-xs" value="Export to CSV" /></h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Serial.</th>
                                        <th style="text-align: center;">Details</th>
                                        <th style="text-align: center;">Supplier Name</th>
                                        <th style="text-align: center;">Total Qy</th>
                                        <th style="text-align: center;">Unit Price</th>
										  <th style="text-align: center;">Total Amount</th>
										 <th style="text-align: center;">Selling Price</th>
										   <th style="text-align: center;">Paid</th>
										  <th style="text-align: center;">Due</th>
										<th style="text-align: center;">Expire Date</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <!-- /.Row from DB-->
                                <tbody>
                                    <?php
								$count = 0;
								foreach ($all_value as $single_value) {
									$count++;
									?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $count; ?></td>
                                        <td style="text-align: left;">
										Medicine:	<?php echo $single_value->medicine_name; ?>  <br>
										Generic:	<?php echo $single_value->generic_name; ?></br>
										Presentation:	<?php echo $single_value->medicine_presentation; ?>
										</td>
                                        <td style="text-align: center;"><?php echo $single_value->supplier_name; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->qty; ?></td>
                                        <td style="text-align: center;"><?php echo $single_value->unit_price; ?></td>
										<td style="text-align: center;"><?php echo $single_value->purchase_price; ?></td>
										<td style="text-align: center;"><?php echo $single_value->unit_sales_price; ?></td>
										<td style="text-align: center;"><?php echo $single_value->purchase_paid; ?></td>
										<td style="text-align: center;"><?php echo $single_value->purchase_due; ?></td>
										<td style="text-align: center;"><?php echo $single_value->expiredate; ?></td>
                                        <td style="text-align: center;">
                                            <a style="margin: 5px;" class="btn btn-danger"
                                                href="<?php echo base_url(); ?>Delete/supplier/<?php echo $single_value->supplier_id; ?>">Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </form> <!-- /.Excel form -->
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.Container -->
</section>

<script type="text/javascript">

	$("#purchase_paid").on("change paste keyup", function () {
		var purchase_paid = $('#purchase_paid').val();
		var purchase_price = $('#purchase_price').val();
		var total = parseFloat(purchase_price) - parseFloat(purchase_paid);
		$('#purchase_due').val(total);
	});
</script>
