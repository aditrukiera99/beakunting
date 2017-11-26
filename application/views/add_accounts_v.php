<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                TAMBAH ACCOUNTS
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
                <li class="active breadcrumb-item">Tambah Accounts</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">Tambah Accounts</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal">
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
                                                <select id="gender4" class="form-control">
                                                    <option>Choose Type....</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
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
                                                <input type="text" class="form-control" name="" placeholder="">
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
                                                <input type="text" class="form-control" name="" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Subaccount Of</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                                <select id="gender4" class="form-control">
                                                    <option>Choose Subaccount</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                <span class="input-group-addon">
                                                    <a href="<?=base_url();?>add_um_c"><i class="fa fa-plus-circle"></i></a>
                                                </span>
                                            </div>
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
                                                    <textarea class="form-control" type="text" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Note</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                    <input type="text" id="password4" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Tax Line Mapping<label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                                <select id="gender4" class="form-control">
                                                    <option>Choose Tax Code</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                <span class="input-group-addon">
                                                    <a href="<?=base_url();?>add_um_c"><i class="fa fa-plus-circle"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>       
                    </div>      
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group row">
                            <div class="col-lg-6 col-xl-12 text-lg-right">
                                <button type="button" class="btn btn-labeled btn-success">
                                    <span class="btn-label">
                                        <i class="fa fa-save"></i>
                                    </span>
                                            Simpan
                                </button>
                                <button type="button" class="btn btn-labeled btn-primary">
                                    <span class="btn-label">
                                        <i class="fa fa-times"></i>
                                    </span>
                                            Batal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>                                         
            </div>    
        </div> 
    </div>
</div>