<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            SALES TAX CODE LIST
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
                                <a href="#">Sales Tax Code</a>
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
                                    <i class="fa fa-table"></i> Sales Tax Code
                                </div>
                                <div class="card-block">
                                    <br>
                                    <a href="<?=base_url();?>add_sales_tax_code_c">
                                        <button type="button" class="btn btn-labeled btn-success" >
                                            <span class="btn-label">
                                                <i class="fa fa-plus-square"></i>
                                            </span>
                                                  Add Sales Tax Code
                                        </button>
                                    </a>
                                    <br>
                                    <br>
                                        <table class="table table-striped table-bordered table-advance table-hover table_status_padding">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Code
                                                    </th>
                                                    <th>
                                                        Description
                                                    </th>
                                                    <th>
                                                        Taxable
                                                    </th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($get_tax as $key => $row) {
                                                
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?=$row->CODE_NAMA;?>
                                                    </td>
                                                    <td><?=$row->DESCRIPTION;?></td>
                                                    <td>
                                                        
                                                        <?php 
                                                            if($row->TYPE == '1'){
                                                                ?>
                                                                <i class="fa fa-check-circle fa-2x"></i>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-success">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-danger">
                                                            <i class="fa fa-edit"></i> Hapus
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