<header class="head">
                <div class="main-bar">
                    <div class="row ">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            PAYROLL SCHEDULE LIST
                        </h4>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Payroll Schedule</a>
                            </li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <br>
            <br>
            <div class="row">
                        <div class="col-12 data_tables">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> Payroll Schedule
                                </div>
                                <div class="card-block">
                                    <br>
                                    <a href="<?=base_url();?>add_payroll_schedule_c">
                                        <button type="button" class="btn btn-labeled btn-success" >
                                            <span class="btn-label">
                                                <i class="fa fa-plus-square"></i>
                                            </span>
                                                  Tambah Payroll Schedule
                                        </button>
                                    </a>
                                    <br>
                                    <br>
                                        <table class="table table-striped table-bordered table-advance table-hover table_status_padding">
                                                <thead>
                                                <tr>
                                                    <th class="bg-success" style="color: white;">
                                                        Name
                                                    </th>
                                                    <th class="bg-success" style="color: white;">
                                                        Pay Frequency
                                                    </th>
                                                    <th class="bg-success" style="color: white;">
                                                        Next Check Date
                                                    </th>
                                                    <th class="bg-success" style="color: white;">
                                                        Next Pay Period End Date
                                                    </th>
                                                    <th class="bg-success" style="color: white;">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?PHP foreach ($data_sch as $key => $row) { ?>
                                                    <tr>
                                                        <td><?=$row->NAMA;?></td>
                                                        <td><?=$row->TIPE;?></td>
                                                        <td><?=$row->CHECK_DATE;?></td>
                                                        <td><?=$row->END_DATE;?></td>
                                                        <td><button class="btn btn-warning" value="Hapus">HAPUS</button></td>
                                                    </tr>
                                                    <?PHP } ?>
                                                </tbody>
                                            </table>
                                </div>
                            </div>
                        </div>
                    </div>