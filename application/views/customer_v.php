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
            <div class="card-header bg-success">CUSTOMER
                <a href="<?=base_url();?>add_customer_c">
                    <button type="button" class="btn btn-danger" style="float: right;">
                        <i class="fa fa-plus-square"></i>  Add New
                    </button>
                </a>
            </div>

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
                        <td>0.00</td>
                    </tr>
                    <?PHP } ?>
                </tbody>
                </table>
                        
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header bg-primary disabled">CUSTOMER INFORMATION 
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

        <div class="card">
            <div class="card-header bg-primary disabled">TRANSACTION
                <a href="<?=base_url();?>sales_order_c">
                <button type="button" class="btn btn-labeled btn-info" style="float: right;">
                    <span class="btn-label">
                        <i class="fa fa-plus-square"></i>
                    </span>
                    New Transaction
                </button>
                </a>
            </div>
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
                               
                                <tbody>
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

                $('#info_1').hide();
                $('#info_2').show();

            }
        });
    }
</script>