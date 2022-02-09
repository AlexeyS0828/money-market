<?= $this->extend("/admin/layout") ?>

<?= $this->section("content") ?>


<?php

// include'function.php';

// $user_id = $_GET['user_id'];


//$data = select_array("select * from vss_user");
//print_R($data);


// if(isset($_POST['user'])){
// 	extract($_POST);
// 	$database_entry_names ="
// 	`user_firstName`='".$user_firstName."',
// 	`user_middleName`='".$user_middleName."',
// 	`user_lastName`='".$user_lastName."',
// 	`user_dob`='".$user_dob."',
// 	`user_gender`='".$user_gender."',
// 	`user_education`='".$user_education."',
// 	`user_residence`='".$user_residence."',
// 	`user_house`='".$user_house."',
// 	`user_area`='".$user_area."',
// 	`user_city`='".$user_city."',
// 	`user_state`='".$user_state."',
// 	`user_pincode`='".$user_pincode."',
// 	`user_mobile`='".$user_mobile."',
// 	`user_email`='".$user_email."',
// 	`user_password`='".$user_password."',
// 	`user_telephone`='".$user_telephone."',
// 	`user_residenceType`='".$user_residenceType."',
// 	`user_empType`='".$user_empType."',
// 	`user_salaryBankAccount`='".$user_salaryBankAccount."',
// 	`user_previousProfit`='".$user_previousProfit."',
// 	`user_totalWorkExp`='".$user_totalWorkExp."',
// 	`user_securityQues`='".$user_securityQues."',
// 	`user_securityAns`='".$user_securityAns."'
// 	";

// 	if($user_id !=''){

// 			$query ="UPDATE `vss_user` SET ".$database_entry_names." where user_id = '".$user_id."'";
// 			update_row($query);
// 			$message = 'Successfully Updated';

// 	}else{
// 		$query = "select * from `vss_user` where user_email = '".$user_email."' ";
// 		 num_rows($query);
// 		if(num_rows($query) < 1){
// 			$query ="INSERT INTO `vss_user` SET ".$database_entry_names."";
// 			$user_id = insert_row($query);
// 			$message = 'Successfully Added';
// 			header("location:profile.php?user_id=".$user_id."");
// 		}else{
// 			$user_exsist = select_row($query);
// 			$message_red = "Already A User with email <b>".$user_email."</b> <a href='".DOMAIN."/profile.php?user_id=".$user_exsist['user_id']."'>Check  Profile</a>";
// 		}
// 	} 


// 	$input_name ="photo_id";
// 	if($_FILES[$input_name]['name'] !=''){
// 		 $file_name = 'photo_id_'.$user_id.'.jpg';
// 		 file_upload($file_name,$input_name);
// 	}
// 	$input_name ="address_proof";
// 	if($_FILES[$input_name]['name'] !=''){
// 		 $file_name = 'address_proof_'.$user_id.'.jpg';
// 		 file_upload($file_name,$input_name);
// 	}







// }
// if($user_id !=''){
// 	$query ="SELECT * from `vss_user` where user_id = '".$user_id."'";
// 	$user_details = select_row($query);
// 	extract($user_details);
// }


// include 'header.php';

$message = '';
$message_red = '';
if (isset($user)) {
	extract($user);
}

?>












<!-- Main content -->
<section class="content">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">About User</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div class="box-body">
						<?php if ($message != '') { ?>
							<div class="callout callout-success">
								<h4><?php echo $message; ?></h4>
							</div>
						<?php } ?>
						<?php if ($message_red != '') { ?>
							<div class="callout callout-danger">
								<h4><?php echo $message_red; ?></h4>
							</div>
						<?php } ?>
						<div class="col-md-6">
							<div class="form-group">
								<label for="user_firstName">First Name</label>
								<input type="Text" name="user_firstName" class="form-control" value="<?php echo $user_firstName; ?>" id="user_firstName" placeholder="First Name">
							</div>
							<div class="form-group">
								<label for="user_middleName">Middle Name</label>
								<input type="Text" name="user_middleName" class="form-control" value="<?php echo $user_middleName; ?>" id="user_middleName" placeholder="Middle Name">
							</div>
							<div class="form-group">
								<label for="user_lastName">Last Name</label>
								<input type="Text" name="user_lastName" class="form-control" value="<?php echo $user_lastName; ?>" id="user_lastName" placeholder="Last Name">
							</div>
							<div class="form-group">
								<label for="user_dob">Date Of Birth</label>
								<input type="Text" name="user_dob" class="form-control" value="<?php echo $user_dob; ?>" id="user_dob" placeholder="Date Of Birth">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Gender</label>
								<select name="user_gender " class="form-control">
									<option>Gender</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
							<div class="form-group">
								<label>Nationality </label>
								<input type="Text" name="user_education" class="form-control" value="<?php echo $user_education; ?>" id="user_dob" placeholder="Nationality">

							</div>
							<div class="form-group">
								<label>Account Type</label>
								<select name="user_residence" class="form-control">
									<option <?php if ($user_residence == '') {
												echo 'selected';
											} ?> value="">Individual Account</option>
									<option <?php if ($user_residence == 'uk') {
												echo 'selected';
											} ?> value="uk">Joint Account</option>

								</select>
							</div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" name="user" class="btn btn-primary">SAVE</button>
					</div>
				</div>
				<!-- /.box -->

			</div>
			<!-- /.row -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Contact Information</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label for="user_house">HOUSE NO & STREET NAME</label>
								<input type="Text" name="user_house" class="form-control" value="<?php echo $user_house; ?>" id="user_house" placeholder="HOUSE NO & STREET NAME">
							</div>
							<div class="form-group">
								<label for="user_city">CITY NAME</label>
								<input type="Text" name="user_city" class="form-control" value="<?php echo $user_city; ?>" id="user_city" placeholder="CITY NAME">
							</div>
							<div class="form-group">
								<label for="user_pincode">POSTCODE</label>
								<input type="Text" name="user_pincode" class="form-control" value="<?php echo $user_pincode; ?>" id="user_pincode" placeholder="PIN CODE">
							</div>
							<div class="form-group">
								<label for="user_email">EMAIL ID </label>
								<input type="email" name="user_email" class="form-control" value="<?php echo $user_email; ?>" id="user_email" placeholder="EMAIL ID ">
							</div>
							<div class="form-group">
								<label for="user_password">Password</label>
								<input type="Text" name="user_password" class="form-control" value="<?php echo $user_password; ?>" id="user_password" placeholder="SET PASSWORD">
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="user_state">Customer Number</label>
								<input type="Text" name="user_residenceType" class="form-control" value="<?php echo $user_residenceType; ?>" id="user_state" placeholder="Customer Number">
							</div>
							<div class="form-group">
								<label for="user_area">LOCALITY & AREA</label>
								<input type="Text" name="user_area" class="form-control" value="<?php echo $user_area; ?>" id="user_area" placeholder="LOCALITY & AREA">
							</div>
							<div class="form-group">
								<label for="user_state">STATE</label>
								<input type="Text" name="user_state" class="form-control" value="<?php echo $user_state; ?>" id="user_state" placeholder="STATE">
							</div>
							<div class="form-group">
								<label for="user_mobile">MOBILE</label>
								<input type="Text" name="user_mobile" class="form-control" value="<?php echo $user_mobile; ?>" id="user_mobile" placeholder="MOBILE">
							</div>
							<div class="form-group">
								<label for="user_telephone">HOME TELEPHONE</label>
								<input type="Text" name="user_telephone" class="form-control" value="<?php echo $user_telephone; ?>" id="user_telephone" placeholder="HOME TELEPHONE">
							</div>

						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" name="user" class="btn btn-primary">SAVE</button>
					</div>
				</div>
				<!-- /.box -->

			</div>
			<!-- /.row -->



			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Personal details - Account Holder 2</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label for="user_empType">Full Name</label>
								<input type="Text" name="user_empType" class="form-control" value="<?php echo $user_empType; ?>" id="user_empType" placeholder="Full Name">
							</div>
							<div class="form-group">
								<label for="user_previousProfit">Date of Birth</label>
								<input type="Text" name="user_previousProfit" class="form-control" value="<?php echo $user_previousProfit; ?>" id="user_previousProfit" placeholder="Date of Birth">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="user_salaryBankAccount">Email Address</label>
								<input type="Text" name="user_salaryBankAccount" class="form-control" value="<?php echo $user_salaryBankAccount; ?>" id="user_salaryBankAccount" placeholder="Email Address">
							</div>

							<div class="form-group">
								<label for="user_totalWorkExp">Phone Number</label>
								<input type="Text" name="user_totalWorkExp" class="form-control" value="<?php echo $user_totalWorkExp; ?>" id="user_totalWorkExp" placeholder="Phone Number">
							</div>
						</div>


						<div class="col-md-6">
							<div class="form-group">
								<label for="address_proof">Nationality</label>
								<input type="Text" name="address_proof" id="address_proof" placeholder="Nationality">
							</div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" name="user" class="btn btn-primary">SAVE</button>
					</div>
				</div>
				<!-- /.box -->

			</div>
			<!-- /.row -->


			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Deposits and Withdrawals</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label for="photo_id">Name of bank or financial institution.
								</label> <input type="Text" name="address_proof" id="address_proof" placeholder=" financial institution.">

							</div>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" name="user" class="btn btn-primary">SAVE</button>
					</div>

				</div>
				<!-- /.box -->

			</div>





			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title"> Security Questions</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label>Security Questions</label>
								<select name="user_securityQues" class="form-control">
									<option <?php if ($user_securityQues == '') {
												echo 'selected';
											} ?> value="">Security Question</option>
									<option <?php if ($user_securityQues == 'Where were you born?') {
												echo 'selected';
											} ?> value="Where were you born?">Where were you born?</option>
									<option <?php if ($user_securityQues == 'Who was your best friend at school?') {
												echo 'selected';
											} ?> value="Who was your best friend at school?">Who was your best friend at school?</option>
									<option <?php if ($user_securityQues == 'What was the name of your first employer?') {
												echo 'selected';
											} ?> value="WWhat was the name of your first employer?">What was the name of your first employer?</option>
									<option <?php if ($user_securityQues == 'What was the name of your first pet?') {
												echo 'selected';
											} ?> value="What was the name of your first pet?">What was the name of your first pet?</option>
									<option <?php if ($user_securityQues == 'What was your first car?') {
												echo 'selected';
											} ?> value="What was your first car?">What was your first car?</option>
									<option <?php if ($user_securityQues == 'What was the house number and street name you lived in as a child?') {
												echo 'selected';
											} ?> value="What was the house number and street name you lived in as a child?">What was the house number and street name you lived in as a child?</option>
									<option <?php if ($user_securityQues == 'What were the last four digits of your childhood telephone number?') {
												echo 'selected';
											} ?> value="What were the last four digits of your childhood telephone number?">What were the last four digits of your childhood telephone number?</option>
									<option <?php if ($user_securityQues == 'What primary school did you attend?') {
												echo 'selected';
											} ?> value="What primary school did you attend?">What primary school did you attend?</option>
									<option <?php if ($user_securityQues == 'In what town or city was your first full time job?') {
												echo 'selected';
											} ?> value="In what town or city was your first full time job?">In what town or city was your first full time job?</option>
									<option <?php if ($user_securityQues == 'In what town or city did you meet your spouse/partner?') {
												echo 'selected';
											} ?> value="In what town or city did you meet your spouse/partner?">In what town or city did you meet your spouse/partner?</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="user_securityAns">Security Questions Answer </label>
								<input type="Text" name="user_securityAns" class="form-control" value="<?php echo $user_securityAns; ?>" id="user_securityAns" placeholder="Security Questions Answer">
							</div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" name="user" class="btn btn-primary">SAVE</button>
					</div>

				</div>
				<!-- /.box -->

			</div>
			<!-- /.row -->

	</form>



</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- < ?php include 'footer.php';?> -->

















<?= $this->endSection() ?>