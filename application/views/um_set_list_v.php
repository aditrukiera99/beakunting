<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            U/M SET LIST
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
                                <a href="#">U/M Set List</a>
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
                                <div class="card-header bg-white">
                                    <i class="fa fa-table"></i> U/M Set List
                                </div>
                                <div class="card-block">
                                    <br>
                                    <a href="<?=base_url();?>add_um_list_c">
                                        <button type="button" class="btn btn-labeled btn-success" >
                                            <span class="btn-label">
                                                <i class="fa fa-plus-square"></i>
                                            </span>
                                                  Tambah U/M
                                        </button>
                                    </a>
                                    <br>
                                    <br>
                                    <table id="example1" class="display table table-stripped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Base U/M</th>
                                            <th>Purchase U/M</th>
                                            <th>Sales U/M</th>
                                            <th>Shipping U/M</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP foreach ($um_data as $key => $row) { $i++; ?>
                                        <tr>
                                            <td><?=$i; ?></td>
                                            <td><?=$row->NAMA_SATUAN;?></td>
                                            <td><?=$row->BASE;?></td>
                                            <td><?=$row->PURCHASE;?></td>
                                            <td><?=$row->SALES;?></td>
                                            <td><?=$row->SHIPPING;?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                