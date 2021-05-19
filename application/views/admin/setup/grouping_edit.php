
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?php echo $title; ?></span></h4>
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
                <a href="<?php echo base_url('admin/registereduser') ?>" class="breadcrumb-elements-item">
                    <i class="icon-add mr-2"></i>
                    Grouping List
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
    <!-- Dashboard content -->
    <form action="<?php echo base_url('admin/edit_grouping/'.$users->group_id); ?>" enctype="multipart/form-data" method="POST">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <!-- Hover rows -->
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Group Type
                                <!-- <span class="text-danger">*</span> -->
                                </label>
                            <div class="col-md-8">
                                <input name="groupType" placeholder="Enter Group Type" class="form-control" type="text" value="<?php echo $users->group_type?>" required>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-form-label col-md-4">Form ID <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="formId" placeholder="Enter Form ID" class="form-control" type="text"  value="<?php echo $users->formid?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Your 1st name as you wish it to appear on your badge <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="partnerId" placeholder="Enter Partner ID" class="form-control" value="<?php echo $users->partner_id?>" type="text" required>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Group Title</label>
                            <div class="col-md-8">
                                <input name="groupTitle" placeholder="Enter your group title" class="form-control" type="text" value="<?php echo $users->group_title?>" >
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-form-label col-md-4">Organization <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input name="organization" placeholder="Enter Your Organization" class="form-control" type="text" value="<?php echo $users->organization?>" required>
                            </div>
                        </div> -->
                        
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </div>
                <!-- /hover rows -->
            </div>
        </div>
    </form>
    <!-- /dashboard content -->
</div>
<!-- /content area