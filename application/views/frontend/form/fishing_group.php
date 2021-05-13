<link href="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<section class="pt-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center mb-20">
                    <form action="<?php echo base_url('/group/golf') ?>" method="post">
                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-4 font-weight-bold">Group Title <span class="text-danger">*</span></div>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <input name="grouptitle" placeholder="Enter name of your group" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-md-center">
                            <div class="col-md-4 font-weight-bold">Attendees <span class="text-danger">*</span></div>
                            <div class="col-md-8">
                                <div class="form-group control-group">
                                    <select name="attendees[]" class="form-control cust_multiselect_page"  multiple="multiple" required>
                                        <option value="">Select Attendees</option>
                                        <?php foreach ($attendees as $attendee) {  ?>
                                            <option value="<?php echo $attendee->form_id; ?>"><?php echo $attendee->firstName . ' ' . $attendee->lastName;  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="btn-submit" class="btn btn-block control-group custom-color-bg-blue" value="Make Group" type="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section  class="space-grey-light-color-bg pt-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center mb-20">
                    <h3> List of groups in Fishing Tournament </h3>

                    <div class="yit-table style-2 mt-40 table-responsive">
                        <table class="table table-bordered img-shadow white-color-bg">
                            <thead>
                                <tr>
                                    <th>Group ID </th>
                                    <th>Group Title </th>
                                    <th>Attendees</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($groups as $group) {  ?>
                                    <tr>
                                        <td><?php echo $group->group_slug; ?></td>
                                        <td><?php echo $group->group_title; ?></td>
                                        <td>
                                            <?php
                                            $members = json_decode($group->group_members);
                                            foreach ($members as $member) {
                                                $member_info = $this->CommonModel->table_info('nso_forms', 'form_id', $member);
                                                echo $member_info->firstName . ' ' . $member_info->lastName . ' (' . $member_info->organization . ') </br>';
                                            } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function(){
        $('.cust_multiselect_page').select2();
    });
</script>