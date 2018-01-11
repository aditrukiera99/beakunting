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
            <div class="card-header bg-success">CUSTOMER </div>

            <div class="card-block cards_section_margin" style="padding: 0px;">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="background: #d7d7d8;">NAME</th>
                        <th style="background: #d7d7d8;">BALANCE</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach ($dt as $key => $row) { ?>
                    <tr id="data_<?=$row->ID;?>" onclick="get_information('<?=$row->ID;?>');" style="cursor: pointer;" class="tbl_customer">
                        <td><?php if($row->NAMA_USAHA == "" || $row->NAMA_USAHA == null){ echo $row->NAMA_PELANGGAN; } else { echo $row->NAMA_USAHA; } ?></td>
                        <td><?=number_format($row->BALANCE - $row->PAID - $row->PAID2);?></td>
                    </tr>
                    <?PHP } ?>
                </tbody>
                </table>
                        
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <button onclick="window.location = '<?=base_url();?>add_customer_c'; " class="btn btn-danger"><i class="fa fa-plus"></i> Add Customer</button>
        <button onclick="window.location = '<?=base_url();?>estimate_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Estimate</button>
        <button onclick="window.location = '<?=base_url();?>sales_order_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Sales Order</button>
        <button onclick="window.location = '<?=base_url();?>invoice_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Invoice</button>
        <button onclick="window.location = '<?=base_url();?>receive_payments_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Receive Payments</button>
        <button onclick="window.location = '<?=base_url();?>credit_memo_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Credit Memo / Refund</button>
        <div class="card" style="margin-top:10px;">
            <div class="card-header bg-success">CUSTOMER INFORMATION 
                <button type="button" class="btn btn-labeled btn-warning" style="float: right; display: none;" id="info_4">
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
                            Company Name
                        </div>
                        <div class="col-lg-3" id="info_company" style="font-weight: bold;">
                            Ms Renee Barley    
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-1">
                            Phone
                        </div>
                        <div class="col-lg-4" id="info_phone" style="font-weight: bold;">
                            08927166126    
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Full Name
                        </div>
                        <div class="col-lg-3" id="info_name" style="font-weight: bold;">
                            Ms Renee Barley    
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-1">
                            Email
                        </div>
                        <div class="col-lg-4" id="info_email" style="font-weight: bold;">
                            adityaeka99@gmail.com    
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2  text-lg-right">
                            Customer Type
                        </div>
                        <div class="col-lg-3" id="info_tipe" style="font-weight: bold;">
                            Residental
                        </div>                        
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Bill To
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
            url : '<?php echo base_url(); ?>customer_c/get_customer_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                $('#info_company').html(res.NAMA_USAHA);
                $('#info_name').html(res.NAMA_PELANGGAN);
                $('#info_phone').html(res.NO_TELP);
                $('#info_tipe').html(res.TIPE);
                $('#info_email').html(res.EMAIL);
                $('#info_alamat_tagih').html(res.ALAMAT_TAGIH);

                get_transaction(id);

                $('#info_1').hide();
                $('#info_2').show();
                $('#info_3').show();
                $('#info_4').show();

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
                        if(res.TIPE == 'Credit Vendor'){
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
                    isine = "<tr><td colspan='5' style='text-align:center;'> There are no transaction for this vendor </td></tr>";
                }

                $('#data_transaction').html(isine);
            }
        });
    }
</script>