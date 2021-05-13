<section class="webp-app-about pt-0" id="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h2>Dashboard</h2>
                    <hr class="style-three">
                </div>
            </div>
        </div>

        <div class="yit-feature style-10 mt-40 text-center">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="yit-feature-item custom-color-border-blue white-color-bg">
                        <i class="icon-profile-male etline-icon custom-color-bg-blue white-color-text icon-medium mb-20 icon-circle"></i>
                        <h6 class="mb-10 font-xxsmall"><?php echo $user->firstName . " " . $user->lastName; ?></h6>
                        <hr class="width-30 height-2 custom-color-bg-blue">
                        <p>Email: <?php echo $user->email; ?> <br>Phone: <?php echo $user->phone; ?></p>
                        <a title="Logout" class="mb-10 btn btn-block btn-rounded custom-color-bg-blue " href="<?php echo base_url('/logout'); ?>">Logout</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Registered Users under <?php echo $user->confEvent; ?> event</h6>
                    <form action="<?php echo base_url('create_group'); ?>" method="POST">
                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-12">
                                <div class="form-group control-group">
                                    <select name="partner_id" class="yit-nice-select width-full form-control" required>
                                        <option value="">Select People</option>
                                        <?php foreach ($groupUser as $singleUser) {
                                            if ($user->form_id != $singleUser->form_id) {  ?>
                                                <option value="<?php echo $singleUser->form_id; ?>"><?php echo $singleUser->firstName . " " . $singleUser->lastName; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <input name="btn-submit" class="btn btn-block control-group custom-color-bg-blue" value="Make A Group" type="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="yit-feature-item custom-color-border-blue white-color-bg">
                        <h5 class="text-center">My Group</h5>
                        <div class="yit-table mt-40 table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mygroup as $item) {
                                        $itemUser = $this->CommonModel->table_info('nso_forms', 'form_id', $item->partner_id);
                                    ?>
                                        <tr>
                                            <td><?php echo $item->group_type;  ?></td>
                                            <td><?php echo $itemUser->firstName . ' ' . $itemUser->lastName;  ?></td>
                                            <td><?php echo $itemUser->phone;  ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>