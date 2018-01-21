<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD SALES TAX CODE
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
                    <a href="<?=base_url();?>price_list_c">Sales Tax Code</a>
                </li>
                <li class="active breadcrumb-item">Add Sales Tax Code</li>
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
            <div class="card-header bg-success">Add Sales Tax Code</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post" action="<?=base_url().$post_url;?>">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Sales Tax Code </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-code"></i>
                                                </span>
                                                <input type="text" maxlength="3" class="form-control" name="nama" value="<?=$dt->CODE_NAMA;?>" placeholder="character"> &nbsp &nbsp (maximum 3 character)
                                            </div>
                                        </div>
                                    </div>

                                   

                                    
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3" >
                                            <label for="name4" class=" col-form-label">Description</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <textarea type="text" class="form-control" name="description" placeholder="Hours...."><?=$dt->DESCRIPTION;?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </fieldset>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group row">
                                            <div class="col-lg-6 col-xl-12 text-lg-right">
                                                <button type="submit" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                        <i class="fa fa-save"></i>
                                                    </span>
                                                            Simpan
                                                </button>
                                                 <a href="<?=base_url();?>sales_tax_code_c">
                                                <button type="button" class="btn btn-labeled btn-primary">
                                                    <span class="btn-label">
                                                        <i class="fa fa-times"></i>
                                                    </span>
                                                            Batal
                                                </button>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div>       
                    </div>      
                </div>
                                                        
            </div>    
        </div> 
    </div>
</div>