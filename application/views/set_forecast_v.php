<div class="row">
    <div class="col-12" >
        <a href="<?=base_url();?>add_accounts_c">
            <button type="button" class="btn btn-labeled btn-success" >
                <span class="btn-label">
                    <i class="fa fa-plus-square"></i>
                </span>
                      Create New Forecast
            </button>
        </a>
        <br><br>
        <div style="overflow-y: auto ;max-height: 700px;">
        <table class="display table table-stripped table-bordered table-hover" >
            <thead>
            <tr>
                <th class="bg-success" style="padding: 3px; text-align: center;">NAME</th>
                <th class="bg-success" style="padding: 3px; text-align: center;">TOTAL</th>
                <th class="bg-success" style="padding: 3px; text-align: center;">JAN <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">FEB <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">MAR <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">APR <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">MEI <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">JUN <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">JUL <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">AUG <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">SEP <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">OCT <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">NOV <?php echo date("y"); ?></th>
                <th class="bg-success" style="padding: 3px; text-align: center;">DEC <?php echo date("y"); ?></th>
                
            </tr>
            </thead>
            <tbody>
            <?PHP foreach ($dt as $key => $row) { ?>
            <tr>
                <td><i class="fa fa-circle" style="font-size: 6px; vertical-align: middle;"></i> <?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></td>
                <td align="right"></td>
                <td align="right"><input type="text" name="jan" class="form-control"></td>
                <td align="right"><input type="text" name="feb" class="form-control"></td>
                <td align="right"><input type="text" name="mar" class="form-control"></td>
                <td align="right"><input type="text" name="apr" class="form-control"></td>
                <td align="right"><input type="text" name="mei" class="form-control"></td>
                <td align="right"><input type="text" name="jun" class="form-control"></td>
                <td align="right"><input type="text" name="jul" class="form-control"></td>
                <td align="right"><input type="text" name="aug" class="form-control"></td>
                <td align="right"><input type="text" name="sep" class="form-control"></td>
                <td align="right"><input type="text" name="oct" class="form-control"></td>
                <td align="right"><input type="text" name="nov" class="form-control"></td>
                <td align="right"><input type="text" name="dec" class="form-control"></td>
                
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
                <td align="right"></td>
                <td align="right"><input type="text" name="jan" class="form-control"></td>
                <td align="right"><input type="text" name="feb" class="form-control"></td>
                <td align="right"><input type="text" name="mar" class="form-control"></td>
                <td align="right"><input type="text" name="apr" class="form-control"></td>
                <td align="right"><input type="text" name="mei" class="form-control"></td>
                <td align="right"><input type="text" name="jun" class="form-control"></td>
                <td align="right"><input type="text" name="jul" class="form-control"></td>
                <td align="right"><input type="text" name="aug" class="form-control"></td>
                <td align="right"><input type="text" name="sep" class="form-control"></td>
                <td align="right"><input type="text" name="oct" class="form-control"></td>
                <td align="right"><input type="text" name="nov" class="form-control"></td>
                <td align="right"><input type="text" name="dec" class="form-control"></td>
                
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
</div>
                