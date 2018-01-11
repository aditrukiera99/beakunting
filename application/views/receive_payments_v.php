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

.selected_btn{
    background: green !important;
    color: #FFF !important;
}

input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.3); /* IE */
  -moz-transform: scale(1.3); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  padding: 10px;
}

</style>

<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/radio_css/css/radiobox.min.css" />
<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/checkbox_css/css/checkbox.min.css" />
<!--End of Plugin styles-->
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/radio_checkbox.css" />

<form class="form-horizontal" method="post" action="<?=base_url();?>receive_payments_c">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">CUSTOMER PAYMENT</div>
            <div class="card-block cards_section_margin">                
                <div class="card-block">
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 text-lg-right" style="margin-top: -4px;">
                                        <label for="name4" class=" col-form-label">Received From</label>
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
                                    <div class="col-lg-3 col-xl-3 text-lg-right" style="margin-top: -4px;">
                                        <label for="so" class="col-form-label">Amount</label>
                                    </div>
                                    <div class="col-lg-8 col-xl-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-money"></i>
                                            </span>
                                            <input readonly="" type="text" name="amount" id="amount" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    
                                </div> 

                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 text-lg-right" style="margin-top: -4px;">
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
                                    <div class="col-lg-3 col-xl-3 text-lg-right" style="margin-top: -4px;">
                                        <label for="so" class="col-form-label">#Referrence</label>
                                    </div>
                                    <div class="col-lg-8 col-xl-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tags"></i>
                                            </span>
                                            <input type="text" name="no_reff" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 text-lg-right" style="margin-top: -4px;">
                                        <label for="so" class="col-form-label">Payment Method</label>
                                    </div>
                                    <div class="col-lg-8 col-xl-4">
                                        <div class="btn-group button_group_rounded btn_group_padding" role="group" >
                                            <button type="button" class="btn btn-labeled btn-default btn_method selected_btn" style="font-size: 22px;" onclick="get_metode_bayar(this, 'cash');">
                                                <span class="btn-label">
                                                    <i class="fa fa-money"></i>
                                                </span>
                                                   CASH
                                            </button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="button" class="btn btn-labeled btn-default btn_method" style="font-size: 22px;" onclick="get_metode_bayar(this, 'cc');">
                                                <span class="btn-label">
                                                    <i class="fa fa-credit-card"></i>
                                                </span>
                                                   CREDIT CARD
                                            </button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="button" class="btn btn-labeled btn-default btn_method" style="font-size: 22px;" onclick="get_metode_bayar(this, 'check');">
                                                <span class="btn-label">
                                                    <i class="ion-ios7-paper"></i>
                                                </span>
                                                   CHECK
                                            </button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="button" class="btn btn-labeled btn-default btn_method" style="font-size: 22px;" onclick="get_metode_bayar(this, 'echeck');">
                                                <span class="btn-label">
                                                    <i class="ion-ios7-paper"></i>
                                                </span>
                                                   e-CHECK
                                            </button>
                                            <input type="hidden" name="metode_bayar" id="metode_bayar" value="cash" />                                                        
                                        </div>
                                    </div>                                    
                                </div>  
                                                         
                                <!-- last name-->
                            </fieldset>
                        </div>
                                   
                       
                    </div>                                
                </div>

               
                <br><br>

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="bg-success" style="text-align: center; vertical-align: middle;">
                                SELECT
                            </th>
                            <th class="bg-success" style="text-align: center; vertical-align: middle;">DATE</th>
                            <th class="bg-success" style="text-align: center; vertical-align: middle;">NUMBER</th>
                            <th class="bg-success" style="text-align: center; vertical-align: middle;">ORIGINAL AMOUNT</th>
                            <th class="bg-success" style="text-align: center; vertical-align: middle;">AMOUNT DUE</th>
                            <th class="bg-success" style="text-align: center; vertical-align: middle;">PAYMENT</th>
                        </tr>
                    </thead>
                    <tbody id="item_row">
                        <tr style="background: #FFF !important;" id="no_item">
                            <td style="vertical-align: middle; text-align: center;" colspan="6">There are no unpaid invoices for this customer</td>
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
                                <textarea class="form-control" name="memo" rows="3" placeholder="Type Memo Here...."></textarea>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-7">
                    

                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-6 text-lg-right">
                            <label for="name4" class=" col-form-label"> Amount Due </label> 
                        </div>
                        <div class="col-lg-3 col-xl-4 text-lg-right" style="margin-top: -13px;">
                            <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 25px;" id="subtotal_txt">0</label>
                            <input type="hidden" name="amount_due" id="amount_due">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-6 text-lg-right">
                            <label for="name4" class=" col-form-label"> Applied </label> 
                        </div>
                        <div class="col-lg-3 col-xl-4 text-lg-right" style="margin-top: -13px;">
                            <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 25px;" id="applied_txt">0</label>
                            <input type="hidden" name="applied_amount" id="applied_amount">
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <div class="col-lg-3 col-xl-6 text-lg-right">
                            <label for="name4" class=" col-form-label"> Discount And Credit Applied </label> 
                        </div>
                        <div class="col-lg-3 col-xl-4 text-lg-right">
                            <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 25px;" id="subtotal_txt">0.00</label>
                            <input type="hidden" name="subtotal" id="subtotal">
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <div class="col-lg-12 col-xl-12 text-lg-right"></div>                        
                        <div class="col-lg-6 col-xl-7 text-lg-right">
                            <button type="submit" class="btn btn-labeled btn-success">
                                <span class="btn-label"><i class="fa fa-save"></i></span>
                                Save Payments
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
            <div class="modal-body" style="height: 460px; padding: 0px; background: #606061;">
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

                var isi  =  '<tr>'+
                                '<input type="hidden" name="id_produk[]" value="'+res.ID+'"/>'+
                                '<input type="hidden" name="kode_akun[]" value="'+res.KODE_AKUN+'"/>'+
                                '<input type="hidden" name="nama_produk[]" value="'+res.NAMA_PRODUK+'"/>'+
                                '<input type="hidden" name="satuan[]" value="'+res.SATUAN+'"/>'+
                                '<td style="vertical-align: middle;">'+res.NAMA_PRODUK+'</td>'+
                                '<td style="vertical-align: middle;">'+res.DESKRIPSI+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="qty_'+id+'" value="1" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+res.ID+');" type="text" name="qty[]" style="width: 100%; text-align: center;" required>'+
                                '</td>'+
                                '<td style="vertical-align: middle; text-align:center;">'+res.SATUAN+'</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="harga_'+id+'" value="'+NumberToMoney(res.HARGA_SATUAN).split('.00').join('')+'" class="form-control" onkeyup="FormatCurrency(this); hitung_total('+res.ID+');" type="text" name="harga[]" style="width: 100%; text-align: right;" required>'+
                                '</td>'+
                                '<td style="vertical-align: middle;">'+
                                    '<input id="total_'+id+'" value="'+total+'" class="form-control" onkeyup="FormatCurrency(this);" type="text" name="total[]" style="width: 100%; text-align: right;" readonly>'+
                                '</td>'+
                            '</tr>';

                $('#item_row').append(isi);
                hitung_total(res.ID);
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
        $.ajax({
            url : '<?php echo base_url(); ?>customer_c/get_customer_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                $('#cust_address').val(res.ALAMAT_TAGIH);
                $('#ship_to').val(res.ALAMAT_KIRIM);
                $('#cust_name').val(res.NAMA_PELANGGAN);

                get_invoice_aktif(id);
            }
        });
    }

    function get_invoice_aktif(id){
        $.ajax({
            url : '<?php echo base_url(); ?>receive_payments_c/get_invoice_aktif',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(result){
                var isine = "";
                if(result.length > 0){
                    $.each(result,function(i,res){

                        var subtotal = parseFloat(res.SUB_TOTAL);
                        var terbayar = parseFloat(res.TOTAL_TERBAYAR);

                        var am_due = subtotal - terbayar;

                        isine += '<tr>'+
                                    '<td style="vertical-align:middle; text-align:center;">'+
                                    '<input name="id_penjualan[]" type="checkbox" value="'+res.ID+'" class="cek_invoice" onclick="cek_applied(this, '+res.ID+');" >'+
                                    '<input name="id_penjualan2[]" id="id_penjualan2_'+res.ID+'" type="hidden" value="" >'+
                                    '</td>'+
                                    '<td style="vertical-align:middle; text-align:left;">'+res.TGL_TRX+'</td>'+
                                    '<td style="vertical-align:middle; text-align:left;">'+res.NO_BUKTI+'</td>'+
                                    '<td style="vertical-align:middle; text-align:right;">'+NumberToMoney(res.SUB_TOTAL).split('.00').join('')+'</td>'+
                                    '<td style="vertical-align:middle; text-align:right;">'+NumberToMoney(am_due).split('.00').join('')+'</td>'+
                                    '<td style="vertical-align:middle; text-align:center;">'+
                                    '<input style="text-align:right;" type="text" name="payment[]" value="" onkeyup="FormatCurrency(this); hitung_applied();" id="payment_'+res.ID+'" />'+
                                    '<input style="text-align:right;" type="hidden" name="orig_due[]" value="'+res.SUB_TOTAL+'" onkeyup="FormatCurrency(this);" id="orig_due_'+res.ID+'" />'+
                                    '<input style="text-align:right;" type="hidden" name="am_due[]" value="'+am_due+'" onkeyup="FormatCurrency(this);" id="am_due_'+res.ID+'" />'+
                                    '<input style="text-align:right;" type="hidden" name="no_bukti[]" value="'+res.NO_BUKTI+'"/>'+
                                    '<input style="text-align:right;" type="hidden" name="tgl_invoice[]" value="'+res.TGL_TRX+'"/>'+
                                    '</td>'+
                                '</tr>';
                    });
                } else {
                    isine = "<tr><td colspan='6' style='text-align:center;'> There are no unpaid invoices for this customer </td></tr>";
                }

                $('#item_row').html(isine);
                hitung_amount_due();
            }
        });
    }

    function cek_applied(e, id){
        if ($(e).is(':checked')) {
            var am_due = $('#am_due_'+id).val();
            $('#payment_'+id).val(NumberToMoney(am_due).split('.00').join(''));
            $('#id_penjualan2_'+id).val(id);
        } else {
            $('#payment_'+id).val('');
            $('#id_penjualan2_'+id).val('');
        }

        hitung_amount_due();
    }

    function hitung_amount_due(){
        var nilai = 0;

        $("input:checkbox[class=cek_invoice]:checked").each(function () {
            var a = $(this).val();
            nilai += parseFloat($('#am_due_'+a).val());
        });

        $('#subtotal_txt').html(NumberToMoney(nilai).split('.00').join(''));
        $('#amount_due').val(nilai);

        hitung_applied();
    }

    function hitung_applied(){
        var nilai = 0;

        $("input:checkbox[class=cek_invoice]:checked").each(function () {
            var a = $(this).val();
            var b = parseFloat($('#payment_'+a).val().split(',').join(''));

            nilai += parseFloat(b);
        });

        $('#applied_txt').html(NumberToMoney(nilai).split('.00').join(''));
        $('#amount').val(NumberToMoney(nilai).split('.00').join(''));
        $('#applied_amount').val(nilai);
    }
    
    function get_metode_bayar(e, metode){
        $('#metode_bayar').val(metode);
        $('.btn_method').removeClass('selected_btn');
        $(e).addClass("selected_btn");
    }
</script>