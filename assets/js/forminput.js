
var city;

function cityVendor_onClick() {
    city = 'vendor';
    console.log(cityy);
}

function cityShip_onClick() {
    city = 'ship';
    console.log(cityy);
}

function cityCompany_onClick() {
    city = 'company';
    console.log(cityy);
}

$('#modalproduct').on('click', function (e) {
    var productCode = $(e.target).closest('tr').find("td").eq("0").html();
    var productModel = $(e.target).closest('tr').find("td").eq("1").html();
    var productName = $(e.target).closest('tr').find("td").eq("2").html();
    var productBrand = $(e.target).closest('tr').find("td").eq("3").html();
    var productColor = $(e.target).closest('tr').find("td").eq("4").html();
    var productPrice = $(e.target).closest('tr').find("td").eq("5").html();

    $('#code').val(productCode);
    $('#model').val(productModel);
    $('#product').val(productName);

    $('#brand').val(productBrand);
    $('#color').val(productColor);
    $('#price').val(productPrice);

    $('#exampleModalProduct').modal('hide');

    stepTwo();
});

$('#company').on('click', function (e) {
    var companyName = $(e.target).closest('tr').find("td").eq("0").html();
    var address = $(e.target).closest('tr').find("td").eq("1").html();

    $('#txtNameCompany').val(companyName);
    $('#txtAdressCompany').val(address);
    $('#exampleModal').modal('hide');
});

function stepTwo() {
    var code = $('#code').val();
    
    if (code.length > 1) {
        $('#mainForm').attr('hidden', false);
        $('#qty').attr('readonly', false);
        $('#qtyForm').show();
    } else {
        $('#mainForm').attr('hidden', true);
        $('#qty').attr('readonly', true);
        $('#qtyForm').hide();
    }
}

function deliveryStep() {
    var qty = $('#qty').val();

    if (qty) {
        $('#delivery').attr('disabled', false);
        $('#deliveryForm').show();
    } else {
        $('#delivery').val('');
        $('#delivery').attr('disabled', true);
        $('#deliveryForm').hide();
    }
}

$('#vendor').on('click', function (e) {
    var vendorName = $(e.target).closest('tr').find("td").eq("0").html();
    var address = $(e.target).closest('tr').find("td").eq("1").html();

    $('#txtVendorTo').val(vendorName);
    $('#txtCompanyName').val(vendorName);
    $('#txtAddressVendor').val(address);
    $('#exampleModal1').modal('hide');
});

$('#ship').on('click', function (e) {
    var shipTo = $(e.target).closest('tr').find("td").eq("0").html();
    var address = $(e.target).closest('tr').find("td").eq("1").html();

    $('#txtShipTo').val(shipTo);
    $('#txtClient').val(shipTo);
    $('#txtAddressShip').val(address);
    $('#exampleModal2').modal('hide');
});

$('#city').on('click', function (e) {
    var cityTarget = $(e.target).closest('tr').find("td").eq("0").html();

    if (city === 'vendor') {
        $('#txtCityVendor').val(cityTarget);
    } else if (city === 'ship') {
        $('#txtCityShip').val(cityTarget);
    } else if (city === 'company') {
        $('#txtCityCompany').val(cityTarget);
    }

    $('#modalcity').modal('hide');
});


var row = 1;
var editedRow;
var modeModal;

function closedBtn() {
    $('#mainForm').attr('hidden', true);
}

function submitedBtn() {
    $('#mainForm').attr('hidden', true);
}

$(document).ready(function () {
    var tableship = $('#example').DataTable({
        responsive: true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false,
        "scrollX": false
    });
    var tableship = $('#example').DataTable();

    $('#example tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            tableship.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });


    $('#removeprodship').click(function () {
        tableship.row('.selected').remove().draw(false);

    });


    $("#tambahship").click(function () {
        if (modeModal === "ADD") {
            console.log(modeModal);
            var nilaii = `
                     <div class="">
                      &nbsp;
               </div>
            `
            var nilai = `
        <div class="d-flex">
            <div class="">
                <button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0" data-toggle="modal" data-target="#modaldelete1">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
            <div class="">
                <button type="button"
                        class="btn btn-warning btn-rounded btn-sm my-0" id="editProductsDetailShip" data-toggle="modal" data-target="#modaladd1">
                        <i class="fa fa-edit"></i>
                </button>
            </div>
        </div>
      `
            var nilai2 = $("#via").val();
            var nilai3 = $("#shipmethod").val();
            var nilai4 = $("#shiptrems").val();
            var nilai5 = $("#jenis").val();
            var nilai6 = $("#penerima").val();
            var nilai7 = $("#tlp").val();
            var nilai8 = $("#estimasi").val();
            var nilai9 = $("#deliveryship").val();
            var todayTime = new Date(nilai9);
            var day = todayTime.getDate();
            var month = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "August", "Sept", "Oct", "Nov", "Dec"][todayTime.getMonth()];
            var year = todayTime.getFullYear();
            console.log(day);
            console.log(month);
            console.log(year);
            tableship.row.add([
                   '<td class="pt-3-half">' + nilaii + '</td>',
                   '<td class="pt-3-half">' + nilai + '</td>',
                   '<td class="pt-3-half">' + nilai2 + '</td>',
                   '<td class="pt-3-half">' + nilai3 + '</td>',
                   '<td class="pt-3-half">' + nilai4 + '</td>',
                   '<td class="pt-3-half">' + nilai5 + '</td>',
                   '<td class="pt-3-half">' + nilai6 + '</td>',
                   '<td class="pt-3-half">' + nilai7 + '</td>',
                   '<td class="pt-3-half">' + nilai8 + '</td>',
                   '<td class="pt-3-half">' + day + '/' + month + '/' + year + '</td>',

            ]).node().id = 'row' + row;
            tableship.draw(false);
            row = row + 1;
            clearForm();
        } else if (modeModal === "EDIT") {
            //console.log(modeModal);
            let row = tableship.row('#row' + editedRow);
            let rowindex = row.index();
            let columns = tableship.settings().init.columns;
            tableship.cell({ row: rowindex, column: 2 }).data($("#via").val());
            tableship.cell({ row: rowindex, column: 3 }).data($("#shipmethod").val());
            tableship.cell({ row: rowindex, column: 4 }).data($("#shiptrems").val());
            tableship.cell({ row: rowindex, column: 5 }).data($("#jenis").val());
            tableship.cell({ row: rowindex, column: 6 }).data($("#penerima").val());
            tableship.cell({ row: rowindex, column: 7 }).data($("#tlp").val());
            tableship.cell({ row: rowindex, column: 9 }).data($("#deliveryship").val());
            tableship.cell({ row: rowindex, column: 8 }).data($("#estimasi").val());
            clearForm();
            tableship.draw(true);
        }
    });

    function clearForm() {
        $('#via').val('');
        $('#shipmethod').val('');
        $('#shiptrems').val('');
        $('#jenis').val('');
        $('#penerima').val('');
        $('#tlp').val('');
        $('#deliveryship').val('');
        $('#estimasi').val('');
    }

    $("#btnBuatAddShip").click(function () {
        modeModal = "ADD";
        clearForm();
        $('#qtyForm').hide();
        $('#deliveryForm').hide();
        $('#mainForm').attr('hidden', true);
    });

});


$('#example').on('click', '#editProductsDetailShip', function () {
    modeModal = "EDIT";
    editedRow = $(this).closest('tr').attr('id').substring(3, $(this).closest('tr').attr('id').length);
    $('#via').val($(this).closest('tr').find('td').eq('2').text());
    $('#shipmethod').val($(this).closest('tr').find('td').eq('3').text());
    $('#shiptrems').val($(this).closest('tr').find('td').eq('4').text());
    $('#jenis').val($(this).closest('tr').find('td').eq('5').text());
    $('#penerima').val($(this).closest('tr').find('td').eq('6').text());
    $('#tlp').val($(this).closest('tr').find('td').eq('7').text());
    $('#deliveryship').val($(this).closest('tr').find('td').eq('9').text());
    $('#estimasi').val($(this).closest('tr').find('td').eq('8').text());
    console.log(modeModal);
});


var row = 1;
var editedRow;
var modeModal;

$(document).ready(function () {
    $('#qtyForm').hide();
    $('#deliveryForm').hide();

    var tableprd = $('#example2').DataTable({
        responsive: true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false,
        "scrollX": false
    });
    var tableprd = $('#example2').DataTable();

    $('#example2 tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            tableprd.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    $('#removeprod').click(function () {
        tableprd.row('.selected').remove().draw(false);

    });

    $("#tambah").click(function () {
        if (modeModal === "ADD") {
            console.log(modeModal);
            var nilaii = `
                     <div class="">
                      &nbsp;
               </div>
            `
            var nilai = `
        <div class="d-flex">
            <div class="">
                <button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0" data-toggle="modal" data-target="#modaldelete4">
                     <i class="fa fa-trash"></i>
                </button>
            </div>
            <div class="">
                <button type="button"
                        class="btn btn-warning btn-rounded btn-sm my-0" id="editProductsDetail" data-toggle="modal" data-target="#modaladd2">
                     <i class="fa fa-edit"></i>
                </button>
            </div>
        </div>
      `
            var nilai2 = $("#code").val();
            var nilai3 = $("#product").val();
            var nilai4 = $("#qty").val();
            var nilai5 = $("#price").val();
            var nilai6 = $("#model").val();
            var nilai7 = $("#brand").val();
            var nilai8 = $("#color").val();
            var nilai9 = $("#delivery").val();
            var todayTime = new Date(nilai9);
            var month = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "August", "Sept", "Oct", "Nov", "Dec"][todayTime.getMonth()];
            var day = todayTime.getDate();
            var year = todayTime.getFullYear();
            console.log(month);
            console.log(day);
            console.log(year);
            tableprd.row.add([
                 '<td class="pt-3-half">' + nilaii + '</td>',
                 '<td class="pt-3-half">' + nilai + '</td>',
                 '<td class="pt-3-half">' + nilai2 + '</td>',
                 '<td class="pt-3-half">' + nilai3 + '</td>',
                 '<td class="pt-3-half">' + nilai4 + '</td>',
                 '<td class="pt-3-half">' + nilai5 + '</td>',
                 '<td class="pt-3-half">' + nilai6 + '</td>',
                 '<td class="pt-3-half">' + nilai7 + '</td>',
                 '<td class="pt-3-half">' + nilai8 + '</td>',
                 '<td class="pt-3-half">' + day + '/' + month + '/' + year + '</td>',

            ]).node().id = 'row' + row;
            tableprd.draw(false);
            row = row + 1;
            clearForm();
        } else if (modeModal === "EDIT") {
            //console.log(modeModal);
            let row = tableprd.row('#row' + editedRow);
            let rowindex = row.index();
            let columns = tableprd.settings().init.columns;
            tableprd.cell({ row: rowindex, column: 2 }).data($("#code").val());
            tableprd.cell({ row: rowindex, column: 3 }).data($("#product").val());
            tableprd.cell({ row: rowindex, column: 4 }).data($("#qty").val());
            tableprd.cell({ row: rowindex, column: 5 }).data($("#price").val());
            tableprd.cell({ row: rowindex, column: 6 }).data($("#model").val());
            tableprd.cell({ row: rowindex, column: 7 }).data($("#brand").val());
            tableprd.cell({ row: rowindex, column: 8 }).data($("#color").val());
            tableprd.cell({ row: rowindex, column: 9 }).data($("#delivery").val());
            clearForm();
            tableprd.draw(true);
        }
    });

    function clearForm() {
        $('#code').val('');
        $('#model').val('');
        $('#product').val('');
        $('#brand').val('');
        $('#delivery').val('');
        $('#color').val('');
        $('#qty').val('');
        $('#price').val('');
    }

    $("#btnBuatAdd").click(function () {
        modeModal = "ADD";
        clearForm();
    });

/*    new $.fn.dataTable.FixedHeader(tableprd);*/


});


$('#example2').on('click', '#editProductsDetail', function () {
    modeModal = "EDIT";
    editedRow = $(this).closest('tr').attr('id').substring(3, $(this).closest('tr').attr('id').length);
    $('#code').val($(this).closest('tr').find('td').eq('2').text());
    $('#model').val($(this).closest('tr').find('td').eq('6').text());
    $('#product').val($(this).closest('tr').find('td').eq('3').text());
    $('#brand').val($(this).closest('tr').find('td').eq('7').text());
    $('#delivery').val($(this).closest('tr').find('td').eq('9').text());
    $('#color').val($(this).closest('tr').find('td').eq('8').text());
    $('#qty').val($(this).closest('tr').find('td').eq('4').text());
    $('#price').val($(this).closest('tr').find('td').eq('5').text());
    console.log(modeModal);
});

$(document).ready(function () {
    var table = $('#vendor').DataTable({
        responsive: true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false
    });


    
});


$(document).ready(function () {
    var table = $('#ship').DataTable({
        responsive: true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false
    });



});

$(document).ready(function () {
    var table = $('#city').DataTable({
        responsive: true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false
    });


  
});

$(document).ready(function () {
    var table = $('#company').DataTable({
        responsive: true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false
    });


});

$(document).ready(function () {
    var table = $('#modalproduct').DataTable({
        responsive: true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false
    });


});

$(document).ready(function () {
    $("#tableSearchPrd").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#modalproduct tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#tableSearchShip").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#ship tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#tableSearchCompany").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#company tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});



$(document).ready(function () {
    $("#tableSearch").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#vendor tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});



$(document).ready(function () {
    $("#tableship").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#ship tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#tablecity").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#city tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});


function someFunction() {
    setTimeout(function () {
        $('#feedback-step').nextStep();
    }, 2000);
}

$(document).ready(function () {
    $('.stepper').mdbStepper();
})








