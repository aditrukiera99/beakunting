<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD TERMS
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
                    <a href="<?=base_url();?>items_c">Terms</a>
                </li>
                <li class="active breadcrumb-item">Add New Terms</li>
            </ol>
        </div>
        </div>
    </div>
</header>

<br>

<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New Terms has been saved.
</div>
<?PHP } ?>

<form class="form-horizontal" method="post" action="<?=base_url().$post_url;?>">
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
                                        <label for="name4" class=" col-form-label">SHIPMENT METHOD</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tag"></i>
                                            </span>
                                            <input type="text" class="form-control" name="nama" value="<?=$dt->NAMA;?>" placeholder="" required="">
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

                                <a href="<?=base_url();?>ship_via_c" class="btn btn-primary">
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