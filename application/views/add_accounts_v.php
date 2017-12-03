<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD ACCOUNTS
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
                <li class="active breadcrumb-item">Add New Accounts</li>
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
                                        <label for="name4" class=" col-form-label">Type</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-suitcase"></i>
                                            </span>
                                            <select class="form-control" required name="kategori">
                                                <option value="">Choose Type....</option>
                                                <option value="Bank"> Bank </option>
                                                <option value="Accounts Receivable"> Accounts Receivable </option>
                                                <option value="Other Current Asset"> Other Current Asset </option>
                                                <option value="Fixed Asset"> Fixed Asset </option>
                                                <option value="Other Asset"> Other Asset </option>
                                                <option value="Accounts Payable"> Accounts Payable </option>
                                                <option value="Credit Card"> Credit Card </option>
                                                <option value="Other Current Liability"> Other Current Liability </option>
                                                <option value="Long Term Liability"> Long Term Liability </option>
                                                <option value="Equity"> Equity </option>
                                                <option value="Income"> Income </option>
                                                <option value="Cost of Goods Sold"> Cost of Goods Sold </option>
                                                <option value="Expense"> Expense </option>
                                                <option value="Other Income"> Other Income </option>
                                                <option value="Other Expense"> Other Expense </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-2 ">
                                        <label for="name4" class=" col-form-label">Number</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tag"></i>
                                            </span>
                                            <input type="text" class="form-control" name="kode_akun" placeholder="" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-2 ">
                                        <label for="name4" class=" col-form-label">Accounts Name</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-suitcase"></i>
                                            </span>
                                            <input type="text" class="form-control" name="nama_akun" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-2 ">
                                        <label for="name4" class=" col-form-label">Subaccount Of</label>
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
                                        <label for="name4" class=" col-form-label">Description</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                            <textarea class="form-control" type="text" rows="3" name="deskripsi"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>                            
                        </div>       
                    </div>      
                </div>
                <div class="row">
                    <div class="col-lg-8">
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