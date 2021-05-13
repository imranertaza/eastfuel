<section class="webp-app-about" id="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h2>School Waiver List</h2>
                    <hr class="style-three">
                </div>
            </div>
        </div>

        <div class="yit-table style-2 mt-40 table-responsive">
            <table class="table table-bordered datatable">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Parent Name</th>
                        <th>Participant Name</th>
                        <th>School Attended</th>
                        <th>Year Child In</th>
                        <th>Swimming Ability</th>
                        <th>Medical Condition</th>
                        <th>Current Medication</th>
                        <th>Requested At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($list as $item) {
                        $i++; ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $item->parentFirstName . " " . $item->parentLastName; ?></td>
                            <td><?php echo $item->participantFullName; ?></td>
                            <td><?php echo $item->schoolAttented; ?></td>
                            <td><?php echo $item->yearChildIn; ?></td>
                            <td><?php echo $item->swimmingAbility; ?></td>
                            <td><?php echo $item->medicalCondition; ?></td>
                            <td><?php echo $item->currentMedication; ?></td>
                            <td><?php echo date("d-m-Y H:i", strtotime($item->createdAt)); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


    </div>
</section>