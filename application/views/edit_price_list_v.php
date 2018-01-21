
<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD PRICE LIST
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
                    <a href="<?=base_url();?>price_list_c">Price List</a>
                </li>
                <li class="active breadcrumb-item">Add Price List</li>
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
            <div class="card-header bg-success">Add Price List</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post" action="<?=base_url().$post_url;?>">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Price List Name</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                                <input type="text" class="form-control" name="nama" value="<?=$dt->NAMA_PRICE;?>" placeholder="Name.....">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Price</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-2">
                                            <input type="text" class="form-control" name="persen" value="<?=$dt->DETAILS_PRICE;?>" placeholder="">
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group row">
                                                <div class="col-lg-6 col-xl-12 text-lg-right">
                                                    <button type="submit" name="simpan" class="btn btn-labeled btn-success">
                                                        <span class="btn-label">
                                                            <i class="fa fa-save"></i>
                                                        </span>
                                                                Save
                                                    </button>
                                                    <a href="<?=base_url();?>price_list_c"><button type="button" class="btn btn-labeled btn-primary">
                                                        <span class="btn-label">
                                                            <i class="fa fa-times"></i>
                                                        </span>
                                                                Cancel
                                                    </button>
                                                </a>
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