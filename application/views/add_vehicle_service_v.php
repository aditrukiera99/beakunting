<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                VEHICLE MILEAGE
            </h4>
        </div>
        <div class="col-sm-8">
            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="fa fa-home" data-pack="default" data-tags=""></i>
                        Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?=base_url();?>items_c">Vehicle</a>
                </li>
                
            </ol>
        </div>
        </div>
    </div>
</header>

<br>

<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New vehicle mileage has been saved.
</div>
<?PHP } ?>

<form class="form-horizontal" method="post" action="<?=base_url();?>add_vehicle_service_c">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-6">                           
                            <br>
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Vehicle</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                            <select class="form-control chzn-select" name="vehicle">
                                                <option value="">None</option>
                                                <?PHP foreach ($data_vehicle as $key => $row) { ?>
                                                    <option value="<?=$row->ID;?>"><?=$row->NAMA;?></option>
                                                <?PHP } ?>
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Trip Start Date</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="date" name="start_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Trip End Date</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="date" name="end_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Odometer Start</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tag"></i>
                                            </span>
                                            <input type="text" class="form-control" name="odo_start" placeholder="0" required="" id="odo_start">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Odometer End</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tag"></i>
                                            </span>
                                <input type="text" class="form-control" name="odo_end" placeholder="0" required="" id="odo_end" onkeyup="berubah(this.value);">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Total Miles</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tag"></i>
                                            </span>
                                            <input type="text" class="form-control" name="total" placeholder="0" required="" id="total">
                                        </div>
                                    </div>
                                </div>

                                
                                
                            </fieldset>                            
                        </div> 
                        <div class="col-lg-6">                           
                            <br>
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Customer</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                            <select class="form-control chzn-select" name="cust">
                                                <option value="">None</option>
                                                <?PHP foreach ($dt as $key => $row2) { ?>
                                                    <option value="<?=$row2->ID;?>"><?php if($row2->NAMA_USAHA == "" || $row2->NAMA_USAHA == null){ echo $row2->NAMA_PELANGGAN; } else { echo $row2->NAMA_USAHA; } ?></option>
                                                <?PHP } ?>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Item</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                            <select class="form-control chzn-select" name="item">
                                                <option value="">None</option>
                                                <?PHP foreach ($item as $key => $row3) { ?>
                                                    <option value="<?=$row3->ID;?>"><?=$row3->NAMA_PRODUK;?></option>
                                                <?PHP } ?>
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Class</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-tags"></i>
                                            </span>
                                            <select name="classes" class="form-control">
                                                <option value=""></option>
                                                <option value="Remodel">Remodel</option>
                                                <option value="Overhead">Overhead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 col-xl-3 ">
                                        <label for="name4" class=" col-form-label">Note</label>
                                    </div>
                                    <div class="col-lg-4 col-xl-6">
                                        <div class="input-group">
                                            <textarea name="note" rows="6" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>                            
                        </div>       
                    </div>      
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group row">
                            <div class="col-lg-6 col-xl-12 text-lg-right">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i> Save Account
                                </button>

                                <a href="<?=base_url();?>accounts_c" class="btn btn-primary">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
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
    function berubah(id){
        var awal = $('#odo_start').val();

        var total = id - awal;

        $('#total').val(total);

    }
</script>