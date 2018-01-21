
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
            <div class="card-header bg-success">REPORT
                
            </div>

            <div class="card-block cards_section_margin" style="padding: 0px;">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th style="background: #d7d7d8;">REPORT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tbl_customer selected_cust" id="paneltab10" onclick="get_information('tab10');" style="cursor: pointer;">
                        <td>Acountant & Taxes</td>
                    </tr>

                    <tr class="tbl_customer" id="paneltab1" onclick="get_information('tab1');" style="cursor: pointer;">
                        <td>Company & Financial</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab2" onclick="get_information('tab2');" style="cursor: pointer;">
                        <td>Customer & Receivable</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab3" onclick="get_information('tab3');" style="cursor: pointer;">
                        <td>Sales</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab4" onclick="get_information('tab4');" style="cursor: pointer;">
                        <td>Jobs, Time & Miliage</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab5" onclick="get_information('tab5');" style="cursor: pointer;">
                        <td>Vendor & Payable</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab6" onclick="get_information('tab6');" style="cursor: pointer;">
                        <td>Purchases</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab7" onclick="get_information('tab7');" style="cursor: pointer;">
                        <td>Inventory</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab8" onclick="get_information('tab8');" style="cursor: pointer;">
                        <td>Employee & Payroll</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab9" onclick="get_information('tab9');" style="cursor: pointer;">
                        <td>Banking</td>
                    </tr>
                    
                    <tr class="tbl_customer" id="paneltab11" onclick="get_information('tab11');" style="cursor: pointer;">
                        <td>Budgets & Forecast</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab12" onclick="get_information('tab12');" style="cursor: pointer;">
                        <td>List</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab13" onclick="get_information('tab13');" style="cursor: pointer;">
                        <td>Contractor</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab14" onclick="get_information('tab14');" style="cursor: pointer;">
                        <td>Mfg & Wholesale</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab15" onclick="get_information('tab15');" style="cursor: pointer;">
                        <td>Profesional Service</td>
                    </tr>
                    <tr class="tbl_customer" id="paneltab16" onclick="get_information('tab16');" style="cursor: pointer;">
                        <td>Retail</td>
                    </tr>
                    <tr class="tbl_customer" id="panel17" onclick="get_information('tab17');" style="cursor: pointer;">
                        <td>Non Profit</td>
                    </tr>
                </tbody>
                </table>
                        
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        
        <div class="card">
            <div class="card-header bg-success disabled">REPORT
                
            </div>
            <div class="card-block cards_section_margin" style="padding: 0px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-block">
                            <div class="tab-content">
                                <div class="tab-pane" id="tab1" >
                                    <br>
                                    <h3>Profit & Loss</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss Standart</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss YTD Comparison</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss Prev Year Comparison</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss By Job</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss By Class</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss Unclassified</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Income & Expenses </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Income By Customer Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Income By Customer Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Income By Vendor Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Income By Vendor Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Income & Expenses Graph</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Balance Sheet & Net Worth </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Balance Sheet Standart</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Balance Sheet Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Balance Sheet Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Balance Sheet Prev Year Comparison</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Balance Sheet By Class</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Net Worth Graph</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Cash Flow </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Statement of Cash Flow</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Cash Flow Forecast</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2" style="display: none;">
                                    <br>
                                    <h3>A/R Aging</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">A/R Aging Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">A/R Aging Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Accounts Receivable Graph</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Invoices</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Collections Report</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Average Days To Pay Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Average Days To Pay</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Customer Balance </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Customer Balance Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Customer Balance Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Uncosted Cost By Job</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Transaction List By Customer</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>List </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Customer Phone List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Customer Contact List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Item Price List</h5>
                                        </div>
                                    </div> 
                                </div>

                                <div class="tab-pane" id="tab3" style="display: none;">
                                    <br>
                                    <h3>Sales</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Customer Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Customer Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Ship To Address</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Pending Sales</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales Graph</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Sales By Item </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Item Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Item Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Sales By Rep </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Rep Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Rep Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Open Sales Order </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Sales Order By Customer</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Sales Order By Item</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab4" style="display: none;">
                                    <br>
                                    <h3>Job & Profitability</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Profitability Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Profitability Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss By Job</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Item Profitability</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Unbilled Cost By Job</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Job Estimate </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Estimate vs Actual Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Estimate vs Actual Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Progress Invoices vs Estimate</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Item Estimate vs Actuals</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Estimate By Job</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Purchase Order By Job</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Time</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Time By Job Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Time By Job Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Time By Name</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Time By Item</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Mileage </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Miliage By Vehicle Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Miliage By Vehicle Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Miliage By Job Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Miliage By Job Detail</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab5" style="display: none;">
                                    <br>
                                    <h3>A/P Aging</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">A/P Aging Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">A/P Aging Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Accounts Payable Graph</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Vendor Balance </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Balance Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Balance Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Unpaid Bills Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Transaction List By Vendor</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>1099</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">1099 Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">1099 Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Sales Tax </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales Tax Liability</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales Tax Revenue Summary</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>List</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Phone List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Contact List</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab6" style="display: none;">
                                    <br>
                                    <h3>Purchase By Vendor</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Purchase By Vendor Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Purchase By Vendor Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Purchase By Item </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Purchase By Item Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Purchase By Item Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Open Purchase Order</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Purchase Orders</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Purchase Orders Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Purchase Orders By Job</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab7" style="display: none;">
                                    <br>
                                    <h3>Inventory Valuation</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Inventory Valuation Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Inventory Valuation Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Inventory Stock Status </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Inventory Stock Status By Item</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Inventory Stock Status By Vendor</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Physical Inventory Worksheet</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Pending Builds</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab8" style="display: none;">
                                    <br>
                                    <h3>Payroll</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Payroll Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Payroll Item Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Payroll Detail Review</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Payroll Transaction By Payee</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Payroll Transaction Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Payroll Lialibility Balances</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Payroll Item Listing</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Employee Earnings Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Employee State Taxes Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Employee </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Employee Contact List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Employee With Holding</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Paid Time Off List</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Employee Organizer </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Emergency Contact List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">New Hire List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Terminated Employees List</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Worker Compensation </h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Worker Compensation Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Worker Compensation By Code and Employee</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Worker Compensation By Job Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Worker Compensation Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Worker Compensation Listing</h5>
                                        </div>
                                    </div>  
                                </div>

                                <div class="tab-pane" id="tab9" style="display: none;">
                                    <br>
                                    <h3>Banking</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Deposit Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Check Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Missing Checks</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Reconciliation Discrepancy</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Previous Reconciliation</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane active" id="tab10">
                                    <br>
                                    <h3>Accountant Only</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" onclick="window.open('<?=base_url();?>report/rep_adj_trial_balance_c');" >
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Adjusted Trial Balance</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Adjusting Trial Entries</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Accountant Activity</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Trial Balance</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">General Ledger</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Transaction Detail By Account</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" onclick="window.open('<?=base_url();?>report/rep_jurnal_c');" >
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Journal</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" onclick="window.open('<?=base_url();?>report/rep_jurnal_c');" >
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Audit Trail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Closing Date Exception Report</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Voided/Deleted Transaction Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Voided/Deleted Transaction Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Transaction List By Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Listing</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Account Listing</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Fixed Asset Listing</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Income Tax</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Income Tax Preparation</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Income Tax Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Income Tax Detail</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab11" style="display: none;">
                                    <br>
                                    <h3>Budgets</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Budgets Overview</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Budgets vs Actual</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss Budget Performance</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Budget vs Actual Graph</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Forecasting</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Forecast Overview</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Forecast vs Actual</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab12" style="display: none;">
                                    <br>
                                    <h3>Customer</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Customer Phone List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Customer Contact List</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Vendor</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Phone List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Contact List</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Employee</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Employee Contact List</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Other Name</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Other Name Phone List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Other Name Contact List</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Listing</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Acount Listing</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Item Price List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Item Listing</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Unit of Measure Set List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">U/M Sets With Related List</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Item With Units of Measure</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Payroll Item Listing</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Worker Compentation Listing</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Fixed Asset Listing</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Terms Listing</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">To Do Notes</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Memorized Transaction Listing</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab13" style="display: none;">
                                    <br>
                                    <h3>Job Costs & Bills</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Status</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost by Vendor & Job Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost by Vendor & Job Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost by Job & Vendor Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost by Job & Vendor Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Cost to Complete by Job Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Cost to Complete by Job Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Unpaid Bills by Job</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Unpaid Bills by Vendor</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Expenses Not Assigned to Jobs</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Billed/Unbilled Hours</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Billed/Unbilled Hours by Person</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Billed/Unbilled Hours by Person and Job</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Billed/Unbilled Hours by Person and Activity</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Open Purchase Order</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Purchase Order by Vendor</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Purchase Order by Vendor Detail</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Other</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Certified Payroll - Box 1 Employee Information</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Account Information</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Customer Account Information</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab14" style="display: none;">
                                    <br>
                                    <h3>Sales</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales Rep by Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Product</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Customer Type</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales Volume by Customer</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales By Class & Item Type</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profibiality By Product</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Open Order</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Sales Order by Item</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Sales Order by Customer</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Purchase Order by Item</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Inventory</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Inventory reorder By Vendor</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Physical Inventory Worksheet</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab15" style="display: none;">
                                    <br>
                                    <h3>Project</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Project Cost Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Unbilled Expenses By Product</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Expenses Not Assigned to Projects</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Billed vs Proposal by Projects</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Balance by Customer Projects</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">A/R Aging Detail by Class</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Project Status</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Project Contact List</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Billed/Unbilled Hours</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Billed/Unbilled Hours by Person</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Billed/Unbilled Hours by Person and Project</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Billed/Unbilled Hours by Person and Activity</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Job Cost & Bills</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost by Vendor & Job Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost by Vendor & Job Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost by Job & Vendor Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Job Cost by Job & Vendor Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Cost to Complete by Job Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Cost to Complete by Job Detail</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab16" style="display: none;">
                                    <br>
                                    <h3>Company</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Profit & Loss Monhtly Comparasion</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Balance Sheet Monthly Comparasion</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Sales</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales Graph</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Monthly Sales by Customer</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Groos Margin by Inventory Item</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Customer</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Customer Payment by Payment Item</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Estimates by Customer</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Vendor</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Bills by Due Date</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Sales Tax by Lialibility</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Purchase Volume by Vendor</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Returns Summary</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Vendor Returns Detail</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Open Purchase Orders by Vendor</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Account Payable Graph</h5>
                                        </div>
                                    </div>
                                </div>

                                 <div class="tab-pane" id="tab17" style="display: none;">
                                    <br>
                                    <h3>Donor/Grants</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Biggest Donor/Grants</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Budget vs Actual by Donor/Grants</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Donor/Grants Report</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Donor Contribution Summary</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Program/Projects</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Budget vs Actual by Program/Projects</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Program/Project Report</h5>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Other</h3>
                                   <div class="row no-gutters">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Statement of Financial Income and Expenses</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Statement of FInancial Position</h5>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                            <figure class="imghvr-push-down"><img src="<?=base_url();?>/assets/img/gallery/thumbs/1.png" alt="example-image"/>
                                                <figcaption >
                                                    <div style="margin: 0 auto;text-align: center;" >
                                                    <button class="btn btn-labeled btn-success" name="">
                                                        <span class="btn-label">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        VIEW
                                                    </button>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h5 align="center">Statement of Functional Expenses</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function get_information(val) {
        $('.tab-pane').hide();
        $(".tbl_customer").removeClass("selected_cust");
        $("#panel"+val).addClass("selected_cust");
        $('#'+val).show();
    }

</script>