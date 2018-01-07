<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-plus"></i>
                Add New Employee
            </h4>
        </div>
        <div class="col-sm-8">
            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="fa fa-home" data-pack="default" data-tags=""></i>
                        Dashboard
                    </a> 
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Employee</a>
                </li>
                <li class="active breadcrumb-item">Add New Employee</li>
            </ol>
        </div>
        </div>
    </div>
</header>

<br>

<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New employee data has been saved.
</div>
<?PHP } ?>

<form method="post" action="<?=base_url();?>add_employee_c">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block cards_section_margin">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-2 col-xl-2">
                                <label for="name4" class=" col-form-label">Employee Name</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name"  required><input type="text" name="last_name" class="form-control" placeholder="Last Name"  required>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <ul class="nav nav-inline view_user_nav_padding">
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link active" href="#tab1" id="home-tab"
                           data-toggle="tab" aria-expanded="true">Personal</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Address & Contact</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Additional Info</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab4"  id="followers" data-toggle="tab">Employment Info</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Worker's Comp</a>
                    </li>
                    
                </ul>

                <div id="clothing-nav-content" class="tab-content m-t-10">
                    <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                        <fieldset>
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Full Name</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                                                    <input type="text" name="full_name" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Gender</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                        <select class="form-control" name="gender">
                                                            <option></option>
                                                            <option value="pria">Pria</option>
                                                            <option value="wanita">Wanita</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Date of Birth</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                    <input type="date" name="date_birth" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Status</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                        <select class="form-control" name="status">
                                                            <option></option>
                                                            <option value="menikah">Menikah</option>
                                                            <option value="single">Single</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                            </div>                            
                        </fieldset>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                        <div class="card_nav_body_padding">
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Address</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <textarea name="address" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">City</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                                <input type="text" name="kota" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Mobile Phone</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                            <input type="text" name="main_phone" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Phone</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                            <input type="text" name="phone" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Email</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                            <input type="email" name="email" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">ZIP Code</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                            <input type="text" name="zip_code" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>  

                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                        <div class="card_nav_body_padding follower_images">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-1">
                                            <label for="name4" class=" col-form-label">Account No</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input type="text" name="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-1">
                                            <label for="name4" class=" col-form-label">Billing Rate</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-money"></i>
                                                </span>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option>Commercial</option>
                                                    <option>Industrial</option>
                                                </select>
                                                <span class="input-group-addon">
                                                    <a href="<?=base_url();?>add_price_c"><i class="fa fa-plus-circle"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                        <div class="card_nav_body_padding follower_images">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-1">
                                            <label for="name4" class=" col-form-label">Vendor Type</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-users"></i>
                                                </span>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option>Commercial</option>
                                                    <option>Industrial</option>
                                                </select>
                                                <span class="input-group-addon">
                                                    <a href="<?=base_url();?>add_price_c"><i class="fa fa-plus-circle"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-1">
                                            <label for="name4" class=" col-form-label">Ref</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-users"></i>
                                                </span>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option>Commercial</option>
                                                    <option>Industrial</option>
                                                </select>
                                                <span class="input-group-addon">
                                                    <a href="<?=base_url();?>add_price_c"><i class="fa fa-plus-circle"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <input type="submit" class="btn btn-success btn-block" value="Save Vendor" name="save" />
    </div>
</div>

</form>