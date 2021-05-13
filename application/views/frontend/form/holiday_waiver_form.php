<section class="space-grey-light-color-bg pt-2">
    <div class="container">
        <div class="row">

            <div class="col-md-8 m-auto">
                <!-- Logins Form -->
                <div class="yit-cotact-form common-form white-color-bg pad-15-all img-shadow border-top-only border-width-4 pink-color-border input-style-1">
                    <form action="<?php echo base_url('/school-holiday-program-waiver-form') ?>" method="post">
                        <div class="form-group">
                            <h6 class="text-center">Waiver Form </h6>
                            <p class="text-center">School Holiday Programs</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <input name="parentFirstName" placeholder="Parents First Name" class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <input name="parentLastName" placeholder="Parents Last Name" class="form-control" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <input name="parentEmail" placeholder="Parents Email" class="form-control" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group control-group">
                                    <input name="participantFullName" placeholder="Participants Full Name" class="form-control" type="text" required>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group control-group">
                                    <input name="teacherEmail" placeholder="Teacher's Email" class="form-control" type="email" required>
                                </div>
                            </div>

                            <div class="col-md-12">.
                                <div class="form-group">
                                    <label>What school does your child attend? *</label>
                                    <select name="schoolAttented" class="yit-nice-select width-full form-control" required>
                                        <option value="Balgowlah North Public School" class="Fbuif">Balgowlah North Public School</option>
                                        <option value="Manly West" class="Fbuif">Manly West</option>
                                        <option value="Dee Why Public School" class="Fbuif">Dee Why Public School</option>
                                        <option value="Woonona East Public School" class="Fbuif">Woonona East Public School</option>
                                        <option value="Terrey Hills Public School" class="Fbuif">Terrey Hills Public School</option>
                                        <option value="none of the above" class="Fbuif">none of the above</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">.
                                <div class="form-group">
                                    <label>Which program is your child participating in? *</label>
                                    <select name="programParticipated" class="yit-nice-select width-full form-control" required>
                                        <option value="July school holidays" class="Fbuif">July school holidays</option>
                                        <option value="October school holiday" class="Fbuif">October school holiday</option>
                                        <option value="December school holidays" class="Fbuif">December school holidays</option>
                                        <option value="January school holidays" class="Fbuif">January school holidays</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">.
                                <div class="form-group">
                                    <label>What is your childs swimming ability? *</label>
                                    <select name="swimmingAbility" class="yit-nice-select width-full form-control" required>
                                        <option value="Good - can swim 200 metres confirdently" class="Fbuif">Good - can swim 200 metres confirdently</option>
                                        <option value="Average - can swim 50 metres confidently" class="Fbuif">Average - can swim 50 metres confidently</option>
                                        <option value="Poor - has not much swimming ability if any" class="Fbuif">Poor - has not much swimming ability if any</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group control-group">
                                    <label>Does your child have any medical conditions, disabilities or illnesses. If yes, please specify below. *</label>
                                    <textarea name="medicalCondition" id="medicalCondition" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group control-group">
                                    <label>Is your child currently on any medication? If yes, please specify below. *</label>
                                    <textarea name="currentMedication" id="currentMedication" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group control-group ml-4 mr-4">
                                    <input type="checkbox" class="form-check-input" id="confirmation" required>
                                    <label for="confirmation">By clicking here I acknowledge the dangers of participating in surf and ocean based training and related courses with SEA Australia and allow SEA Australia to contact us with regards to their child.</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="btn-submit" class="btn btn-block control-group" value="Submit" type="submit">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>