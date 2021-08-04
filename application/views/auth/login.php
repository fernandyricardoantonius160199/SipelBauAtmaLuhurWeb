<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ISB | BAU | Pelaporan Kerusakan Sarana Prasarana | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

  <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin | </b>BAU</a>
		<br><font size=2px><a href="../../index2.html"><b>A</b>plikasi<b> P</b>elaporan</a><b> K</b>erusakan</a><b> S</b>arana<b> D</b>an</a><b> P</b>rasarana</a><b> M</b>ahasiswa</a></a></font>
      </div>
	  
      <!-- /.login-logo -->
      <div class="login-box-body">
	  <center> 
	  <img src="<?php echo base_url(); ?>assets/dist/img/icon_bau_new.png" width="200px" height="180px" class="user-image" alt="User Image"> </center>
        <p class="login-box-msg">Silahkan, login terlebih dahulu</p>

        <?php echo form_open('auth/check_login'); ?>

            <div class="form-group has-feedback">
              <input type="text" name="user_admin" class="form-control" placeholder="Username">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
			          <p><?php echo form_error('user_admin'); ?></p>
            </div>

            <div class="form-group has-feedback">
              <input type="password" name="pass_admin" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			          <p><?php echo form_error('pass_admin'); ?></p>
            </div>

            <div class="row">

              <div class="col-xs-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Login</button>
				 <p>
              </div>
			   <p><?php echo $this->session->flashdata('pesan'); ?></p>
              <!-- /.col -->
            </div>
        </form>

      </div>
      <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
