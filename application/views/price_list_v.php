<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            PRICE LIST
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
                                <a href="#">Price Level List</a>
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
                                    <i class="fa fa-table"></i> Price Level List
                                </div>
                                <div class="card-block">
                                    <br>
                                    <a href="<?=base_url();?>add_price_list_c">
                                        <button type="button" class="btn btn-labeled btn-success" >
                                            <span class="btn-label">
                                                <i class="fa fa-plus-square"></i>
                                            </span>
                                                  Add Price List
                                        </button>
                                    </a>
                                    <br>
                                    <br>
                                        <table class="table table-striped table-bordered table-advance table-hover table_status_padding">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>
                                                        Name &nbsp <?= date('F');?>
                                                    </th>
                                                    <th>
                                                        Type &nbsp <?= date('d');?>
                                                    </th>
                                                    <th>
                                                        Details &nbsp <?= date('H');?>
                                                    </th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data_price as $key => $row) {
                                                        $i++;
                                                    ?>
                                                <tr>
                                                    <td><?=$i;?></td>
                                                    <td>
                                                        <?=$row->NAMA_PRICE;?>
                                                    </td>
                                                    <td><?=$row->TIPE_PRICE;?></td>
                                                    <td>
                                                        <?=$row->DETAILS_PRICE;?>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-success btn-xs purple">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                </div>
                            </div>
                        </div>
                    </div>