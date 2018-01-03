<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD WORKER COMP
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
                    <a href="<?=base_url();?>price_list_c">Worker Comp</a>
                </li>
                <li class="active breadcrumb-item">Add Worker Comp</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New Price has been saved.
</div>
<?PHP } ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">Add Worker Comp</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post" action="<?=base_url();?>add_worker_comp_c">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Code </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-code"></i>
                                                </span>
                                                <input type="text" class="form-control" name="codek" placeholder="character">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Description </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tasks"></i>
                                                </span>
                                                <input type="text" class="form-control" name="description" placeholder="character">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Rate </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-code"></i>
                                                </span>
                                                <input type="text" class="form-control" name="rate" placeholder="character">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Start Using Rate on </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="date" class="form-control" name="tanggal" placeholder="character">
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12 text-lg-right">
                                                <button type="submit" class="btn btn-labeled btn-success">
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
                                </fieldset>
                                
                            </form>
                        </div>       
                    </div>      
                </div>
                                                         
            </div>    
        </div> 
    </div>
</div>