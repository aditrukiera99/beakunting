<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New U/M has been saved.
</div>
<?PHP } ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">Edit UM List</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post" action="<?=base_url().$post_url;?>">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Name </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-code"></i>
                                                </span>
                                                <input type="text" class="form-control" name="nama" value="<?=$dt->NAMA_SATUAN;?>" placeholder="character">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <button type="submit" name="simpan" value="Simpan" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>