<?php

if(isset($_POST['submit'])){
	extract($_POST);
	
	 
	$database_entry_names ="
	`user_firstName`='".$user_firstName."',
	`user_middleName`='".$user_middleName."',
	`user_lastName`='".$user_lastName."',
	`user_dob`='".$user_dob."',
	`user_gender`='".$user_gender."',
	`user_education`='".$user_education."',
	`user_residence`='".$user_residence."',
	`user_house`='".$user_house."',
	`user_area`='".$user_area."',
	`user_city`='".$user_city."',
	`user_state`='".$user_state."',
	`user_pincode`='".$user_pincode."',
	`user_mobile`='".$user_mobile."',
	`user_email`='".$user_email."',
	`user_password`='".$user_password."',
	`user_telephone`='".$user_telephone."',
	`user_residenceType`='".$user_residenceType."',
	`user_empType`='".$user_empType."',
	`user_salaryBankAccount`='".$user_salaryBankAccount."',
	`user_previousProfit`='".$user_previousProfit."',
	`user_totalWorkExp`='".$user_totalWorkExp."',
	`user_securityQues`='".$user_securityQues."',
	`user_securityAns`='".$user_securityAns."'
	";

	$query ="UPDATE `vss_user` SET ".$database_entry_names." where user_id = '".$user_id."'";
	update_row($query);
	$message = 'Successfully Updated';
		
	 
}

$query ="SELECT * from `vss_user` where user_id = '".$user_id."'";
	$user_details = select_row($query);
	extract($user_details);
	if($user_gender !='female'){
		$male ='checked';
	}else{
		$female= 'checked';
	}if($user_maritalStatus !='Single'){
		$married ='checked';
	}else{
		$single= 'checked';
	}
?>
<style>
.btn-small {
    font-size: 10px;
    padding: 5px 5px;
}
</style>
<div class="tab-pane profile" id="profile">
    <form id="newAppForm" name="newAppForm" novalidate="novalidate" action="" method="POST">

        <div class="profile-header"
            style="padding-bottom: 10px; border: 1px solid transparent; border-color: #ddd; padding-top: 10px;">
            <div class="profile-header-container">
                <div class="profile-pic pull-left profile-img-edit profile-pic">
                    <img src="images/default-profile-img.png">
                </div>
                <div class="profile-name font-md"><?php echo $user_firstName;?>
                    &nbsp;<?php echo $user_lastName;?></div>
            </div>
        </div>

        <div class="panel-group profile-acc" id="accordion" role="tablist" aria-multiselectable="true">
            <li class="dontshow">

                <input type="hidden" name="" value="" id="totalFields">
            </li>
            <li class="dontshow">

                <input type="hidden" name="" value="" id="prefilledFields">
            </li>

            <section class="panel panel-default"
                style=" padding-bottom: 10px; border: 1px solid transparent; border-color: #ddd; padding-top: 10px;">
                <div class="panel-heading panel-title js-edit-hide font-lg">

                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse0"
                        aria-expanded="true" aria-controls="collapse0" class="collapsed"> About You<span
                            class="title-arrow"></span>
                    </a>
                    <a class="btn btn-white js-proile-data hide" divcontext="About You"
                        data-actionloc="customer_dashboard:About You" data-action="click:editAbout You"><span
                            class="edit-icon"></span>Edit</a>

                </div>
                <div id="collapse0" class="panel-collapse js-enable-field collapse" divcontext="About You"
                    role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">

 
                    <div class="panel-body app-form-content" id="About You">



                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_firstName" class="fl_label">FIRST NAME</label>
                                    <input type="text" name="user_firstName" value="<?php echo $user_firstName;?>"
                                        id="user_firstName" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_middleName" class="fl_label">MIDDLE NAME</label>
                                    <input type="text" name="user_middleName" value="<?php echo $user_middleName;?>"
                                        id="user_middleName" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_lastName" class="fl_label">LAST NAME</label>
                                    <input type="text" name="user_lastName" value="<?php echo $user_lastName;?>"
                                        id="user_lastName" class="fl_input form-control">
                                </span>
                            </span>
                        </div>


                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-dob bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_dob" class="fl_label">DATE OF BIRTH</label>
                                    <input type="text" name="user_dob" value="<?php echo $user_dob;?>" id="user_dob"
                                        class="fl_input form-control">
                                </span>
                            </span>
                        </div>




                        <div class="app-form-section  js-app-page col-md-5 col-xs-12 default">
                            <span class="bbicons-app-section app-radio-tooltip data-title app-gender">
                                <span> GENDER</span>&nbsp;
                                <label class="radio-inline btn btn-secondary btn-small radio <?php echo $male;?>">Male
                                    <span class="icons">
                                        <span class="first-icon fui-radio-unchecked"></span>
                                        <span class="second-icon fui-radio-checked"></span>
                                    </span>
                                    <input type="radio" name="user_gender" id="user_genderMale" value="Male">
                                </label>
                                <label for="user_genderFemale"
                                    class="radio-inline btn btn-secondary btn-small radio <?php echo $female;?>">Female
                                    <span class="icons"><span class="first-icon fui-radio-unchecked"></span>
                                        <span class="second-icon fui-radio-checked"></span></span>
                                    <input type="radio" name="user_gender" id="user_genderFemale" value="Female">
                                </label>
                            </span>
                        </div>
                        		
                        		
                      	<div class="form-group">
					  <label>Nationality </label>
				  <input type="Text"  name="user_education" class="form-control" value="<?php echo $user_education ;?>" id="user_dob" placeholder="Nationality">
				
					</div>
  
                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="fly-group">
                                <label class="fly-label classic" for="user_residence">Account Type</label>
                                <span class="bbicons-app-section select-tooltip data-title app-house">
                                    <span class="select-wrapper">
                                        <select name="user_residence" id="user_residence"
                                            class="custom-select fly-input">
                                            <option <?php if($user_residence ==''){echo 'selected';}?> value="">Individual Account</option>
                                            <option <?php if($user_residence =='uk'){echo 'selected';}?> value="uk">Joint Account</option>
       
                                        </select>
                                        <span class="holder">
                                            <?php echo $user_residence;?>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        
                        
                        <div class="col-md-12 submit-button-block js-buttons">
                            <button class="saveNow btn btn-secondary float_left menu-login js-saveNow" name="submit"
                                type="submit" style="z-index: 0;">Save</button>
                            <button class="btn btn-danger js-cancel" type="button">Cancel</button>
                        </div>


                    </div>
                </div>
            </section>


            <section class="panel panel-default" style="  padding-bottom: 10px; border: 1px solid transparent;  border-color: #ddd;padding-top: 10px;">
                <div class="panel-heading panel-title js-edit-hide font-lg">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2" class="collapsed"> Personal details - Account Holder 2
						<span class="title-arrow"></span>
                    </a>
                   

                </div>
                <div id="collapse2" class="panel-collapse js-enable-field collapse" divcontext="Employment Information"
                    role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">


                    <div class="panel-body app-form-content" id=" Personal details - Account Holder 2
						<span class="title-arrow"></span>"

					<div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="fly-group">
                                <label class="fly-label classic" for="user_empType">Full Name</label>
                                <span class="bbicons-app-section select-tooltip data-title app-person">
                             <input type="text" name="user_previousProfit" value="><?php echo  $user_empType;?>"
           
                                </span>
                            </span>
                            </span> 
                            </div>   

					
						<div class="app-form-section js-app-page col-md-12 col-xs-12" style="width:96%;">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_previousProfit" class="fl_label">Date of Birth</label>
                                    <input type="text" name="user_previousProfit" value="<?php echo $user_previousProfit;?>"
                                        id="user_previousProfit" class="fl_input form-control">
                                </span>
                            </span>
                        </div>

						
						
						<div class="app-form-section js-app-page col-md-12 col-xs-12" style="width:96%;">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_totalWorkExp" class="fl_label">Email Address</label>
                                    <input type="text" name="user_totalWorkExp" value="<?php echo $user_totalWorkExp;?>"
                                        id="user_totalWorkExp" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
						-->
						
						<div class="app-form-section js-app-page col-md-12 col-xs-12" style="width:96%;">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_empType" class="fl_label">Phone Number</label>
                                    <input type="text" name="user_empType" value="<?php echo $user_empType;?>"
                                        id="user_empType" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
						
						<div class="app-form-section js-app-page col-md-12 col-xs-12" style="width:96%;">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_salaryBankAccount" class="fl_label">Nationality</label>
                                    <input type="text" name="user_salaryBankAccount" value="<?php echo $user_salaryBankAccount;?>"
                                        id="user_salaryBankAccount" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
						
						
						<div class="app-form-section js-app-page col-md-12 col-xs-12" style="width:96%;">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_previousProfit" class="fl_label">Phone Number</label>
                                    <input type="text" name="user_previousProfit" value="<?php echo $user_previousProfit;?>"
                                        id="user_previousProfit" class="fl_input form-control">
                                </span>
                            </span>
                        </div>

						
						
						<div class="app-form-section js-app-page col-md-12 col-xs-12" style="width:96%;">
                            <span class="app-person bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_totalWorkExp" class="fl_label">Nationality</label>
                                    <input type="text" name="user_totalWorkExp" value="<?php echo $user_totalWorkExp;?>"
                                        id="user_totalWorkExp" class="fl_input form-control">
                                </span>
                            </span>
                        </div>

                         <div class="col-md-12 submit-button-block js-buttons">
                            <button class="saveNow btn btn-secondary float_left menu-login js-saveNow" name="submit"
                                type="submit" style="z-index: 0;">Save</button>
                            <button class="btn btn-danger js-cancel" type="button">Cancel</button>
                        </div> 


                    </div>
                </div>
            </section>


            <section class="panel panel-default" style=" padding-bottom: 10px;   border: 1px solid transparent;   border-color: #ddd;   padding-top: 10px;">
                <div class="panel-heading panel-title js-edit-hide font-lg">

                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                        aria-expanded="true" aria-controls="collapse1" class="collapsed"> Contact Information<span
                            class="title-arrow"></span>
                    </a>

                </div>
                <div id="collapse1" class="panel-collapse js-enable-field collapse" divcontext="Contact Information"
                    role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">


                    <div class="panel-body app-form-content" id="Contact Information">



                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-house bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_house" class="fl_label">HOUSE NO &amp; STREET NAME</label>
                                    <input type="text" name="user_house" value="<?php echo $user_house;?>" id="user_dob"
                                        class="fl_input form-control">
                                </span>
                            </span>
                        </div>

                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-area bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_area" class="fl_label">LOCALITY &amp; AREA</label>
                                    <input type="text" name="user_area" value="<?php echo $user_area;?>" id="user_area"
                                        class="fl_input form-control">
                                </span>
                            </span>
                        </div>

                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-city-state bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_city" class="fl_label">CITY NAME</label>
                                    <input type="text" name="user_city" value="<?php echo $user_city;?>" id="user_city"
                                        class="fl_input form-control">
                                </span>
                            </span>
                        </div>
                        <?php
                        $counties = [
                            'Aberdeenshire',
                            'Angus',
                            'Antrim',
                            'Argyll',
                            'Armagh',
                            'Ayrshire',
                            'Banffshire',
                            'Berkshire',
                            'Berwickshire',
                            'Bristol',
                            'Buckinghamshire',
                            'Bute',
                            'Caithness',
                            'Cambridgeshire',
                            'Cheshire',
                            'City of London',
                            'Clackmannanshire',
                            'Clwyd',
                            'Cornwall',
                            'Cumbria',
                            'Derbyshire',
                            'Devon',
                            'Dorset',
                            'Down',
                            'Dumfriesshire',
                            'Dunbartonshire',
                            'Durham',
                            'Dyfed',
                            'East Lothian',
                            'East Riding of Yorkshire',
                            'East Sussex',
                            'Essex',
                            'Fermanagh',
                            'Fife',
                            'Gloucestershire',
                            'Greater London',
                            'Greater Manchester',
                            'Gwent',
                            'Gwynedd',
                            'Hampshire',
                            'Herefordshire',
                            'Hertfordshire',
                            'Inverness-shire',
                            'Isle of Wight',
                            'Kent',
                            'Kincardineshire',
                            'Kinross-shire',
                            'Kirkcudbrightshire',
                            'Lanarkshire',
                            'Lancashire',
                            'Leicestershire',
                            'Lincolnshire',
                            'Londonderry',
                            'Merseyside',
                            'Mid Glamorgan',
                            'Midlothian',
                            'Moray',
                            'Nairnshire',
                            'Norfolk',
                            'North Yorkshire',
                            'Northamptonshire',
                            'Northumberland',
                            'Nottinghamshire',
                            'Orkney',
                            'Oxfordshire',
                            'Peeblesshire',
                            'Perthshire',
                            'Powys',
                            'Renfrewshire',
                            'Ross and Cromarty',
                            'Roxburghshire',
                            'Rutland',
                            'Selkirkshire',
                            'Shetland',
                            'Shropshire',
                            'Somerset',
                            'South Glamorgan',
                            'South Yorkshire',
                            'Staffordshire',
                            'Stirlingshire',
                            'Suffolk',
                            'Surrey',
                            'Sutherland',
                            'Tyne and Wear',
                            'Tyrone',
                            'Warwickshire',
                            'West Glamorgan',
                            'West Lothian',
                            'West Midlands',
                            'West Sussex',
                            'West Yorkshire',
                            'Wigtownshire',
                            'Wiltshire',
                            'Worcestershire'
                        
                        ];
                      
                        ?>
						<div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="fly-group">
                                <label class="fly-label classic" for="user_state">COUNTY</label>
                                <span class="bbicons-app-section select-tooltip data-title app-city-state">
                                    <span class="select-wrapper">
                                        <select name="user_state" id="user_state"
                                            class="custom-select fly-input">
                                            <option <?php if($user_state ==''){echo 'selected';}?> value=""> County  </option>
                                           <?php foreach($counties as $county){
                                           $db_value_county = $county;
                                           ?>
                                            <option <?php if($user_state == $db_value_county){echo 'selected';}?> value="<?php echo $db_value_county;?>"><?php echo $county;?></option>
                                           <?php } ?>
                                        </select>
                                        <span class="holder">
                                            <?php echo $user_state;?>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-pincode bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_pincode" class="fl_label">POST CODE</label>
                                    <input type="text" name="user_pincode" value="<?php echo $user_pincode;?>"
                                        id="user_pincode" class="fl_input form-control">
                                </span>
                            </span>
                        </div>

                        <div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-mobile bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_mobile" class="fl_label">MOBILE</label>
                                    <input type="tel" name="user_mobile" value="<?php echo $user_mobile;?>"
                                        id="user_mobile" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
						
						<div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-email bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_email" class="fl_label">EMAIL ID</label>
                                    <input type="email" name="user_email" value="<?php echo $user_email;?>"
                                        id="user_email" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
						
						<div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-telephone bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_telephone" class="fl_label">HOME TELEPHONE</label>
                                    <input type="tel" name="user_telephone" value="<?php echo $user_telephone;?>"
                                        id="user_telephone" class="fl_input form-control">
                                </span>
                            </span>
                        </div>

						
						<div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="fly-group">
                                <label class="fly-label classic" for="user_residenceType"> RESIDENCE TYPE</label>
                                <span class="bbicons-app-section select-tooltip data-title app-house">
                                    <span class="select-wrapper">
                                        <select name="user_residenceType" id="user_residenceType"
                                            class="custom-select fly-input">
                                            <option <?php if($user_residenceType ==''){echo 'selected';}?> value=""> RESIDENCE TYPE  </option>
                                            <option <?php if($user_residenceType =='OWNED_BY_SELF_OR_SPOUSE'){echo 'selected';}?> value="OWNED_BY_SELF_OR_SPOUSE">Owned by self/spouse</option>
                                            <option <?php if($user_residenceType =='OWNED_BY_PARENT_OR_SIBLING'){echo 'selected';}?> value="OWNED_BY_PARENT_OR_SIBLING">Owned by parent/sibling</option>
                                            <option <?php if($user_residenceType =='RENTED_AND_STAYING_WITH_FAMILY'){echo 'selected';}?> value="RENTED_AND_STAYING_WITH_FAMILY">Rented - With Family</option>
                                            <option <?php if($user_residenceType =='RENTED_AND_STAYING_WITH_FRIENDS'){echo 'selected';}?> value="RENTED_AND_STAYING_WITH_FRIENDS">Rented - With Friends</option>
                                            <option <?php if($user_residenceType =='RENTED_AND_STAYING_ALONE'){echo 'selected';}?> value="RENTED_AND_STAYING_ALONE">Rented - Staying alone</option>
                                            <option <?php if($user_residenceType =='PAYING_GUEST'){echo 'selected';}?> value="PAYING_GUEST">Paying guest</option>
                                            <option <?php if($user_residenceType =='HOSTEL'){echo 'selected';}?> value="HOSTEL">Hostel</option>
                                            <option <?php if($user_residenceType =='COMPANY_PROVIDED'){echo 'selected';}?> value="COMPANY_PROVIDED">Company provided</option>
                                        </select>
                                        <span class="holder">
                                            <?php echo $user_residenceType;?>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="col-md-12 submit-button-block js-buttons">
                            <button class="saveNow btn btn-secondary float_left menu-login js-saveNow" name="submit"
                                type="submit" style="z-index: 0;">Save</button>
                            <button class="btn btn-danger js-cancel" type="button">Cancel</button>
                        </div>
                    </div>
                </div>
            </section>









            <section class="panel panel-default" style="padding-bottom: 10px; border: 1px solid transparent;   border-color: #ddd;   padding-top: 10px;">
                <div class="panel-heading panel-title js-edit-hide font-lg">

                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                        aria-expanded="true" aria-controls="collapse3" class="collapsed"> Verification Documents<span
                            class="title-arrow"></span>
                    </a>


                </div>
                <div id="collapse3" class="panel-collapse js-enable-field collapse" divcontext="Digital KYC"  role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">
                    <div class="panel-body app-form-content" id="Digital KYC">
					
						<div class=" js-app-page col-md-5 col-xs-12">
							<img src="<?php echo DOMAIN.'uk/wp-content/uploads/photo_id_'.$user_id.'.jpg';?>" style="width:200px;">
							<br>
							<span>Photo Id</span>
                            <!--span class="app-pan bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="photo_id" class="fl_label">Photo ID</label>
                                    <input type="file" name="photo_id" value="<?php echo $photo_id;?>"
                                        id="photo_id" class="fl_input form-control">
                                </span>
                            </span=-->
                        </div>
						
						<div class=" js-app-page col-md-5 col-xs-12">
							<img src="<?php echo DOMAIN.'uk/wp-content/uploads/address_proof_'.$user_id.'.jpg';?>" style="width:200px;">
							<br>
							<span>Address Proof</span>
                            <!--span class="app-pan bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="address_proof" class="fl_label">Proof of Address</label>
                                    <input type="file" name="address_proof" value=""
                                        id="address_proof" class="fl_input form-control">
                                </span>
                            </span-->
                        </div>
						

                        <!--div class="col-md-12 submit-button-block js-buttons">
                            <button class="saveNow btn btn-secondary float_left menu-login js-saveNow" name="submit"
                                type="submit" style="z-index: 0;">Save</button>
                            <button class="btn btn-danger js-cancel" type="button">Cancel</button>
                        </div--> 


                    </div>
                </div>
            </section>
            <section class="panel panel-default" style="padding-bottom: 10px;border: 1px solid transparent; border-color: #ddd;padding-top: 10px;">
                <div class="panel-heading panel-title js-edit-hide font-lg">

                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                        aria-expanded="true" aria-controls="collapse4" class="collapsed">Account Settings<span
                            class="title-arrow"></span>
                    </a>


                </div>
                <div id="collapse4" class="panel-collapse js-enable-field collapse" divcontext="Digital KYC"
                    role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">


                    <div class="panel-body app-form-content" id="Digital KYC">
						<div class="app-form-section js-app-page col-md-12 col-xs-12" style="width:96%;">
                            <span class="fly-group">
                                <label class="fly-label classic" for="user_securityQues">Security Questions</label>
                                <span class="bbicons-app-section select-tooltip data-title app-person">
                                    <span class="select-wrapper">
                                        <select name="user_securityQues" id="user_securityQues"
                                            class="custom-select fly-input">
						 <option <?php if($user_securityQues ==''){ echo 'selected';}?> value="">Security Question</option>
						 <option <?php if($user_securityQues =='Where were you born?'){ echo 'selected';}?> value="Where were you born?">Where were you born?</option>
                         <option <?php if($user_securityQues =='Who was your best friend at school?'){ echo 'selected';}?> value="Who was your best friend at school?">Who was your best friend at school?</option>
                         <option <?php if($user_securityQues =='What was the name of your first employer?'){ echo 'selected';}?> value="WWhat was the name of your first employer?">What was the name of your first employer?</option>
                         <option <?php if($user_securityQues =='What was the name of your first pet?'){ echo 'selected';}?> value="What was the name of your first pet?">What was the name of your first pet?</option>
                         <option <?php if($user_securityQues =='What was your first car?'){ echo 'selected';}?> value="What was your first car?">What was your first car?</option>
						 <option <?php if($user_securityQues =='What was the house number and street name you lived in as a child?'){ echo 'selected';}?> value="What was the house number and street name you lived in as a child?">What was the house number and street name you lived in as a child?</option>
						<option <?php if($user_securityQues =='What were the last four digits of your childhood telephone number?'){ echo 'selected';}?> value="What were the last four digits of your childhood telephone number?">What were the last four digits of your childhood telephone number?</option>
						<option <?php if($user_securityQues =='What primary school did you attend?'){ echo 'selected';}?> value="What primary school did you attend?">What primary school did you attend?</option>
						<option <?php if($user_securityQues =='In what town or city was your first full time job?'){ echo 'selected';}?> value="In what town or city was your first full time job?">In what town or city was your first full time job?</option>
						<option <?php if($user_securityQues =='In what town or city did you meet your spouse/partner?'){ echo 'selected';}?> value="In what town or city did you meet your spouse/partner?">In what town or city did you meet your spouse/partner?</option>
					  </select>
                                        <span class="holder">
                                            <?php echo $user_securityQues;?>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>

						<div class="app-form-section js-app-page col-md-12 col-xs-12" style="width:96%;">
                            <span class="app-pan bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_securityAns" class="fl_label">Security Questions Answer</label>
                                    <input type="text" name="user_securityAns" value="<?php echo $user_securityAns;?>"
                                        id="user_securityAns" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
						
						<div class="app-form-section js-app-page col-md-5 col-xs-12 " >
                            <span class="app-pan bbicons-app-section">
                                <span class="fl_wrap">
                                    <label for="user_password" class="fl_label">Current Password</label>
                                    <input type="readonly" name=""  value="<?php echo $user_password;?>"
                                        id="user_password" class="fl_input form-control">
                                </span>
                            </span>
                        </div>
						
						<div class="app-form-section js-app-page col-md-5 col-xs-12">
                            <span class="app-pan bbicons-app-section">
                                <span class="fl_wrap" style="
    text-transform: none !important;
">
                                    <label for="new_password"  class="fl_label">New Password</label>
                                    <input style="text-transform: none !important;" type="text" name="user_password" value="" id="new_password" class="fl_input form-control" data-original-title="" title="">
                                </span>
                            </span>
                        </div>
					
                        <div class="col-md-12 submit-button-block js-buttons">
                            <button class="saveNow btn btn-secondary float_left menu-login js-saveNow" name="submit" type="submit" style="z-index: 0;">Save</button>
                            <button class="btn btn-danger js-cancel" type="button">Cancel</button>
                        </div> 



                    </div>
                </div>
            </section>

        </div>


    </form>
</div>