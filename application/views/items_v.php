<div class="row">
    <div class="col-12 data_tables">
        <a href="<?=base_url();?>add_items_c">
                    <button type="button" class="btn btn-labeled btn-success" >
                        <span class="btn-label">
                            <i class="fa fa-plus-square"></i>
                        </span>
                              Add New Item
                    </button>
                </a>
        <br><br>
        <div class="card">
            <div class="card-block">
                <br>
                <table id="example1" class="display table table-stripped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="bg-success">Name</th>
                        <th class="bg-success">Description</th>
                        <th class="bg-success">Type</th>
                        <th class="bg-success">Qty</th>
                        <th class="bg-success">Account</th>
                        <th class="bg-success">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP foreach ($data_item as $key => $row) { ?>
                    <tr>
                        <td><?=$row->NAMA_PRODUK;?></td>
                        <td><?=$row->DESKRIPSI;?></td>
                        <td><?=$row->TIPE;?></td>
                        <td><?=$row->STOK;?></td>
                        <td><?=$row->KODE_AKUN;?></td>
                        <td><?=number_format($row->HARGA_SATUAN);?></td>
                    </tr>
                    <?PHP } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
                