
    <div style="margin-top:5px;" class="container-fluid ">
        <div class="Titl-kalbe">
            <h3>Report Molekuler Data</h3>
        </div>
        
        <div class="card card-custom">
            <div class="card-header">
                <a class="btn btn-danger btn-rounded" href="<?php echo base_url('home') ?>"><i class="fas fa-angle-double-left ic pr-2"></i><span class="non">Kembali</span></a>

                
                <a href="<?php echo base_url('report') ?>" class="btn btn-info btn-rounded" ><i class="fas fa-sync ic pr-2"></i><span class="non">Refresh</span></a>
            </div>
        </div>
        <div class="shadow-sm tbl-1 p-3 mb-5" style="background : #F1F1F1;">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <div class="pt-4 mt-2">
                            <label for="exampleFormControlTextarea1">Test Status</label>
                            <select id="TestStatus" data-live-search="true" data-live-search-style="startsWith" class="selectpicker" data-width="100%">
                                 <option value="">Pilih--</option>
                            </select>
                            <input type="hidden" id="session" value="<?php echo $this->session->userdata('id') ?>" />
                        </div>
                </div>
            </div>
                    <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6 mb-4">

                                        <div class="md-form">
                                            <!--The "from" Date Picker -->
                                            <input required placeholder="Selected starting date Received" type="date" id="Date_Received_Now" class="form-control datepicker">
                                          
                                        </div>

                                    </div>
                                    <!--Grid column-->
                                    <!--Grid column-->
                                    <div class="col-md-6 mb-4">

                                        <div class="md-form">
                                            <!--The "to" Date Picker -->
                                            <input required placeholder="Selected ending date Received" type="date" id="Date_Received_last" class="form-control datepicker">
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                </div>
              <div class="row">
                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                 <button class="btn btn-filter btn-primary"><i class="fas fa-search ic pr-2"></i> Filter</button>
                </div>
            </div>
            
                <div class="card card-custom " >
                <!-- Editable table -->
                <div class="card " >
                    <div class="card-body tbl_1" style="display:none;">
                        <!-- / Collapsible element -->
                        <div class="col-12" >
                            <div  class="table-responsive table-editable " >
                                <table id="example"  width="100%">
                                    <thead>
                                        <tr>
                                              <th>Test</th>
                                            <th>Clinician</th>
                                            <th>Pathologist</th>
                                            <th>Account</th>
                                            <th>City</th>
                                            <th>Patient</th>
                                            <th>Age</th>
                                            <th>Sex</th>
                                            <th>Clinical Diagnosis</th>
                                            <th>Kalgen Innolab ID</th>
                                            <th>Date Received</th>
                                            <th>Date Result</th>
                                            <th>Result</th>
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

           <div class="card card-custom " >
                <!-- Editable table -->
                <div class="card " >
                    <div class="card-body tbl_2"  style="display:none;">
                        <!-- / Collapsible element -->
                        <div class="col-12">
                            <div  class="table-responsive table-editable " >
                                <table id="example2"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>Test</th>
                                            <th>Clinician</th>
                                            <th>Pathologist</th>
                                            <th>Account</th>
                                            <th>City</th>
                                            <th>Age</th>
                                            <th>Sex</th>
                                            <th>Clinical Diagnosis</th>
                                            <th>Kalgen Innolab ID</th>
                                            <th>Voucher Number</th>
                                            <th>Date Received</th>
                                            <th>Date Result</th>
                                            <th>Result</th>
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





