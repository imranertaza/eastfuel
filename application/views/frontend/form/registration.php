<section class="space-grey-light-color-bg pt-2">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <ul class="yit-common-listing listing-block font-size-custom-medium">
                    <li>Early Bird Registration Prior to June 15, 2021	$450 </li>
                    <li>Registration between June 16 & August 16, 2021	$575 </li>
                    <li>Registration as of August 17th, 2021 or On-Site*	$675 (spouse dinner ticket $200) </li>
                    <li>*based on availability</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6>Registration Form Includes:</h6>
                <ul class="yit-common-listing listing-block style-2 font-size-custom-medium">
                    <li>All Education Sessions</li>
                    <li>Wednesday Golf Tournament OR Alternate Activity</li>
                    <li>Welcome Reception</li>
                    <li>Breakfasts</li>
                    <li>Coffee Break</li>
                    <li>Lunch</li>
                    <li>Reception/Dinner</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 m-auto">
                <!-- Logins Form -->
                <div class="yit-cotact-form common-form white-color-bg pad-15-all img-shadow border-top-only border-width-4 custom-color-border-blue input-style-1">
                    <form action="<?php echo base_url('/registration') ?>" method="post">
                        <div class="form-group">
                            <p class="text-center">NEW! Please create your own password for your registration. You’ll be able to make minimal changes to your registration up until August 17, 2021.</p>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">First Name <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="firstName" placeholder="Enter Your First Name" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Last Name <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="lastName" placeholder="Enter Your last Name" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Your 1st name as you wish it to appear on your badge <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="badgeName" placeholder="Enter 1st name..." class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Email <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="email" placeholder="Enter your email address" class="form-control" type="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Secondary Email </div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="secondaryEmail" placeholder="Enter your secondary email address" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Organization <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="organization" placeholder="Enter Your Organization" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Job Title <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="jobTitle" placeholder="Enter Your Job Title" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Address <span class="text-danger">*</span></div>
                            <div class="col-md-7">
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

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Mobile <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="phone" placeholder="(201) 555-0123" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Office Mobile</div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="officePhone" placeholder="(201) 555-0123" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Is this your first time attending the conference? <span class="text-danger">*</span></div>
                            <div class="col-md-7">
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

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Company Type <span class="text-danger">*</span></div>
                            <div class="col-md-7">
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

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">if “other” selected, please specify</div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="other" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Emergency Contact Name</div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="emergencyContactName" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Emergency Contact Phone</div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="emmergencyContactPhone" placeholder="(201) 555-0123" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <hr class="style-five width-full">

                        <h4>Conference Events </h4>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Please indicate which Wednesday activity you will be attending(Select ONE)* (Please note that all have limited space and is on a 1st come, 1st confirmed basis. We apologize in advance if your 1st choice is not available) <span class="text-danger">*</span></div>
                            <div class="col-md-7">
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

                        <h6 class="mt-4">If You Chose Golf</h6>

                        <div class="row justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Your handicap</div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="handicap" placeholder="(A number from 0 to 36)" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Rental clubs are available on-site for a fee and must be reserved in advance to ensure availability. Let us know your club preference.</div>
                            <div class="col-md-7">
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

                        <h6 class="mt-4">If you Chose Massage</h6>

                        <div class="row justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Select your preferred time slot; We will get back to you confirming your appointment time.</div>
                            <div class="col-md-7">
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

                        <hr class="style-five width-full">
                        <h4>Conference Meals </h4>


                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Wednesday Welcome Reception <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <select name="wedWelReception" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Thursday Breakfast <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <select name="thursdayBreakfast" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Thursday Luncheon <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <select name="thursdayLuncheon" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Thursday Dinner <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <select name="thursdayDinner" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend">I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Spouse/Guest Dinner Ticket $90 prepaid (by August 16, 2021) or $200 on-site.</div>
                            <div class="col-md-7">
                                <label class="form-check-label">
                                    Check Box to purchase Spouse/Guest Dinner Ticket. ($ 90)
                                </label>

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

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Spouse/Guest's First Name</div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="spouseFirstName" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Spouse/Guest's Last Name</div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="spouseLastName" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Friday Breakfast <span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <select name="fridayBreakfast" class="yit-nice-select width-full form-control">
                                        <option value="">Select an option</option>
                                        <option value="I will attend">I will attend</option>
                                        <option value="I will NOT attend" selected>I will NOT attend</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Dietary Restrictions/Special Needs</div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <input name="dietaryRestrictions" placeholder="If Applicable" class="form-control" type="text">
                                </div>
                            </div>
                        </div>


                        <hr class="style-five width-full">
                        <h4>Payment Information </h4>


                        <p>Conference Registration is $450 by June 15th 2021, $575 from June 16 to August 16, 2021; and $675 thereafter.</p>

                        <p>Total Price: <span id="totalprice" class="font-weight-bold"></span> USD</p>


                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-3 font-weight-bold">Select a payment method<span class="text-danger">*</span></div>
                            <div class="col-md-7">
                                <div class="form-group control-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod1" value="offline" checked>
                                        <label class="form-check-label" for="paymentMethod1">Pay By Check</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod2" value="online">
                                        <label class="form-check-label" for="paymentMethod2">Pay by card</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" name="amount" id="amount" value="0">
                                    <input name="btn-submit" class="btn btn-block control-group custom-color-bg-blue" value="Register" type="submit">
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- (c) 2005, 2021. Authorize.Net is a registered trademark of CyberSource Corporation --> <div class="AuthorizeNetSeal float-right" > <script type="text/javascript" language="javascript">var ANS_customer_id="c616bc96-cefd-489d-b363-6297afc388b9";</script> <script type="text/javascript" language="javascript" src="//verify.authorize.net:443/anetseal/seal.js" ></script> </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {
        priceChange("No");
        console.log("ready!");
    });

    $(".spouseDnrTckt").click(function() {
        let spcDnrTcktVal = $(this).val();
        priceChange(spcDnrTcktVal);
    });


    function priceChange(spcDnrTcktVal) {
        let regFee = 450;
        let spcDinrPrice = 90;
        let total = 0;
        let spcDnrTckt = spcDnrTcktVal;

        if (spcDnrTckt == "Yes") {
            total = regFee + spcDinrPrice;
        } else {
            total = regFee;
        }

        $('#amount').val(total);
        $('#totalprice').text(total);
    }
</script>