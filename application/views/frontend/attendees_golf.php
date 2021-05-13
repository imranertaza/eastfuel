<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="yit-table style-1 mt-40 table-responsive">
                    <table class="table table-hover table-bordered table-striped data-table text-left">
                        <thead class="custom-color-bg-blue text-white">
                            <tr>
                                <th>Attendee</th>
                                <th>Company</th>
                                <th>HDCP</th>
                                <th>Clubs</th>
                                <th>Group</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($attendees as $item) {  ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo 'mailto:info@eastfuelconf.com?subject=i want to ask that I - '. $item->badgeName . ' ' .$item->lastName.' - be in a specific group'; ?>">
                                            <?php echo $item->badgeName . ' ' .$item->lastName ;  ?>
                                        </a>
                                    </td>
                                    <td><?php echo $item->organization; ?></td>
                                    <td><?php echo $item->handicap; ?></td>
                                    <td><?php echo $item->rentalClubs; ?></td>
                                    <td> - </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>