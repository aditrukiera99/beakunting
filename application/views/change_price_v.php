<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            CHANGE PRICE
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
                                <a href="#">Change Price</a>
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
                                    <i class="fa fa-money"></i> Change Price
                                </div>
                                <div class="card-block">
                                    
                                    
                                    <br>
                                    <br>
                                    <table id="example1" class="display table table-stripped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="bg-success">No</th>
                                            <th class="bg-success">Item</th>
                                            <th class="bg-success">Description</th>
                                            <th class="bg-success">Current Price</th>
                                            <th class="bg-success">U/M</th>
                                            <th class="bg-success">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP $a = 0; 
                                        foreach ($um_data as $key => $row) { $a++; ?>
                                        <tr>
                                            <td><?=$a; ?></td>
                                            <td><?=$row->NAMA_PRODUK;?></td>
                                            <td><?=$row->DESKRIPSI;?></td>
                                            <td><?=$row->HARGA_SATUAN;?></td>
                                            <td><?=$row->SATUAN;?></td>
                                            <td align="center">
                                            <button type="button" class="btn btn-labeled btn-success"><span class="btn-label"><i class="fa fa-eye"></i></span>History</button>
                                            <button type="button" class="btn btn-labeled btn-warning"><span class="btn-label"><i class="fa fa-plus"></i></span>Update Harga</button>
                                            <button type="button" class="btn btn-labeled btn-danger"><span class="btn-label"><i class="fa fa-edit"></i></span>Edit</button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                