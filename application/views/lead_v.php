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
<!-- <header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                Customer
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
                <li class="active breadcrumb-item">Customer</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br> -->
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header bg-success">LEAD
                <a href="<?=base_url();?>add_lead_c">
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
                        <th style="background: #d7d7d8;">TYPE</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach ($dt as $key => $row) { ?>
                    <tr id="data_<?=$row->ID;?>" onclick="get_information('<?=$row->ID;?>');" style="cursor: pointer;" class="tbl_customer">
                        <td><?=$row->NAMA;?></td>
                        <td><?=$row->STATUS;?></td>
                    </tr>
                    <?PHP } ?>
                </tbody>
                </table>
                        
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header bg-primary disabled">LEAD INFORMATION 
                <button type="button" class="btn btn-labeled btn-warning" style="float: right;">
                    <span class="btn-label">
                        <i class="fa fa-edit"></i>
                    </span>
                    Edit
                </button>
            </div>
            <br>
            <div class="card-block cards_section_margin" style="padding: 0px;">
                <center id="info_1"> <h4>Choose a lead from the list to see their information</h4> <br></center>
                <div class="card-block" style="display: none;" id="info_2">
                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Lead Name
                        </div>
                        <div class="col-lg-3" id="info_lead" style="font-weight: bold;">
                              
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Lead Status
                        </div>
                        <div class="col-lg-3" id="lead_status" style="font-weight: bold;">
                               
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Company Name
                        </div>
                        <div class="col-lg-3" id="company_nama" style="font-weight: bold;">
                              
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Main Phone
                        </div>
                        <div class="col-lg-3" id="main_phone" style="font-weight: bold;">
                            
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Website
                        </div>
                        <div class="col-lg-3" id="website" style="font-weight: bold;">
                            
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2 text-lg-right">
                            Main Email
                        </div>
                        <div class="col-lg-3" id="main_email" style="font-weight: bold;">
                              
                        </div>
                        <div class="col-lg-2"></div>
                    </div>


                </div>
            </div>
        </div>
            
        <br>

        <div class="card">
            <div class="card-header bg-primary disabled">To Do's
                <button type="button" class="btn btn-labeled btn-info" style="float: right;">
                    <span class="btn-label">
                        <i class="fa fa-plus-square"></i>
                    </span>
                    New Transaction
                </button>
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
            url : '<?php echo base_url(); ?>lead_c/get_lead_info',
            data : {id:id},
            type : "POST",
            dataType : "json",
            success : function(res){   
                $('#info_lead').html(res.NAMA);
                $('#lead_status').html(res.STATUS);
                $('#company_nama').html(res.COMPANY_NAME);
                $('#main_phone').html(res.PHONE);
                $('#website').html(res.WEB);
                $('#main_emailn').html(res.EMAIL);

                $('#info_1').hide();
                $('#info_2').show();

            }
        });
    }
</script>