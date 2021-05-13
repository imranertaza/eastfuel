<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?php echo $title; ?></span> - Price Scheduling</h4>
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
                <a href="<?php echo base_url('/')  ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <span class="breadcrumb-item active"><?php echo $title ?></span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="<?php echo base_url('admin/page_edit/' . $page->uri) ?>" target="_blank" class="breadcrumb-elements-item">
                    <i class="icon-pencil7 mr-2"></i>
                    Edit Page
                </a>
                <a href="<?php echo base_url('property/' . $page->uri) ?>" target="_blank" class="breadcrumb-elements-item">
                    <i class="icon-display4 mr-2"></i>
                    View Page
                </a>
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
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('admin/price_scheduling/' . $page->uri); ?>" class="page_form" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Date (From)</label>
                                    <input type="date" name="date_starting" class="form-control pickadate" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Date (To)</label>
                                    <input type="date" name="date_end" class="form-control pickadate" required>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Price Per Night (AUD)</label>
                                    <input type="number" name="ppn" class="form-control" placeholder="Price Per Night" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Additional Cost Per Person (AUD)</label>
                                    <input type="number" name="gpn" class="form-control" placeholder="Price Per Night" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Cost Per child (AUD)</label>
                                    <input type="number" name="cpn" class="form-control" placeholder="Price Per Night" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Service Fee (AUD)</label>
                                    <input type="number" name="service_fee" class="form-control" placeholder="Service Fee" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Cleaning Fee (AUD)</label>
                                    <input type="number" name="cleaning_fee" class="form-control" placeholder="Cleaning Fee" required>
                                </div>
                            </div>

                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Save <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /hover rows -->



            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Scheduled List</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Date</th>
                                <th>PPN</th>
                                <th>GPN</th>
                                <th>CPN</th>
                                <th>Service Fee</th>
                                <th>Cleaning Fee</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                            foreach ($schedulings as $item) {
                                if ($item->status == 1) {
                                    $i++; ?>
                                    <tr data-slider_id="<?php echo $item->pricing_id; ?>">
                                        <td width="10%"><?php echo $i; ?></td>
                                        <td><?php echo  date("d-m-Y", strtotime($item->date_starting))  . ' to ' .   date("d-m-Y", strtotime($item->date_end)); ?></td>
                                        <td><?php echo $item->ppn; ?></td>
                                        <td><?php echo $item->gpn; ?></td>
                                        <td><?php echo $item->cpn; ?></td>
                                        <td><?php echo $item->service_fee; ?></td>
                                        <td><?php echo $item->cleaning_fee; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/price_scheduling_delete/' . $page->uri . '/' . $item->pricing_id); ?>" class="btn bg-danger-400 btn-float image_delete" title="Disable"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>

                    <div class="mt-4">
                        <p>PPR = Price Per Night</p>
                        <p>GPR = Guest Per Person Per Night</p>
                        <p>CPR = Children Per child Per Night</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>