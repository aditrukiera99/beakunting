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

input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  padding: 10px;
}
</style>

<script type="text/javascript">
    function tipe(id){
        $('.baris').hide();
        if(id == "Bill"){
            $('#bill').show();
        }else if(id == "Credit"){
            $('#chek').show();
        }else if(id == "Item"){
            $('#bank').show();
        }


    }
</script>

<?PHP if($msg == 1){ ?>
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> Purchase Order has been created.
</div>
<?PHP } ?>

<form class="form-horizontal" method="post" action="<?=base_url();?>item_receipts">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success"> <a href="<?=base_url();?>vendors_c" style="color: #FFF; padding-right: 10px;"><i class="fa fa-arrow-left"></i></a> ITEM RECEIPTS </div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <br>
                    <div class="row baris" id="bank">
                        <div class="col-lg-6">
                                <fieldset>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Vendor</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <select class="form-control chzn-select" name="vend_id" onchange="get_ven_info(this.value);" required>
                                                    <option value="">Choose Vendors</option>
                                                    <?php 
                                                        foreach ($dt as $key => $value) {
                                                            
                                                    ?>
                                                    <option value="<?=$value->ID;?>"><?=$value->NAMA_SUPPLIER;?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="hidden" name="vend_name" id="vend_name" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3">
                                            <label for="username4" class="col-form-label">Date</label>
                                        </div>
                                        <div class="col-lg-8 col-xl-4">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar-o"></i>
                                            </span>
                                                <input type="text" name="tgl" class="form-control" placeholder="dd-mm-yyyy" id="dp1" value="<?=date('d-m-Y');?>">
                                            </div>
                                        </div>                                    
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Ref No</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tags"></i>
                                                </span>
                                                    <input type="text" class="form-control" name="ref_no">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Total</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <input readonly type="text" id="tititi3" class="form-control" name="total">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label"> Memo</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <textarea class="form-control" type="text" rows="3" name="memo"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                        </div>       
                    </div>                                
                </div>

                <div class="card m-t-35">
                    <div class="card-header bg-white">
                        <ul class="nav nav-tabs card-header-tabs float-left">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab1" data-toggle="tab">Expenses <b id="amount_due_txt"></b> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2" data-toggle="tab">Items <b id="amount_due2_txt"></b> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <div class="tab-content">
                            <div class="tab-pane" id="tab2">
                                <br>                                
                                    <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#large">
                                        <span class="btn-label">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    ADD ITEM
                                    </button>                                
                                <br>
                                <br>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="bg-success">ITEM</th>
                                            <th class="bg-success">DESCRIPTION</th>
                                            <th class="bg-success">QTY</th>
                                            <th class="bg-success">U/M</th>
                                            <th class="bg-success">COST</th>
                                            <th class="bg-success">AMOUNT</th>
                                            <th class="bg-success">CUSTOMER JOB</th>
                                            <th class="bg-success">BILLABLE ?</th>
                                        </tr>
                                    </thead>
                                    <tbody id="item_row">

                                        <tr style="background: #FFF !important;" id="no_item">
                                            <td style="vertical-align: middle; text-align: center;" colspan="9">Please choose an item</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane active" id="tab1">
                                <br>
                                
                                   <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#large_2">
                                        <span class="btn-label">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                                  ADD ACCOUNTS
                                    </button>
                                
                                <br>
                                <br>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="bg-primary">ACCOUNT</th>
                                            <th class="bg-primary">AMOUNT</th>
                                            <th class="bg-primary">MEMO</th>
                                            <th class="bg-primary">CUSTOMER JOB</th>
                                            <th class="bg-primary">BILLABLE ?</th>
                                        </tr>
                                    </thead>
                                    <tbody id="item_row_2">

                                        <tr style="background: #FFF !important;" id="no_item_2">
                                            <td style="vertical-align: middle; text-align: center;" colspan="9">Please choose an item</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>                                                     
            </div>

            <div class="row">
                <div class="col-lg-12" style="float: right;">
                    <div class="form-group row">                                        
                        <div class="col-lg-3 col-xl-11 text-lg-right">
                            <button type="submit" class="btn btn-labeled btn-success">
                                <span class="btn-label"><i class="fa fa-save"></i></span> Save
                            </button>

                            <a href="<?=base_url();?>vendors_c" class="btn btn-labeled btn-primary">
                                <span class="btn-label"><i class="fa fa-times"></i></span> Cancel
                            </a>
                        </div>
                    </div>
                </div>                                    
            </div>                                
        </div>                        
    </div>
</div>
<input type="hidden" onkeyup="FormatCurrency(this);" value="0" id="amount_due" class="form-control" placeholder="Nominal.....">
<input type="hidden" onkeyup="FormatCurrency(this);" value="0" id="amount_due2" class="form-control" placeholder="Nominal.....">
</form>

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
                    
                    <?PHP foreach ($get_item as $key => $row) { ?>
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

<div class="modal fade" id="large_2" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal_item_close_2">
                    <span aria-hidden="true">×</span>
                </button>
                <input type="text" class="form-control form-control-success" id="username" style="width: 50%;" placeholder="Search item ...">
            </div>
            <div class="modal-body" style="height: 460px; padding: 6px; background: #fff;">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="bg-success" style="text-align: center;">Kode</th>
                        <th class="bg-success" style="text-align: center;">Name</th>
                        <th class="bg-success" style="text-align: center;">Type</th>
                        
                    </tr>
                    </thead>
                    <tbody>

                     <?PHP foreach ($accn as $key => $row_2) { ?>
                    <tr class="data_item" onclick="add_row_2('<?=$row_2->ID;?>');">
                        <td><?=$row_2->KODE_AKUN;?></td>
                        <td><?=$row_2->NAMA_AKUN;?></td>
                        <td style="text-align: center;"><?=$row_2->KATEGORI;?></td>
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

                var jml = $('#item_row').find('tr').length;
                var id2 = parseFloat(jml) * parseFloat(id);
                

                var isi  =  '<tr class="item_selected">'+
                                '<input type="hidden" name="id_produk[]" value="'+res.ID+'"/>'+
                                '<input type="hidden" name="kode_akun[]" value="'+res.KODE_AKUN+'"/>'+
                                '<input type="hidden" name="nama_produk[]" value="'+res.NAMA_PRODUK+'"/>'+
                                '<input type="hidden" name="satuan[]" value="'+res.SATUAN+'"/>'+
                                '<td style="vertical-align: middle;">'+res.NAMA_PRODUK+'</td>'+
                                '<td style="vertical-align: middle;">'+res.DESKRIPSI+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="qty_'+id2+'" value="1" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+id2+'); coba();" type="text" name="qty[]" style="width: 100%; text-align: center;" required>'+
                                '</td>'+
                                '<td style="vertical-align: middle; text-align:center;">'+res.SATUAN+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="harga_'+id2+'" value="'+NumberToMoney(res.HARGA_SATUAN).split('.00').join('')+'" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+id2+');" type="text" name="harga[]" style="width: 100%; text-align: right;" required>'+
                                '</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="total_'+id2+'" value="'+total+'" class="form-control" onkeyup="FormatCurrency(this);" type="text" name="total[]" style="width: 100%; text-align: right;" readonly>'+
                                '</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '        <select class="form-control chzn-select" name="cust_id[]" required>'+
                                    '            <option value="">Choose a CUSTOMER</option>'+
                                    '            <?PHP foreach ($get_cust as $key => $row2) { ?>'+
                                    '                <option value="<?=$row2->ID;?>"><?=$row2->NAMA_PELANGGAN;?></option>'+
                                    '            <?PHP } ?>'+
                                    '        </select>'+        
                                '</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '   <input type="checkbox" class="form-control" name="billable[]" value="1">     '+        
                                '</td>'+
                            '</tr>';

                $('#item_row').append(isi);
                hitung_total(id2);
                $('#modal_item_close').click();

            }
        });
    }

    function add_row_2(id) {
        $('#no_item_2').hide();
        $.ajax({
            url : '<?php echo base_url(); ?>sales_order_c/get_accn_info',
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

                var jml = $('#item_row_2').find('tr').length;
                var id2 = parseFloat(jml) * parseFloat(id);
                

                var isi  =  '<tr class="item_selected">'+
                                '<input type="hidden" name="kode_akun2[]" value="'+res.KODE_AKUN+'"/>'+
                                '<td style="vertical-align: middle;">'+res.KODE_AKUN+' '+res.NAMA_AKUN+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="harga2_'+id2+'" value="0" class="form-control" onkeyup="FormatCurrency(this); hitung_all2();coba();" type="text" name="harga2[]" style="width: 100%; text-align: right;" required>'+
                                '</td>'+
                                '<input type="hidden" id="total2_'+id2+'">'+
                                '<td style="vertical-align: middle;">'+
                                    '   <input type="text" class="form-control" name="memo_table[]">     '+        
                                '</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '        <select class="form-control chzn-select" name="cust_id2[]" required>'+
                                    '            <option value="">Choose a CUSTOMER</option>'+
                                    '            <?PHP foreach ($get_cust as $key => $row2) { ?>'+
                                    '                <option value="<?=$row2->ID;?>"><?=$row2->NAMA_PELANGGAN;?></option>'+
                                    '            <?PHP } ?>'+
                                    '        </select>'+        
                                '</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '   <input type="checkbox" class="form-control" name="billable2[]" value="1">     '+        
                                '</td>'+
                            '</tr>';

                $('#item_row_2').append(isi);
                
                $('#modal_item_close_2').click();

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

    
    function coba(){
        var satu = $('#amount_due').val();
        var dua = $('#amount_due2').val();

        $('#amount_due_txt').html("Rp "+NumberToMoney(dua.split(',').join('')).split('.00').join(''));
        $('#amount_due2_txt').html("Rp "+NumberToMoney(satu.split(',').join('')).split('.00').join(''));

        if(satu == "" || satu == null){
            satu = 0;
        }

        if(dua == "" || dua == null){
            dua = 0;
        }

        satu   = satu.split(',').join('');
        dua    = dua.split(',').join('');

        var total = parseFloat(satu) + parseFloat(dua);
        total = NumberToMoney(total).split('.00').join('');
        $('#tititi').val(total);
        $('#tititi2').val(total);
        $('#tititi3').val(total);
    }


    function hitung_all2(){
        
        var sum = 0;
        $("input[name='harga2[]']").each(function(idx, elm) {
            var tot = elm.value.split(',').join('');
            if(tot > 0){
                sum += parseFloat(tot);
            }
        });

        $('#amount_due2').val(NumberToMoney(sum).split('.00').join(''));

        
    }

    function hitung_all(){
        
        var sum = 0;
        $("input[name='total[]']").each(function(idx, elm) {
            var tot = elm.value.split(',').join('');
            if(tot > 0){
                sum += parseFloat(tot);
            }
        });

        $('#amount_due').val(NumberToMoney(sum).split('.00').join(''));

        coba();
    }

    function get_ven_info(id){
        $(".tbl_customer").removeClass("selected_cust");
        $("#data_"+id).addClass("selected_cust");
        // $('.item_selected').remove();
        $('#no_item').show();

        if(id == ""){
            $('#head_so').hide();
        } else {
            $('#head_so').show();
        }

        $.ajax({
            url : '<?php echo base_url(); ?>vendors_c/get_vendor_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                $('#ven_address').val(res.ALAMAT_TAGIH);
                $('#vend_name').val(res.NAMA_SUPPLIER);
                get_so_number(id);
            }
        });
    }
</script>