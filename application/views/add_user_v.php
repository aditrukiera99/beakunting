<header class="head">
    <div class="main-bar">
        <div class="row">
        <div class="col-sm-4">
            <h4 class="nav_top_align">
                <i class="fa fa-inbox"></i>
                ADD USER
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
                    <a href="<?=base_url();?>user_c">User</a>
                </li>
                <li class="active breadcrumb-item">Add User</li>
            </ol>
        </div>
        </div>
    </div>
</header>
<br>
<?PHP if($msg == 1){ ?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Saved!</strong> New User has been saved.
</div>
<?PHP } ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">Add Worker Comp</div>
            <div class="card-block cards_section_margin">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="post" action="<?=base_url();?>add_user_c">
                                <fieldset>
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Username </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input type="text" class="form-control" name="nama" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Password </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                                <input type="password" class="form-control" name="pass" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Confirm Password </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                                <input type="text" class="form-control" name="rate" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2 col-xl-3 ">
                                            <label for="name4" class=" col-form-label">Role </label>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <select name="selectfrom" id="select-from" class="form-control" multiple size="10">
                                                      <option value="Accountant">Accountant</option>
                                                      <option value="Account Payable">Account Payable</option>
                                                      <option value="Account Receiveable">Account Receiveable</option>
                                                      <option value="Banking">Banking</option>
                                                      <option value="External Accountant">External Accountant</option>
                                                      <option value="Finance">Finance</option>
                                                      <option value="Full Access">Full Access</option>
                                                      <option value="Inventory">Inventory</option>
                                                      <option value="Payroll Manager">Payroll Manager</option>
                                                      <option value="Payroll Processor">Payroll Processor</option>
                                                      <option value="Purchasing">Purchasing</option>
                                                      <option value="Sales">Sales</option>
                                                      <option value="Time Tracking">Time Tracking</option>
                                                      <option value="View Only">View Only</option>
                                                      
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                
                                                <button type="button" class="btn btn-success" onclick="tambah();" style="margin-right: 2px;">ADD</button> 
                                                <button type="button" class="btn btn-danger" onclick="kurang();">REMOVE</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <select name="selectto" id="select-to" class="form-control" multiple size="10">
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-xl-12 text-lg-right">
                                                <button type="submit" class="btn btn-labeled btn-success">
                                                    <span class="btn-label">
                                                        <i class="fa fa-save"></i>
                                                    </span>
                                                            Simpan
                                                </button>
                                                <button type="button" class="btn btn-labeled btn-primary">
                                                    <span class="btn-label">
                                                        <i class="fa fa-times"></i>
                                                    </span>
                                                            Batal
                                                </button>
                                            </div>
                                        </div>
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
<script type="text/javascript">
    function tambah(){
        $('#select-from option:selected').each( function() {
                $('#select-to').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    }
    function kurang(){
        $('#select-to option:selected').each( function() {
            $('#select-from').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    }
</script>