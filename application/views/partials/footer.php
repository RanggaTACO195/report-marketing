    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php if($this->uri->segment('1') == 'account'){ ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
<!-- @*<script type="text/javascript" src="~/lib/datatable/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="~/lib/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="~/lib/datatable/js/dataTables.responsive.min.js"></script>
<script src="extensions/editable/bootstrap-table-editable.js"></script>
<script type="text/javascript" src="~/js/index.js"></script>
<link rel="stylesheet" href="~/lib/datatable/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="~/lib/datatable/css/responsive.dataTables.min.css">
<script type="text/javascript" src="~/lib/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="~/lib/tables/datatables/extensions/buttons.min.js"></script>
<script type="text/javascript" src="~/lib/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
<script type="text/javascript" src="~/lib/tables/datatables/extensions/fixed_columns.min.js"></script>
<script type="text/javascript" src="~/lib/tables/datatables/extensions/jszip/jszip.min.js"></script>
<script type="text/javascript" src="~/lib/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
<script type="text/javascript" src="~/lib/tables/datatables/extensions/buttons.min.js"></script>
*@ -->





    <script>
    $(document).ready(function() {
        let account = $("#session").val();
     $('#Date_Received_Now').val(new Date().toISOString().slice(0, 10));
     $('#Date_Received_last').val(new Date().toISOString().slice(0, 10));
        //ajax for get data from restAPI 
          var datatable = $('#example').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });

       getDataStatus();
        getAccount();
        getData();

            $(".btn-simpan").on("click", function() {
               var form = document.forms.namedItem("frmAccount");
               let Account = $('#Account').val();
            let TestStatus = $('#TestStatus').val();
        if (Account != "" || TestStatus != "" ) {
            $.ajax({
                url: "<?php echo base_url('molekuler/insertData') ?>",
                type:"post",
                data:  new FormData(form),
                   dataType: 'json',
                   processData: false,
                    contentType: false,
                success: function(response) { 
                       alert("Data Berhasil Di simpan");    
  location.reload();
                    
                }
            })
        } else {
           Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Data Tidak Boleh Kosong',
                });
        }
    });

        
        function getData() {
        
            $.ajax({
                 url: "<?php echo base_url('molekuler/getDetailAccount') ?>",
                type: "GET",
                data : {account:account},
                dataType: "json",
                success: function(response) {
                    console.log(response);
                        for (var i = 0; i < response.data.length; i++) {
                            datatable.row.add([response.data[i].nama_account, response.data[i].test_status]).draw(false);
                            };
                            datatable.draw();
                }
            })
        }

        
        function getDataStatus() {
            $.ajax({
                url: "<?php echo base_url('molekuler/getTestStatus') ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                  
                            for (var i = 0; i < data.data.length; i++) {
                                $('#TestStatus').append(
                                    '<option value="'+data.data[i].TestStatus+'">' + data.data[i].TestStatus + '</option>'
            );
        }
            $('#TestStatus').selectpicker('refresh');
                }

            });
            
 }

         function getAccount() {
            $.ajax({
                url: "<?php echo base_url('molekuler/getAccount') ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                  
                            for (var i = 0; i < data.data.length; i++) {
                                $('#Account').append(
                                    '<option value="'+data.data[i].id+'">' + data.data[i].nama_account + '</option>'
            );
        }
            $('#Account').selectpicker('refresh');
                }

            });
            
 }

           

        //create function clicked row table
        $('#page1').on('click', 'tbody tr', function() {
            var data = $('#page1').DataTable().row(this).data();
             $("#pageindexDetail").hide('300');
            $("#pageindexDetail").show('300');
        });

        

    });
</script>

    <?php }?>

    <?php if($this->uri->segment('1') == 'report'){ ?>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>


    <script>
    $(document).ready(function() {
   
     $('#Date_Received_Now').val(new Date().toISOString().slice(0, 10));
     $('#Date_Received_last').val(new Date().toISOString().slice(0, 10));
        let account = $("#session").val();
        //ajax for get data from restAPI 
          var datatable = $('#example').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });

          var datatable2 = $('#example2').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });
        function clearTable(){
            $("#tbodyHeader").empty();
        }

       getDataStatus();
        function getDataStatus() {
            $.ajax({
                url: "<?php echo base_url('molekuler/getFilterStatusByID') ?>",
                type: "GET",
                dataType: "json",
                data: {
                    account: account
                },
                success: function(data) {
                  
                            for (var i = 0; i < data.data.length; i++) {
                                $('#TestStatus').append(
                                    '<option value="'+data.data[i].TestStatus+'">' + data.data[i].TestStatus + '</option>'
            );
        }
            $('#TestStatus').selectpicker('refresh');
                }

            });
            
 }

        $(".btn-filter").on("click", function() {
            let TestStatus = $("#TestStatus").val();
            let Date_Received_Now = $("#Date_Received_Now").val();
            let Date_Received_last = $("#Date_Received_last").val();
             datatable.clear().draw();
            if (TestStatus == "") {
                //create sweat alert
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Test Status Tidak Boleh Kosong',
                });
            }else{
                     $.ajax({
                    url: "<?php echo base_url('molekuler') ?>",
                    type: "get", 
                    data: {
                        TestStatus: TestStatus,
                        Date_Received_Now : Date_Received_Now , 
                        Date_Received_last : Date_Received_last
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.success == true) {
                            if (TestStatus == "Roche") {
                            $(".tbl_1").show('300');
                             $(".tbl_2").hide('300');
                            for (var i = 0; i < response.data.length; i++) {
                            datatable.row.add([response.data[i].Test,response.data[i].Clinician, response.data[i].Pathologist, response.data[i].Account, response.data[i].City, response.data[i].Patient_Singkatan, response.data[i].Age, response.data[i].Sex, response.data[i].Clinical_Diagnosis, response.data[i].KalgenInnolabID, response.data[i].Date_Received, response.data[i].Date_of_Result_Out_SendtoCostumer, response.data[i].Result_Makroskopik, response.data[i].TestStatus]).draw(false);
                            };
                            datatable.draw();
                            }else{
                                $(".tbl_2").show('300');
                             $(".tbl_1").hide('300');
                               for (var i = 0; i < response.data.length; i++) {
                            datatable2.row.add([response.data[i].Test,response.data[i].Clinician, response.data[i].Pathologist, response.data[i].Account, response.data[i].City,  response.data[i].Age, response.data[i].Sex, response.data[i].Clinical_Diagnosis, response.data[i].KalgenInnolabID,response.data[i].VoucherNumber,response.data[i].Date_Received, response.data[i].Date_of_Result_Out_SendtoCostumer, response.data[i].Result_Makroskopik, response.data[i].TestStatus]).draw(false);
                            };
                            datatable2.draw();
                             
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Data Tidak Ditemukan',
                            });
                        }
                    }
                      
                });
                
            }
        });
           

        //create function clicked row table
        $('#page1').on('click', 'tbody tr', function() {
            var data = $('#page1').DataTable().row(this).data();
             $("#pageindexDetail").hide('300');
            $("#pageindexDetail").show('300');
        });

        

    });
</script>

    <?php }?>


	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- LOAD SCRIPT -->
    <!-- Bootstrap tooltips -->
    <script src="<?= base_url() ?>assets/lib/bootstrap/dist/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url() ?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script src="<?= base_url() ?>assets/lib/mdb/js/mdb.js"></script>
    <!--Preloading JS-->
    <script src="<?= base_url() ?>assets/lib/bootstrap/dist/js/preloading.js"></script>
    <!--Wow Js-->
    <script src="<?= base_url() ?>assets/lib/bootstrap/dist/js/wow.js"></script>
    <!--Dropdown Js-->
    <script src="<?= base_url() ?>assets/lib/bootstrap/dist/js/dropdown.js"></script>

    <!--WYSIWYG Js-->
    <script src="<?= base_url() ?>assets/lib/bootstrap/dist/js/wysiwyg.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script src="<?= base_url() ?>assets/js/site.js" asp-append-version="true"></script>
    <!--Steppers JS-->
    <script src="<?= base_url() ?>assets/lib/mdb/js/addons-pro/steppers.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/mdb/js/addons-pro/steppers.js"></script>

    <script>
        $(document).ready(function () {
            $(".preloader").fadeOut();
        })

        
    </script>

    <!-- @RenderSection("Scripts", required: false) convert to php -->
    <?php if (isset($this->section['Scripts'])): ?>
        <?php echo $this->section['Scripts'] ?>
    <?php endif; ?>
</body>
</html>