<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Study Fun For Kids</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <?php $this->load->view('Member/sidebar'); ?>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <!-- START X-NAVIGATION VERTICAL -->
        <?php $this->load->view('Member/header'); ?>
        <!-- END MESSAGES -->
        <!-- TASKS -->

        <!-- END X-NAVIGATION VERTICAL -->
        <ul class="breadcrumb">
        </ul>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <?php $this->load->view($content)?>
        </div>


        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url();?>assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url();?>assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/fileinput/fileinput.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tableexport/jspdf/libs/base64.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/settings.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->


</body>
</html>



<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if you want to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="<?php echo site_url('main_controller/logout');?>" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        var link = target.src ? target.parentNode : target;
        var options = {index: link, event: event,onclosed: function(){
            setTimeout(function(){
                $("body").css("overflow","");
            },200);
        }};
        var links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>