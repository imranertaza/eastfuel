<section class="pt-0">
    <div class="container">
        <!-- User Form -->

        <div class="yit-cotact-form common-form mt-40 input-style-1">
            <div class="text-center mb-5">
                <h1 class="font-weight-bold">Make Payment</h1>
                <hr class="style-three  mt-0 mb-4">
            </div>
            <form action="<?php echo base_url('purchase_single'); ?>" method="POST">

                <h4>User Information </h4>
                <hr class="style-five width-full">
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
                    <div class="col-md-3 font-weight-bold">Email <span class="text-danger">*</span></div>
                    <div class="col-md-7">
                        <div class="form-group control-group">
                            <input name="email" placeholder="Enter your email address" class="form-control" type="email" required>
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
                                    <input name="addressLine2" placeholder="Address Line 2" class="form-control" type="text" required>
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

                <hr class="style-five width-full">
                <h4>Payment Information </h4>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-10">
                        <div class="row justify-content-end">
                            <div class="col-8">
                                <div class="form-group control-group">
                                    <input name="cardNumber" placeholder="Card Number" class="form-control" type="text" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group control-group">
                                    <input name="cvv" placeholder="Card Code(CVV)" class="form-control" type="number" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group">
                                    <input name="expireMonth" placeholder="Expire Month (MM)" class="form-control" type="number" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group">
                                    <input name="expireYear" placeholder="Expire Year (YYYY)" class="form-control" type="number" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group control-group">
                                    <input name="amount" placeholder="Amount" class="form-control" type="number" required>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3 col-lg-3 col-12">
                                <div class="form-group">
                                    <input name="btn-submit" class="btn btn-radius btn-block control-group  custom-color-bg-blue" value="Submit" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>