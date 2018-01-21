<script>
    function showDiv(val) {
        $('.display').hide();
        if(val == "Quantity"){
            $('#div1').show();
        } else if(val == "Total Value"){
            $('#div2').show();
        }else if(val == "Quantity and Total Value"){
            $('#div3').show();
        }
    }

</script>
<style type="text/css">
.data_item:hover{
    background: #0f723a;
    cursor: pointer;
    color: #FFF;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #c4dff6 !important;
}

.table-bordered {
    border: 2px solid #00bf86;
    background: #fff !important;
}
</style>

<?PHP if($msg == 1){ ?>
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> Estimates has been created.
</div>
<?PHP } ?>
<input id="tr_utama_count" value="1" type="hidden"/>
<input id="tr_utama_count2" value="1" type="hidden"/>
<input id="tr_utama_count3" value="1" type="hidden"/>
<form class="form-horizontal" method="post" action="<?=base_url();?>estimate_c">
<input type="hidden" id="jml_tr" value="0">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">ON HAND</div>
            <div class="card-block cards_section_margin">                
                <div class="card-block">
                    <br>
                    <div class="row">
                        
                                   
                        <div class="col-lg-6">                            
                            <div class="form-group row">
                                <div class="col-lg-4 col-xl-4 text-lg-right">
                                    <label style="margin-top: 0px;" for="username4" class="col-form-label">EMPLOYEES SELECTED TO PAY</label>
                                </div>
                                <div class="col-lg-8 col-xl-4">
                                        <label style="margin-top: 0px;" class="col-form-label">0</label>
                                </div>                                    
                            </div>
                        

                                           
                            <div class="form-group row">
                                <div class="col-lg-4 col-xl-4 text-lg-right">
                                    <label style="margin-top: 0px;" for="username4" class="col-form-label">PAY PERIOD ENDS</label>
                                </div>
                                <div class="col-lg-8 col-xl-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="date" name="tgl1" class="form-control">
                                    </div>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <div class="col-lg-4 col-xl-4 text-lg-right">
                                    <label style="margin-top: 0px;" for="username4" class="col-form-label">CHECK DATE</label>
                                </div>
                                <div class="col-lg-8 col-xl-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="date" name="tgl1" class="form-control">
                                    </div>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <div class="col-lg-4 col-xl-4 text-lg-right">
                                    <label style="margin-top: 0px;" for="username4" class="col-form-label">BANK ACCOUNT</label>
                                </div>
                                <div class="col-lg-8 col-xl-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="fa fa-tags"></i>
                                        </span>
                                        <select name="accn" class="form-control chzn-select">
                                            <option></option>
                                            <?php 
                                                foreach ($get_acc as $key => $value) {
                                                ?> 
                                                <option value="<?=$value->ID;?>"><?=$value->KODE_AKUN;?> - <?=$value->NAMA_AKUN;?></option>

                                                
                                                <?php 
                                                }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>    

                            <div class="form-group row">
                                <div class="col-lg-4 col-xl-4 text-lg-right">
                                    <label style="margin-top: 0px;" for="username4" class="col-form-label">BANK ACCOUNT BALANCE</label>
                                </div>
                                <div class="col-lg-8 col-xl-4">
                                        <label style="margin-top: 0px;" class="col-form-label">0</label>
                                </div>                                    
                            </div>



                            </div>
                        </div>
                    </div>                                
                </div>

                <div id="div1" class="display">
                

                <br><br>
                <div class="col-lg-12">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="bg-success" style="width: 5%;"><input type="checkbox" class="form-control" name=""></th>
                            <th class="bg-success" style="width: 25%;">EMPLOYEE</th>
                            <th class="bg-success" style="width: 10%;">REGULAR PAY</th>
                            <th class="bg-success" style="text-align: center; width: 10%;">OVERTIME RATE</th>
                            <th class="bg-success" style="width: 10%;">SICK HOURLY</th>
                            <th class="bg-success" style="width: 10%;">VACATION HOUR</th>
                            <th class="bg-success" style="width: 10%;">SALARY</th>
                            <th class="bg-success" style="width: 10%;">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody id="item_row">
                        
                            <?php 
                                foreach ($data_emp as $key => $value) {
                                ?>
                                <tr>
                                <td><input type="checkbox" class="form-control" name=""></td>
                                <td><?=$value->FULL_NAME;?></td>
                                <td><input type="tex" class="form-control" name=""></td>
                                <td><input type="tex" class="form-control" name=""></td>
                                <td><input type="tex" class="form-control" name=""></td>
                                <td><input type="tex" class="form-control" name=""></td>
                                <td><input type="tex" class="form-control" name=""></td>
                                <td><label class="col-form-label">0.00</label></td>
                                </tr>
                                <?php 
                                }

                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div> 

              

                                                                  
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="form-group row">
                        <div class="col-lg-6 col-xl-10 text-lg-right">
                            <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 25px;"> TOTAL </label> 
                        </div>
                        <div class="col-lg-6 col-xl-2 text-lg-left">
                            <label for="name4" class=" col-form-label" style="font-weight: bold;font-size: 25px;" id="subtotal_txt">0.00</label>
                            <input type="hidden" name="subtotal" id="subtotal">
                        </div>
                    </div>

                    <div class="form-group row">
                                           
                        <div class="col-lg-10 col-xl-10 text-lg-right">
                            <button type="submit" class="btn btn-labeled btn-success">
                                <span class="btn-label"><i class="fa fa-save"></i></span>
                                Save & Create
                            </button>
                        </div>
                        <div class="col-lg-2 col-xl-2 text-lg-left"> 
                            <a href="<?=base_url();?>customer_c" class="btn btn-labeled btn-primary">
                                <span class="btn-label"><i class="fa fa-times"></i></span>
                                Cancel
                            </a>
                        </div>
                    </div>

                </div>

            </div>                                
        </div>                        
    </div>
</div>
</form>



