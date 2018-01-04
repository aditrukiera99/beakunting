<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            User List
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
                                <a href="#">User List</a>
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
                                    <i class="fa fa-table"></i> User List
                                </div>
                                <div class="card-block">
                                    <br>
                                    <a href="<?=base_url();?>add_user_c">
                                        <button type="button" class="btn btn-labeled btn-success" >
                                            <span class="btn-label">
                                                <i class="fa fa-plus-square"></i>
                                            </span>
                                                  Add User
                                        </button>
                                    </a>
                                    <br>
                                    <br>
                                    <table id="example1" class="display table table-stripped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP foreach ($um_data as $key => $row) { $i++; ?>
                                        <tr>
                                            <td><?=$i; ?></td>
                                            <td><?=$row->NAMA;?></td>
                                            <td><a href="#" class="btn btn-success">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a href="#" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i> Hapus
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
                