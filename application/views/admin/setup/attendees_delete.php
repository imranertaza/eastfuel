<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?php echo $title; ?></span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="d-flex justify-content-center">
                <!-- <a href="#" class="btn btn-link btn-float text-default"><i class="icon-add text-primary"></i><span>Add New</span></a> -->
            </div>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo base_url('/')  ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <span class="breadcrumb-item active"><?php echo $title ?></span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="<?php echo base_url('admin/registereduser') ?>" class="breadcrumb-elements-item">
                    <i class="icon-add mr-2"></i>
                    Attendee List
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
    <!-- Dashboard content -->
    <form action="<?php echo base_url('admin/attendee'); ?>" enctype="multipart/form-data" method="POST">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <!-- Hover rows -->
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">First Name <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="firstName" placeholder="Enter Your First Name" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Last Name <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="lastName" placeholder="Enter Your last Name" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Your 1st name as you wish it to appear on your badge <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="badgeName" placeholder="Enter 1st name..." class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Email <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="email" placeholder="Enter your email address" class="form-control" type="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Secondary Email</label>
                            <div class="col-md-8">
                                <input name="secondaryEmail" placeholder="Enter your secondary email address" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Organization <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="organization" placeholder="Enter Your Organization" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Job Title <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="jobTitle" placeholder="Enter Your Job Title" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Address <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group control-group">
                                            <input name="addressLine1" placeholder="Address Line 1" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group control-group">
                                            <input name="addressLine2" placeholder="Address Line 2" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="city" placeholder="City" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="state" placeholder="State or Region" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="country" placeholder="Country" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="zip" placeholder="Zip" class="form-control" type="text" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Mobile <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="phone" placeholder="(201) 555-0123" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Office Mobile</label>
                            <div class="col-md-8">
                                <input name="officePhone" placeholder="(201) 555-0123" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Is this your first time attending the conference? <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="attendingConf" id="attendingConf1" value="Yes" checked>
                                        <label class="form-check-label" for="attendingConf1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="attendingConf" id="attendingConf2" value="No">
                                        <label class="form-check-label" for="attendingConf2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Company Type <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="companyType" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="Utility Company">Utility Company</option>
                                        <option value="Media">Media</option>
                                        <option value="Supplier: Coal Mine / Coal Producer">Supplier: Coal Mine / Coal Producer</option>
                                        <option value="Supplier: Consultant">Supplier: Consultant</option>
                                        <option value="Supplier: Software">Supplier: Software</option>
                                        <option value="Supplier: Trader / Broker">Supplier: Trader / Broker</option>
                                        <option value="Supplier: Transportation/Rail/Shipping">Supplier: Transportation/Rail/Shipping</option>
                                        <option value="Supplier: Laboratory">Supplier: Laboratory</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">if “other” selected, please specify</label>
                            <div class="col-md-8">
                                <input name="other" placeholder="" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Emergency Contact Name</label>
                            <div class="col-md-8">
                                <input name="emergencyContactName" placeholder="" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Emergency Contact Phone</label>
                            <div class="col-md-8">
                                <input name="emmergencyContactPhone" placeholder="(201) 555-0123" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Please indicate which Wednesday activity you will be attending(Select ONE)* (Please note that all have limited space and is on a 1st come, 1st confirmed basis. We apologize in advance if your 1st choice is not available) <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="confEvent" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="Golf">Golf Tournament (8:30 AM start)</option>
                                        <option value="Fishing">Fishing (7:00 AM)</option>
                                        <option value="Massage">Massage (limited space)</option>
                                        <option value="Networking">Networking 1:30 PM – 3:30 PM (limited space)</option>
                                        <option value="None">None</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4>If You Chose Golf</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Your handicap</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="handicap" placeholder="(A number from 0 to 36)" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Rental clubs are available on-site for a fee and must be reserved in advance to ensure availability. Let us know your club preference.</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="rentalClubs" class="yit-nice-select width-full form-control">
                                        <option value="">Select an option</option>
                                        <option value="I will bring my own">I will bring my own</option>
                                        <option value="Right-handed mens">Right-handed mens</option>
                                        <option value="Left-handed mens">Left-handed mens</option>
                                        <option value="Right-handed ladies">Right-handed ladies</option>
                                        <option value="Left-handed ladies">Left-handed ladies</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4>If you Chose Massage</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Select your preferred time slot; We will get back to you confirming your appointment time.</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="messagePreferredTime" class="yit-nice-select width-full form-control">
                                        <option value="">Select an option</option>
                                        <option value="8:00 AM- 10:00 AM">8:00 AM- 10:00 AM</option>
                                        <option value="10:00 AM - 12:00 PM">10:00 AM - 12:00 PM</option>
                                        <option value="12:00 PM - 2:00 PM">12:00 PM - 2:00 PM</option>
                                        <option value="2:00 PM - 4:00 PM">2:00 PM - 4:00 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h4>Conference Meals</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Wednesday Welcome Reception <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="wedWelReception" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Thursday Breakfast <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="thursdayBreakfast" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Thursday Luncheon <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="thursdayLuncheon" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Thursday Dinner <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="thursdayDinner" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4>Spouse/Guest Dinner Ticket $90 prepaid (by August 16, 2021) or $200 on-site.</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4"> Check Box to purchase Spouse/Guest Dinner Ticket. ($ 90)</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input spouseDnrTckt" type="radio" name="spouseDinnerTicket" id="spouseDinnerTicket1" value="Yes">
                                        <label class="form-check-label" for="spouseDinnerTicket1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input spouseDnrTckt" type="radio" name="spouseDinnerTicket" id="spouseDinnerTicket2" value="No" checked>
                                        <label class="form-check-label" for="spouseDinnerTicket2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Spouse/Guest's First Name</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="spouseFirstName" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Spouse/Guest's Last Name</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="spouseLastName" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Friday Breakfast <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="fridayBreakfast" class="yit-nice-select width-full form-control">
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend" selected>I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Dietary Restrictions/Special Needs</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="dietaryRestrictions" placeholder="If Applicable" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Create Own Password </h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">New Password <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="password" class="form-control" type="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Retype Password <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="repassword" class="form-control" type="password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Amount to be Paid</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="amount" class="form-control" type="number" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <input type="hidden" name="paymentMethod" id="paymentMethod" value="offline">
                            <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>

                </div>
                <!-- /hover rows -->
            </div>
        </div>
    </form>
    <!-- /dashboard content -->
</div>
<!-- /content area -->