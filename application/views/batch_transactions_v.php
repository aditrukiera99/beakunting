<script>
    function showDiv(val) {
        $('.display').hide();
        if(val == "1"){
            $('#div1').show();
        } else if(val == "2"){
            $('#div2').show();
        }else if(val == "3"){
            $('#div3').show();
        }else if(val == "4"){
            $('#div4').show();
        }else if(val == "5"){
            $('#div5').show();
        }
    }

</script>
<input id="tr_utama_count" value="1" type="hidden"/>
<input id="tr_utama_count2" value="1" type="hidden"/>
<input id="tr_utama_count3" value="1" type="hidden"/>
<input id="tr_utama_count4" value="1" type="hidden"/>
<input id="tr_utama_count5" value="1" type="hidden"/>
<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-3 col-xl-3">
                                <label for="name4" class=" col-form-label">Transaction Type</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                     <select name="name" id="cboOptions" onchange="showDiv(this.value)" class="form-control" >
                                        <option value="1">CHECK</option>
                                        <option value="2">DEPOSITS</option>
                                        <option value="3">CREDIT CARD CHARGES & CREDITS</option>
                                        <option value="4">BILL & BILLS CREDIT</option>
                                        <option value="5">INVOICES & CREDIT MEMOS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">BATCH TRANSACTIONS</a>
                            </li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
                <br>
                    <div class="row">
                        <div class="col-12 data_tables">
                            <div class="card">
                                
                                <div class="card-block">
                                  <br>
                                    <table id="div1" class="display table table-stripped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Number</th>
                                            <th>Payee</th>
                                            <th>Account</th>
                                            <th>Amount</th>
                                            <th>Memo</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tes">
                                            <tr id="tr_1" class="tr_utama">
                                                <td align="left" style="vertical-align:middle;"> 
                                                    <div class="control-group">
                                                            <div class="controls">
                                                                <input type="date" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="">
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
                                                        <input type="text" name="" class="form-control">
                                                    </div>
                                                    </div>
                                                </td>

                                                <td align="center" style="vertical-align:middle;"> 
                                                    <div class="span12">
                                                    <div class="controls">
                                                        
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7"><button style="margin-bottom: 15px;" onclick="tambah_data();" type="button" class="btn btn-info"><i class="icon-plus"></i> Tambah Baris Data </button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7"><input style="float: right;" type="submit" class="btn btn-success" value="Save Transaction" name="checkk"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                   
                                
                                    <table id="div2" style="display: none;"  class="display table table-stripped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Received From</th>
                                            <th>Account From</th>
                                            <th>Memo</th>
                                            <th>Check No</th>
                                            <th>Amount</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id="tes_2">
                                            <tr id="tr_1_2" class="tr_utama_2">
                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="date" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="">
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
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value="">Choose a account</option>
                                                        <?PHP foreach ($dt as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_AKUN;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </td>
                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>
                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>
                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right;  type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">
                                                </div>
                                                </div>
                                            </td>
                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7"><button style="margin-bottom: 15px;" onclick="tambah_data_2();" type="button" class="btn btn-info"><i class="icon-plus"></i> Tambah Baris Data </button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7"><input style="float: right;" type="submit" class="btn btn-success" value="Save Transaction" name="checkk"></td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <table id="div3" style="display: none;"  class="display table table-stripped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Payee</th>
                                            <th>Account</th>
                                            <th>Amount</th>
                                            <th>Memo</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id="tes_3">
                                            <tr id="tr_1_3" class="tr_utama_3">
                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="date" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="">
                                                        </div>
                                                </div>
                                            </td>
                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value="">Choose a vendors</option>
                                                        <?PHP foreach ($sp as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_SUPPLIER;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </td>
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
                                                    <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right;  type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">
                                                </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>
                                            
                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7"><button style="margin-bottom: 15px;" onclick="tambah_data_3();" type="button" class="btn btn-info"><i class="icon-plus"></i> Tambah Baris Data </button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7"><input style="float: right;" type="submit" class="btn btn-success" value="Save Transaction" name="checkk"></td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <table id="div4" style="display: none;"  class="display table table-stripped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Ref No</th>
                                            <th>Vendor</th>
                                            <th>Terms</th>
                                            <th>Bill Due</th>
                                            <th>Account</th>
                                            <th>Amount</th>
                                            <th>Memo</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id="tes_4">
                                            <tr id="tr_1_4" class="tr_utama_4">
                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="date" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="">
                                                        </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>

                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value="">Choose a vendors</option>
                                                        <?PHP foreach ($sp as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_SUPPLIER;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </td>

                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value=""></option>
                                                        <option value="1% 10 Net 30">1% 10 Net 30</option>
                                                        <option value="2% 10 Net 30">2% 10 Net 30</option>
                                                        <option value="Due on Receipt">Due on Receipt</option>
                                                        <option value="Net 15">Net 15</option>
                                                        <option value="Net 30">Net 30</option>
                                                        <option value="Net 60">Net 60</option> 
                                                    </select>
                                                </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="date" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="">
                                                        </div>
                                                </div>
                                            </td>

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
                                                    <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right;  type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">
                                                </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>
                                            
                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7"><button style="margin-bottom: 15px;" onclick="tambah_data_4();" type="button" class="btn btn-info"><i class="icon-plus"></i> Tambah Baris Data </button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="7"><input style="float: right;" type="submit" class="btn btn-success" value="Save Transaction" name="checkk"></td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <table id="div5" style="display: none;"  class="display table table-stripped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Number</th>
                                            <th>Customer Job</th>
                                            <th>Terms</th>
                                            <th>Amount</th>
                                            <th>Description</th>
                                            <th>Item</th>
                                            <th>Qty</th>
                                            <th>Rate</th>
                                            <th>Tax Code</th>
                                            <th>Tax Item</th>
                                            <th>Tax Amount</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id="tes_5">
                                            <tr id="tr_1_5" class="tr_utama_5">
                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="date" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="">
                                                        </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>

                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value="">Choose a vendors</option>
                                                        <?PHP foreach ($get_cust as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_CUSTOMER;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </td>

                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value=""></option>
                                                        <option value="1% 10 Net 30">1% 10 Net 30</option>
                                                        <option value="2% 10 Net 30">2% 10 Net 30</option>
                                                        <option value="Due on Receipt">Due on Receipt</option>
                                                        <option value="Net 15">Net 15</option>
                                                        <option value="Net 30">Net 30</option>
                                                        <option value="Net 60">Net 60</option> 
                                                    </select>
                                                </div>
                                                </div>
                                            </td>

                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right;  type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">
                                                </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>

                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value="">Choose a item</option>
                                                        <?PHP foreach ($data_item as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_PRODUK;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="number" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>

                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value=""></option>
                                                        <option value="Taxable Sales">Taxable Sales</option>
                                                        <option value="Non Taxable Sales">Non Taxable Sales</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </td>

                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    <select class="form-control chzn-select" name="cust_id" required>
                                                        <option value=""></option>
                                                        <option value="">Choose a account</option>
                                                        <?PHP foreach ($data_item_tax as $key => $row) { ?>
                                                            <option value="<?=$row->ID;?>"><?=$row->NAMA_PRODUK;?></option>
                                                        <?PHP } ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>

                                            <td align="left" style="vertical-align:middle;"> 
                                                <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" value="" name="" style="font-size: 18px;">
                                                        </div>
                                                </div>
                                            </td>
                                            
                                            <td align="center" style="vertical-align:middle;"> 
                                                <div class="span12">
                                                <div class="controls">
                                                    
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="14"><button style="margin-bottom: 15px;" onclick="tambah_data_5();" type="button" class="btn btn-info"><i class="icon-plus"></i> Tambah Baris Data </button></td>
                                            </tr>
                                            <tr>
                                                <td colspan="14"><input style="float: right;" type="submit" class="btn btn-success" value="Save Transaction" name="checkk"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                     
                                
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
        '<td class="center" style="vertical-align:middle;" id="td_chos_'+i+'">'+
            '<div class="control-group">'+
                '<div class="controls">'+
                    '<input type="date" class="form-control" value="<?php echo date("d-m-yyyy"); ?>" name="">'+
                '</div>'+
            '</div>'+
        '</td>'+


        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input type="text" class="form-control" name="">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
                    '<option value="">Choose a customer</option>'+
                    '<?PHP foreach ($get_cust as $key => $row) { ?>'+
                        '<option value="<?=$row->ID;?>"><?=$row->NAMA_PELANGGAN;?></option>'+
                    '<?PHP } ?>'+
                '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
                    '<option value="">Choose a customer</option>'+
                    '<?PHP foreach ($dt as $key => $row) { ?>'+
                        '<option value="<?=$row->ID;?>"><?=$row->NAMA_AKUN;?></option>'+
                    '<?PHP } ?>'+
                '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right; width: 80%;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input type="text" name="" class="form-control">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td class="center" style="background:#FFF; text-align:center;">'+
            '<button style="width: 100%;" onclick="hapus_row('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
        '</td>'+
    '</tr>';

    $('#tes').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count').val(i);
    $(".cek_select_"+i).chosen();

}
function tambah_data_2() {
    var jml_tr = $('#tr_utama_count2').val();
    var i = parseInt(jml_tr) + 1;

    var coa = $('#copy_ag').html();

    $isi_1 = 
    '<tr id="tr_'+i+'" class="tr_utama">'+
        '<td class="center" style="vertical-align:middle;" id="td_chos_'+i+'">'+
            '<div class="control-group">'+
                '<div class="controls">'+
                    '<input type="date" class="form-control" value="<?php echo date("d-m-yyyy"); ?>" name="">'+
                '</div>'+
            '</div>'+
        '</td>'+


        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
                    '<option value="">Choose a customer</option>'+
                    '<?PHP foreach ($get_cust as $key => $row) { ?>'+
                        '<option value="<?=$row->ID;?>"><?=$row->NAMA_PELANGGAN;?></option>'+
                    '<?PHP } ?>'+
                '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
                    '<option value="">Choose a account</option>'+
                    '<?PHP foreach ($dt as $key => $row) { ?>'+
                        '<option value="<?=$row->ID;?>"><?=$row->NAMA_AKUN;?></option>'+
                    '<?PHP } ?>'+
                '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input type="text" class="form-control" name="" style="font-size: 18px;">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input type="text" name="" class="form-control" style="font-size: 18px;">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td class="center" style="background:#FFF; text-align:center;">'+
            '<button style="width: 100%;" onclick="hapus_row('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
        '</td>'+
    '</tr>';

    $('#tes_2').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count2').val(i);
    $(".cek_select_"+i).chosen();

}
function tambah_data_3() {
    var jml_tr = $('#tr_utama_count3').val();
    var i = parseInt(jml_tr) + 1;

    var coa = $('#copy_ag').html();

    $isi_1 = 
    '<tr id="tr_'+i+'" class="tr_utama">'+
        '<td class="center" style="vertical-align:middle;" id="td_chos_'+i+'">'+
            '<div class="control-group">'+
                '<div class="controls">'+
                    '<input type="date" class="form-control" value="<?php echo date("d-m-yyyy"); ?>" name="">'+
                '</div>'+
            '</div>'+
        '</td>'+


        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
                    '<option value="">Choose a customer</option>'+
                    '<?PHP foreach ($sp as $key => $row) { ?>'+
                        '<option value="<?=$row->ID;?>"><?=$row->NAMA_SUPPLIER;?></option>'+
                    '<?PHP } ?>'+
                '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
                    '<option value="">Choose a account</option>'+
                    '<?PHP foreach ($dt as $key => $row) { ?>'+
                        '<option value="<?=$row->ID;?>"><?=$row->NAMA_AKUN;?></option>'+
                    '<?PHP } ?>'+
                '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input type="text" class="form-control" name="" style="font-size: 18px;">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+


        

        '<td class="center" style="background:#FFF; text-align:center;">'+
            '<button style="width: 100%;" onclick="hapus_row('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
        '</td>'+
    '</tr>';

    $('#tes_3').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count3').val(i);
    $(".cek_select_"+i).chosen();

}
function tambah_data_4() {
    var jml_tr = $('#tr_utama_count4').val();
    var i = parseInt(jml_tr) + 1;

    var coa = $('#copy_ag').html();

    $isi_1 = 
    '<tr id="tr_'+i+'" class="tr_utama">'+
        '<td class="center" style="vertical-align:middle;" id="td_chos_'+i+'">'+
            '<div class="control-group">'+
                '<div class="controls">'+
                    '<input type="date" class="form-control" value="<?php echo date("d-m-yyyy"); ?>" name="">'+
                '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input type="text" class="form-control" name="" style="font-size: 18px;">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
                    '<option value="">Choose a vendors</option>'+
                    '<?PHP foreach ($sp as $key => $row) { ?>'+
                        '<option value="<?=$row->ID;?>"><?=$row->NAMA_SUPPLIER;?></option>'+
                    '<?PHP } ?>'+
                '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value=""></option>'+
        '            <option value="1% 10 Net 30">1% 10 Net 30</option>'+
        '            <option value="2% 10 Net 30">2% 10 Net 30</option>'+
        '            <option value="Due on Receipt">Due on Receipt</option>'+
        '            <option value="Net 15">Net 15</option>'+
        '            <option value="Net 30">Net 30</option>'+
        '            <option value="Net 60">Net 60</option> '+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td class="center" style="vertical-align:middle;" id="td_chos_'+i+'">'+
            '<div class="control-group">'+
                '<div class="controls">'+
                    '<input type="date" class="form-control" value="<?php echo date("d-m-yyyy"); ?>" name="">'+
                '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<select class="form-control chzn-select" name="cust_id" required>'+
                    '<option value="">Choose a account</option>'+
                    '<?PHP foreach ($dt as $key => $row) { ?>'+
                        '<option value="<?=$row->ID;?>"><?=$row->NAMA_AKUN;?></option>'+
                    '<?PHP } ?>'+
                '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right;" type="text"  value="" name="harga_satuan[]" id="harga_satuan_1">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
            '<div class="span12">'+
            '<div class="control-group">'+
            '<div class="controls">'+
                '<input type="text" class="form-control" name="" style="font-size: 18px;">'+
            '</div>'+
            '</div>'+
            '</div>'+
        '</td>'+


        

        '<td class="center" style="background:#FFF; text-align:center;">'+
            '<button style="width: 100%;" onclick="hapus_row('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
        '</td>'+
    '</tr>';

    $('#tes_4').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count4').val(i);
    $(".cek_select_"+i).chosen();

}

function tambah_data_5() {
    var jml_tr = $('#tr_utama_count5').val();
    var i = parseInt(jml_tr) + 1;

    var coa = $('#copy_ag').html();

    $isi_1 = 
    '<tr id="tr_'+i+'" class="tr_utama">'+
        '<td align="left" style="vertical-align:middle;"> '+
        '    <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="date" class="form-control" value="<?php echo date("d-m-Y"); ?>" name="">'+
        '            </div>'+
        '    </div>'+
        '</td>'+

        '<td align="left" style="vertical-align:middle;"> '+
        '    <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="text" class="form-control" value="" name="" style="font-size: 18px;">'+
        '            </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value="">Choose a vendors</option>'+
        '            <?PHP foreach ($get_cust as $key => $row) { ?>'+
        '                <option value="<?=$row->ID;?>"><?=$row->NAMA_CUSTOMER;?></option>'+
        '            <?PHP } ?>'+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value=""></option>'+
        '            <option value="1% 10 Net 30">1% 10 Net 30</option>'+
        '            <option value="2% 10 Net 30">2% 10 Net 30</option>'+
        '            <option value="Due on Receipt">Due on Receipt</option>'+
        '            <option value="Net 15">Net 15</option>'+
        '            <option value="Net 30">Net 30</option>'+
        '            <option value="Net 60">Net 60</option> '+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <input class="form-control" required onkeyup="FormatCurrency(this); hitung_total(1);" style="font-size: 18px; text-align:right;  type="text"  value="" name="'+'harga_satuan[]" id="harga_satuan_1">'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="left" style="vertical-align:middle;"> '+
        '    <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="text" class="form-control" value="" name="" style="font-size: 18px;">'+
        '            </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value="">Choose a item</option>'+
        '            <?PHP foreach ($data_item as $key => $row) { ?>'+
        '                <option value="<?=$row->ID;?>"><?=$row->NAMA_PRODUK;?></option>'+
        '            <?PHP } ?>'+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="left" style="vertical-align:middle;"> '+
        '    <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="number" class="form-control" value="" name="" style="font-size: 18px;">'+
        '            </div>'+
        '    </div>'+
        '</td>'+

        '<td align="left" style="vertical-align:middle;"> '+
        '    <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="text" class="form-control" value="" name="" style="font-size: 18px;">'+
        '            </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value=""></option>'+
        '            <option value="Taxable Sales">Taxable Sales</option>'+
        '            <option value="Non Taxable Sales">Non Taxable Sales</option>'+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="center" style="vertical-align:middle;"> '+
        '    <div class="span12">'+
        '    <div class="controls">'+
        '        <select class="form-control chzn-select" name="cust_id" required>'+
        '            <option value=""></option>'+
        '            <option value="">Choose a account</option>'+
        '            <?PHP foreach ($data_item_tax as $key => $row) { ?>'+
        '                <option value="<?=$row->ID;?>"><?=$row->NAMA_PRODUK;?></option>'+
        '            <?PHP } ?>'+
        '        </select>'+
        '    </div>'+
        '    </div>'+
        '</td>'+

        '<td align="left" style="vertical-align:middle;"> '+
        '    <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="text" class="form-control" value="" name="" style="font-size: 18px;">'+
        '            </div>'+
        '    </div>'+
        '</td>'+

        '<td align="left" style="vertical-align:middle;"> '+
        '    <div class="control-group">'+
        '            <div class="controls">'+
        '                <input type="text" class="form-control" value="" name="" style="font-size: 18px;">'+
        '            </div>'+
        '    </div>'+
        '</td>'+
        

        '<td class="center" style="background:#FFF; text-align:center;">'+
            '<button style="width: 100%;" onclick="hapus_row('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
        '</td>'+
    '</tr>';

    $('#tes_5').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count5').val(i);
    $(".cek_select_"+i).chosen();

}
</script>