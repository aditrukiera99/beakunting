<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-plus"></i>
                Add New Lead
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
                    <a href="#">Lead</a>
                </li>
                <li class="active breadcrumb-item">Add New Lead</li>
            </ol>
        </div>
        </div>
    </div>
</header>

<br>

<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New lead data has been saved.
</div>
<?PHP } ?>

<form method="post" action="<?=base_url();?>add_lead_c">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block cards_section_margin">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-2 col-xl-2">
                                <label for="name4" class=" col-form-label">Lead Name</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    <input type="text" name="lead_name" class="form-control" placeholder=""  required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-xl-2">
                                <label for="name4" class=" col-form-label">Status</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                    <select name="status" class="form-control">
                                        <option value="Hot">Hot</option>
                                        <option value="Warm">Warm</option>
                                        <option value="Cold">Cold</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-inline view_user_nav_padding">
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link active" href="#tab1" id="home-tab"
                           data-toggle="tab" aria-expanded="true">Company</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Contact</a>
                    </li>
                </ul>

                <div id="clothing-nav-content" class="tab-content m-t-10">
                    <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                        <fieldset>
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Company Name</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                                                    <input type="text" name="lead_company" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Main Phone</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-home"></i>
                                                    </span>
                                                        <input type="text" name="main_phone" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Website</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                                                    <input type="text" name="web" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Email</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone-square"></i>
                                                    </span>
                                                    <input type="email" name="email" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Address</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone-square"></i>
                                                    </span>
                                                    <input type="text" name="addres" class="form-control" placeholder="">
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
                                        <label for="name4" class=" col-form-label">Job Title</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-users"></i>
                                            </span>
                                            <input type="text" name="job" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">First Name</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                                <input type="text" name="first_name" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                                <input type="text" name="last_name" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Work Phone</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                                <input type="text" name="acc_terms" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div><div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Mobile Phone</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                                <input type="text" name="acc_terms" class="form-control" placeholder="">
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