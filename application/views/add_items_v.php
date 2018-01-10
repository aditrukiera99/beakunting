<style type="text/css">
.data_item:hover{
    background: #0f723a;
    cursor: pointer;
    color: #FFF;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #c4dff6 !important;
}

.table-bordered {
    border: 2px solid #00bf86;
    background: #fff !important;
}
</style>
<script>
    function showDiv(val) {
        $('.display').hide();
        if(val == "Service"){
            $('#div1').show();
        } else if(val == "Inventory Part"){
            $('#div2').show();
        } else if(val == "Inventory Assembly"){
            $('#div3').show();
        } else if(val == "Non Inventory Part"){
            $('#div4').show();
        } else if(val == "Other Charge"){
            $('#div5').show();
        } else if(val == "Subtotal"){
            $('#div6').show();
        } else if(val == "Group"){
            $('#div7').show();
        } else if(val == "Discount"){
            $('#div8').show();
        } else if(val == "Payment"){
            $('#div9').show();
        } else if(val == "Sales Tax Item"){
            $('#div10').show();
        } else if(val == "Sales Tax Group"){
            $('#div11').show();
        }
    }

</script>
<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                TAMBAH ITEM
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
                    <a href="<?=base_url();?>items_c">Item</a>
                </li>
                <li class="active breadcrumb-item">CHECK</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<input type="hidden" id="jml_tr" value="0">
<input type="hidden" id="jml_tr2" value="0">
<input type="hidden" id="jml_tr3" value="0">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">CHECK</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Type</label>
                                        </div>
                                        <div class="col-lg-10 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-suitcase"></i>
                                                </span>
                                                <select id="type" name="type" class="form-control" onchange="showDiv(this.value);">
                                                    <option>Choose Type....</option>
                                                    <option value="Service">Service</option>
                                                    <option value="Inventory Part">Inventory Part</option>
                                                    <option value="Inventory Assembly">Inventory Assembly</option>
                                                    <option value="Non Inventory Part">Non Inventory Part</option>
                                                    <option value="Other Charge">Other Charge</option>
                                                    <option value="Subtotal">Subtotal</option>
                                                    <option value="Group">Group</option>
                                                    <option value="Discount">Discount</option>
                                                    <option value="Payment">Payment</option>
                                                    <option value="Sales Tax Item">Sales Tax Item</option>
                                                    <option value="Sales Tax Group">Sales Tax Group</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Item Name / Number</label>
                                        </div>
                                        <div class="col-lg-10 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-users"></i>
                                                </span>
                                                <input type="text" class="form-control" name="nama" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-2 ">
                                            <label for="name4" class=" col-form-label">Subitem Of</label>
                                        </div>
                                        <div class="col-lg-10 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                                <select class="form-control chzn-select" name="anak_dari">
                                                    <option value="">None</option>
                                                    <?PHP foreach ($data_item as $key => $row) { ?>
                                                        <option value="<?=$row->ID;?>"><?=$row->NAMA_PRODUK;?></option>
                                                    <?PHP } ?>
                                                </select>
                                                <span class="input-group-addon">
                                                    <a href="<?=base_url();?>add_accounts_c"><i class="fa fa-plus-circle"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div1">
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">U/M Set</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="um">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_um as $key => $row) { ?>
                                                            <option value="<?=$row->BASE;?>"><?=$row->NAMA_SATUAN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Rate</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-legal"></i>
                                                    </span>
                                                        <input type="text" id="password4" class="form-control" name="rate" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Tax Code</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="tax">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_tax as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->CODE_NAMA;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Accounts</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="akun">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_accn as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div2" style="display: none;">
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Manufactur Part Number</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-legal"></i>
                                                    </span>
                                                        <input type="text" id="password4" class="form-control" name="rate" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">U/M Set</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="um">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_um as $key => $row) { ?>
                                                            <option value="<?=$row->BASE;?>"><?=$row->NAMA_SATUAN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-lg-4" style="border: 1px solid;margin-right: 5px;">
                                                <div class="form-group row" >
                                                    <div class="col-lg-12 col-xl-12 ">
                                                        <label for="name4" class=" col-form-label">Purchase Information</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row" >
                                                    <div class="col-lg-12 col-xl-12 ">
                                                        <label for="name4" class=" col-form-label">Description on Purchase</label>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-edit"></i>
                                                            </span>
                                                                <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Cost</label>
                                                    </div>
                                                    <div class="col-lg-10 col-xl-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-legal"></i>
                                                            </span>
                                                                <input type="text" id="password4" class="form-control" name="cost" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Account</label>
                                                    </div>
                                                    <div class="col-lg-10 col-xl-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-legal"></i>
                                                            </span>
                                                                <select class="form-control chzn-select" name="akun_purchase">
                                                                    <option value="">None</option>
                                                                    <?PHP foreach ($data_accn as $key => $row) { ?>
                                                                        <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                                    <?PHP } ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Vendor</label>
                                                    </div>
                                                    <div class="col-lg-10 col-xl-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-legal"></i>
                                                            </span>
                                                                <select class="form-control chzn-select" name="anak_dari">
                                                                    <option value="">None</option>
                                                                    <?PHP foreach ($data_vendor as $key => $row) { ?>
                                                                        <option value="<?=$row->ID;?>"><?=$row->NAMA_SUPPLIER;?></option>
                                                                    <?PHP } ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4" style="border: 1px solid;">
                                                <div class="form-group row" >
                                                    <div class="col-lg-12 col-xl-12 ">
                                                        <label for="name4" class=" col-form-label">Sales Information</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row" >
                                                    <div class="col-lg-12 col-xl-12 ">
                                                        <label for="name4" class=" col-form-label">Description on Sales</label>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-edit"></i>
                                                            </span>
                                                                <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Price</label>
                                                    </div>
                                                    <div class="col-lg-10 col-xl-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-legal"></i>
                                                            </span>
                                                                <input type="text" id="password4" class="form-control" name="price" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Tax Code</label>
                                                    </div>
                                                    <div class="col-lg-10 col-xl-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-legal"></i>
                                                            </span>
                                                                <select class="form-control chzn-select" name="tax">
                                                                    <option value="">None</option>
                                                                    <?PHP foreach ($data_tax as $key => $row) { ?>
                                                                        <option value="<?=$row->ID;?>"><?=$row->CODE_NAMA;?> - <?=$row->DESCRIPTION;?></option>
                                                                    <?PHP } ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Account </label>
                                                    </div>
                                                    <div class="col-lg-10 col-xl-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-legal"></i>
                                                            </span>
                                                                <select class="form-control chzn-select" name="akun_sales">
                                                                    <option value="">None</option>
                                                                    <?PHP foreach ($data_accn as $key => $row) { ?>
                                                                        <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                                    <?PHP } ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8" style="border: 1px solid;">

                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Account</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Reorder Point (Min)</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Max</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">On Hand</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Total Value</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">As Of</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <select class="form-control chzn-select" name="akun_inven">
                                                            <option value="">None</option>
                                                            <?PHP foreach ($data_accn as $key => $row) { ?>
                                                                <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                            <?PHP } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="text" name="min_inv" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="text" name="max_inv" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="text" name="onhand" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="text" name="total_value" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="date" name="asof" class="form-control" >
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div3" style="display: none;">
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">U/M Set</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="um">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_um as $key => $row) { ?>
                                                            <option value="<?=$row->BASE;?>"><?=$row->NAMA_SATUAN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Cost</label>
                                            </div>
                                            <div class="col-lg-5 col-xl-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="sel_cost">
                                                        <option value="">None</option>
                                                        <option value="Use Global Preference">Use Global Preference</option>
                                                        <option value="User Difined Cost">User Difined Cost</option>
                                                        <option value="Use Total BOM Cost">Use Total BOM Cost</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-xl-3">
                                                <div class="input-group">
                                                    <input type="text" name="cost" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">COGS Account</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                    <select class="form-control chzn-select" name="anak_dari">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_accn as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                 <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>  
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Sales Price</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-2">
                                                 <input type="text" class="form-control" name="sales_price">
                                            </div>
                                            <div class="col-lg-1 col-xl-1 ">
                                                <label for="name4" class=" col-form-label">Tax Code</label>
                                            </div>
                                            <div class="col-lg-4 col-xl-3">
                                                 <select class="form-control chzn-select" name="anak_dari">
                                                    <option value="">None</option>
                                                    <?PHP foreach ($data_tax as $key => $row) { ?>
                                                        <option value="<?=$row->ID;?>"><?=$row->CODE_NAMA;?> - <?=$row->DESCRIPTION;?></option>
                                                    <?PHP } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Income Account</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                    <select class="form-control chzn-select" name="income_accn">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_accn as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Bill of Materials</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 col-xl-8 ">
                                                <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#large">
                                                    <span class="btn-label" style="left: -16px;"><i class="fa fa-plus"></i></span> Add Item
                                                </button>
                                                <br>
                                                <br>
                                                <table class="table table-bordered table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-success">ITEM</th>
                                                            <th class="bg-success">DESCRIPTION</th>
                                                            <th class="bg-success" style="width: 5%;">QUANTITY</th>
                                                            <th class="bg-success" style="text-align: center; width: 5%;">U/M</th>
                                                            <th class="bg-success" style="width: 15%;">RATE</th>
                                                            <th class="bg-success" style="width: 15%;">AMOUNT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="item_row">
                                                        <tr style="background: #FFF !important;" id="no_item">
                                                            <td style="vertical-align: middle; text-align: center;" colspan="6">Please choose an item</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-7 col-xl-7 text-lg-right">
                                                <label for="name4" class=" col-form-label"> Total Bill Of Materials Cost </label> 
                                            </div>
                                            <div class="col-lg-1 col-xl-1 text-lg-right">
                                                <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 15px;" id="subtotal_txt">0.00</label>
                                                <input type="hidden" name="subtotal" id="subtotal">
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8" style="border: 1px solid;">

                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Account</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Reorder Point (Min)</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Max</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">On Hand</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">Total Value</label>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <label for="name4" class=" col-form-label">As Of</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <select class="form-control chzn-select" name="akun_inven">
                                                            <option value="">None</option>
                                                            <?PHP foreach ($data_accn as $key => $row) { ?>
                                                                <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                            <?PHP } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="text" name="min_inv" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="text" name="max_inv" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="text" name="onhand" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="text" name="total_value" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-2 col-xl-2 ">
                                                        <input type="date" name="asof" class="form-control" >
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div4" style="display: none;">
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Manufacturer Part Number</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-legal"></i>
                                                    </span>
                                                        <input type="text" id="password4" class="form-control" name="part_number" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">U/M Set</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="um">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_um as $key => $row) { ?>
                                                            <option value="<?=$row->BASE;?>"><?=$row->NAMA_SATUAN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Price</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-legal"></i>
                                                    </span>
                                                        <input type="text" id="password4" class="form-control" name="rate" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Tax Code</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="tax">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_tax as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->CODE_NAMA;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Accounts</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="akun">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_accn as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div5" style="display: none;">

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Amount or %</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-legal"></i>
                                                    </span>
                                                        <input type="text" id="password4" class="form-control" name="amount_or" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Tax Code</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="tax">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_tax as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->CODE_NAMA;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Accounts</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="akun">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_accn as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div6" style="display: none;">

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div7" style="display: none;">

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 col-xl-8 ">
                                                <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#large2">
                                                    <span class="btn-label" style="left: -16px;"><i class="fa fa-plus"></i></span> Add Item
                                                </button>
                                                <br>
                                                <br>
                                                <table class="table table-bordered table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-success">ITEM</th>
                                                            <th class="bg-success">DESCRIPTION</th>
                                                            <th class="bg-success" style="width: 5%;">QUANTITY</th>
                                                            <th class="bg-success" style="text-align: center; width: 5%;">U/M</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="item_row2">
                                                        <tr style="background: #FFF !important;" id="no_item2">
                                                            <td style="vertical-align: middle; text-align: center;" colspan="6">Please choose an item</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div8" style="display: none;">

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Amount or %</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-legal"></i>
                                                    </span>
                                                        <input type="text" id="password4" class="form-control" name="rate" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Tax Code</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="tax">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_tax as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->CODE_NAMA;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Accounts</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control chzn-select" name="akun">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_accn as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div9" style="display: none;">

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Payment Method</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-legal"></i>
                                                    </span>
                                                        <select name="payment_method" class="form-control chzn-select">
                                                            <option value="">None</option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="Check">Check</option>
                                                            <option value="American Express">American Express</option>
                                                            <option value="Discover">Discover</option>
                                                            <option value="Master Card">Master Card</option>
                                                            <option value="VISA">VISA</option>
                                                            <option value="Barter">Barter</option>
                                                            <option value="E-Check">E-Check</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <input type="radio" value="1" name="pilih" >&nbsp &nbsp Group With Other Underposited Funds
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <input type="radio" value="1" name="pilih" > &nbsp &nbsp
                                                    <select class="form-control" name="akun">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_accn as $key => $row) { ?>
                                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div10" style="display: none;">

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Tax Rate (%)</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-legal"></i>
                                                    </span>
                                                        <input type="text" id="password4" class="form-control" name="rate" placeholder="0.0 %">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Tax Agency (Vendor)</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <select class="form-control" name="akun">
                                                        <option value="">None</option>
                                                        <?PHP foreach ($data_vendor as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_SUPPLIER;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                    <span class="input-group-addon">
                                                        <a href="<?=base_url();?>add_um_list_c"><i class="fa fa-plus-circle"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="display" id="div11" style="display: none;">

                                        <div class="form-group row">
                                            <div class="col-lg-2 col-xl-2 ">
                                                <label for="name4" class=" col-form-label">Description</label>
                                            </div>
                                            <div class="col-lg-10 col-xl-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 col-xl-8 ">
                                                <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#large3">
                                                    <span class="btn-label" style="left: -16px;"><i class="fa fa-plus"></i></span> Add Item
                                                </button>
                                                <br>
                                                <br>
                                                <table class="table table-bordered table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="bg-success">ITEM</th>
                                                            <th class="bg-success">DESCRIPTION</th>
                                                            <th class="bg-success" style="width: 10%;">TIPE</th>
                                                            <th class="bg-success" style="text-align: center; width: 10%;">RATE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="item_row3">
                                                        <tr style="background: #FFF !important;" id="no_item3">
                                                            <td style="vertical-align: middle; text-align: center;" colspan="6">Please choose an item</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-7 col-xl-7 text-lg-right">
                                                <label for="name4" class=" col-form-label"> Group Rate </label> 
                                            </div>
                                            <div class="col-lg-1 col-xl-1 text-lg-right">
                                                <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 15px;" id="subtotal_txt2">0.00</label>
                                                <input type="hidden" name="subtotal2" id="subtotal2">
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

<div class="modal fade" id="large" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal_item_close">
                    <span aria-hidden="true">×</span>
                </button>
                <input type="text" class="form-control form-control-success" id="username" style="width: 50%;" placeholder="Search item ...">
            </div>
            <div class="modal-body" style="height: 460px; padding: 6px; background: #fff;">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="bg-success" style="text-align: center;">Item</th>
                        <th class="bg-success" style="text-align: center;">Description</th>
                        <th class="bg-success" style="text-align: center;">Qty</th>
                        <th class="bg-success" style="text-align: center;">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP foreach ($data_item as $key => $row) { ?>
                    <tr class="data_item" onclick="add_row('<?=$row->ID;?>');">
                        <td><?=$row->NAMA_PRODUK;?></td>
                        <td><?=$row->DESKRIPSI;?></td>
                        <td style="text-align: center;"><?=$row->STOK;?></td>
                        <td style="text-align: right;"><?=number_format($row->HARGA_SATUAN);?></td>
                    </tr>
                    <?PHP } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="large2" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal_item_close2">
                    <span aria-hidden="true">×</span>
                </button>
                <input type="text" class="form-control form-control-success" id="username" style="width: 50%;" placeholder="Search item ...">
            </div>
            <div class="modal-body" style="height: 460px; padding: 6px; background: #fff;">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="bg-success" style="text-align: center;">Item</th>
                        <th class="bg-success" style="text-align: center;">Description</th>
                        <th class="bg-success" style="text-align: center;">Qty</th>
                        <th class="bg-success" style="text-align: center;">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP foreach ($data_item as $key => $row) { ?>
                    <tr class="data_item" onclick="add_row2('<?=$row->ID;?>');">
                        <td><?=$row->NAMA_PRODUK;?></td>
                        <td><?=$row->DESKRIPSI;?></td>
                        <td style="text-align: center;"><?=$row->STOK;?></td>
                        <td style="text-align: right;"><?=number_format($row->HARGA_SATUAN);?></td>
                    </tr>
                    <?PHP } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="large3" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal_item_close3">
                    <span aria-hidden="true">×</span>
                </button>
                <input type="text" class="form-control form-control-success" id="username" style="width: 50%;" placeholder="Search item ...">
            </div>
            <div class="modal-body" style="height: 460px; padding: 6px; background: #fff;">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="bg-success" style="text-align: center;">Item</th>
                        <th class="bg-success" style="text-align: center;">Description</th>
                        <th class="bg-success" style="text-align: center;">Qty</th>
                        <th class="bg-success" style="text-align: center;">Rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP foreach ($data_tax_item as $key => $row) { ?>
                    <tr class="data_item" onclick="add_row3('<?=$row->ID;?>');">
                        <td><?=$row->NAMA_PRODUK;?></td>
                        <td><?=$row->DESKRIPSI;?></td>
                        <td style="text-align: center;"><?=$row->STOK;?></td>
                        <td style="text-align: right;"><?=number_format($row->HARGA_SATUAN);?></td>
                    </tr>
                    <?PHP } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function add_row(id) {
        $('#no_item').hide();
        $.ajax({
            url : '<?php echo base_url(); ?>sales_order_c/get_item_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                var price = res.HARGA_SATUAN;
                if(price == "" || price == null){
                    price = 0;
                }

                var total = 1 * parseFloat(price);
                total = NumberToMoney(total).split('.00').join('');

                var jml_tr = $('#jml_tr').val();
                var id2 = parseFloat(jml_tr) + 1;


                var isi  =  '<tr>'+
                                '<input type="hidden" name="id_produk[]" value="'+res.ID+'"/>'+
                                '<input type="hidden" name="kode_akun[]" value="'+res.KODE_AKUN+'"/>'+
                                '<input type="hidden" name="nama_produk[]" value="'+res.NAMA_PRODUK+'"/>'+
                                '<input type="hidden" name="satuan[]" value="'+res.SATUAN+'"/>'+
                                '<td style="vertical-align: middle;">'+res.NAMA_PRODUK+'</td>'+
                                '<td style="vertical-align: middle;">'+res.DESKRIPSI+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="qty_'+id2+'" value="1" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+id2+');" type="text" name="qty[]" style="width: 100%; text-align: center;" required>'+
                                '</td>'+
                                '<td style="vertical-align: middle; text-align:center;">'+res.SATUAN+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="harga_'+id2+'" value="'+NumberToMoney(res.HARGA_SATUAN).split('.00').join('')+'" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+id2+');" type="text" name="harga[]" style="width: 100%; text-align: right;" required>'+
                                '</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="total_'+id2+'" value="'+total+'" class="form-control" onkeyup="FormatCurrency(this);" type="text" name="total[]" style="width: 100%; text-align: right;" readonly>'+
                                '</td>'+
                            '</tr>';

                $('#item_row').append(isi);
                hitung_total(id2);
                $('#jml_tr').val(id2);
                $('#modal_item_close').click();

            }
        });
    }

    function add_row2(id) {
        $('#no_item2').hide();
        $.ajax({
            url : '<?php echo base_url(); ?>sales_order_c/get_item_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                var price = res.HARGA_SATUAN;
                if(price == "" || price == null){
                    price = 0;
                }

                var total = 1 * parseFloat(price);
                total = NumberToMoney(total).split('.00').join('');

                var jml_tr = $('#jml_tr').val();
                var id2 = parseFloat(jml_tr) + 1;


                var isi  =  '<tr>'+
                                '<input type="hidden" name="id_produk[]" value="'+res.ID+'"/>'+
                                '<input type="hidden" name="kode_akun[]" value="'+res.KODE_AKUN+'"/>'+
                                '<input type="hidden" name="nama_produk[]" value="'+res.NAMA_PRODUK+'"/>'+
                                '<input type="hidden" name="satuan[]" value="'+res.SATUAN+'"/>'+
                                '<td style="vertical-align: middle;">'+res.NAMA_PRODUK+'</td>'+
                                '<td style="vertical-align: middle;">'+res.DESKRIPSI+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="qty_'+id2+'" value="1" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+id2+');" type="text" name="qty[]" style="width: 100%; text-align: center;" required>'+
                                '</td>'+
                                '<td style="vertical-align: middle; text-align:center;">'+res.SATUAN+'</td>'+
                            '</tr>';

                $('#item_row2').append(isi);
                $('#modal_item_close2').click();

            }
        });
    }

    function add_row3(id) {
        $('#no_item3').hide();
        $.ajax({
            url : '<?php echo base_url(); ?>sales_order_c/get_item_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                var price = res.HARGA_SATUAN;
                if(price == "" || price == null){
                    price = 0;
                }

                var total = 1 * parseFloat(price);
                total = NumberToMoney(total).split('.00').join('');

                var jml_tr = $('#jml_tr').val();
                var id2 = parseFloat(jml_tr) + 1;


                var isi  =  '<tr>'+
                                '<input type="hidden" name="id_produk[]" value="'+res.ID+'"/>'+
                                '<input type="hidden" name="kode_akun[]" value="'+res.KODE_AKUN+'"/>'+
                                '<input type="hidden" name="nama_produk[]" value="'+res.NAMA_PRODUK+'"/>'+
                                '<input type="hidden" name="satuan[]" value="'+res.SATUAN+'"/>'+
                                '<td style="vertical-align: middle;">'+res.NAMA_PRODUK+'</td>'+
                                '<td style="vertical-align: middle;">'+res.DESKRIPSI+'</td>'+
                                '<td style="vertical-align: middle; text-align:center;">'+res.TIPE+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="harga_'+id2+'" value="'+NumberToMoney(res.HARGA_SATUAN).split('.00').join('')+'" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+id2+');" type="text" name="harga2[]" style="width: 100%; text-align: right;" required>'+
                                '</td>'+
                                
                            '</tr>';

                $('#item_row3').append(isi);
                hitung_all2(id2);
                $('#jml_tr3').val(id2);
                $('#modal_item_close3').click();

            }
        });
    }

    function hitung_total(id){
        var qty = $('#qty_'+id).val();
        var harga = $('#harga_'+id).val();  

        if(qty == "" || qty == null){
            qty = 0;
        }

        if(harga == "" || harga == null){
            harga = 0;
        }

        qty   = qty.split(',').join('');
        harga = harga.split(',').join('');

        var total = parseFloat(qty) * parseFloat(harga);
        total = NumberToMoney(total).split('.00').join('');
        $('#total_'+id).val(total);
        hitung_all();
    }

    function hitung_all(){
        var prosen_pajak = $('#prosen_pajak').val();
        var sum = 0;
        $("input[name='total[]']").each(function(idx, elm) {
            var tot = elm.value.split(',').join('');
            if(tot > 0){
                sum += parseFloat(tot);
            }
        });

        var inc_pajak = (parseFloat(sum) * parseFloat(prosen_pajak)) / 100;
        inc_pajak = Math.round(inc_pajak);

        $('#nilai_pajak').val(inc_pajak);
        $('#nilai_pajak_txt').html(NumberToMoney(inc_pajak).split('.00').join(''))

        var subtotal_all = parseFloat(sum);


        $('#subtotal_txt').html(NumberToMoney(subtotal_all).split('.00').join(''));
        $('#subtotal').val(subtotal_all);
    }

    function hitung_all2(){
        var prosen_pajak = $('#prosen_pajak').val();
        var sum = 0;
        $("input[name='harga2[]']").each(function(idx, elm) {
            var tot = elm.value.split(',').join('');
            if(tot > 0){
                sum += parseFloat(tot);
            }
        });

        var inc_pajak = (parseFloat(sum) * parseFloat(prosen_pajak)) / 100;
        inc_pajak = Math.round(inc_pajak);

        $('#nilai_pajak').val(inc_pajak);
        $('#nilai_pajak_txt').html(NumberToMoney(inc_pajak).split('.00').join(''))

        var subtotal_all = parseFloat(sum);


        $('#subtotal_txt2').html(NumberToMoney(subtotal_all).split('.00').join(''));
        $('#subtotal').val(subtotal_all);
    }
    </script>