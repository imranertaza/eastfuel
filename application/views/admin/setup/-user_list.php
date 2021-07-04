<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Registered</span> - List</h4>
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
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Registered User</a>
                <span class="breadcrumb-item active">List</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <!-- <a href="#" class="breadcrumb-elements-item" data-toggle="modal" data-target="#modal_theme_add">
                    <i class="icon-add mr-2"></i>
                    Add New
                </a> -->
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
    <!-- Dashboard content -->
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <!-- Hover rows -->
            <div class="card">
                <!-- <table class="table datatable-basic table-hover datatable-button-html5-columns"> -->
                <table class="table table-hover datatable-button-html5-columns">
                    <thead>
                        <tr>
                            <!-- <th>SL.</th> -->
                            <th>Action</th>
                            <th>Reg.ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Bedge</th>
                            <th>Email</th>
                            <th>Email(Sec)</th>
                            <th>Organization</th>
                            <th>Job Title</th>
                            <th>Address(1)</th>
                            <th>Address(2)</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Zip</th>
                            <th>Phone</th>
                            <th>Phone(Office)</th>
                            <th>Attending Conf</th>
                            <th>Company Type</th>
                            <th>Other</th>
                            <th>Emmergency Contact Name</th>
                            <th>Emmergency Contact Phone</th>
                            <th>Conf Event</th>
                            <th>Handi Cap</th>
                            <th>Rental Clubs</th>
                            <th>Message Preffered Time</th>
                            <th>Wed Wel Reception</th>
                            <th>Thursday Breakfast</th>
                            <th>Thursday Lunch</th>
                            <th>Thursday Dinner</th>
                            <th>Spouse Dinner Ticket</th>
                            <th>Spouse First Name</th>
                            <th>Spouse Last Name</th>
                            <th>Friday BreakFast</th>
                            <th>Dietry Restrictions</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Payment Status</th>
                            <th>Note</th>
                            
                            
                            <th>Reg.At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($users as $item) {
                            $i++; ?>
                            <tr>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="<?php echo base_url('admin/addnote/attendee/' . $item->form_id) ?>" class="dropdown-item" target="_blank"><i class="icon-plus-circle2"></i> Add Note</a>
                                                <a href="<?php echo base_url('admin/delete/reg_user/' . $item->form_id) ?>" onclick="return confirm('are you sure?')" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo $item->form_id; ?></td>
                                <td><?php echo $item->firstName; ?></td>
                                <td><?php echo $item->lastName; ?></td>
                                <td><?php echo $item->badgeName; ?></td>
                                <td><?php echo $item->email; ?></td>
                                <td><?php echo $item->secondaryEmail; ?></td>
                                <td><?php echo $item->organization; ?></td>
                                <td><?php echo $item->jobTitle; ?></td>
                                <td><?php echo $item->addressLine1; ?></td>
                                <td><?php echo $item->addressLine2; ?></td>
                                <td><?php echo $item->city; ?></td>
                                <td><?php echo $item->state; ?></td>
                                <td><?php echo $item->country; ?></td>
                                <td><?php echo $item->zip; ?></td>
                                <td><?php echo $item->phone; ?></td>
                                <td><?php echo $item->officePhone; ?></td>
                                <td><?php echo $item->attendingConf; ?></td>
                                <td><?php echo $item->companyType; ?></td>
                                <td><?php echo $item->other; ?></td>
                                <td><?php echo $item->emergencyContactName; ?></td>
                                <td><?php echo $item->emmergencyContactPhone; ?></td>
                                <td><?php echo $item->confEvent; ?></td>
                                <td><?php echo $item->handicap; ?></td>
                                <td><?php echo $item->rentalClubs; ?></td>
                                <td><?php echo $item->messagePreferredTime; ?></td>
                                <td><?php echo $item->wedWelReception; ?></td>
                                <td><?php echo $item->thursdayBreakfast; ?></td>
                                <td><?php echo $item->thursdayLuncheon; ?></td>
                                <td><?php echo $item->thursdayDinner; ?></td>
                                <td><?php echo $item->spouseDinnerTicket; ?></td>
                                <td><?php echo $item->spouseFirstName; ?></td>
                                <td><?php echo $item->spouseLastName; ?></td>
                                <td><?php echo $item->fridayBreakfast; ?></td>
                                <td><?php echo $item->dietaryRestrictions; ?></td>
                                <td><?php echo $item->amount; ?></td>
                                <td><?php echo ucwords($item->paymentMethod); ?></td>
                                <td><?php echo ($item->paymentMethod == "online") ? ucwords($item->paymentStatus) : "-"; ?></td>
                                <td><?php echo $item->note; ?></td>
                                <td><?php echo  date("d-m-Y H:i:s", strtotime($item->createdAt)); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /hover rows -->
        </div>
    </div>
    <!-- /dashboard content -->

</div>
<!-- /content area -->