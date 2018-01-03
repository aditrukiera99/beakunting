<script>
    function showDiv(val) {
        
        if(val == "Per Item"){
            $('#itemproduk').show();
        }else if(val == "Fixed %"){
            $('#itemproduk').hide();
        }
    }

</script>
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
                            <form class="form-horizontal" method="post" action="<?=base_url();?>add_price_list_c">
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
                                                <input type="text" class="form-control" name="nama" placeholder="Name.....">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Price List Type</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                                <select id="gender4" name="tipe" class="form-control" onchange="showDiv(this.value)">
                                                    <option>Choose Price List</option>
                                                    <option value="Fixed %">Fixed %</option>
                                                    <option value="Per Item">Per Item</option>
                                                </select>
                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">This Price Level Will</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                                <select id="gender4" name="detail" class="form-control">
                                                    <option value="-">Decrease</option>
                                                    <option value="+">Increase</option>
                                                </select>
                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-xl-1 ">
                                            <label for="name4" class=" col-form-label">Item Price By</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-2">
                                            <input type="text" class="form-control" name="persen" placeholder="">
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Round Up To Nearest</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-suitcase"></i>
                                                </span>
                                                <select id="gender4" class="form-control">
                                                    <option>No Rounding</option>
                                                    <option>.01</option>
                                                    <option>.02</option>
                                                    <option>.05</option>
                                                    <option>.10</option>
                                                    <option>.25</option>
                                                    <option>.50</option>
                                                    <option>1.00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="itemproduk" style="display: none;">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Table Item</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6" style="overflow-y:scroll;height:300px;">
                                            <div class="input-group">
                                                <table class="display table table-stripped table-bordered table-hover">
                                                    <thead>
                                                        <tr >
                                                            <th></th>
                                                            <th>Nama</th>
                                                            <th>Price</th>
                                                            <th>U/M</th>
                                                            <th>Custom Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?PHP foreach ($get_item as $key => $row) {
                                                           
                                                         ?>
                                                        <tr>
                                                            <td><input type="checkbox" name=""></td>
                                                            <td><?=$row->NAMA_PRODUK;?></td>
                                                            <td><?=$row->HARGA_SATUAN;?></td>
                                                            <td><?=$row->SATUAN;?></td>
                                                            <td align="center" style="vertical-align:middle;"> 
                                                                <div class="span12">
                                                                <div class="controls">
                                                                    <input type="text" name="" class="form-control" style="width: 100%;">
                                                                </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                         <?PHP } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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