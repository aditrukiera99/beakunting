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

<?PHP if($msg == 1){ ?>
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> Invoice has been created.
</div>
<?PHP } ?>

<form class="form-horizontal" method="post" action="<?=base_url();?>invoice_c">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">INVOICE</div>
            <div class="card-block cards_section_margin">                
                <div class="card-block">
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 text-lg-right">
                                        <label style="margin-top: 0px;" for="name4" class=" col-form-label">Customer Name</label>
                                    </div>
                                    <div class="col-lg-8 col-xl-8">
                                        <div class="input-group">
                                            <select class="form-control chzn-select" name="cust_id" onchange="get_cust_info(this.value);" required>
                                                <option value="">Choose a customer</option>
                                                <?PHP foreach ($get_cust as $key => $row) { ?>

                                                    <?PHP if($row->NAMA_USAHA == "" || $row->NAMA_USAHA == null){ ?>
                                                    <option value="<?=$row->ID;?>"><?=$row->NAMA_PELANGGAN;?></option>
                                                    <?PHP } else { ?>
                                                    <option value="<?=$row->ID;?>"><?=$row->NAMA_USAHA;?></option>
                                                    <?PHP } ?>

                                                <?PHP } ?>
                                            </select>
                                            <input type="hidden" name="cust_name" id="cust_name" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 text-lg-right">
                                        <label style="margin-top: 0px;" for="username4" class="col-form-label">Date</label>
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
                                    <div class="col-lg-3 col-xl-3 text-lg-right">
                                        <label style="margin-top: 0px;" for="so" class="col-form-label">INVOICE#</label>
                                    </div>
                                    <div class="col-lg-8 col-xl-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tags"></i>
                                            </span>
                                            <input required type="text" name="inv_number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    
                                </div>                                    
                                <!-- last name-->
                            </fieldset>
                        </div>
                                   
                        <div class="col-lg-6">                            
                            <div class="form-group row">
                                <div class="col-lg-3 col-xl-3 text-lg-right">
                                    <label for="username4" class="col-form-label">Bill To</label>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <textarea name="cust_address" id="cust_address" class="form-control" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-3 col-xl-3 text-lg-right">
                                    <label for="username4" class="col-form-label">Ship To</label>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <textarea name="ship_to" id="ship_to" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>                                
                </div>

                <hr>

                <div class="form-group" id="head_so" style="display: none;">
                    <div class="col-lg-5 col-xl-5" style="padding-left: 0px;">
                        <label for="name4" class=" col-form-label">Select from Sales Order</label>
                        <div class="input-group">
                            <select class="form-control chzn-select" name="so_number" id="so_number" onchange="get_item_from_so(this.value);">
                                <option value="">Choose a Sales Order</option>
                                <?PHP foreach ($get_so as $key => $row) { ?>
                                    <option value="<?=$row->NO_BUKTI;?>"><?=$row->NO_BUKTI;?> - <?=$row->MEMO;?></option>
                                <?PHP } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#large">
                    <span class="btn-label" style="left: -16px;"><i class="fa fa-plus"></i></span> Add Item
                </button>

                <br><br>

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

            <div class="row">
                <div class="col-lg-5">
                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-3 text-lg-right">
                            <label for="username4" class="col-form-label">MEMO</label>
                        </div>
                        <div class="col-lg-8 col-xl-8">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <textarea class="form-control" name="memo" rows="3" placeholder="Type Text Here...."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-3 text-lg-right">
                            <label for="username4" class="col-form-label">Customer Message</label>
                        </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <textarea class="form-control" name="cust_msg" rows="3" placeholder="Type Text Here...."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-1 text-lg-right">
                            <label for="name4" class=" col-form-label">TAX</label> 
                        </div>
                        <div class="col-lg-8 col-xl-4" style="margin-top: 5px;">
                            <select id="id_pajak" class="form-control" name="id_pajak" onchange="get_info_pajak(this.value);">
                                <option value="">None</option>
                                <?PHP foreach ($get_tax as $key => $row) { ?>
                                <option value="<?=$row->ID;?>"><?=$row->NAMA_PRODUK;?></option>
                                <?PHP } ?>
                            </select>
                            <input type="hidden" name="kode_akun_pajak" id="kode_akun_pajak" value="">
                            <input type="hidden" name="nama_pajak" id="nama_pajak" value="">
                            <input type="hidden" name="prosen_pajak" id="prosen_pajak" value="0">
                            <input type="hidden" name="nilai_pajak" id="nilai_pajak" value="0">

                        </div>
                        <div class="col-lg-3 col-xl-1 text-lg-right">
                            <label for="name4" class=" col-form-label" id="prosen_txt">(0%) </label> 
                        </div>
                        <div class="col-lg-3 col-xl-4 text-lg-right">
                            <label for="name4" class=" col-form-label" id="nilai_pajak_txt">0.00</label> 
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-6 text-lg-right">
                            <label for="name4" class=" col-form-label"> TOTAL </label> 
                        </div>
                        <div class="col-lg-3 col-xl-4 text-lg-right">
                            <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 25px;" id="subtotal_txt">0.00</label>
                            <input type="hidden" name="subtotal" id="subtotal">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 col-xl-12 text-lg-right"></div>                        
                        <div class="col-lg-6 col-xl-7 text-lg-right">
                            <button type="submit" class="btn btn-labeled btn-success">
                                <span class="btn-label"><i class="fa fa-save"></i></span>
                                Save & Create
                            </button>
                        </div>
                        <div class="col-lg-3 col-xl-3 text-lg-right"> 
                            <a href="<?=base_url();?>customer_c" class="btn btn-labeled btn-primary">
                                <span class="btn-label"><i class="fa fa-times"></i></span>
                                Cancel
                            </a>
                        </div>
                    </div>

                </div>

            </div>                                
        </div>                        
    </div>
</div>
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
                var id2 = parseFloat(jml) + parseFloat(id);

                var isi  =  '<tr class="item_selected">'+
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
                $('#modal_item_close').click();

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

        $('#subtotal').val(sum);

        var inc_pajak = (parseFloat(sum) * parseFloat(prosen_pajak)) / 100;
        inc_pajak = Math.round(inc_pajak);

        $('#nilai_pajak').val(inc_pajak);
        $('#nilai_pajak_txt').html(NumberToMoney(inc_pajak).split('.00').join(''))

        var subtotal_all = parseFloat(sum) + parseFloat(inc_pajak);


        $('#subtotal_txt').html(NumberToMoney(subtotal_all).split('.00').join(''));
    }

    function get_cust_info(id){
        $(".tbl_customer").removeClass("selected_cust");
        $("#data_"+id).addClass("selected_cust");
        $('.item_selected').remove();
        $('#no_item').show();

        if(id == ""){
            $('#head_so').hide();
        } else {
            $('#head_so').show();
        }

        $.ajax({
            url : '<?php echo base_url(); ?>customer_c/get_customer_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                $('#cust_address').val(res.ALAMAT_TAGIH);
                $('#ship_to').val(res.ALAMAT_KIRIM);
                if(res.NAMA_USAHA == "" || res.NAMA_USAHA == null){
                    $('#cust_name').val(res.NAMA_PELANGGAN);                    
                } else {
                    $('#cust_name').val(res.NAMA_USAHA);                    
                }

                get_so_number(id);
            }
        });
    }

    function get_so_number(id){
        $.ajax({
            url : '<?php echo base_url(); ?>invoice_c/get_so_number',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(result){   
                var isine = "<option value=''>Choose a Sales Order</option>";
                $.each(result,function(i,res){
                    isine += '<option value="'+res.NO_BUKTI+'">'+res.NO_BUKTI+' - '+res.MEMO+'</option>';
                });

                $('#so_number').html(isine);
                $("#so_number").trigger("chosen:updated");
            }
        });
    }

    function get_item_from_so(no_bukti){
        $('.item_selected').remove();
        $.ajax({
            url : '<?php echo base_url(); ?>invoice_c/get_item_from_so',
            data : {no_bukti:no_bukti},
            type : "POST",
            dataType : "json",
            success : function(result){   

                if(result.length > 0){
                    $('#no_item').hide();
                    $.each(result,function(i,res){      
                        if(res.TIPE == 'ITEM'){
                            var jml = $('#item_row').find('tr').length;
                            var id2 = parseFloat(jml) + parseFloat(res.ID_PRODUK);

                            var isi  =  '<tr class="item_selected">'+
                                            '<input type="hidden" name="id_produk[]" value="'+res.ID_PRODUK+'"/>'+
                                            '<input type="hidden" name="kode_akun[]" value="'+res.KODE_AKUN+'"/>'+
                                            '<input type="hidden" name="nama_produk[]" value="'+res.NAMA_PRODUK+'"/>'+
                                            '<input type="hidden" name="satuan[]" value="'+res.SATUAN+'"/>'+
                                            '<td style="vertical-align: middle;">'+res.NAMA_PRODUK+'</td>'+
                                            '<td style="vertical-align: middle;">'+res.DESKRIPSI+'</td>'+
                                            '<td style="vertical-align: middle;">'+
                                                '<input id="qty_'+id2+'" value="'+res.QTY+'" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+id2+');" type="text" name="qty[]" style="width: 100%; text-align: center;" required>'+
                                            '</td>'+
                                            '<td style="vertical-align: middle; text-align:center;">'+res.SATUAN+'</td>'+
                                            '<td style="vertical-align: middle;">'+
                                                '<input id="harga_'+id2+'" value="'+NumberToMoney(res.HARGA_SATUAN).split('.00').join('')+'" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+id2+');" type="text" name="harga[]" style="width: 100%; text-align: right;" required>'+
                                            '</td>'+
                                            '<td style="vertical-align: middle;">'+
                                                '<input id="total_'+id2+'" value="'+NumberToMoney(res.TOTAL).split('.00').join('')+'" class="form-control" onkeyup="FormatCurrency(this);" type="text" name="total[]" style="width: 100%; text-align: right;" readonly>'+
                                            '</td>'+
                                        '</tr>';

                            $('#item_row').append(isi);
                            hitung_total(id2);
                        } else {
                            $('#id_pajak').val(res.ID_PRODUK);
                            get_info_pajak(res.ID_PRODUK);
                        }
                    });
                } else {
                    $('#no_item').show();
                }

                hitung_all();
            }
        });
    }

    function get_info_pajak(id){
        if(id == ""){
            $('#kode_akun_pajak').val('');
            $('#nama_pajak').val('');
            $('#prosen_pajak').val(0);
            $('#nilai_pajak').val(0);
            $('#nilai_pajak_txt').html('0.00')

            $('#prosen_txt').html("(0%)");
            hitung_all();
        } else {
            $.ajax({
                url : '<?php echo base_url(); ?>sales_order_c/get_info_pajak',
                data : {id:id},
                type : "POST",
                dataType : "json",
                success : function(res){   
                    $('#kode_akun_pajak').val(res.KODE_AKUN);
                    $('#nama_pajak').val(res.NAMA_PRODUK);
                    $('#prosen_pajak').val(res.HARGA_SATUAN);
                    $('#prosen_txt').html("("+res.HARGA_SATUAN+"%)");
                    hitung_all();
                }
            })
        }
    }
</script>