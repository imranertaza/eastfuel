<section class="pt-0">
    <div class="container">
        <!-- User Form -->

        <div class="yit-cotact-form common-form mt-40 input-style-1">
            <div class="text-center">
                <h1 class="font-weight-bold">Make Payment</h1>
                <hr class="style-three  mt-0 mb-4">
            </div>
            <form action="<?php echo base_url('purchase'); ?>" method="POST">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="row justify-content-end">
                            <div class="col-12">
                                <div class="form-group control-group">
                                    <input name="cardNumber" placeholder="Card Number" class="form-control" type="text" required>
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
                                    <input name="cvv" placeholder="Card Code(CVV)" class="form-control" type="number" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row  justify-content-end">
                                    <div class="col-md-6">
                                        <div class="portfolio-about style-1 white-color-bg img-shadow-dark pad-20-all border-top-only pink-color-border border-width-5 mb-20">
                                            <ul class="yit-listing-block">
                                                <li class="d-flex">
                                                    <i class="ti-list mt-1"></i>
                                                    <span class="ml-2"> Amount to be Paid </span>
                                                    <span class="mx-auto"><?php echo  $user->amount . " USD";  ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3 col-lg-3 col-12">
                                <div class="form-group">
                                    <input name="btn-submit" class="btn btn-radius btn-block control-group" value="Pay Now" type="submit">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>