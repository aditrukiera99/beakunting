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

<form class="form-horizontal" method="post" action="<?=base_url();?>sales_order_c">
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
                                    <div class="col-lg-3 col-xl-3 text-lg-right">
                                        <label for="name4" class=" col-form-label">Received From</label>
                                    </div>
                                    <div class="col-lg-8 col-xl-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-users"></i>
                                            </span>
                                            <select class="form-control chzn-select" name="cust_id" onchange="get_cust_info(this.value);" required>
                                                <option value="">Choose a customer</option>
                                                <?PHP foreach ($get_cust as $key => $row) { ?>
                                                <option value="<?=$row->ID;?>"><?=$row->NAMA_PELANGGAN;?></option>
                                                <?PHP } ?>
                                            </select>
                                            <input type="hidden" name="cust_name" id="cust_name" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 text-lg-right">
                                        <label for="so" class="col-form-label">Amount</label>
                                    </div>
                                    <div class="col-lg-8 col-xl-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-money"></i>
                                            </span>
                                            <input type="text" name="so_number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    
                                </div> 

                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 text-lg-right">
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
                                    <div class="col-lg-3 col-xl-3 text-lg-right">
                                        <label for="so" class="col-form-label">#Referrence</label>
                                    </div>
                                    <div class="col-lg-8 col-xl-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tags"></i>
                                            </span>
                                            <input type="text" name="so_number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 text-lg-right">
                                        
                                    </div>
                                    <div class="col-lg-8 col-xl-4">
                                        <div class="btn-group button_group_rounded btn_group_padding" role="group" >
                                                <button type="button" class="btn btn-labeled btn-success" style="font-size: 22px;">
                                                    <span class="btn-label">
                                                        <i class="fa fa-money"></i>
                                                    </span>
                                                       CASH
                                                </button>

                                                <button type="button" class="btn btn-labeled btn-success" style="font-size: 22px;">
                                                    <span class="btn-label">
                                                        <i class="fa fa-credit-card"></i>
                                                    </span>
                                                       CREDIT CARD
                                                </button>

                                                <button type="button" class="btn btn-labeled btn-success" style="font-size: 22px;">
                                                    <span class="btn-label">
                                                        <i class="ion-ios7-paper"></i>
                                                    </span>
                                                       CHECK
                                                </button>

                                                <button type="button" class="btn btn-labeled btn-success" style="font-size: 22px;">
                                                    <span class="btn-label">
                                                        <i class="ion-ios7-paper"></i>
                                                    </span>
                                                       E CHECK
                                                </button>

                                                <button type="button" class="btn btn-labeled btn-success" style="font-size: 22px;">
                                                    <span class="btn-label">
                                                        <i class="ti-wallet"></i>
                                                    </span>
                                                       MASTER CARD
                                                </button>
                                                           
                                                       </div>
                                    </div>
                                    
                                </div>  
                                <                             
                                <!-- last name-->
                            </fieldset>
                        </div>
                                   
                       
                    </div>                                
                </div>

               
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
                    
                </div>

                <div class="col-lg-7">
                    

                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-6 text-lg-right">
                            <label for="name4" class=" col-form-label"> Amount Due </label> 
                        </div>
                        <div class="col-lg-3 col-xl-4 text-lg-right">
                            <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 25px;" id="subtotal_txt">0.00</label>
                            <input type="hidden" name="subtotal" id="subtotal">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-6 text-lg-right">
                            <label for="name4" class=" col-form-label"> Applied </label> 
                        </div>
                        <div class="col-lg-3 col-xl-4 text-lg-right">
                            <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 25px;" id="subtotal_txt">0.00</label>
                            <input type="hidden" name="subtotal" id="subtotal">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3 col-xl-6 text-lg-right">
                            <label for="name4" class=" col-form-label"> Discount And Credit Applied </label> 
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
                                Save S.O
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