
    <div style="margin-top:5px;" class="container-fluid ">
        <div class="Titl-kalbe">
            <h3>Master Account</h3>
        </div>
        
        <div class="card card-custom">
            <div class="card-header">
                <a class="btn btn-danger btn-rounded" href="<?php echo base_url('home') ?>"><i class="fas fa-angle-double-left ic pr-2"></i><span class="non">Kembali</span></a>

                
                <a href="<?php echo base_url('account') ?>" class="btn btn-info btn-rounded" ><i class="fas fa-sync ic pr-2"></i><span class="non">Refresh</span></a>
            </div>
        </div>
        <div class="shadow-sm tbl-1 p-3 mb-5" style="background : #F1F1F1;">
               <form name="frmAccount">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <div class="pt-4 mt-2">
                            <label for="exampleFormControlTextarea1">Account</label>
                            <select id="Account" name="id_account" data-live-search="true" data-live-search-style="startsWith" class="selectpicker" data-width="100%">
                                 <option value="">Pilih--</option>
                            </select>
                        </div>
                </div>
            </div>
         
                            
                      
                    <div class="row">
                        
                                 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <div class="pt-4 mt-2">
                            <label for="exampleFormControlTextarea1">Test Status</label>
                            <select id="TestStatus" name="test_status" data-live-search="true" data-live-search-style="startsWith" class="selectpicker" data-width="100%">
                                 <option value="">Pilih--</option>
                            </select>
                        </div>
                </div>

                                </div>
              <div class="row">
                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                 <button type="button" class="btn btn-simpan btn-primary"><i class="fa fa-check ic pr-2"></i> Simpan</button>
                </div>
            </div>
              </form>
                <div class="card card-custom " >
                <!-- Editable table -->
                <div class="card " >
                    <div class="card-body tbl_1" >
                        <!-- / Collapsible element -->
                        <div class="col-12" >
                            <div  class="table-responsive table-editable " >
                                <table id="example"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>Account</th>
                                            <th>Test Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodyHeader">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
 



