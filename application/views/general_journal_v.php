<input id="tr_utama_count" value="1" type="hidden"/>
<div class="row">
    <div class="col-12 data_tables">
        <div class="card">
            <div class="card-header bg-success"> <a href="<?=base_url();?>vendors_c" style="color: #FFF; padding-right: 10px;"><i class="fa fa-book"></i></a> MAKE GENERAL JOURNAL </div>     
            <div class="card-block">
              <br>
              <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-4 col-xl-4">
                                <label for="name4" class=" col-form-label" style="float: right; margin-top: 0px;">Date</label>
                            </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                     <input type="text" name="tanggal" class="form-control" readonly="" id="dp1">
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-3 col-xl-3">
                                <label for="name4" class=" col-form-label" style="float: right; margin-top: 0px;">Entry No</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </span>
                                     <input type="text" name="no" class="form-control">
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    </div>
                    <br>
                    <br>
                <table id="div1" class="display table table-stripped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="bg-success" style="text-align: center;">ACCOUNT</th>
                        <th class="bg-success" style="text-align: center;">DEBIT</th>
                        <th class="bg-success" style="text-align: center;">CREDIT</th>
                        <th class="bg-success" style="text-align: center;">MEMO</th>
                        <th class="bg-success" style="text-align: center;">NAME</th>
                        <th class="bg-success" style="text-align: center;">ACTION</th>
                    </tr>
                    </thead>
                    <tbody id="tes">
                        <tr id="tr_1" class="tr_utama">
                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <select class="form-control chzn-select" name="cust_id" required>
                                        <option value="">Choose a account</option>
                                        <?PHP foreach ($dt as $key => $row) { ?>
                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_AKUN;?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="text" class="form-control" name="">
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <select class="form-control chzn-select" name="cust_id" required>
                                        <option value="">Choose a customer</option>
                                        <?PHP foreach ($get_cust as $key => $row) { ?>
                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_PELANGGAN;?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <input type="text" name="" class="form-control">
                                </div>
                                </div>
                            </td>
                            
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="8"><button style="margin-bottom: 15px;" onclick="tambah_data();" type="button" class="btn btn-info"><i class="icon-plus"></i> Tambah Baris Data </button></td>
                        </tr>
                        
                    </tfoot>
                </table>
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-4 col-xl-4">
                                <label for="name4" class=" col-form-label">List of Selected General Journal Entries</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </span>
                                    <select name="" class="form-control">
                                        <option value="All">All</option>
                                        <option value="Today">Today</option>
                                        <option value="This Week">This Week</option>
                                        <option value="This Month">This Month</option>
                                        <option value="This Year">This Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    </div>
                <br>

                <div class="form-group row" id="itemproduk">
                   
                    <div class="col-lg-12 col-xl-12" style="overflow-y:scroll;height:300px;">
                        <div class="input-group">
                            <table class="display table table-stripped table-bordered table-hover">
                                <thead>
                                    <tr >
                                        <th></th>
                                        <th>Date</th>
                                        <th>Entry No</th>
                                        <th>Adj</th>
                                        <th>Account</th>
                                        <th>Memo</th>
                                        <th>Debit/Credit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                     
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7"><input style="float: right;" type="submit" class="btn btn-success" value="Save" name=""></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

               
            </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function hapus_row (id) {
    $('#tr_'+id).remove();
    hitung_total_semua();
}

function tambah_data() {
    var jml_tr = $('#tr_utama_count').val();
    var i = parseInt(jml_tr) + 1;

    var coa = $('#copy_ag').html();

    $isi_1 = 
    '<tr id="tr_'+i+'" class="tr_utama">'+
        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value="">Choose a account</option>'+
        '            <?PHP foreach ($dt as $key => $row) { ?>'+
        '                <option value="<?=$row->ID;?>"><?=$row->NAMA_AKUN;?></option>'+
        '            <?PHP } ?>'+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '        <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="text" class="form-control" name="">'+
        '            </div>'+
        '        </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value="">Choose a customer</option>'+
        '            <?PHP foreach ($get_cust as $key => $row) { ?>'+
        '                <option value="<?=$row->ID;?>"><?=$row->NAMA_PELANGGAN;?></option>'+
        '            <?PHP } ?>'+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <input type="text" name="" class="form-control">'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value="">Choose a class</option>'+
        '            <option value="">Remodal</option>'+
        '            <option value="">Overhead</option>'+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <input type="text" name="" class="form-control">'+
        '    </div>'+
        '    </div>'+
        '</td>'+
    '</tr>';

    $('#tes').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count').val(i);
    $(".cek_select_"+i).chosen();

}

</script>