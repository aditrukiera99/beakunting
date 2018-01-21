<style type="text/css">
	.table_report>tbody>tr>td {
	    padding: 1px 5px 1px 5px;
	    line-height: 1.42857143;
	    vertical-align: top;
	    border-top: 1px solid #fff !important;
	}
</style>

<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4">
        <div class="form-group row">
            <div class="col-lg-12 col-xl-12">
                <label for="name4" class=" col-form-label" style="float: left; margin-top: 0px;">SHOW REPORT FOR</label>
                <div class="input-group">
                    <select class="form-control">
	                    <option>Item 1</option>
	                    <option>Item 2</option>
	                    <option>Item 3</option>
	                    <option>Item 4</option>
	                    <option>Item 5</option>
	                </select>
                </div>
            </div>
        </div>                       
    </div> 

    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="form-group row">
            <div class="col-lg-12 col-xl-12">
                <label for="name4" class=" col-form-label" style="margin-top: 0px;">FROM</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                     <input type="text" name="tgl" class="form-control" readonly="" id="dp1" value="<?=date('d-m-Y');?>" style="background: #FFF;">
                </div>
            </div>
        </div>                       
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="form-group row">
            <div class="col-lg-12 col-xl-12">
                <label for="name4" class=" col-form-label" style="margin-top: 0px;">TO</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                     <input type="text" name="tgl" class="form-control" readonly="" id="dp11" value="<?=date('d-m-Y');?>" style="background: #FFF;">
                </div>
            </div>
        </div>                       
    </div>   
</div>

<header class="head" style="    margin-bottom: -25px;">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-file"></i>
                JOURNAL
            </h4>
        </div>
        <div class="col-sm-8">
            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                <button class="btn btn-success">Export to Excel</button>              
                <button class="btn btn-danger">Export to PDF</button>              
            </ol>
        </div>
        </div>
    </div>
</header>
<br>

<table class="table table-bordered table_report">
	<thead>
		<tr>
			<th style="text-align: center;">Type</th>
			<th style="text-align: center;">Date</th>
			<th style="text-align: center;">Num</th>
			<th style="text-align: center;">Name</th>
			<th style="text-align: center;">Memo</th>
			<th style="text-align: center;">Account</th>
			<th style="text-align: center;">Debit</th>
			<th style="text-align: center;">Credit</th>
		</tr>
	</thead>
	<tbody>
		<?PHP 
		$id_voc = "";
		$total_deb = 0;
		$total_kre = 0;
		foreach ($dt as $key => $row) { 
			$total_deb = 0;
			$total_kre = 0;
			$dt_2 = $this->db->query("
				SELECT a.ID, a.TIPE, a.TGL, a.NO_BUKTI, a.KONTAK, a.MEMO, b.KODE_AKUN, b.DEBET, b.KREDIT, c.NAMA_AKUN FROM ak_input_voucher a 
				JOIN ak_input_voucher_detail b ON a.ID = b.ID_VOUCHER
				JOIN ak_kode_akuntansi c ON b.KODE_AKUN = c.KODE_AKUN
				WHERE b.ID_VOUCHER = '$row->ID'
				ORDER BY a.ID, b.ID_VOUCHER
			")->result();

			foreach ($dt_2 as $key => $row_2) {
				$total_deb += $row_2->DEBET;
				$total_kre += $row_2->KREDIT;
		?>

			<?PHP if($id_voc != $row_2->ID){ ?>
			<tr>
				<td style="text-align: center;"><?=$row_2->TIPE;?></td>
				<td style="text-align: center;"><?=$row_2->TGL;?></td>
				<td><?=$row_2->NO_BUKTI;?></td>
				<td><?=$row_2->KONTAK;?></td>
				<td><?=$row_2->MEMO;?></td>
				<td><?=$row_2->KODE_AKUN;?> - <?=$row_2->NAMA_AKUN;?></td>
				<td style="text-align: right;"><?=number_format($row_2->DEBET);?></td>
				<td style="text-align: right;"><?=number_format($row_2->KREDIT);?></td>
			</tr>
			<?PHP } else {  ?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><?=$row_2->MEMO;?></td>
				<td><?=$row_2->KODE_AKUN;?> - <?=$row_2->NAMA_AKUN;?></td>
				<td style="text-align: right;"><?=number_format($row_2->DEBET);?></td>
				<td style="text-align: right;"><?=number_format($row_2->KREDIT);?></td>
			</tr>
			<?PHP } ?>

			<?PHP $id_voc = $row_2->ID; ?>

			<?PHP } ?>

			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td style="border-top: 3px solid #000 !important; text-align: right;"><b><?=number_format($total_deb);?></b></td>
				<td style="border-top: 3px solid #000 !important; text-align: right;"><b><?=number_format($total_kre);?></b></td>
			</tr>

			<tr><td colspan="8">&nbsp;</td></tr>
		<?PHP } ?>
	</tbody>
</table>