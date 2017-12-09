<div class="row">
    <div class="col-12">
        <a href="<?=base_url();?>add_accounts_c">
            <button type="button" class="btn btn-labeled btn-success" >
                <span class="btn-label">
                    <i class="fa fa-plus-square"></i>
                </span>
                      Add Accounts
            </button>
        </a>
        <br><br>
        <table class="display table table-stripped table-bordered table-hover">
            <thead>
            <tr>
                <th class="bg-success" style="padding: 1px; text-align: center;">NAME</th>
                <th class="bg-success" style="padding: 1px; text-align: center;">TYPE</th>
                <th class="bg-success" style="padding: 1px; text-align: center;">BALANCE TOTAL</th>
            </tr>
            </thead>
            <tbody>
            <?PHP foreach ($dt as $key => $row) { ?>
            <tr>
                <td><i class="fa fa-circle" style="font-size: 6px; vertical-align: middle;"></i> <?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></td>
                <td><?=$row->KATEGORI;?></td>
                <td align="right">0,00</td>
            </tr>

            <?PHP 

            $get_anak = $this->model->get_anak_akun($row->KODE_AKUN);
            if(count($get_anak) > 0){
                foreach ($get_anak as $key => $row_2) {
            ?>
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-circle" style="font-size: 6px; vertical-align: middle;"></i> <?=$row_2->KODE_AKUN;?> - <?=$row_2->NAMA_AKUN;?>
                </td>
                <td><?=$row_2->KATEGORI;?></td>
                <td align="right">0,00</td>
            </tr>
            <?PHP     
                }
            }

            ?>

            <?PHP } ?>
            </tbody>
        </table>
    </div>
</div>
                