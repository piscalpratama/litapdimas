<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin - LITAPDIMAS</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Icon -->
        <link href="<?=base_url('assets/images/logo.png'); ?>" rel="icon" type="image/x-icon" />
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=base_url('assets/dist/css/AdminLTE.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/dist/css/skins/skin-green.min.css');?>">
    </head>
    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">
            <?php $this->load->view('admin/header-navbar');?>
            <?php $this->load->view('admin/header-sidebar');?>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Master
                        <small><i>Users</i></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-gears"></i> Master</a></li>
                        <li class="#"><i>Users</i></li>
                        <li class="active"><i>Edit Users</i></li>
                    </ol>
                </section>
                <section class="content">
                    <?php if (!empty($this->session->flashdata('type_message'))) { ?>
                        <div class="alert alert-<?=$this->session->flashdata('type_message')?> alert-dismissible text-center" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?=$this->session->flashdata('message');?>
                        </div>
                    <?php } ?>
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Master Data Users</h3>
                        </div>
                        <div class="box-body">
                            <?=form_open('Admin/Master/Users/Update/'.$tbMasterUsers->id_user)?>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Username :</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required="" value="<?=$tbMasterUsers->username?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Password :</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nama :</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="" value="<?=$tbMasterUsers->nama?>">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Level :</label>
                                    <select name="level" class="form-control">
                                        <option value="0" <?php if($tbMasterUsers->level=="0"){ echo 'selected'; } ?>>Admin</option>
                                        <option value="1" <?php if($tbMasterUsers->level=="1"){ echo 'selected'; } ?>>LP2M</option>
                                        <option value="2" <?php if($tbMasterUsers->level=="2"){ echo 'selected'; } ?>>X</option>
                                        <option value="3" <?php if($tbMasterUsers->level=="3"){ echo 'selected'; } ?>>PENELITI</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            <?=form_close()?>
                        </div>
                    </div>
                </section>
            </div>
            <?php $this->load->view('admin/footer'); ?>
        </div>

        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 2.2.3 -->
        <script src="<?=base_url('assets/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
        <!-- DataTables -->
        <script src="<?=base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
        <script src="<?=base_url('assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
        <!-- SlimScroll -->
        <script src="<?=base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
        <!-- FastClick -->
        <script src="<?=base_url('assets/plugins/fastclick/fastclick.js')?>"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url('assets/dist/js/app.min.js');?>"></script>
        <!-- page script -->
        <script>
          $(function () {
            $('#users').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true
            });
          });
        </script>
        <script type="text/javascript">
          $('#tambah_tooltip').tooltip();
        </script>
    </body>
</html>
