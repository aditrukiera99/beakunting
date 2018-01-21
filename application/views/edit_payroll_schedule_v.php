<header class="head bg-success">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD PAYROLL SCHEDULE
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
                    <a href="<?=base_url();?>items_c">Payroll</a>
                </li>
                <li class="active breadcrumb-item">Payroll Schedule</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">Payroll Schedule</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" action="<?=base_url().$post_url;?>" method="post">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-5 col-xl-5 ">
                                            <label for="name4" class=" col-form-label">What do you want to name this payroll schedule ? (e.g "Weekly","Biweekly","Monthly",etc)</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-tags"></i>
                                                </span>
                                                <input type="text" class="form-control" value="<?=$dt->NAMA;?>" name="nama" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="form-group row">
                                        <div class="col-lg-5 col-xl-5 ">
                                            <label for="name4" class=" col-form-label">What is the pay period end date ?</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar-o"></i>
                                                </span>
                                                <input type="date" value="<?=$dt->END_DATE;?>" name="tgl_1" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-5 col-xl-5 ">
                                            <label for="name4" class=" col-form-label">What date should appear on paychecks for this period ?</label>
                                        </div>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar-o"></i>
                                                </span>
                                                <input type="date" value="<?=$dt->CHECK_DATE;?>" name="tgl_2" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-9">
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
                                    

                                    
                                </fieldset>
                            </form>
                        </div>       
                    </div>      
                </div>
                                                         
            </div>    
        </div> 
    </div>
</div>