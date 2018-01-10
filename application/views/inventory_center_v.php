<style type="text/css">
table th{
    padding-top: 2px !important;
    padding-bottom: 2px !important;
}

.selected_cust  {
    background: #49a942;
    color: #FFF;
}

.selected_cust:hover {
    background: #49a942 !important;
    color: #FFF;
} 

</style>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header bg-success">INVENTORY </div>

            <div class="card-block cards_section_margin" style="padding: 0px;">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="background: #d7d7d8;">NAME</th>
                        <th style="background: #d7d7d8;">PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach ($dt as $key => $row) { ?>
                    <tr id="data_<?=$row->ID;?>" onclick="get_information('<?=$row->ID;?>');" style="cursor: pointer;" class="tbl_customer">
                        <td><?=$row->NAMA_PRODUK?></td>
                        <td><?=$row->HARGA_SATUAN?></td>
                    </tr>
                    <?PHP } ?>
                </tbody>
                </table>
                        
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <button onclick="window.location = '<?=base_url();?>add_customer_c'; " class="btn btn-danger"><i class="fa fa-plus"></i> Add Inventory</button>
        <div class="card" style="margin-top:10px;">
            <div class="card-header bg-success">INVENTORY INFORMATION 
                <button type="button" class="btn btn-labeled btn-warning" style="float: right;">
                    <span class="btn-label">
                        <i class="fa fa-edit"></i>
                    </span>
                    Edit
                </button>
            </div>
            <br>
            <div class="card-block cards_section_margin" style="padding: 0px;">
                <center id="info_1"> <h4>Choose a customer from the list to see their information</h4> <br></center>
                <div class="card-block" style="display: none;" id="info_2">
                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Name
                        </div>
                        <div class="col-lg-3" id="info_company" style="font-weight: bold;">
                            Ms Renee Barley    
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-1">
                            Reorder Min
                        </div>
                        <div class="col-lg-4" id="min" style="font-weight: bold;">
                            0
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Description
                        </div>
                        <div class="col-lg-3" id="info_name" style="font-weight: bold;">
                            Ms Renee Barley    
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-1">
                            Max
                        </div>
                        <div class="col-lg-4" id="maks" style="font-weight: bold;">
                            0    
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2  text-lg-right">
                            Prefered Vendor
                        </div>
                        <div class="col-lg-3" id="info_tipe" style="font-weight: bold;">
                            Residental
                        </div>                        
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Unit of Measure
                        </div>
                        <div class="col-lg-4" id="info_alamat_tagih" style="font-weight: bold;">
                            JL . Pahlawan 375 B Malang   
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="card" style="display: none;" id="info_3">

            <div class="card-header bg-success">TRANSACTION</div>
            <div class="card-block cards_section_margin" style="padding: 0px;">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="display table table-stripped table-bordered  table-hover">
                            <thead>
                                <tr>
                                    <th style="background: #d7d7d8;">Type</th>
                                    <th style="background: #d7d7d8;">Num</th>
                                    <th style="background: #d7d7d8;">Date</th>
                                    <th style="background: #d7d7d8;">Account</th>
                                    <th style="background: #d7d7d8;">Amount</th>
                                </tr>
                            </thead>                           
                            <tbody id="data_transaction">
                                <tr>
                                    <td>Payment</td>
                                    <td>1923</td>
                                    <td>05-09-2017</td>
                                    <td>1100 - Account Reliable</td>
                                    <td>1,926.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function get_information(id) {
        $(".tbl_customer").removeClass("selected_cust");
        $("#data_"+id).addClass("selected_cust");
        $.ajax({
            url : '<?php echo base_url(); ?>inventory_center_c/get_inventory_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                $('#info_company').html(res.NAMA_PRODUK);
                $('#info_name').html(res.DESKRIPSI);
                $('#info_phone').html(res.NO_TELP);
                $('#info_tipe').html(res.TIPE);
                $('#info_email').html(res.EMAIL);
                $('#info_alamat_tagih').html(res.SATUAN);

                get_transaction(id);

                $('#info_1').hide();
                $('#info_2').show();
                $('#info_3').show();

            }
        });
    }

    function get_transaction(id) {
        $(".tbl_customer").removeClass("selected_cust");
        $("#data_"+id).addClass("selected_cust");
        $.ajax({
            url : '<?php echo base_url(); ?>customer_c/get_transaction_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(result){   
                var isine = "";
                if(result.length > 0){
                    $.each(result,function(i,res){

                        var subtotal = res.SUB_TOTAL;
                        var sty = "";
                        if(res.TIPE == 'CREDIT'){
                            subtotal = res.SUB_TOTAL * -1;
                            sty = "color:red;";
                        }
                        isine += '<tr style="'+sty+'">'+
                                    '<td style="text-align:left;">'+res.TIPE+'</td>'+
                                    '<td style="text-align:left;">'+res.NO_BUKTI+'</td>'+
                                    '<td style="text-align:left;">'+res.TGL_TRX+'</td>'+
                                    '<td style="text-align:left;">'+res.KODE_AKUN+' - '+res.NAMA_AKUN+'</td>'+
                                    '<td style="text-align:right;">'+NumberToMoney(subtotal)+'</td>'+
                                '</tr>';
                    });
                } else {
                    isine = "<tr><td colspan='5' style='text-align:center;'> There are no transaction for this customer </td></tr>";
                }

                $('#data_transaction').html(isine);
            }
        });
    }
</script>