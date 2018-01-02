<header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-th"></i>
                            WORKING BALANCE
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
                                <a href="#">Working Balance</a>
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
                                    <i class="fa fa-table"></i> Working Balance
                                </div>
                                <div class="card-block">
                                    <br>
                                    <div class="form-group row">
                                        <div class="col-lg-1 col-xl-1 ">
                                            <label for="name4" class=" col-form-label">Selected Period</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <select name="" class="form-control">
                                                    <option value="Last Month">Last Month</option>
                                                    <option value="Last Fiscal Year">Last Fiscal Year</option>
                                                    <option value="Last Fiscal Quarter">Last Fiscal Quarter</option>
                                                    <option value="This Month">This Month</option>
                                                    <option value="This Fiscal Quarter">This Fiscal Quarter</option>
                                                    <option value="This Fiscal Year">This Fiscal Year</option>
                                                    <option value="Custom">Custom</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-xl-1 ">
                                            <label for="name4" class=" col-form-label">From</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="date" class="form-control" name="kode_akun" placeholder="" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-xl-1 ">
                                            <label for="name4" class=" col-form-label">To</label>
                                        </div>
                                        <div class="col-lg-2 col-xl-2">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <input type="date" class="form-control" name="kode_akun" placeholder="" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div style="overflow-y: scroll;height: 400px;">
                                        <table class="table table-striped table-bordered table-advance table-hover table_status_padding">
                                                <thead>
                                                <tr>
                                                    <th>Account</th>
                                                    <th>Beginning Balance</th>
                                                    <th>Transaction</th>
                                                    <th>Adjusments</th>
                                                    <th>Ending Balance</th>
                                                    <th>Workpaper Referebce</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                <tr>
                                                    <td>Account</td>
                                                    <td>Beginning Balance</td>
                                                    <td>Transaction</td>
                                                    <td>Adjusments</td>
                                                    <td>Ending Balance</td>
                                                    <td>Workpaper Referebce</td>
                                                </tr>
                                                
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                        <td></td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                        </div>
                                        <br>
                                        <input type="submit" value="Print" class="btn btn-default" style="float: right;" name=""> 
                                        <input type="submit" value="Make Adjusment" class="btn btn-success" style="float: right;margin-right: 5px;" name="">
                                </div>
                            </div>
                        </div>
                    </div>