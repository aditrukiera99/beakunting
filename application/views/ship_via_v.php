<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                SHIP VIA
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
                    <a href="<?=base_url();?>items_c">Ship Via</a>
                </li>
                
            </ol>
        </div>
        </div>
    </div>
</header>
<br>

<div class="row">
    <div class="col-12 data_tables">
        <a href="<?=base_url();?>add_ship_via_c">
                    <button type="button" class="btn btn-labeled btn-success" >
                        <span class="btn-label">
                            <i class="fa fa-plus-square"></i>
                        </span>
                              Add New Ship Via
                    </button>
                </a>
        <br><br>
        <div class="card">
            <div class="card-block">
                <br>
                <table id="example1" class="display table table-stripped table-bordered table-hover">
                    <thead>
                    <tr class="bg-success">
                        
                        <th>No</th>
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
                        <td><?=$i;?></td>
                        <td><?=$row->NAMA;?></td>
                        <td>
                            <a href="<?=base_url();?>ship_via_c/ubah_data/<?=$row->ID;?>" class="btn btn-success">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <!-- <a href="#" class="btn btn-danger">
                                <i class="fa fa-edit"></i> Hapus
                            </a> -->
                        </td>
                    </tr>
                    
                    </tr>
                    <?PHP } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
                