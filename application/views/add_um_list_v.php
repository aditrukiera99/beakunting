<script>
    function showDiv(val) {
        $('.display').hide();
        if(val == "Count"){
            $('#count').show();
        }else if (val == "Length") {
            $('#length').show();
        }else if (val == "Weight") {
            $('#weight').show();
        }else if (val == "Volume") {
            $('#volume').show();
        }else if (val == "Area") {
            $('#area').show();
        }else if (val == "Timee") {
            $('#timee').show();
        }
        else if (val == "none") {
            $('#count').hide();
        }
    }

</script>
<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD UM List
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
                    <a href="<?=base_url();?>price_list_c">UM List</a>
                </li>
                <li class="active breadcrumb-item">Add UM List</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New U/M has been saved.
</div>
<?PHP } ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">Add UM List</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post" action="<?=base_url();?>add_um_list_c">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Name </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-code"></i>
                                                </span>
                                                <input type="text" class="form-control" name="nama" placeholder="character">
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3" >
                                            <label for="name4" class=" col-form-label">Type</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="tiper" class="form-control" id="pilih" onchange="showDiv(this.value)">
                                                    <option value="none">None..</option>
                                                    <option value="Count">Count</option>
                                                    <option value="Length">Length</option>
                                                    <option value="Weight">Weight</option>
                                                    <option value="Volume">Volume</option>
                                                    <option value="Area">Area</option>
                                                    <option value="Timee">Time</option>
                                                    <option value="Other">Other</option>
                                                    
                                                </select>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3" >
                                            <label for="name4" class=" col-form-label"></label>
                                        </div>
                                        <div class="display col-lg-4 col-xl-3" id="count" style="display: none;">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="tipe" class="form-control">
                                                    <option>Count</option>
                                                    <option value="ea">Each (ea)</option>
                                                    <option value="dz">Dozen (dz)</option>
                                                    <option value="pr">Pair (pr)</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="display col-lg-4 col-xl-3" id="length" style="display: none;">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="tipe" class="form-control">
                                                    <option>Length</option>
                                                    <option value="ft">Foot (ft)</option>
                                                    <option value="in">Inch (in)</option>
                                                    <option value="yd">Yard (yd)</option>
                                                    <option value="mi">Mile (mi)</option>
                                                    <option value="mm">Milimeter (mm)</option>
                                                    <option value="m">Meter (m)</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="display col-lg-4 col-xl-3" id="weight" style="display: none;">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="tipe" class="form-control">
                                                    <option>Weight</option>
                                                    <option value="lb">Pound (lb)</option>
                                                    <option value="oz">Ounce (oz)</option>
                                                    <option value="ton">Ton (ton)</option>
                                                    <option value="g">Gram (g)</option>
                                                    <option value="kg">Kilogram (kg)</option>
                                                    <option value="t">Metric Ton (t)</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="display col-lg-4 col-xl-3" id="count" style="display: none;">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="tipe" class="form-control">
                                                    <option>Count</option>
                                                    <option value="ea">Each (ea)</option>
                                                    <option value="dz">Dozen (dz)</option>
                                                    <option value="pr">Pair (pr)</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="display col-lg-4 col-xl-3" id="volume" style="display: none;">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="tipe" class="form-control">
                                                    <option>Volume</option>
                                                    <option value="gal">Gallon (gal)</option>
                                                    <option value="floz">Fluid Once (floz)</option>
                                                    <option value="qt">Quart (qt)</option>
                                                    <option value="l">Liter (l)</option>
                                                    <option value="cuin">Cubic Inch (cuin)</option>
                                                    <option value="cucm">Cubic Centimeter (cucm)</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="display col-lg-4 col-xl-3" id="area" style="display: none;">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="tipe" class="form-control">
                                                    <option>Area</option>
                                                    <option value="sqft">Square Foot (sqft)</option>
                                                    <option value="sqin">Squre Inch (sqin)</option>
                                                    <option value="sqyd">Square Yard (sqyd)</option>
                                                    <option value="sqm">Square Meter (sqm)</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="display col-lg-4 col-xl-3" id="timee" style="display: none;">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                                <select name="tipe" class="form-control">
                                                    <option>Timing</option>
                                                    <option value="hr">Hour (hr)</option>
                                                    <option value="min">Minuter (min)</option>
                                                    <option value="day">Day (day)</option>
                                                    <option value="wrkday">Work Day (wrkday)</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12 text-lg-right">
                                                <button type="submit" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                        <i class="fa fa-save"></i>
                                                    </span>
                                                            Simpan
                                                </button>
                                                <button type="button" class="btn btn-labeled btn-primary">
                                                    <span class="btn-label">
                                                        <i class="fa fa-times"></i>
                                                    </span>
                                                            Batal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div>       
                    </div>      
                </div>
                                                        
            </div>    
        </div> 
    </div>
</div>