
<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Edit Order</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Edit Orders</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/order_detail/update" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $order_detail['id'] ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Edit Order</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Topic<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="topic" type="text" value="<?php echo $order_detail['topic'] ?>" id="example-text-input" placeholder="" required="">
                                </div>

                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Type of document<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="doctype" type="text" value="<?php echo $order_detail['doctype'] ?>" id="example-text-input" placeholder="" required="">
                                </div>

                            </div>
                           
                             <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">No of Pages<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="no_of_pages" type="text" value="" id="example-text-input" placeholder="">
                                </div>

                            </div>
                           
<?php if ($this->session->flashdata('error')): ?>
                <a class="btn btn-danger block full-width m-b"><?php echo $this->session->flashdata('error'); ?></a>

<?php endif ?>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
