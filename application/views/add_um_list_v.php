<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD UM List
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
                    <a href="<?=base_url();?>price_list_c">UM List</a>
                </li>
                <li class="active breadcrumb-item">Add UM List</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">Add UM List</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Name </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-code"></i>
                                                </span>
                                                <input type="text" class="form-control" name="" placeholder="character">
                                            </div>
                                        </div>
                                    </div>

                                   

                                    
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3" >
                                            <label for="name4" class=" col-form-label">Subclass of</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="" class="form-control">
                                                    <option>None..</option>
                                                    <option>Remodal</option>
                                                    <option>Overhead</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>       
                    </div>      
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <div class="col-lg-12 col-xl-12 text-lg-right">
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