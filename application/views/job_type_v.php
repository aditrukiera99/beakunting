<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                JOB TYPE
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
                    <a href="<?=base_url();?>items_c">Job Type</a>
                </li>
                
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<div class="row">
    <div class="col-12 data_tables">
        <a href="<?=base_url();?>add_job_type_c">
                    <button type="button" class="btn btn-labeled btn-success" >
                        <span class="btn-label">
                            <i class="fa fa-plus-square"></i>
                        </span>
                              Add New Job Type
                    </button>
                </a>
        <br><br>
        <div class="card">
            <div class="card-block">
                <br>
                <table id="example1" class="display table table-stripped table-bordered table-hover">
                    <thead>
                    <tr class="bg-success">
                        
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP

                    foreach ($data_item as $key => $row) { 
                         $i++;
                    ?>
                    <tr>
                        
                        <td><?=$row->NAMA;?></td>
                        <td>
                            <a href="#" class="btn btn-success">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="#" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <?php 
                        
                        $get_anak = $this->model->get_anak_type($row->ID);
                        if(count($get_anak) > 0){
                            foreach ($get_anak as $key => $row_2) {
                        ?>
                        <tr>
                            
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class="fa fa-circle" style="font-size: 6px; vertical-align: middle;"></i> <?=$row_2->NAMA;?>
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
                        <?PHP     
                            }
                        }

                        ?>
                    </tr>
                    <?PHP } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
                