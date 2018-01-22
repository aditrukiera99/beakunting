<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New customer data has been saved.
</div>
<?PHP } ?>

<form method="post" action="<?=base_url();?>add_customer_c">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success"><a href="<?=base_url();?>customer_c" style="color: #FFF; padding-right: 10px;"><i class="fa fa-arrow-left"></i></a> ADD NEW CUSTOMER</div>
            <div class="card-block cards_section_margin">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-2 col-xl-2">
                                <label for="name4" class=" col-form-label">Customer Name</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                    <input type="text" name="cust_name" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-xl-2">
                                <label for="name4" class=" col-form-label">Opening Balance</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                    <input type="text" name="cust_balance" class="form-control" placeholder="" onkeyup="FormatCurrency(this);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-inline view_user_nav_padding">
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link active" href="#tab1" id="home-tab"
                           data-toggle="tab" aria-expanded="true">Address Info</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Payment Setting</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">Sales Tax Setting</a>
                    </li>
                    <!-- <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab4"  id="followers" data-toggle="tab">Additional Info</a>
                    </li>
                    <li class="nav-item card_nav_hover">
                        <a class="nav-link" href="#tab5"  id="followers" data-toggle="tab">Job Info</a>
                    </li> -->
                </ul>

                <div id="clothing-nav-content" class="tab-content m-t-10">
                    <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                        <fieldset>
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Company</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                                                    <input type="text" name="cust_company" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Full Name</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-home"></i>
                                                    </span>
                                                        <input type="text" name="cust_fullname" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Job Title</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                                                    <input type="text" name="cust_job_title" class="form-control" placeholder="">
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
                                                        <i class="fa fa-phone-square"></i>
                                                    </span>
                                                    <input type="text" name="cust_main_phone" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Mobile Phone</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone-square"></i>
                                                    </span>
                                                    <input type="text" name="cust_mobile" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 col-xl-3">
                                                <label for="name4" class=" col-form-label">Fax</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fax"></i>
                                                    </span>
                                                    <input type="text" name="cust_fax" class="form-control" placeholder="">
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
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="text" name="cust_email" class="form-control" placeholder="">
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
                                                        <i class="fa fa-bookmark"></i>
                                                    </span>
                                                    <input type="text" name="cust_website" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-3">
                                                <label for="name4" class=" col-form-label">Bill To</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-home"></i>
                                                    </span>
                                                    <textarea class="form-control" rows="4" name="cust_bill_to"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-3">
                                                <label for="name4" class=" col-form-label">Ship To</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-home"></i>
                                                    </span>
                                                    <textarea class="form-control" rows="4" name="cust_ship_to"></textarea>
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
                                        <label for="name4" class=" col-form-label">Account No</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-users"></i>
                                            </span>
                                            <input type="text" name="acc_no" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Payment Terms</label>
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
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-4">
                                        <label for="name4" class=" col-form-label">Preferred Payment Method</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                            <input type="text" name="acc_method" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>                                            
                                </div>
                                <div class="col-lg-6" style="border: 2px solid;">
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-xl-12">
                                            <center>
                                            <label for="name4" class=" col-form-label"><h4>Credit Card Information</h4></label>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3">
                                            <label for="name4" class=" col-form-label">Credit Card No</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-credit-card"></i>
                                                </span>
                                                <input type="text" name="cc_no" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3">
                                            <label for="name4" class=" col-form-label">Exp Date</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="input-group">
                                                <input type="text" name="cc_exp_month" class="form-control" placeholder=""> 
                                                &nbsp  / &nbsp 
                                                <input type="text" name="cc_exp_year" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3">
                                            <label for="name4" class=" col-form-label">Name On Card</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input type="text" name="cc_name" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3">
                                            <label for="name4" class=" col-form-label">Addres</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-home"></i>
                                                </span>
                                                <input type="text" name="cc_address" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3">
                                            <label for="name4" class=" col-form-label">Zip / Postal Code</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input type="text" name="cc_zip" class="form-control" placeholder="">
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
                                            <label for="name4" class=" col-form-label">Tax Code</label>
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
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-1">
                                            <label for="name4" class=" col-form-label">Tax Item</label>
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
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-1">
                                            <label for="name4" class=" col-form-label">Resale No</label>
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
                                            <label for="name4" class=" col-form-label">Customer Type</label>
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

                    <div role="tabpanel" class="tab-pane fade" id="tab5">
                        <div class="card_nav_body_padding follower_images">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Job Description</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-suitcase"></i>
                                                </span>
                                                <input type="text" name="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Job Type</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-suitcase"></i>
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
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Job Status</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-suitcase"></i>
                                                </span>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option>Commercial</option>
                                                    <option>Industrial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Start Date</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" name="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Projected End Date</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" name="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">End Date</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="text" name="" class="form-control" placeholder="">
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
        <input type="submit" class="btn btn-success btn-block" value="Save Customer" name="save" />
    </div>
</div>

</form>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
    $(document).keyup(function(e) {
      // if (e.keyCode === 13) $('.save').click();     // enter
      if (e.keyCode === 27) { // esc
        history.go(-1); // go back
      } 
    });
</script>