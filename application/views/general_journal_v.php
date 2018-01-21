<form class="form-horizontal" method="post" action="<?=base_url();?>general_journal_c">
<input id="tr_utama_count" value="2" type="hidden"/>
<div class="row">
    <div class="col-12 data_tables">
        <div class="card">
            <div class="card-header bg-success"> <a href="<?=base_url();?>vendors_c" style="color: #FFF; padding-right: 10px;"><i class="fa fa-book"></i></a> MAKE GENERAL JOURNAL </div>     
            <div class="card-block">
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="form-group row">
                            <div class="col-lg-12 col-xl-12">
                                <label for="name4" class=" col-form-label" style="margin-top: 0px;">Date</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                     <input type="text" name="tgl" class="form-control" readonly="" id="dp1" value="<?=date('d-m-Y');?>">
                                </div>
                            </div>
                        </div>                       
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group row">
                            <div class="col-lg-12 col-xl-12">
                                <label for="name4" class=" col-form-label" style="float: left; margin-top: 0px;">Entry No</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </span>
                                    <input type="text" name="no_reff" class="form-control">
                                </div>
                            </div>
                        </div>                       
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group custom-controls-stacked">
                             <label for="name4" class=" col-form-label" style="float: left; margin-top: 0px;">&nbsp;</label>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="adj" value="1">
                                <span class="custom-control-indicator custom_checkbox_default"></span>
                                <span class="custom-control-description text-default">ADJUSTING ENTRY</span>
                            </label>
                        </div>                      
                    </div>
                    
                </div>
                <br>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="form-group row">
                            <div class="col-lg-12 col-xl-12">
                                <label for="name4" class=" col-form-label" style="float: left; margin-top: 0px;">For</label>
                                <div class="col-lg-12 push-lg-1">
                                    <label class="custom-control custom-radio signin_radio2">
                                        <input value="none" id="radio2" name="j_for" onclick="get_for_1(this);" type="radio" class="custom-control-input" checked>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"> None</span>
                                    </label>

                                    <label class="custom-control custom-radio signin_radio1">
                                        <input value="customer" id="radio" name="j_for" onclick="get_for_2(this);" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Customer</span>
                                    </label>
                                    <label class="custom-control custom-radio signin_radio2">
                                        <input value="vendor" id="radio2" name="j_for" onclick="get_for_3(this);" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"> Vendor</span>
                                    </label>
                                </div>

                                <div id="jurnal_for_cust" style="display: none;">
                                    <select class="form-control chzn-select" name="jurnal_for_cust" onchange="get_kontak(this);">
                                        <?PHP foreach ($get_cust as $key => $row) { ?>
                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_PELANGGAN;?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>

                                <div id="jurnal_for_vend" style="display: none;">
                                    <select class="form-control chzn-select" name="jurnal_for_vend" onchange="get_kontak(this);">
                                        <?PHP foreach ($get_vend as $key => $row) { ?>
                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_SUPPLIER;?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>

                <br>
                <table id="div1" class="display table table-stripped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="bg-inverse" style="color:#FFF; text-align: center; width: 20%;">ACCOUNT</th>
                        <th class="bg-inverse" style="color:#FFF; text-align: center; width: 15%;">DEBIT</th>
                        <th class="bg-inverse" style="color:#FFF; text-align: center; width: 15%;">CREDIT</th>
                        <th class="bg-inverse" style="color:#FFF; text-align: center; width: 20%;">MEMO</th>
                        <th class="bg-inverse" style="color:#FFF; text-align: center; width: 10%;">ACTION</th>
                    </tr>
                    </thead>
                    <tbody id="tes">
                        <tr id="tr_1" class="tr_utama">
                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <select class="form-control chzn-select" name="kode_akun[]" required>
                                        <option value="">Choose a account</option>
                                        <?PHP foreach ($get_kode_akun as $key => $row) { ?>
                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <input class="form-control" required onkeyup="FormatCurrency(this); cek_debkre('debet', 1); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="debet[]" id="debet_1">
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <input class="form-control" required onkeyup="FormatCurrency(this); cek_debkre('kredit', 1); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="kredit[]" id="kredit_1">
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="text" class="form-control" name="memo[]">
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <button onclick="hapus(1);" type="button" class="btn btn-danger"><i class="icon-trash"></i> Delete </button>
                            </td>                            
                        </tr>

                        <tr id="tr_2" class="tr_utama">
                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <select class="form-control chzn-select" name="kode_akun[]" required>
                                        <option value="">Choose a account</option>
                                        <?PHP foreach ($get_kode_akun as $key => $row) { ?>
                                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <input class="form-control" required onkeyup="FormatCurrency(this); cek_debkre('debet', 2); hitung_total(2);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="debet[]" id="debet_2">
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                <div class="controls">
                                    <input class="form-control" required onkeyup="FormatCurrency(this); cek_debkre('kredit', 2); hitung_total(2);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="kredit[]" id="kredit_2">
                                </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="span12">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="text" class="form-control" name="memo[]">
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <button onclick="hapus(2);" type="button" class="btn btn-danger"><i class="icon-trash"></i> Delete </button>
                            </td>                            
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="bg-inverse" style="color:#FFF;" align="center"><b>TOTAL</b></td>
                            <td class="bg-inverse" style="color:#FFF;" align="right"><b id="total_debet"></b></td>
                            <td class="bg-inverse" style="color:#FFF;" align="right"><b id="total_kredit"></b></td>
                            <td class="bg-inverse" style="color:#FFF;" align="center" colspan="2"></td>
                        </tr>
                    </tfoot>
                </table>

                <button style="margin-bottom: 15px;" onclick="tambah_data();" type="button" class="btn btn-info"><i class="icon-plus"></i> Add Row </button>
                <input style="float: right; width: 80%;" type="submit" class="btn btn-success" value="Save Journal" name="simpan_jurnal">
                <br><br>
                <hr>
                <h4>GENERAL JOURNAL LIST</h4>
                <div class="row" style="margin-top: -30px;">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-6 col-xl-6">
                                <label for="name4" class=" col-form-label">List of Selected General Journal Entries</label>
                                <br>
                                <div class="input-group" style="float: left;">
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
                                        <th class="bg-inverse" style="color: #FFF;"></th>
                                        <th class="bg-inverse" style="color: #FFF;">Date</th>
                                        <th class="bg-inverse" style="color: #FFF;">Entry No</th>
                                        <th class="bg-inverse" style="color: #FFF;">Adj</th>
                                        <th class="bg-inverse" style="color: #FFF;">Account</th>
                                        <th class="bg-inverse" style="color: #FFF;">Memo</th>
                                        <th class="bg-inverse" style="color: #FFF;">Debit/Credit</th>
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
                            </table>
                        </div>
                    </div>
                </div>               
            </div>
            </div>
        </div>
    </div>
</div>
</form>
<script type="text/javascript">

function get_kontak(e){
    var a = $(e).find(":selected").text();
    alert(a);
}

function hitung_total(id){
    var sum_debet = 0;
    $("input[name='debet[]']").each(function(idx, elm) {
        var tot = elm.value.split(',').join('');
        if(tot > 0){
            sum_debet += parseFloat(tot);
        }
    });

    var sum_kredit = 0;
    $("input[name='kredit[]']").each(function(idx, elm) {
        var tot_2 = elm.value.split(',').join('');
        if(tot_2 > 0){
            sum_kredit += parseFloat(tot_2);
        }
    });

    $('#total_debet').html('Rp '+NumberToMoney(sum_debet));
    $('#total_kredit').html('Rp '+NumberToMoney(sum_kredit));
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
        '        <select class="form-control chzn-select cek_select_'+i+'" name="kode_akun[]" required>'+
        '            <option value="">Choose a account</option>'+
        '            <?PHP foreach ($get_kode_akun as $key => $row) { ?>'+
        '                <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=addslashes($row->NAMA_AKUN);?> </option>'+
        '            <?PHP } ?>'+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;">'+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <input class="form-control" required onkeyup="FormatCurrency(this); cek_debkre(&quot;debet&quot;,'+i+');  hitung_total('+i+');" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="debet[]" id="debet_'+i+'">'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;">'+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <input class="form-control" required onkeyup="FormatCurrency(this); cek_debkre(&quot;kredit&quot;,'+i+');  hitung_total('+i+');" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="kredit[]" id="kredit_'+i+'">'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '        <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="text" class="form-control" name="memo[]">'+
        '            </div>'+
        '        </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;">'+
            '<button onclick="hapus('+i+');" type="button" class="btn btn-danger"><i class="icon-trash"></i> Delete </button>'+
        '</td>'+
    '</tr>';

    $('#tes').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count').val(i);
    $(".cek_select_"+i).chosen();

}

function hapus(id){
    $('#tr_'+id).remove();
    hitung_total(1);
}

function cek_debkre(tipe, id){
    if(tipe == "debet"){
        $("#kredit_"+id).val(0);
    } else {
        $("#debet_"+id).val(0);
    }
}

function get_for_1(e){
    if($(e).is(':checked')){
        $('#jurnal_for_cust').hide();
        $('#jurnal_for_vend').hide();
    }
}

function get_for_2(e){
    if($(e).is(':checked')){
        $('#jurnal_for_cust').show();
        $('#jurnal_for_vend').hide();
    }
}

function get_for_3(e){
    if($(e).is(':checked')){
        $('#jurnal_for_cust').hide();
        $('#jurnal_for_vend').show();
    }
}
</script>