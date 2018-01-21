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
                        
                                   
                        <div class="col-lg-12">                            
                                           
                            <div class="form-group row">
                                <div class="col-lg-2 col-xl-2">
                                    <label style="margin-top: 0px;" for="username4" class="col-form-label">Show paycheck date from</label>
                                </div>
                                <div class="col-lg-2 col-xl-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="date" name="tgl1" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-xl-1">
                                    <label style="margin-top: 0px;" for="username4" class="col-form-label">thourgh</label>
                                </div>
                                <div class="col-lg-2 col-xl-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="date" name="tgl1" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-xl-1 text-lg-right">
                                    <label style="margin-top: 0px;" for="username4" class="col-form-label">Sort By</label>
                                </div>
                                <div class="col-lg-2 col-xl-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                        <select name="" class="form-control">
                                            <option value="Employee">Employee</option>
                                            <option value="Paycheck Date">Paycheck Date</option>
                                            <option value="Check No">Check No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>   

                            </div>
                        </div>
                    </div>                                
                </div>

                <div id="div1" class="display">
                

            
                <div class="col-lg-12">
                <div style="height: 500px; overflow-y: scroll;">
                <table class="table table-bordered table-hover table-striped" >
                    <thead>
                        <tr>
                            
                            <th class="bg-success" style="width: 25%;">PAYCHECK DATE</th>
                            <th class="bg-success" style="width: 10%;">CHECK NO</th>
                            <th class="bg-success" style="text-align: center; width: 10%;">EMPLOYEE</th>
                            <th class="bg-success" style="width: 10%;">MEMO</th>
                            <th class="bg-success" style="width: 10%;">NET AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody id="item_row">
                        
                                               
                    </tbody>
                </table>
            </div>
            </div>
                </div> 

              

                                                                  
            </div>
            <br>
            <div class="row">

                <div class="col-lg-12">
                    
                    <div class="form-group row">
                                           
                        <div class="col-lg-8 col-xl-8 text-lg-right">
                            <button type="submit" class="btn btn-labeled btn-success">
                                <span class="btn-label"><i class="fa fa-save"></i></span>
                               EDIT
                            </button>
                        </div>
                        <div class="col-lg-1 col-xl-1 text-lg-left"> 
                            <a href="<?=base_url();?>customer_c" class="btn btn-labeled btn-primary">
                                <span class="btn-label"><i class="fa fa-times"></i></span>
                                VOID
                            </a>
                        </div>
                        <div class="col-lg-1 col-xl-1 text-lg-left"> 
                            <a href="<?=base_url();?>customer_c" class="btn btn-labeled btn-primary">
                                <span class="btn-label"><i class="fa fa-times"></i></span>
                                HELP
                            </a>
                        </div>
                        <div class="col-lg-1 col-xl-1 text-lg-left"> 
                            <a href="<?=base_url();?>customer_c" class="btn btn-labeled btn-primary">
                                <span class="btn-label"><i class="fa fa-times"></i></span>
                                CANCEL
                            </a>
                        </div>
                    </div>

                </div>

            </div>                                
        </div>                        
    </div>
</div>
</form>



