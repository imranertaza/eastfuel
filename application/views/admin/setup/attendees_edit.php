
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
    <form action="<?php echo base_url('admin/edit_attendee/'.$users->form_id); ?>" enctype="multipart/form-data" method="POST">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <!-- Hover rows -->
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">First Name <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="firstName" placeholder="Enter Your First Name" class="form-control" type="text" value="<?php echo $users->firstName?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Last Name <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="lastName" placeholder="Enter Your last Name" class="form-control" type="text"  value="<?php echo $users->lastName?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Your 1st name as you wish it to appear on your badge <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="badgeName" placeholder="Enter 1st name..." class="form-control" value="<?php echo $users->badgeName?>" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Email <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="email" placeholder="Enter your email address" class="form-control" type="email" required value="<?php echo $users->email?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Secondary Email</label>
                            <div class="col-md-8">
                                <input name="secondaryEmail" placeholder="Enter your secondary email address" class="form-control" type="text" value="<?php echo $users->secondaryEmail?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Organization <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="organization" placeholder="Enter Your Organization" class="form-control" type="text" value="<?php echo $users->organization?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Job Title <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="jobTitle" placeholder="Enter Your Job Title" class="form-control" type="text" value="<?php echo $users->jobTitle?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Address <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group control-group">
                                            <input name="addressLine1" placeholder="Address Line 1" class="form-control" type="text" value="<?php echo $users->addressLine1?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group control-group">
                                            <input name="addressLine2" placeholder="Address Line 2" class="form-control" value="<?php echo $users->addressLine2?>" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="city" placeholder="City" class="form-control" type="text" value="<?php echo $users->city?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="state" placeholder="State or Region" class="form-control" type="text" value="<?php echo $users->state?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="country" placeholder="Country" class="form-control" type="text" value="<?php echo $users->country?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group control-group">
                                            <input name="zip" placeholder="Zip" class="form-control" type="text" value="<?php echo $users->zip?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Mobile <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="phone" placeholder="(201) 555-0123" class="form-control" type="text" value="<?php echo $users->phone?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Office Mobile</label>
                            <div class="col-md-8">
                                <input name="officePhone" placeholder="(201) 555-0123" class="form-control" value="<?php echo $users->officePhone?>" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Is this your first time attending the conference? <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">

                                	<?php
                                		$attendingConf =''; 
                                		if ($users->attendingConf == 'Yes') {
                                			$attendingConf = 'checked';
                                		}

                                		$attendingConf2 =''; 
                                		if ($users->attendingConf == 'No') {
                                			$attendingConf2 = 'checked';
                                		}
                                	?>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="attendingConf" id="attendingConf1" value="Yes" <?php echo $attendingConf; ?>>
                                        <label class="form-check-label" for="attendingConf1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="attendingConf" id="attendingConf2" value="No" <?php echo $attendingConf2; ?>>
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
                                        <option value="<?php echo $users->companyType?>"><?php echo $users->companyType?></option>
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
                                <input name="other" placeholder="" class="form-control" type="text" value="<?php echo $users->other?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Emergency Contact Name</label>
                            <div class="col-md-8">
                                <input name="emergencyContactName" placeholder="" class="form-control" type="text"  value="<?php echo $users->emergencyContactName?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Emergency Contact Phone</label>
                            <div class="col-md-8">
                                <input name="emmergencyContactPhone" placeholder="(201) 555-0123" class="form-control" type="text" value="<?php echo $users->emmergencyContactPhone?>">
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
                                    	<?php 
                                    	$selected1 = '';
                                    	$selected2 = '';
                                    	$selected3 = '';
                                    	$selected4 = '';
                                    	$selected5 = '';
                                    	if ($users->confEvent == 'Golf') {
                                    		$selected1 = 'selected';
                                    	}

                                    	if ($users->confEvent == 'Fishing') {
                                    		$selected2 = 'selected';
                                    	}

                                    	if ($users->confEvent == 'Massage') {
                                    		$selected3 = 'selected';
                                    	}
                                    	if ($users->confEvent == 'Networking') {
                                    		$selected4 = 'selected';
                                    	}
                                    	if ($users->confEvent == 'None') {
                                    		$selected5 = 'selected';
                                    	}


                                    	?>
                                        <option value="">Please selecet</option>
                                        <option value="Golf" <?php echo $selected1; ?>>Golf Tournament (8:30 AM start)</option>
                                        <option value="Fishing" <?php echo $selected2; ?>>Fishing (7:00 AM)</option>
                                        <option value="Massage" <?php echo $selected3; ?>>Massage (limited space)</option>
                                        <option value="Networking" <?php echo $selected4; ?>>Networking 1:30 PM – 3:30 PM (limited space)</option>
                                        <option value="None" <?php echo $selected5; ?>>None</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4>If You Chose Golf</h4>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Your handicap</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="handicap" placeholder="(A number from 0 to 36)" class="form-control" type="text" value="<?php echo $users->handicap?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Rental clubs are available on-site for a fee and must be reserved in advance to ensure availability. Let us know your club preference.</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="rentalClubs" class="yit-nice-select width-full form-control">
                                        <option value="<?php echo $users->rentalClubs?>"><?php echo $users->rentalClubs?></option>
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

                                    	<?php 
                                    		if (!empty($users->messagePreferredTime)) {
                                    			$val = $users->messagePreferredTime;
                                    		}else{
                                    			$val ='Please select';
                                    		}
                                    	 ?>

                                        <option value="<?php echo  $users->messagePreferredTime; ?>"><?php echo $val; ?></option>
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
                                        <option value="<?php echo $users->wedWelReception?>"><?php echo $users->wedWelReception?></option>
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
                                        <option value="<?php echo $users->thursdayBreakfast?>"><?php echo $users->thursdayBreakfast?></option>
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
                                        <option value="<?php echo $users->thursdayLuncheon?>"><?php echo $users->thursdayLuncheon?></option>
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
                                        <option value="<?php echo $users->thursdayDinner?>"><?php echo $users->thursdayDinner?></option>
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

                                	<?php 
                                		$spouseDinnerTicket ='';
                                		$spouseDinnerTicket2 = '';
	                                	if ($users->spouseDinnerTicket == 'Yes') {
	                                		$spouseDinnerTicket = 'checked';
	                                	} 

	                                	if ($users->spouseDinnerTicket == 'No') {
	                                		$spouseDinnerTicket2 = 'checked';
	                                	}
                                	?>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input spouseDnrTckt" type="radio" name="spouseDinnerTicket" id="spouseDinnerTicket1" value="Yes" <?php echo $spouseDinnerTicket?>>
                                        <label class="form-check-label" for="spouseDinnerTicket1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input spouseDnrTckt" type="radio" name="spouseDinnerTicket" id="spouseDinnerTicket2" value="No" <?php echo $spouseDinnerTicket2?>>
                                        <label class="form-check-label" for="spouseDinnerTicket2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Spouse/Guest's First Name</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="spouseFirstName" placeholder="" class="form-control" type="text" value="<?php echo $users->spouseFirstName?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Spouse/Guest's Last Name</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="spouseLastName" placeholder="" class="form-control" type="text" value="<?php echo $users->spouseLastName?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Friday Breakfast <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="fridayBreakfast" class="yit-nice-select width-full form-control">
                                        <option value="<?php echo $users->fridayBreakfast?>"><?php echo $users->fridayBreakfast?></option>
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
                                    <input name="dietaryRestrictions" placeholder="If Applicable" class="form-control" type="text" value="<?php echo $users->dietaryRestrictions?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Payment Method <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="paymentMethod" class="yit-nice-select width-full form-control" required>
                                        <option value="<?php echo $users->paymentMethod?>"><?php echo $users->paymentMethod?></option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Payment Status <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="paymentStatus" class="yit-nice-select width-full form-control" required>
                                        <option value="<?php echo $users->paymentStatus?>"><?php echo $users->paymentStatus?></option>
                                        <option value="pending">pending</option>
                                        <option value="paid">paid</option>
                                        <option value="none">none</option>
                                        <option value="canceled">canceled</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Amount to be Paid</label>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="amount" class="form-control" type="number" required value="<?php echo $users->amount?>">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </div>
                <!-- /hover rows -->
            </div>
        </div>
    </form>
    <!-- /dashboard content -->
</div>
<!-- /content area