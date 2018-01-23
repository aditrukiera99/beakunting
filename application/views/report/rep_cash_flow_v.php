<style type="text/css">
	.table_report>tbody>tr>td {
	    padding: 1px 5px 1px 5px;
	    line-height: 1.42857143;
	    vertical-align: top;
	    border-top: 1px solid #fff !important;
	}

	.nilai_report:hover{
		color: blue;
		text-decoration: underline;
	}
</style>
<form class="form-horizontal" method="post" action="<?=base_url().$post_url;?>">
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4">
        <div class="form-group row">
            <div class="col-lg-12 col-xl-12">
                <label for="name4" class=" col-form-label" style="float: left; margin-top: 0px;">SHOW REPORT FOR</label>
                <div class="input-group">
                    <select class="form-control" name="sel_date" id="sel_date" onchange="get_daterange(this.value);">
	                    <option <?PHP if($sel_date == 0){ echo "selected"; } ?> value="0">All Time</option>
	                    <option <?PHP if($sel_date == 1){ echo "selected"; } ?> value="1">This Month to Date</option>
	                    <option <?PHP if($sel_date == 2){ echo "selected"; } ?> value="2">Today</option>
	                    <option <?PHP if($sel_date == 3){ echo "selected"; } ?> value="3">This Week</option>
	                    <option <?PHP if($sel_date == 4){ echo "selected"; } ?> value="4">This Month</option>
	                    <option <?PHP if($sel_date == 5){ echo "selected"; } ?> value="5">This Year</option>
	                    <option <?PHP if($sel_date == 6){ echo "selected"; } ?> value="6">Last Day</option>
	                    <option <?PHP if($sel_date == 7){ echo "selected"; } ?> value="7">Last Week</option>
	                    <option <?PHP if($sel_date == 8){ echo "selected"; } ?> value="8">Last Month</option>
	                    <option <?PHP if($sel_date == 9){ echo "selected"; } ?> value="9">Last Year</option>
	                </select>
                </div>
            </div>
        </div>                       
    </div> 

    <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="form-group row">
            <div class="col-lg-12 col-xl-12">
                <label for="name4" class=" col-form-label" style="margin-top: 0px;">FROM</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                     <input type="text" name="from" class="form-control" readonly="" id="dp1" value="<?=$tgl_awal;?>" style="background: #FFF;">
                </div>
            </div>
        </div>                       
    </div>

    <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="form-group row">
            <div class="col-lg-12 col-xl-12">
                <label for="name4" class=" col-form-label" style="margin-top: 0px;">TO</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                     <input type="text" name="to" class="form-control" readonly="" id="dp11" value="<?=$tgl_akhir;?>" style="background: #FFF;">
                </div>
            </div>
        </div>                       
    </div> 

    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="form-group row">
            <div class="col-lg-12 col-xl-12">
                <label for="name4" class=" col-form-label" style="margin-top: 0px;">&nbsp;</label>
                <div class="input-group">
                    <input type="submit" name="cari" value="Search" class="btn btn-info" style="width: 100%;" />
                </div>
            </div>
        </div>                      
    </div>   
</div>
</form>

<form class="form-horizontal" method="post" action="<?=base_url().$post_url;?>" target="blank">
<header class="head" style="margin-bottom: -25px;">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-file"></i>
                Cash Flow
            </h4>
        </div>
        <div class="col-sm-8">
            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
            	<input type="hidden" name="tgl_awal_2" value="<?=$tgl_awal;?>" />
            	<input type="hidden" name="tgl_akhir_2" value="<?=$tgl_akhir;?>" />
                <!-- <input type="submit" class="btn btn-success" name="excel" value="Export to Excel">      
                <input type="submit" class="btn btn-danger" name="pdf" value="Export to PDF">   -->    
            </ol>
        </div>
        </div>
    </div>
</header>
</form>
<br>

<table class="table table-bordered table_report">
	<thead>
		<tr>
			<th style="vertical-align: middle; text-align: center;" rowspan="2">NAME</th>
			<th style="vertical-align: middle; text-align: center;" rowspan="2">VALUE</th>
		</tr>
	</thead>
	<tbody>
		<!-- OPERATING ACT -->
		<tr>
			<td colspan="2" style="text-align: left;"><b>OPERATING ACTIVITIES</b></td>
		</tr>
		<?PHP 
		$id_voc = "";
		$total_1 = 0;
		$total_2 = 0;
		$total_3 = 0;
		
		foreach ($dt as $key => $row) { 
			$total_1 += $row->DEBET - $row->KREDIT;
		?>

			<tr>
				<td style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></td>
				<td style="text-align: right;"><?=number_format($row->DEBET - $row->KREDIT);?></td>
			</tr>

		<?PHP } ?>

		<tr>
			<td style="border-top: 3px solid #000 !important; text-align: center; vertical-align: middle;"><b>Net Cash provided by Operating Activities </b></td>
			<td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b><?=number_format($total_1);?></b></td>
		</tr>

		<tr>
			<td style="border-top: 3px solid #000 !important; text-align: center; vertical-align: middle;"><b>&nbsp;</b></td>
			<td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b>&nbsp;</b></td>
		</tr>

		<!-- INVESTING ACT -->
		<tr>
			<td colspan="2" style="text-align: left;"><b>INVESTING ACTIVITIES</b></td>
		</tr>
		<?PHP 
		$id_voc = "";
		$total_1 = 0;
		$total_2 = 0;
		$total_3 = 0;
		
		foreach ($dt2 as $key => $row) { 
			$total_2 += $row->DEBET - $row->KREDIT;
		?>

			<tr>
				<td style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></td>
				<td style="text-align: right;"><?=number_format($row->DEBET - $row->KREDIT);?></td>
			</tr>

		<?PHP } ?>


		<tr>
			<td style="border-top: 3px solid #000 !important; text-align: center; vertical-align: middle;"><b>Net Cash provided by Investing Activities </b></td>
			<td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b><?=number_format($total_2);?></b></td>
		</tr>

		<tr>
			<td style="border-top: 3px solid #000 !important; text-align: center; vertical-align: middle;"><b>&nbsp;</b></td>
			<td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b>&nbsp;</b></td>
		</tr>

		<!-- FINANCING ACT -->
		<tr>
			<td colspan="2" style="text-align: left;"><b>FINANCING ACTIVITIES</b></td>
		</tr>
		<?PHP 
		$id_voc = "";
		$total_1 = 0;
		$total_2 = 0;
		$total_3 = 0;
		
		foreach ($dt3 as $key => $row) { 
			$total_3 += $row->DEBET - $row->KREDIT;
		?>

			<tr>
				<td style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></td>
				<td style="text-align: right;"><?=number_format($row->DEBET - $row->KREDIT);?></td>
			</tr>

		<?PHP } ?>


		<tr>
			<td style="border-top: 3px solid #000 !important; text-align: center; vertical-align: middle;"><b>Net Cash provided by Financing Activities </b></td>
			<td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b><?=number_format($total_3);?></b></td>
		</tr>

		<tr>
			<td style="border-top: 3px solid #000 !important; text-align: center; vertical-align: middle;"><b>&nbsp;</b></td>
			<td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b>&nbsp;</b></td>
		</tr>




		<tr>
			<td><b>&nbsp;</b></td>
			<td><b>&nbsp;</b></td>
		</tr>
		<tr>
			<td><b>&nbsp;</b></td>
			<td><b>&nbsp;</b></td>
		</tr>

		<tr>
			<td style="border-top: 3px solid #000 !important; text-align: center; vertical-align: middle;"><b>Net Cash provided by Financing Activities </b></td>
			<td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b><?=number_format($total_3);?></b></td>
		</tr>
	</tbody>
</table>

<?PHP 
	function get_link($TIPE, $ID){
		$link = "";
		if($TIPE == 'Estimate'){
            $link = base_url()."estimate_c/detail/".$ID;
        } else if($TIPE == 'Sales Order'){
            $link = base_url()."sales_order_c/detail/".$ID;
        } else if($TIPE == 'INVOICE'){
            $link = base_url()."invoice_c/detail/".$ID;
        } else if($TIPE == 'PAYMENT'){
            $link = base_url()."receive_payments_c/detail/".$ID;
        } else if($TIPE == 'CREDIT'){
            $link = base_url()."credit_memo_c/detail/".$ID;
        } else if($TIPE == 'Purchase Order'){
            $link = base_url()."purchase_order_c/detail/".$ID;
        } else if($TIPE == 'Item Receipt'){
            $link = base_url()."item_receipts_c/detail/".$ID;
        } else if($TIPE == 'BILL'){
            $link = base_url()."bill_c/detail/".$ID;
        } else if($TIPE == 'Credit Vendor'){
            $link = base_url()."credit_vendor_c/detail/".$ID;
        } else if($TIPE == 'BILL PAYMENT'){
            $link = base_url()."pay_bill_c/detail/".$ID;
        }

        return $link;
}
?>

<script type="text/javascript">
	function get_daterange(val) {
		if(val == 0){
			$('#dp1').val('');
			$('#dp11').val('');
		} else if(val == 1){

			<?PHP 
			$tgl = date('d');
			$bln = date('m');
			$thn = date('Y');
			?>

			$('#dp1').val('01-<?=$bln;?>-<?=$thn;?>');
			$('#dp11').val('<?=$tgl;?>-<?=$bln;?>-<?=$thn;?>');
		} else if(val == 2){

			<?PHP 
			$tgl = date('d');
			$bln = date('m');
			$thn = date('Y');
			?>

			$('#dp1').val('<?=$tgl;?>-<?=$bln;?>-<?=$thn;?>');
			$('#dp11').val('<?=$tgl;?>-<?=$bln;?>-<?=$thn;?>');

		} else if(val == 3){

			<?PHP 
			$tgl_1 = date( 'd-m-Y', strtotime( 'monday this week' ) );
			$tgl_2 = date( 'd-m-Y', strtotime( 'sunday this week' ) );
			?>

			$('#dp1').val('<?=$tgl_1;?>');
			$('#dp11').val('<?=$tgl_2;?>');
		
		} else if(val == 4){

			<?PHP 
			$tgl_1 = "01-".date('m-Y');
			$tgl_2 = date( 'd-m-Y', strtotime( 'last day of this month' ) );
			?>

			$('#dp1').val('<?=$tgl_1;?>');
			$('#dp11').val('<?=$tgl_2;?>');

		} else if(val == 5){

			<?PHP 
			$tgl_1 = "01-01-".date('Y');
			$tgl_2 = "31-12-".date('Y');
			?>

			$('#dp1').val('<?=$tgl_1;?>');
			$('#dp11').val('<?=$tgl_2;?>');
		} else if(val == 6){

			<?PHP 
			$tgl_1 = date( 'd-m-Y', strtotime( 'last day' ) );
			$tgl_2 = date( 'd-m-Y', strtotime( 'last day' ) );
			?>

			$('#dp1').val('<?=$tgl_1;?>');
			$('#dp11').val('<?=$tgl_2;?>');

		} else if(val == 7){

			<?PHP 
			$tgl_1 = date( 'd-m-Y', strtotime( 'monday last week' ) );
			$tgl_2 = date( 'd-m-Y', strtotime( 'sunday last week' ) );
			?>

			$('#dp1').val('<?=$tgl_1;?>');
			$('#dp11').val('<?=$tgl_2;?>');

		} else if(val == 8){

			<?PHP 
			$tgl_1 = "01-".date( 'm-Y', strtotime( 'last month' ) );
			$tgl_2 = date( 'd-m-Y', strtotime( 'last day of  last month' ) );
			?>

			$('#dp1').val('<?=$tgl_1;?>');
			$('#dp11').val('<?=$tgl_2;?>');
		
		} else if(val == 9){

			<?PHP 
			$tgl_1 = "01-01-".date( 'Y', strtotime( 'last year' ) );
			$tgl_2 = "31-12-".date( 'Y', strtotime( 'last year' ) );
			?>

			$('#dp1').val('<?=$tgl_1;?>');
			$('#dp11').val('<?=$tgl_2;?>');
		}  
	}
</script>