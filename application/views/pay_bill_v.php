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
            document.getElementById('tg').disabled = false;
        } else{
            document.getElementById('tg').disabled = true;
        }
    }

    

</script>
<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <br>
                        <div class="form-group row">
                            <div class="col-lg-3 col-xl-3">
                                <label for="name4" class=" col-form-label">Show Bills</label>
                            </div>
                            <div class="col-lg-8 col-xl-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-tags"></i>
                                    </span>
                                     <select name="name" id="cboOptions" onchange="showDiv(this.value);" class="form-control" >
                                        <option value="1">Due Or On Before</option>
                                        <option value="2">Show All Bills</option>
                                    </select>
                                    &nbsp&nbsp&nbsp&nbsp
                                    <input type="date" class="form-control" id="tg" name="coy">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3 col-xl-3">
                                <label for="name4" class=" col-form-label">Filter By</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                     <select name="name" id="cboOptions" class="form-control" >
                                       <?php
                                       foreach ($dt as $key => $value) {
                                           # code...
                                       
                                        ?>
                                        <option value="<?=$value->NAMA_SUPPLIER;?>"><?=$value->NAMA_SUPPLIER;?></option>
                                        <?php } ?>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3 col-xl-3">
                                <label for="name4" class=" col-form-label">Sort By</label>
                            </div>
                            <div class="col-lg-4 col-xl-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </span>
                                     <select name="name" id="cboOptions" class="form-control" >
                                       
                                        <option value="Due Date">Due Date</option>
                                        <option value="Discount Date">Discount Date</option>
                                        <option value="Vendors">Vendors</option>
                                        <option value="Amount Due">Amount Due</option>
                                        
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
                                <a href="#">PAY BILLS</a>
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
                                            <th><input type="checkbox" class="form-control" value="" name=""></th>
                                            <th>Date Due</th>
                                            <th>Vendor</th>
                                            <th>Ref No</th>
                                            <th>Disc Date</th>
                                            <th>Amt Date</th>
                                            <th>Disc Used</th>
                                            <th>Credit Used</th>
                                            <th>Amt To Pay</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody id="tes">
                                            <tr id="tr_1" class="tr_utama">

                                                <td align="left" style="vertical-align:middle;"> 
                                                    <div class="control-group">
                                                            <div class="controls">
                                                                <input type="checkbox" class="form-control" value="" name="">
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
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="form-control" name="">
                                                            </div>
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
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="form-control" name="">
                                                            </div>
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
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="form-control" name="">
                                                            </div>
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
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="form-control" name="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td>Total</td>
                                                <td>23.171,00</td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td>23.171,00</td>
                                            </tr>
                                            <tr>
                                                <td  colspan="9"><button class="form-control bg-success">Select All Bills</button></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>    
                        <div class="row">
                        <div class="col-12 data_tables">
                            <div class="card">
                                
                                <div class="card-block">
                                  <br>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-xl-12">
                                            <label for="name4" class=" col-form-label">DISCOUNT & CREDIT INFORMATION FOR HIGHLIGHTED BILL</label>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">Vendor</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <label for="name4" class=" col-form-label">Lindeloof</label>
                                        </div>
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">Terms</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <label for="name4" class=" col-form-label">1% 10 Net 30</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Number Of Credits</label>
                                        </div>
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">0</label>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">Bill Ref.No</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <label for="name4" class=" col-form-label">871277</label>
                                        </div>
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">Sugg Discount</label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <label for="name4" class=" col-form-label">0.00</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Total Credit Available</label>
                                        </div>
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">0.00</label>
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
                        <br>
                        <div class="row">
                        <div class="col-12 data_tables">
                            <div class="card">
                                
                                <div class="card-block">
                                  <br>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-xl-12">
                                            <label for="name4" class=" col-form-label">PAYMENTS</label>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">Date</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <input type="date" class="form-control" name="">
                                        </div>
                                        <div class="col-lg-1 col-xl-1">
                                            
                                        </div>
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">Method</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <select name="name" id="cboOptions" onchange="met(this.value);" class="form-control" >
                                                <option value="1">Check</option>
                                                <option value="2">Credit Card</option>
                                                <option value="3">Online Bank Pmt</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-1 col-xl-1">
                                            
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Accounts</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <select class="form-control">
                                                <option></option>
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
                                            <input type="radio" name="che">&nbsp To Be Printed<br><input type="radio" name="che">&nbsp Assign check number
                                        </div>
                                        <div class="sem col-lg-3 col-xl-3" id="cre" style="display: none;">
                                            
                                        </div>
                                        <div class="sem col-lg-3 col-xl-3" id="bank" style="display: none;">
                                            <input type="checkbox" name="che">&nbsp Include Reference Number
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <label for="name4" class=" col-form-label">Ending Balance</label>
                                        </div>
                                        <div class="col-lg-1 col-xl-1">
                                            <label for="name4" class=" col-form-label">89.000.00</label>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-4 col-xl-4">
                                            
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <button class="form-control bg-success">Pay Selected Bills</button>
                                            
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            
                                            <button class="form-control bg-success">Cancel</button>
                                        </div>
                                        
                                        
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>