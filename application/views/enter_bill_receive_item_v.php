<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ENTER BILL FOR RECEIVE ITEM
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
                    <a href="#">BILL</a>
                </li>
                <li class="active breadcrumb-item">RECEIVE ITEM</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">Select Item Receipt</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <form class="form-horizontal">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Vendor</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-bank"></i>
                                                </span>
                                                <select id="gender4" class="form-control">
                                                    <option>Choose a vendor</option>
                                                    <?php foreach ($get_ven as $key => $row) {
                                                    ?>
                                                        <option value="<?=$row->ID;?>"><?=$row->NAMA_SUPPLIER;?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-xl-12 "> 
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Use item receipt date for the bill date</span>
                                            </label>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>        
                    </div>

                    <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="bg-success">DATE</th>
                                    <th class="bg-success">REF NO</th>
                                    <th class="bg-success">MEMO</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Kampret</td>
                                    <td>0.00</td>
                                    <td>Kampret</td>
                                    
                                </tr>

                                <tr>
                                    <td>Kampret</td>
                                    <td>0.00</td>
                                    <td>Kampret</td>
                                    
                                </tr>

                                <tr>
                                    <td>Kampret</td>
                                    <td>0.00</td>
                                    <td>Kampret</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                                
                                <div class="col-lg-12" style="float: right;">
                                    

                                    <div class="form-group row">
                                        
                                        <div class="col-lg-3 col-xl-11 text-lg-right">
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
        </div>
                                                                           
                            
                            
                                
                            </div>

                        
            </div>
        </div>