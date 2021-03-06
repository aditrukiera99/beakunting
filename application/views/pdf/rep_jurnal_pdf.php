<?PHP  
ob_start(); 
$base_url2 =  ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ?  "https" : "http");
$base_url2 .=  "://".$_SERVER['HTTP_HOST'];
$base_url2 .=  str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
?>

<style>


table th{
    height: 30px;
    background: #388ed1;
    padding-left: 5px;
    padding-right: 5px;
    font-size: 14px;
}

</style>

<?PHP 
    $voc_now = "";
    $old_voc = "";
?>

<table cellspacing="0" align="left"> 
    <tr align="center">
        <td align="left">
            <h5>
                MY COMPANY <br>
                Address : NY Street 402, Washington DC 
            </h5>
        </td>
    </tr>
</table>

<hr>

<table align="center">
    <tr>
        <td align="center">
            <h4>
                JOURNAL REPORT<br>
                <?=strtoupper($judul);?>   
            </h4>
        </td>
    </tr>
</table>


<table align="center" class="grid">
    <thead>
        <tr>
            <th style="text-align: center;">Type</th>
            <th style="text-align: center;">Date</th>
            <th style="text-align: center;">Num</th>
            <th style="text-align: center;">Name</th>
            <th style="text-align: center;">Memo</th>
            <th style="text-align: center;">Account</th>
            <th style="text-align: center; width: 10%;">Debit</th>
            <th style="text-align: center; width: 10%;">Credit</th>
        </tr>
    </thead>
    <tbody>
        <?PHP 
        $id_voc = "";
        $total_deb_all = 0;
        $total_kre_all = 0;
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

                $total_deb_all += $row_2->DEBET;
                $total_kre_all += $row_2->KREDIT;
        ?>

            <?PHP if($id_voc != $row_2->ID){ ?>
            <tr>
                <td style="text-align: left;"><?=$row_2->TIPE;?></td>
                <td style="text-align: left;"><?=$row_2->TGL;?></td>
                <td style="text-align: center;"><?=$row_2->NO_BUKTI;?></td>
                <td><?=$row_2->KONTAK;?></td>
                <td><?=$row_2->MEMO;?></td>
                <td><?=$row_2->KODE_AKUN;?> - <?=$row_2->NAMA_AKUN;?></td>
                <td class="nilai_report" style="text-align: right; cursor: pointer;"><?=number_format($row_2->DEBET);?></td>
                <td class="nilai_report" style="text-align: right; cursor: pointer;"><?=number_format($row_2->KREDIT);?></td>
            </tr>
            <?PHP } else {  ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?=$row_2->MEMO;?></td>
                <td><?=$row_2->KODE_AKUN;?> - <?=$row_2->NAMA_AKUN;?></td>
                <td class="nilai_report" style="text-align: right; cursor: pointer;"><?=number_format($row_2->DEBET);?></td>
                <td class="nilai_report" style="text-align: right; cursor: pointer;"><?=number_format($row_2->KREDIT);?></td>
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

        <?PHP 
        if(count($dt) == 0){
            echo '<tr><td colspan="8" style="text-align:center;"><b>There is no data available on this date</b></td></tr>';
        } else { ?>
        <tr>
            <td colspan="6" style="border-top: 2px solid #000 !important; text-align: center; vertical-align: middle;"><b>TOTAL</b></td>
            <td style="border-top: 2px solid #000 !important; text-align: right; font-size: 15px;"><b><?=number_format($total_deb_all);?></b></td>
            <td style="border-top: 2px solid #000 !important; text-align: right; font-size: 15px;"><b><?=number_format($total_kre_all);?></b></td>
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
    $width_custom = 14;
    $height_custom = 8.50;
    
    $content = ob_get_clean();
    $width_in_inches = $width_custom;
    $height_in_inches = $height_custom;
    $width_in_mm = $width_in_inches * 17.4;
    $height_in_mm = $height_in_inches * 22.4;
    $html2pdf = new HTML2PDF('L','LEGAL','en');
    $html2pdf->pdf->SetTitle('Journal');
    $html2pdf->WriteHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output('Journal.pdf');
?>