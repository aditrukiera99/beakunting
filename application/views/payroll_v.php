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
   
    <div class="col-lg-12">
        <button onclick="window.location = '<?=base_url();?>add_payroll_schedule_c'; " class="btn btn-danger"><i class="fa fa-plus"></i> Add Payroll Schedule</button>
        <button onclick="window.location = '<?=base_url();?>estimate_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Estimate</button>
        <button onclick="window.location = '<?=base_url();?>sales_order_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Sales Order</button>
        <button onclick="window.location = '<?=base_url();?>invoice_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Invoice</button>
        <button onclick="window.location = '<?=base_url();?>receive_payments_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Receive Payments</button>
        <button onclick="window.location = '<?=base_url();?>credit_memo_c'; " class="btn btn-secondary"><i class="fa fa-plus"></i> Credit Memo / Refund</button>
        <div class="card" style="margin-top:10px;height: 500px; overflow-y: scroll;">
            <div class="card-header bg-success">CREATE PAYCHECK
                <button type="button" class="btn btn-labeled btn-warning" style="float: right; display: none;" id="info_4">
                    <span class="btn-label">
                        <i class="fa fa-edit"></i>
                    </span>
                    Edit
                </button>
            </div>
            <br>
            <div class="card">
            <div class="card-block">
                <br>
                <table id="example1" class="display table table-stripped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="bg-success">Process Payroll By</th>
                        <th class="bg-success">Status</th>
                        <th class="bg-success">Payroll Schedule</th>
                        <th class="bg-success">Pay Period</th>
                        <th class="bg-success">Check Date</th>
                        <th class="bg-success">Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP foreach ($data_sch as $key => $row) { ?>
                    <tr>
                        <td><?=$row->CHECK_DATE;?></td>
                        <td>
                            <?php 
                                date_default_timezone_set('Asia/Jakarta');
                                $awal  = date_create($row->CHECK_DATE);
                                $akhir = date_create(); // waktu sekarang
                                $diff  = date_diff( $awal, $akhir );
                                echo $diff->d . ' Day ';
                            ?>      
                        </td>
                        <td><?=$row->NAMA;?></td>
                        <td><?=$row->END_DATE;?></td>
                        <td><?=$row->CHECK_DATE;?></td>
                        <td><button class="btn btn-warning" value="Hapus">Hapus</button></td>
                    </tr>
                    <?PHP } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <div class="card" style="margin-top:20px;height: 500px; overflow-y: scroll;">
            <div class="card-header bg-success">RECENT PAYROLL
                <button type="button" class="btn btn-labeled btn-warning" style="float: right; display: none;" id="info_4">
                    <span class="btn-label">
                        <i class="fa fa-edit"></i>
                    </span>
                    Edit
                </button>
            </div>
            <br>
            <div class="card">
            <div class="card-block">
                <br>
                <table id="example2" class="display table table-stripped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="bg-success">Date</th>
                        <th class="bg-success">Status</th>
                        <th class="bg-success">Paycheck Count</th>
                        <th class="bg-success">Gross Pay</th>
                        <th class="bg-success">Net Pay</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
        </div>

     
       
    </div>
</div>

<script type="text/javascript">
   
</script>