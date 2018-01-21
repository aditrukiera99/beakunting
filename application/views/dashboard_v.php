<?PHP 
error_reporting(0);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Be Account</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/logo1.ico"/>

    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/components.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/custom.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/themify/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendors/ionicons/css/ionicons.min.css">

    <!-- end of global styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/datatables/css/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/datatables/css/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/datatables/css/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/datepicker/css/bootstrap-datepicker.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/fullcalendar/css/fullcalendar.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/chosen/css/chosen.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/calendar_custom.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/bootstrap-switch/css/bootstrap-switch.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/fancybox/css/jquery.fancybox.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/fancybox/css/jquery.fancybox-buttons.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/fancybox/css/jquery.fancybox-thumbs.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/imagehover/css/imagehover.min.css" />

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/pages/gallery.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/tables.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/form_layouts.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/form_elements.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/pages/icon.css">
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/profile.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/timeline2.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/gallery.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/c3/css/c3.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/toastr/css/toastr.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/vendors/switchery/css/switchery.min.css" />

    <link rel="stylesheet" href="<?=base_url();?>material/dialog/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="<?=base_url();?>material/dialog/css/style.css"> <!-- Resource style -->
    <script src="<?=base_url();?>material/dialog/js/modernizr.js"></script>
    <!-- <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/general_components.css"/> -->
    

    <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/pages/toastr.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <style type="text/css">
        .chosen-single{
            color: #000 !important;
        }
    </style>
</head>

<body class="fixed_header">
<!-- <div class="preloader" style=" position: fixed; width: 100%; height: 100%; top: 0; left: 0; z-index: 100000; backface-visibility: hidden; background: #ffffff;">
    <div class="preloader_img" style="width: 200px; height: 200px; position: absolute; left: 48%; top: 48%; background-position: center; z-index: 999999">
        <img src="<?=base_url();?>assets/img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div> -->
<div class="bg-dark" id="wrap">
    <div id="top" class="fixed">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top" style="background: #f0f5f5;">
            <div class="container-fluid m-0">
                <a class="navbar-brand float-left text-center" href="index.html">
                    <h4 class="" style="color:#0091cd;">BE.ACCOUNTING</h4>
                </a>
                <div class="menu" style="margin-top: 13px;">
                    <span class="toggle-left" id="menu-toggle" style="margin-top: 2px;">
                        <i class="fa fa-bars" style="color:#00334e;"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right">
                    <div class="btn-group" style="margin-left: 25px;margin-top: 3px;">
                        <div class="user-settings no-bg">

                            <button type="button" class="btn bg-gray" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">File </label>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                
                                <a class="dropdown-item" href="edit_user.html">
                                    New Company...</a>
                                <a class="dropdown-item" href="#">
                                    Close Company
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">List </label>
                            </button>
                            <div class="dropdown-menu admire_admin" style="width: 214px;">
                                <a class="dropdown-item" href="<?=base_url();?>accounts_c">
                                    Chart Of Accounts
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>items_c">
                                    Item List
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>fixed_item_c">
                                    Fixed Assets Item List
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>um_set_list_c">
                                    U/M Set List
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>price_list_c">
                                    Price Level List
                                </a>
                                <!-- <a class="dropdown-item" href="<?=base_url();?>billing_rate_c">
                                    Billing Rate Level List
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>sales_tax_code_c">
                                    Sales Tax Code List
                                </a>
                                <!-- <a class="dropdown-item" href="<?=base_url();?>payroll_c">
                                    Payroll Item List
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>payroll_schedule_c">
                                    Payroll Schedule List
                                </a>
                                <!-- <a class="dropdown-item" href="<?=base_url();?>class_list_c">
                                    Class List
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>worker_comp_c">
                                    Worker Comp List
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Other Name List
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Customer & Vendor Profile List
                                </a> -->
                                
                                <!-- <a class="dropdown-item" href="#">
                                    Memorized Transaction List
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Add/Edit Multiple List Entries
                                </a> -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">Accountant </label>
                            </button>
                            <div class="dropdown-menu admire_admin" style="width: 214px;">
                                <a class="dropdown-item" href="<?=base_url();?>akun_center_c">
                                    Accountant Center
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>accounts_c">
                                    Chart Of Acountant
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>fixed_item_c">
                                    Fixed Asset Item List
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>batch_transactions_c">
                                    Batch Enter Transaction
                                </a>
                                <!-- <a class="dropdown-item" href="edit_user.html">
                                    Client Data Riview
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>general_journal_c">
                                    Make General Journal Entries
                                </a>
                                <!-- <a class="dropdown-item" href="edit_user.html">
                                    Send General Journal Entries
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>reconcile_c">
                                    Reconcile
                                </a>
                                <!-- <a class="dropdown-item" href="<?=base_url();?>working_balance_c">
                                    Working Trial Balance
                                </a> -->
                                <!-- <a class="dropdown-item" href="edit_user.html">
                                    Set Closing Date
                                </a> -->
                                <!-- <a class="dropdown-item" href="edit_user.html">
                                    Condense Data
                                </a> -->
                                <!-- <a class="dropdown-item" href="edit_user.html">
                                    View Conversation List
                                </a> -->
                                <!-- <a class="dropdown-item" href="edit_user.html">
                                    Remote Access
                                </a> -->
                                <!-- <a class="dropdown-item" href="edit_user.html">
                                    Manage Fixed Assets
                                </a> -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">Company </label>
                            </button>
                            <div class="dropdown-menu admire_admin" style="width: 220px;">
                                <a class="dropdown-item" href="<?=base_url();?>company_c">
                                    Home Page
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Company Snapshot
                                </a> -->
                                <!-- <a class="dropdown-item" href="<?=base_url();?>calender_c">
                                    Calendar
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Document
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>lead_c">
                                    Lead Center
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>company_c">
                                    My Company
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Advance Service Administrator
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>user_c">
                                    Users
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Costumer Credit Card Protection
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Change Your Password
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Set Closing Date
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>set_budgets_c">
                                    Set Budgets
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>set_forecast_c">
                                    Set Forecast
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    To Do List
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Rimenders
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Alerts Manager
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Maintenance Alerts
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>accounts_c">
                                    Chart Of Accounts
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>general_journal_c">
                                    Make General Journal Entries
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Manage Currency
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Manage Fixed Assets
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>add_vehicle_service_c">
                                    Enter Vihicle Mileage
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Prepare Letters with Envelope
                                </a> -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">Customers </label>
                            </button>
                            <div class="dropdown-menu admire_admin" style="width: 270px;">
                                <a class="dropdown-item" href="<?=base_url();?>customer_c">
                                    Customers Center
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>estimate_c">
                                    Create Estimates
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>sales_order_c">
                                    Create Sales Order
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Sales Order Fullfilment Worksheet
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>invoice_c">
                                    Create Invoices
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>batch_invoice_c">
                                    Create Batch Invoices
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>sales_receipt_c">
                                    Enter Sales Receipt
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Enter Statement Charges
                                </a>
                                <a class="dropdown-item" href="#">
                                    Create Statement
                                </a>
                                <a class="dropdown-item" href="#">
                                    Assess Finance Charge
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>receive_payments_c">
                                    Receive Payments
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>credit_memo_c">
                                    Create Credit Memos/Refund
                                </a>
                                <!-- <a class="dropdown-item" href="<?=base_url();?>income_tracker_c">
                                    Income Tracker
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Lead Center
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Add Credit Card Processing
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Link Payment Service To File
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Enter Time
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Add Marketing and Customers Tools
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Learn About Point Of Sale
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>items_c">
                                    Item List
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>change_price_c">
                                    Change Item Prices
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Advance Pricing Rules
                                </a> -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">Vendors </label>
                            </button>
                            <div class="dropdown-menu admire_admin" style="width: 270px;">
                                <a class="dropdown-item" href="<?=base_url();?>vendors_c">
                                    Vendors Center
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>bill_c">
                                    Enter Bills
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>pay_bill_c">
                                    Pay Bills
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Sales Tax
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url();?>purchase_order_c">
                                    Create Purchase Order
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>bill_c">
                                    Receive Item And Enter Bills
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>item_receipts_c">
                                    Receive Items
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>enter_bill_receive_item_c">
                                    Enter Bills For Receive Items
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>inventory_center_c">
                                    Inventory Center
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>onhand_c">
                                    Adjust Quantity/Value On Hand
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>build_assembleis_c">
                                    Build Assembleis
                                </a>
                                <a class="dropdown-item" href="<?=base_url();?>items_c">
                                    Item List
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">Employee </label>
                            </button>
                            <div class="dropdown-menu admire_admin" style="width: 270px;">
                                <a class="dropdown-item" href="<?=base_url()?>employee_c">
                                    Employee Center
                                </a>
                                <a class="dropdown-item" href="<?=base_url()?>payroll_c">
                                    Payroll Center
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Enter Time
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url()?>unschedule_payroll_c">
                                    Pay Unschedule Payroll
                                </a>
                                <a class="dropdown-item" href="<?=base_url()?>payroll_schedule_c">
                                    Add or Edit Payroll Schedule
                                </a>
                                <a class="dropdown-item" href="<?=base_url()?>edit_paycheck_c">
                                    Edit/Void Paychecks
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Payroll Taxes and Liabilities
                                </a>
                                <a class="dropdown-item" href="#">
                                    Payroll Tax Forms & W-2s
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Labor Law Posters
                                </a>
                                <a class="dropdown-item" href="#">
                                    Worker Compensation
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Intuit Health Benefit
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Employee Organizer
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    My Payroll Service
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Pay With Direct Deposit
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Payroll Setup
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Manage Payroll Items
                                </a>
                                <a class="dropdown-item" href="#">
                                    Get Payroll Updates
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Billing Rate Level List
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">Banking </label>
                            </button>
                             <div class="dropdown-menu admire_admin" style="width: 270px;">
                                <a class="dropdown-item" href="<?=base_url()?>check_c">
                                    Write Check
                                </a>
                                <a class="dropdown-item" href="#">
                                    Order Check & Envelope
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Enter Credit Card Charges
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Use Register
                                </a> -->
                                <a class="dropdown-item" href="#">
                                    Make Deposits
                                </a>
                                <a class="dropdown-item" href="#">
                                    Transfer Funds
                                </a>
                                <a class="dropdown-item" href="#">
                                    Reconcile
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Bank Feeds
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
                                    Loan Manager
                                </a> -->
                                <a class="dropdown-item" href="#">
                                    Order Names List
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">Master </label>
                            </button>
                             <div class="dropdown-menu admire_admin" style="width: 270px;">
                                <!-- <a class="dropdown-item" href="#">
                                    Sales Rep List
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url()?>customer_type_c">
                                    Customer Type List
                                </a>
                                <a class="dropdown-item" href="<?=base_url()?>vendor_type_c">
                                    Vendor Type List
                                </a>
                                <a class="dropdown-item" href="<?=base_url()?>job_type_c">
                                    Job Type List
                                </a>
                                <a class="dropdown-item" href="<?=base_url()?>terms_c">
                                    Terms List
                                </a>
                                <a class="dropdown-item" href="<?=base_url()?>messages_c">
                                    Customer Messages List
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    Payment Method List
                                </a> -->
                                <a class="dropdown-item" href="<?=base_url()?>ship_via_c">
                                    Ship Via List
                                </a>
                                <a class="dropdown-item" href="<?=base_url()?>vehicle_c">
                                    Vehicle List
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="margin-top: 3px;">
                        <div class="user-settings no-bg">
                        
                            <button type="button" class="btn success_bg_dark" data-toggle="dropdown" style="background: #f0f5f5 !important;">
                                <label class="col-from-label" style="margin-bottom: -0.5rem;color:#00334e; cursor: pointer;">Report </label>
                            </button>
                            <div class="dropdown-menu admire_admin" style="width: 270px;">
                                <a class="dropdown-item" href="<?=base_url()?>report_back_c">
                                    Report Center
                                </a>
                            </div>
                             
                        </div>
                    </div>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left" class="fixed">
            <div class="media user-media bg-mint dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    
                    
                </div>
            </div>
            <!-- #menu -->
            <ul id="menu" class="bg-mint dker">
                <li>
                    <a href="<?=base_url();?>company_c">
                        <i class="fa fa-bank"> </i> &nbsp; My Company
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>income_tracker_c">
                        <i class="fa fa-money"> </i> &nbsp; Income Tracker
                    </a>
                </li>
                <!-- <li>
                    <a href="<?=base_url();?>calender_c">
                        <i class="fa fa-calendar"> </i> &nbsp; Calender
                    </a>
                </li> -->
                <!-- <li >
                    <a href="gallery.html">
                        <i class="ion-pie-graph"> </i> &nbsp; Snapshot
                    </a>
                </li> -->
                <li <?PHP if($view == "customer"){ ?> class="active" <?PHP } ?>>
                    <a href="<?=base_url();?>customer_c">
                        <i class="fa fa-users"> </i> &nbsp; Customer
                    </a>
                </li>
                <li <?PHP if($view == "vendors"){ ?> class="active" <?PHP } ?>>
                    <a href="<?=base_url();?>vendors_c">
                        <i class="ion-android-contacts"> </i> &nbsp; Vendors
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>employee_c">
                        <i class="ion-android-user-menu"> </i> &nbsp; Employees
                    </a>
                </li>
                <!-- <li >
                    <a href="gallery.html">
                        <i class="fa fa-file-archive-o"> </i> &nbsp; Docs
                    </a>
                </li> -->
                <li >
                    <a href="<?=base_url();?>report_back_c">
                        <i class="ion-clipboard"> </i> &nbsp; Reports
                    </a>
                </li>
                <!-- <li >
                    <a href="gallery.html">
                        <i class="fa fa-laptop"> </i> &nbsp; App Center
                    </a>
                </li> -->
                <li>
                    <a href="<?=base_url();?>invoice_c">
                        <i class="ti-receipt"> </i> &nbsp; Invoice
                    </a>
                </li>
                <li <?PHP if($view == "items"){ ?> class="active" <?PHP } ?>>
                    <a href="<?=base_url();?>items_c">
                        <i class="fa fa-cubes"> </i> &nbsp; Item
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>check_c">
                        <i class="fa fa-credit-card"> </i> &nbsp; Check
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>bill_c">
                        <i class="fa fa-shopping-cart"> </i> &nbsp; Bill
                    </a>
                </li>
                <!-- <li >
                    <a href="gallery.html">
                        <i class="fa fa-tasks"> </i> &nbsp; Reg
                    </a>
                </li> -->
                <li <?PHP if($view == "accounts"){ ?> class="active" <?PHP } ?>>
                    <a href="<?=base_url();?>accounts_c">
                        <i class="fa fa-calendar-o"> </i> &nbsp; Acccount
                    </a>
                </li>
                <!-- <li >
                    <a href="gallery.html">
                        <i class="fa fa-clock-o"> </i> &nbsp; Rmnd
                    </a>
                </li>
                <li>
                    <a href="gallery.html">
                        <i class="fa fa-search"> </i> &nbsp; Find
                    </a>
                </li>
                <li >
                    <a href="gallery.html">
                        <i class="fa fa-comments"> </i> &nbsp; Feedback
                    </a>
                </li> -->
                <!-- <li >
                    <a href="gallery.html">
                        <i class="fa fa-plus-square"> </i> &nbsp; Service
                    </a>
                </li> -->
                <!-- <li >
                    <a href="gallery.html">
                        <i class="ion-card"> </i> &nbsp; Add Payroll
                    </a>
                </li>
                <li >
                    <a href="gallery.html">
                        <i class="ion-closed-captioning"> </i> &nbsp; Credit Cards
                    </a>
                </li> -->
            </ul>
            <!-- /#menu -->
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container">
            <div class="outer">
                <div class="inner bg-container">
                    <?php 
                    if($page != ''){
                        $this->load->view($page);
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /#content -->
    </div>
    <!--wrapper-->
</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="<?=base_url();?>assets/js/components.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/fixed_menu.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/js-form.js"></script>

<!-- global scripts end-->
<script type="text/javascript" src="<?=base_url();?>assets/vendors/jquery.uniform/js/jquery.uniform.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/chosen/js/chosen.jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pluginjs/dataTables.tableTools.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pluginjs/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datatables/js/dataTables.scroller.min.js"></script>

<script type="text/javascript" src="<?=base_url();?>assets/vendors/inputmask/js/inputmask.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/inputmask/js/jquery.inputmask.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/inputmask/js/inputmask.date.extensions.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/inputmask/js/inputmask.extensions.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/raphael/js/raphael-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/c3/js/c3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/countUp.js/js/countUp.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/fullcalendar/js/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pluginjs/calendarcustom.js" ></script>

<script type="text/javascript" src="<?=base_url();?>assets/vendors/holderjs/js/holder.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/fancybox/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/fancybox/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/fancybox/js/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/fancybox/js/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/fancybox/js/jquery.fancybox-media.js"></script>
<!--End of plugin scripts-->
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/gallery.js"></script>


<script type="text/javascript" src="<?=base_url();?>assets/vendors/inputlimiter/js/jquery.inputlimiter.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/validval/js/jquery.validVal.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/vendors/datetimepicker/js/DateTimePicker.min.js"></script>

<!-- end of plugin scripts -->
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/calendar.js"></script>

<script type="text/javascript" src="<?=base_url();?>assets/vendors/noty/js/jquery.noty.packaged.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/toastr_notifications.js"></script>

<!--end of plugin scripts-->
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/datetime_piker.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/simple_datatables.js"></script>
<!-- <script type="text/javascript" src="<?=base_url();?>assets/js/pages/new_dashboard.js"></script> -->
<script type="text/javascript" src="<?=base_url();?>assets/js/form.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/form_elements.js"></script>
<script src="<?=base_url();?>material/dialog/js/main.js"></script>

<script type="text/javascript">
    $(document).keyup(function(e) {
      // if (e.keyCode === 13) $('.save').click();     // enter
      if (e.keyCode === 27) { // esc
        history.go(-1); // go back
      } 
    });
</script>
</body>
</html>

