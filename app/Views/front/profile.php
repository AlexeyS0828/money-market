<?= $this->extend("/front/layout"); ?>

<?= $this->section("content"); ?>


<div class="row">
    <!-- <div class="col-xl-4"> -->

    <!-- 
            <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <h2>Kevin Anderson</h2>
                <h3>Web Designer</h3>
                <div class="social-links mt-2">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    -->

    <!-- </div> -->

    <!-- <div class="col-xl-8"> -->

    <div class="card">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Contact Information</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Settings</button>
                </li>

            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                    <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                    <div class="social-links mt-2">
                                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
                        </div>
                    </div>

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                        <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Company</div>
                        <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Job</div>
                        <div class="col-lg-9 col-md-8">Web Designer</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Country</div>
                        <div class="col-lg-9 col-md-8">USA</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Phone</div>
                        <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                    </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                    <!-- Profile Edit Form -->
                    <form>
                        <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                <div class="pt-2">
                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_firstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="user_firstName" type="text" class="form-control" id="user_firstName" placeholder="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_middleName" class="col-md-4 col-lg-3 col-form-label">Middle Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="user_middleName" type="text" class="form-control" id="user_middleName" placeholder="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_lastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="user_lastName" type="text" class="form-control" id="user_lastName" placeholder="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_email" class="col-md-4 col-lg-3 col-form-label">Email:</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="user_email" type="email" class="form-control" id="user_email" required placeholder="">
                            </div>
                        </div>

                        <br>

                        <div class="row mb-3">
                            <label for="user_dob" class="col-md-4 col-lg-3 col-form-label">Profile Information</label>
                            <div class="col-md-8 col-lg-9">
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label for="user_dob" class="form-label">Date of Birth</label>
                                        <input name="user_dob" type="date" class="form-control" id="user_dob">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="user_gender" class="form-label">Gender</label>
                                        <select name="user_gende" id="user_gende" class="form-select">
                                            <option value=""></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="user_maritalStatus" class="form-label">Maritial Status</label>
                                        <select name="user_maritalStatus" id="user_maritalStatus" class="form-select">
                                            <option value=""></option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="user_education" class="form-label">Educational Qualification</label>
                                        <select name="user_education" id="user_education" class="form-select">
                                            <option selected="" value=""></option>
                                            <option value="High_School">High School</option>
                                            <option value="Bachelors_Degree">Bachelors Degree</option>
                                            <option value="Masters_Degree">Masters Degree</option>
                                            <option value="Doctoral_Degree">Doctoral Degree</option>
                                            <option value="Graduate_Diploma">Diploma/ITI</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="user_totalWorkExp" class="form-label">Nationality</label>
                                        <input type="text" name="user_totalWorkExp" id="user_totalWorkExp" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row mb-3">
                            <label for="user_dob" class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="user_dob" type="date" class="form-control" id="user_dob">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_gender" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                            <div class="col-md-8 col-lg-9">
                                <select name="user_gende" id="user_gende" class="form-select">
                                    <option value=""></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="user_maritalStatus" class="col-md-4 col-lg-3 col-form-label">Maritial Status</label>
                            <div class="col-md-8 col-lg-9">
                                <select name="user_maritalStatus" id="user_maritalStatus" class="form-select">
                                    <option value=""></option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="user_education" class="col-md-4 col-lg-3 col-form-label">Educational Qualification</label>
                            <div class="col-md-8 col-lg-9">
                                <select name="user_education" id="user_education" class="form-select">
                                    <option selected="" value=""></option>
                                    <option value="High_School">High School</option>
                                    <option value="Bachelors_Degree">Bachelors Degree</option>
                                    <option value="Masters_Degree">Masters Degree</option>
                                    <option value="Doctoral_Degree">Doctoral Degree</option>
                                    <option value="Graduate_Diploma">Diploma/ITI</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="user_totalWorkExp" class="col-md-4 col-lg-3 col-form-label">Nationality</label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" name="user_totalWorkExp" id="user_totalWorkExp" class="form-control">
                            </div>
                        </div>
                    -->

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                    <!-- Settings Form -->
                    <form>
                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Location</label>
                            <div class="col-md-8 col-lg-9">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="user_state" class="form-label">Country</label>
                                        <select name="user_state" id="user_state" class="form-select">
                                            <option value=""></option>
                                            <option value="en">USA</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="user_house" class="form-label">House & Street Address</label>
                                        <input type="text" name="user_house" id="user_house" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="user_city" class="form-label">City</label>
                                        <input type="text" name="user_city" id="user_city" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="user_area" class="form-label">State/Province</label>
                                        <input type="text" name="user_area" id="user_area" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="user_pincode" class="form-label">Zip/Postal Code</label>
                                        <input type="text" name="user_pincode" id="user_pincode" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                            <div class="col-md-8 col-lg-9">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="user_mobile" class="form-label">Mobile</label>
                                        <input type="text" name="user_mobile" id="user_mobile" class="form-control">
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="user_telephone" class="form-label">Home Telephone</label>
                                        <input type="text" name="user_telephone" id="user_telephone" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>

                        <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="password" type="password" class="form-control" id="currentPassword" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="newpassword" type="password" class="form-control" id="newPassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-3">
                            <label for="user_securityQues" class="col-md-4 col-lg-3 col-form-label">Sequerity Questions</label>
                            <div class="col-md-8 col-lg-9">
                                <select name="user_securityQues" id="user_securityQues" class="form-select">
                                    <option value=""></option>
                                    <option value="Where were you born?">Where were you born?</option>
                                    <option value="Who was your best friend at school?">Who was your best friend at school?</option>
                                    <option value="WWhat was the name of your first employer?">What was the name of your first employer?</option>
                                    <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                                    <option value="What was your first car?">What was your first car?</option>
                                    <option value="What was the house number and street name you lived in as a child?">What was the house number and street name you lived in as a child?</option>
                                    <option value="What were the last four digits of your childhood telephone number?">What were the last four digits of your childhood telephone number?</option>
                                    <option value="What primary school did you attend?">What primary school did you attend?</option>
                                    <option value="In what town or city was your first full time job?">In what town or city was your first full time job?</option>
                                    <option value="In what town or city did you meet your spouse/partner?">In what town or city did you meet your spouse/partner?</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="user_securityAns" class="col-md-4 col-lg-3 col-form-label">Answer</label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" name="user_securityAns" id="user_securityAns" class="form-control">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </div>
                    </form><!-- End Change Password Form -->

                </div>

            </div>
            <!-- End Bordered Tabs -->

        </div>
    </div>

    <!-- </div> -->
</div>






<?= $this->endSection() ?>