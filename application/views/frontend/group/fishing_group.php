<section class="webp-app-about" id="about">
    <div class="container">
        <!-- /Service List BOC -->
        <div class="light-grey-color-bg text-center mt-20">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h4 class="font-weight-bold">Golf Group</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($groups as $group) {  ?>
                    <div class="col-xl-3 col-lg-3 col-md-3 p-4">
                        <div class="white-color-bg">
                            <h6 class="mb-10 font-xxsmall"><?php echo "Group " . $group->category; ?></h6>
                            <hr class="width-20 height-1">
                            <div class="" data-group-id="<?php echo $group->group_id; ?>">
                                <?php
                                $attendee_1 = $this->CommonModel->table_info('nso_forms', 'form_id', $group->member_1);
                                $attendee_2 = $this->CommonModel->table_info('nso_forms', 'form_id', $group->member_2);
                                $attendee_3 = $this->CommonModel->table_info('nso_forms', 'form_id', $group->member_3);
                                $attendee_4 = $this->CommonModel->table_info('nso_forms', 'form_id', $group->member_4);

                                attendee_item($attendee_1, 'member_1', $attendees);
                                attendee_item($attendee_2, 'member_4', $attendees);
                                attendee_item($attendee_3, 'member_3', $attendees);
                                attendee_item($attendee_4, 'member_2', $attendees);

                                ?>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- /Service List EOC -->
    </div>
</section>

<?php
function attendee_item($attendee, $attendee_number, $attendeelist)
{
    if (!empty($attendee)) { ?>
        <input type="email" class="form-control" value="<?php echo $attendee->firstName . ' '  . $attendee->lastName  ?>" disabled>
    <?php       } else { ?>
        <div class="form-group control-group">
            <select data-member-id="<?php echo $attendee_number;  ?>" class="yit-nice-select width-full form-control">
                <option value="">Select Attendee</option>
                <?php foreach ($attendeelist as $item) {  ?>
                    <option value=""><?php echo $item->firstName . ' '  . $item->lastName  ?></option>
                <?php } ?>
            </select>
        </div>

<?php     }
}
?>