<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                RECONCILE
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
                    <a href="<?=base_url();?>items_c">Accounts</a>
                </li>
                <li class="active breadcrumb-item">Reconcile</li>
            </ol>
        </div>
        </div>
    </div>
</header>

<br>

<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New accounts has been saved.
</div>
<?PHP } ?>

<form class="form-horizontal" method="post" action="<?=base_url();?>add_accounts_c">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">                           
                            <br>
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-2 ">
                                        <label for="name4" class=" col-form-label">Accounts</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                            <select class="form-control chzn-select" name="anak_dari">
                                                <option value="">None</option>
                                                <?PHP foreach ($data_akun as $key => $row) { ?>
                                                    <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                <?PHP } ?>
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-2 ">
                                        <label for="name4" class=" col-form-label">Statement Date</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-suitcase"></i>
                                            </span>
                                            <input type="date" class="form-control" name="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-2 ">
                                        <label for="name4" class=" col-form-label">Beginning Balance</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        
                                        <div class="input-group">
                                            <label for="name4" class=" col-form-label">71,452.00</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-2 ">
                                        <label for="name4" class=" col-form-label">Ending Balance</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-money"></i>
                                            </span>
                                            <input type="text" class="form-control" name="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Enter any service charge or interest earned</label>
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Service Charges</h5>
                                            <form>
                                                <input class="form-control" placeholder="0.00" type="text">
                                            </form>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Date</h5>
                                            <form>
                                                <input class="form-control" placeholder="Focussed field" type="date">
                                            </form>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Account</h5>
                                            <form>
                                                <div class="input-group">
                                                    <select class="form-control chzn-select" name="anak_dari">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_akun as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Class</h5>
                                            <form>
                                                <div class="input-group">
                                                    <select class="form-control chzn-select" name="anak_dari">
                                                        <option value="">None</option>
                                                        <option value="Remodel">Remodel</option>
                                                        <option value="Overhead">Overhead</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Interest Earned</h5>
                                            <form>
                                                <input class="form-control" placeholder="0.00" type="text">
                                            </form>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Date</h5>
                                            <form>
                                                <input class="form-control" placeholder="Focussed field" type="date">
                                            </form>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Account</h5>
                                            <form>
                                                <div class="input-group">
                                                    <select class="form-control chzn-select" name="anak_dari">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_akun as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Class</h5>
                                            <form>
                                                <div class="input-group">
                                                    <select class="form-control chzn-select" name="anak_dari">
                                                        <option value="">None</option>
                                                        <option value="Remodel">Remodel</option>
                                                        <option value="Overhead">Overhead</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                            </fieldset>                            
                        </div>       
                    </div>      
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group row">
                            <div class="col-lg-6 col-xl-12 text-lg-right">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i> Save Account
                                </button>

                                <a href="<?=base_url();?>accounts_c" class="btn btn-primary">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                                         
            </div>    
        </div> 
    </div>
</div>
</form>