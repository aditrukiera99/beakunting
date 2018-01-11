<script type="text/javascript">
    function met(cul){
        $('.sem').hide();
        if(cul == "1"){
            $('#che').show();
        }else if(cul == "2"){
            $('#cre').show();
        }else if(cul == "3"){
            $('#bank').show();
        }
    }

    function showDiv(val) {
        
        if(val == "1"){
            document.getElementById('dp1').disabled = false;
            $('#dp1').val('<?=date('d-m-Y');?>');
        } else{
            document.getElementById('dp1').disabled = true;
            $('#dp1').val('');
        }
    }
</script>

<style type="text/css">
    input[type=checkbox]{
      /* Double-sized Checkboxes */
      -ms-transform: scale(1.5); /* IE */
      -moz-transform: scale(1.5); /* FF */
      -webkit-transform: scale(2); /* Safari and Chrome */
      -o-transform: scale(2); /* Opera */
      padding: 10px;
    }

    .selected_bill{
        background: #1cc7d0;
        color: #FFF;
    }
</style>

<?PHP if($msg == 1){ ?>
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> Bill has been Paid.
</div>
<?PHP } ?>

<form class="form-horizontal" method="post" action="<?=base_url();?>pay_bill_c" onsubmit="return cek_form();">
<div class="row">
    <div class="col-12 data_tables">
        <div class="card">
            <div class="card-header bg-success"> <a href="<?=base_url();?>vendors_c" style="color: #FFF; padding-right: 10px;"><i class="fa fa-arrow-left"></i></a> PAY BILL </div>                    
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-3 col-xl-3">
                                <label for="name4" class=" col-form-label">Show Bills</label>
                            </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="input-group">
                                    <select name="name" id="shw_bill" onchange="showDiv(this.value); get_bill_list();" class="form-control" >
                                        <option value="2">Show All Bills</option>
                                        <option value="1">Due Or On Before</option>
                                    </select>
                                    &nbsp&nbsp&nbsp&nbsp
                                    <input disabled type="text" class="form-control" id="dp1" name="tgl" onchange="get_bill_list();" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3 col-xl-3">
                                <label for="name4" class=" col-form-label">Select Vendor</label>
                            </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="input-group">
                                    <select  class="form-control chzn-select" name="vend_id" id="vend_id" onchange="get_bill_list();">
                                        <option value="">All Vendor</option>
                                        <?php foreach ($dt as $key => $value) { ?>
                                        <option value="<?=$value->ID;?>"><?=$value->NAMA_SUPPLIER;?></option>
                                        <?php } ?>
                                    </select>                                    
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>

                <br><hr><br>

                <table id="div1" class="table table-stripped table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center; background: #666; color: #FFF;">Select</th>
                        <th style="text-align: center; background: #666; color: #FFF;">Date Due</th>
                        <th style="text-align: center; background: #666; color: #FFF;">Vendor</th>
                        <th style="text-align: center; background: #666; color: #FFF;">Ref No</th>
                        <th style="text-align: center; background: #666; color: #FFF;">Amt Date</th>
                        <th style="text-align: center; background: #666; color: #FFF;">Disc Used</th>
                        <th style="text-align: center; background: #666; color: #FFF;">Credit Used</th>
                        <th style="text-align: center; background: #666; color: #FFF;">Amount To Pay</th>                        
                    </tr>
                    </thead>
                    <tbody id="tes">
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td style="background: #666; color: #FFF;" colspan="3"></td>
                            <td style="text-align: center; background: #666; color: #FFF;">TOTAL</td>
                            <td style="text-align: right; background:  #666; color: #FFF;" id="sum_1">0</td>
                            <td style="text-align: right; background:  #666; color: #FFF;" id="sum_2">0.</td>
                            <td style="text-align: right; background:  #666; color: #FFF;" id="sum_3">0</td>
                            <td style="text-align: right; background:  #666; color: #FFF;" id="sum_4">0</td>
                            <input type="hidden" value="0" name="subtotal" id="subtotal" />
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div> 
</div> 

<div class="row">
    <div class="col-12 data_tables">
        <div class="card">            
            <div class="card-block">
              <br>
                <div class="form-group row">
                    <div class="col-lg-12 col-xl-12">
                       <h4>DISCOUNT & CREDIT INFORMATION FOR HIGHLIGHTED BILL</h4>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label">Vendor</label>
                    </div>
                    <div class="col-lg-3 col-xl-3">
                        <label for="name4" class=" col-form-label"><b id="info_vend_name">Lindeloof</b></label>
                    </div>
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label">Terms</label>
                    </div>
                    <div class="col-lg-3 col-xl-3">
                        <label for="name4" class=" col-form-label"><b id="info_terms">1% 10 Net 30</b></label>
                    </div>
                    <div class="col-lg-2 col-xl-2">
                        <label for="name4" class=" col-form-label">Number Of Credits</label>
                    </div>
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label"><b>0</b></label>
                    </div>                    
                </div>

                <div class="form-group row">
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label">Bill Ref.No</label>
                    </div>
                    <div class="col-lg-3 col-xl-3">
                        <label for="name4" class=" col-form-label"><b id="info_ref_no">871277</b></label>
                    </div>
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label">Sugg Discount</label>
                    </div>
                    <div class="col-lg-3 col-xl-3">
                        <label for="name4" class=" col-form-label"><b>0.00</b></label>
                    </div>
                    <div class="col-lg-2 col-xl-2">
                        <label for="name4" class=" col-form-label">Total Credit Available</label>
                    </div>
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label"><b>0.00</b></label>
                    </div>                    
                </div>

                <div class="form-group row">
                    <div class="col-lg-4 col-xl-4">
                        <button class="form-control bg-success">Go to Bill</button>
                    </div>
                    <div class="col-lg-4 col-xl-4">
                        <button class="form-control bg-success">Set Discount</button>
                    </div>
                    <div class="col-lg-4 col-xl-4">
                        <button class="form-control bg-success">Set Credits</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 data_tables">
        <div class="card">                                
            <div class="card-block">
              <br>
                <div class="form-group row">
                    <div class="col-lg-12 col-xl-12">
                        <h4>PAYMENTS</h4>
                    </div>                    
                </div>

                <div class="form-group row">
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label"><b>Date</b></label>
                    </div>
                    <div class="col-lg-2 col-xl-2">
                        <input type="text" class="form-control" id="bill_due" name="tgl_pay" value="<?=date('d-m-Y');?>">
                    </div>
                    <div class="col-lg-1 col-xl-1">
                        
                    </div>
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label"><b>Method</b></label>
                    </div>
                    <div class="col-lg-2 col-xl-2">
                        <select name="metode_bayar" id="cboOptions" class="form-control" >
                            <option value="Cash">Cash</option>
                            <option value="Check">Check</option>
                            <option value="Credit">Credit</option>
                            <option value="Online Bank Pmt">Online Bank Pmt</option>
                        </select>
                    </div>
                    <div class="col-lg-1 col-xl-1">
                        
                    </div>
                    <div class="col-lg-2 col-xl-2">
                        <label for="name4" class=" col-form-label" style="float: right;"><b>Accounts</b></label>
                    </div>
                    <div class="col-lg-2 col-xl-2">
                        <select class="form-control" name="kode_akun">
                            <?PHP foreach ($kode_akun_bank as $key => $row) { ?>
                            <option value="<?=$row->KODE_AKUN;?>"><?=$row->KODE_AKUN;?> - <?=$row->NAMA_AKUN;?></option>
                            <?PHP } ?>                            
                        </select>
                    </div>                    
                </div>

                <div class="form-group row">
                    <div class="col-lg-1 col-xl-1">                        
                    </div>
                    <div class="col-lg-3 col-xl-3">                        
                    </div>
                    <div class="col-lg-1 col-xl-1">                        
                    </div>
                    <div class="sem col-lg-3 col-xl-3" id="che">
                        <!-- <input type="radio" name="che">&nbsp; To Be Printed<br><input type="radio" name="che">&nbsp; Assign check number -->
                    </div>
                    <div class="sem col-lg-3 col-xl-3" id="cre" style="display: none;">                        
                    </div>
                    <div class="sem col-lg-3 col-xl-3" id="bank" style="display: none;">
                        <!-- <input type="checkbox" name="che">&nbsp; Include Reference Number -->
                    </div>
                    <!-- <div class="col-lg-2 col-xl-2">
                        <label for="name4" class=" col-form-label">Ending Balance</label>
                    </div>
                    <div class="col-lg-1 col-xl-1">
                        <label for="name4" class=" col-form-label">89.000.00</label>
                    </div>   -->                                          
                </div>

                <div class="form-group row">
                    <div class="col-lg-4 col-xl-4"></div>
                    <div class="col-lg-4 col-xl-4"></div>
                    <div class="col-lg-2 col-xl-2">
                        <input type="submit" class="form-control bg-success" value="Pay Selected Bills" name="simpan" />                                       
                    </div>
                    <div class="col-lg-2 col-xl-2">                                                
                        <a href="<?=base_url();?>vendors_c" class="form-control bg-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<script type="text/javascript" src="<?=base_url();?>assets/js/components.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        get_bill_list();
    });

    function get_bill_list(){
        $('#info_vend_name').html('');
        $('#info_terms').html('');
        $('#info_ref_no').html('');

        var shw_bill     = $('#shw_bill').val();
        var tgl_due      = $('#dp1').val();
        var vend_id      = $('#vend_id').val();

        $.ajax({
            url : '<?php echo base_url(); ?>pay_bill_c/get_bill_aktif',
            data : {
                shw_bill:shw_bill,
                tgl_due:tgl_due,
                vend_id:vend_id,
            },
            type : "POST",
            dataType : "json",
            success : function(result){
                var isine = "";
                if(result.length > 0){
                    $.each(result,function(i,res){
                        var subtotal = parseFloat(res.SUB_TOTAL);
                        var terbayar = parseFloat(res.TOTAL_TERBAYAR);
                        var am_due = subtotal - terbayar;

                        isine +=    '<tr id="tr_'+res.ID+'" class="tr_utama" style="cursor:pointer;" onclick="select_bill(this, '+res.ID+');">'+
                                        '<td align="left" style="vertical-align:middle;"> '+
                                            '<input style="box-shadow: none;" type="checkbox" class="form-control" name="id_bill[]" value="'+res.ID+'" onclick="cek_applied(this, '+res.ID+');">'+
                                        '</td>'+
                                        '<td align="center" style="vertical-align:middle;"> '+
                                            res.TGL_JATUH_TEMPO+
                                            '<input type="hidden" name="tgl_jatuh_tempo[]" value="'+res.TGL_JATUH_TEMPO+'" />'+
                                        '</td>'+
                                        '<td align="left" style="vertical-align:middle;"> '+
                                            res.SUPPLIER+
                                            '<input type="hidden" name="id_supplier[]" value="'+res.ID_SUPPLIER+'" />'+
                                        '</td>'+
                                        '<td align="center" style="vertical-align:middle;"> '+
                                            res.NO_BUKTI+
                                            '<input type="hidden" name="no_bukti[]" value="'+res.NO_BUKTI+'" />'+
                                        '</td>'+
                                        '<td align="right" style="vertical-align:middle;"> '+
                                            NumberToMoney(am_due).split('.00').join('')+
                                            '<input type="hidden" name="amt_due[]" id="amt_due_'+res.ID+'" value="'+am_due+'" />'+
                                            '<input type="hidden" name="amt_orig[]" id="amt_orig_'+res.ID+'" value="'+res.SUB_TOTAL+'" />'+
                                        '</td>'+
                                        '<td align="right" style="vertical-align:middle;"> '+
                                            0+
                                            '<input type="hidden" name="disc[]" id="disc_'+res.ID+'" value="0"/>'+
                                        '</td>'+
                                        '<td align="right" style="vertical-align:middle;"> '+
                                           0+
                                           '<input type="hidden" name="credit[]" id="credit_'+res.ID+'" value="0" />'+
                                        '</td>'+
                                        '<td align="center" style="vertical-align:middle;"> '+
                                            '<div class="span12">'+
                                                '<div class="control-group">'+
                                                    '<div class="controls">'+
                                                        '<input id="amt_pay_'+res.ID+'" onkeyup="FormatCurrency(this); cek_amt('+res.ID+'); hitung_all();" type="text" class="form-control" name="amt_pay[]" style="text-align:right;">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</td>'+
                                    '</tr>';
                    });
                } else {
                    isine = "<tr><td colspan='8' style='text-align:center;'> There are no unpaid bill for this vendor </td></tr>";
                }

                $('#tes').html(isine);
                hitung_all();
            }
        });
    }

    function select_bill(e, id_bill){
        $('#info_vend_name').html('');
        $('#info_terms').html('');
        $('#info_ref_no').html('');

        $('.tr_utama').removeClass('selected_bill');
        $(e).addClass('selected_bill');
        $.ajax({
            url : '<?php echo base_url(); ?>pay_bill_c/select_bill_id',
            data : {
                id_bill:id_bill,
            },
            type : "POST",
            dataType : "json",
            success : function(res){
                $('#info_vend_name').html(res.SUPPLIER);
                $('#info_terms').html(res.TERMS);
                $('#info_ref_no').html(res.NO_BUKTI);
            }
        });
    }

    function hitung_all(){
        var sum1 = 0;
        var sum2 = 0;
        var sum3 = 0;
        var sum4 = 0;

        $("input[name='amt_due[]']").each(function(idx, elm) {
            var tot = elm.value.split(',').join('');
            if(tot > 0){
                sum1 += parseFloat(tot);
            }
        });

        $("input[name='disc[]']").each(function(idx, elm) {
            var tot = elm.value.split(',').join('');
            if(tot > 0){
                sum2 += parseFloat(tot);
            }
        });

        $("input[name='credit[]']").each(function(idx, elm) {
            var tot = elm.value.split(',').join('');
            if(tot > 0){
                sum3 += parseFloat(tot);
            }
        });

        $("input[name='amt_pay[]']").each(function(idx, elm) {
            var tot = elm.value.split(',').join('');
            if(tot > 0){
                sum4 += parseFloat(tot);
            }
        });

        $('#sum_1').html(NumberToMoney(sum1).split('.00').join(''));   
        $('#sum_2').html(NumberToMoney(sum2).split('.00').join(''));   
        $('#sum_3').html(NumberToMoney(sum3).split('.00').join(''));   
        $('#sum_4').html(NumberToMoney(sum4).split('.00').join(''));

        $('#subtotal').val(sum4);
    }

    function cek_amt(id_bill){
        var amt_due = $('#amt_due_'+id_bill).val();
        if(amt_due == ""){
            amt_due = 0;
        } else {
            amt_due = amt_due.split(',').join('');
        }

        var amt_pay = $('#amt_pay_'+id_bill).val();
        if(amt_pay == ""){
            amt_pay = 0;
        } else {
            amt_pay = amt_pay.split(',').join('');
        }

        if(parseFloat(amt_pay) > parseFloat(amt_due)){
            $('#amt_pay_'+id_bill).val(NumberToMoney(amt_due).split('.00').join(''));
        }
    }

    function cek_applied(e, id){
        if ($(e).is(':checked')) {
            var am_due = $('#amt_due_'+id).val();
            $('#amt_pay_'+id).val(NumberToMoney(am_due).split('.00').join(''));
        } else {
            $('#amt_pay_'+id).val('');
        }

        hitung_all();
    }

    function cek_form(){
        var a = "";
        var b = $('input[name="id_bill[]"]:checked').length;

        if(b > 0){
            a = true;
        } else {
            alert("Please select at least 1 bill !");
            a = false;
        }

        return a;
    }

</script>