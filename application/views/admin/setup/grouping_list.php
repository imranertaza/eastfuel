<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Grouping</span> - List</h4>
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
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Grouping</a>
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
                            <th>#</th>
                            <th>Reg.At</th>
                            <th>Event</th>
                            <th>Reg.ID</th>
                            <th>Registerd Name</th>
                            <th>Partner ID</th>
                            <th>Partner Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($groups as $item) {
                            $i++;
                            $user = $this->CommonModel->table_info('nso_forms', 'form_id', $item->formId);
                            $partner = $this->CommonModel->table_info('nso_forms', 'form_id', $item->partner_id);


                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo  date("d-m-Y H:i:s", strtotime($item->created_at)); ?></td>
                                <td><?php echo $item->group_type; ?></td>
                                <td><?php echo $item->formId; ?></td>
                                <td><?php echo $user->firstName . ' ' . $user->lastName; ?></td>
                                <td><?php echo $item->partner_id; ?></td>
                                <td><?php echo $partner->firstName . ' ' . $partner->lastName; ?></td>
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