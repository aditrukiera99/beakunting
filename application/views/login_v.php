<!DOCTYPE html>
<html>
<head>
    <title>KnM Accounting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/components.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/custom.css"/>
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/login.css"/>
</head>
<body>

<div class="container" >
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                    <div class="login_logo login_border_radius1">
                        <h1 class="text-center">
                            <span class="text-white"> KnM Accounting
                                
                        </h1>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form action="<?=base_url();?>login_c" method="post" class="login_validator">
                            <?PHP 
                            if($msg == 1){
                                echo "<center>";
                                echo "<p style='color:red;'>Wrong username / password</p>";
                                echo "</center>";
                            }
                            ?>
                            <div class="form-group">
                                <label for="email" class="col-form-label"> Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon input_email"><i
                                            class="fa fa-users text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-md" id="" name="username" placeholder="username" required="">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/tether.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="<?=base_url();?>assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/login.js"></script>
</body>

</html>