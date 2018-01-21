<?PHP 
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=AdjTrialBalance.xls");
?>

<style>
.gridth {
    background: #1793d1;
    vertical-align: middle;
    color : #FFF;
    text-align: center;
    height: 30px;
    font-size: 15px;
}
.gridtd {
    vertical-align: middle;
    font-size: 17px;
    height: 25px;
    padding-left: 5px;
    padding-right: 5px;
    border-left: 1px solid black;
    border-right: 1px solid black;
}
.grid {
    border-collapse: collapse;
}

table th {
  border: 1px solid black;
}

.grid td{
  border-left: 1px solid black;
  border-right: 1px solid black;
}

.kolom_header{
    height: 40px;
    background: #388ed1;
    padding-left: 5px;
    padding-right: 5px;
    font-size: 17px;
}

</style>

<?PHP 
    $voc_now = "";
    $old_voc = "";
?>

<table cellspacing="0" align="left"> 
    <tr align="center">
        <td align="left" colspan="7">
            <h5>
                MY COMPANY <br>
                Address : NY Street 402, Washington DC 
            </h5>
        </td>
    </tr>
</table>


<table align="center">
    <tr>
        <td align="center" colspan="7">
            <h4>
                ADJUSTED TRIAL BALANCE<br>
                <?=strtoupper($judul);?>   
            </h4>
        </td>
    </tr>
</table>

<table class="table table-bordered table_report">
    <thead>
        <tr>
            <th style="vertical-align: middle; text-align: center;" rowspan="2">Account</th>
            <th style="vertical-align: middle; text-align: center;" colspan="2">Unadjusted Balance</th>
            <th style="vertical-align: middle; text-align: center;" colspan="2">Adjustments</th>
            <th style="vertical-align: middle; text-align: center;" colspan="2">Adjusted Balance</th>
        </tr>

        <tr>
            <th style="vertical-align: middle; text-align: center;">Debit</th>
            <th style="vertical-align: middle; text-align: center;">Credit</th>

            <th style="vertical-align: middle; text-align: center;">Debit</th>
            <th style="vertical-align: middle; text-align: center;">Credit</th>

            <th style="vertical-align: middle; text-align: center;">Debit</th>
            <th style="vertical-align: middle; text-align: center;">Credit</th>
        </tr>
    </thead>
    <tbody>
        <?PHP 
        $id_voc = "";
        $total_deb_all = 0;
        $total_kre_all = 0;
        foreach ($dt as $key => $row) { 
            $total_deb_all += $row->DEBET;
            $total_kre_all += $row->KREDIT;
        ?>

            <tr>
                <td style="text-align: left;"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></td>
                <td style="text-align: right;"><?=number_format($row->DEBET);?></td>
                <td style="text-align: right;"><?=number_format($row->KREDIT);?></td>
                <td style="text-align: right;"><?=number_format(0);?></td>
                <td style="text-align: right;"><?=number_format(0);?></td>
                <td style="text-align: right;"><?=number_format($row->DEBET);?></td>
                <td style="text-align: right;"><?=number_format($row->KREDIT);?></td>
            </tr>

        <?PHP } ?>

        <?PHP 
        if(count($dt) == 0){
            echo '<tr><td colspan="8" style="text-align:center;"><b>There is no data available on this date</b></td></tr>';
        } else { ?>
        <tr>
                <td colspan="5" style="border-top: 3px solid #000 !important; text-align: center; vertical-align: middle;"><b>TOTAL</b></td>
                <td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b><?=number_format($total_deb_all);?></b></td>
                <td style="border-top: 3px solid #000 !important; text-align: right; font-size: 20px;"><b><?=number_format($total_kre_all);?></b></td>
            </tr>
        <?PHP } ?>
    </tbody>
</table>

<?PHP if(count($dt) == 0){ ?>

<table align="center" class="grid" style="width:100%;">
    <tr>
        <td class='gridtd' align="center"> <b> Tidak ada data yang dapat ditampilkan </b> </td>
    </tr>
</table>

<?PHP } ?>

<?PHP 
    function format_akuntansi($value)
    {
        if($value > 0){
            $value = number_format($value, 2);
        } else if($value == 0){
            $value = 0;
        } else {
            $value = number_format(abs($value), 2);
        }

        return $value;
    }
?>




<?PHP
    exit();
?>