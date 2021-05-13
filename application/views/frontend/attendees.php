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
                                <?php if($extendedData == 0 ) {  ?>
                                <th>City</th>
                                <th>State/Province</th>
                                <?php } if($extendedData == 1 ) {  ?>
                                <th>Group</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($attendees as $item) {  ?>
                                <tr>
                                    <td><?php echo $item->badgeName .' '.$item->lastName ;  ?></td>
                                    <td><?php echo $item->organization; ?></td>
                                    <?php if($extendedData == 0 ) {  ?>
                                    <td><?php echo $item->city; ?></td>
                                    <td><?php echo $item->state; ?></td>
                                    <?php  } if($extendedData == 1 ) {  ?>
                                    <td> - </td>
                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>