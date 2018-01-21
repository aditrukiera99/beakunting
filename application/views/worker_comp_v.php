<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            WORKER COMP LIST 
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
                                <a href="#">WORKER COMP LIST</a>
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
                                    <i class="fa fa-table"></i> WORKER COMP LIST
                                </div>
                                <div class="card-block">
                                    <br>
                                    <a href="<?=base_url();?>add_worker_comp_c">
                                        <button type="button" class="btn btn-labeled btn-success" >
                                            <span class="btn-label">
                                                <i class="fa fa-plus-square"></i>
                                            </span>
                                                  Tambah Worker Comp
                                        </button>
                                    </a>
                                    <br>
                                    <br>
                                        <table class="display table table-stripped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th class="bg-success">Name</th>
                                                    <th class="bg-success">Description</th>
                                                    <th class="bg-success">Rate</th>
                                                    <th class="bg-success">Effective Date</th>
                                                    <th class="bg-success">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($get_worker as $key => $row) {
                                                    
                                                    ?>
                                                <tr>
                                                    <td>
                                                        <?=$row->WORKER_CODE;?>
                                                    </td>
                                                    <td class="hidden-xs"><?=$row->DESCRIPTION;?></td>
                                                    
                                                    <td><?=$row->RATE;?></td>
                                                    <td><?=$row->TANGGAL;?></td>
                                                    
                                                    <td>
                                                        <a href="<?=base_url();?>worker_comp_c/ubah_data/<?=$row->ID;?>" class="btn btn-success">
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