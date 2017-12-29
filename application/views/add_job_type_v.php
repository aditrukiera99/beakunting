<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD JOB TYPE
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
                    <a href="<?=base_url();?>items_c">Job Type</a>
                </li>
                <li class="active breadcrumb-item">Add New Job Type</li>
            </ol>
        </div>
        </div>
    </div>
</header>

<br>

<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New job type has been saved.
</div>
<?PHP } ?>

<form class="form-horizontal" method="post" action="<?=base_url();?>add_job_type_c">
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
                                        <label for="name4" class=" col-form-label">NAME</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tag"></i>
                                            </span>
                                            <input type="text" class="form-control" name="nama" placeholder="" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-2 col-xl-2 ">
                                        <label for="name4" class=" col-form-label">Subtype Of</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                            <select class="form-control chzn-select" name="anak_dari">
                                                <option value="">None</option>
                                                <?PHP foreach ($data_job as $key => $row) { ?>
                                                    <option value="<?=$row->ID;?>"><?=$row->NAMA;?></option>
                                                <?PHP } ?>
                                            </select>
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

                                <a href="<?=base_url();?>job_type_c" class="btn btn-primary">
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