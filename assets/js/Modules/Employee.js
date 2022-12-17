'Use Strict';
const BaseUrl = "/Employee/";
var rowNumGrid = 0;


$("#btnBack").click(function () {
    window.location = BaseUrl + "Index";
});

$("#btnChooseCompany").click(function () {
    $('#_ModalExample').modal('show');
});

$('.datepicker').pickadate({
    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    format: 'dd mmm yyyy',
    formatSubmit: 'dd mmm yyyy',
    selectYears: true,
    selectMonths: true,
    closeOnSelect: true,
    closeOnClear: false
});

//tabel editable
$('.table-add').on('click', 'i', () => {

    const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

    if ($tableID.find('tbody tr').length === 0) {

        $('tbody').append(newTr);
    }

    $tableID.find('table').append($clone);
});

$('#employeeDetail').on('click', '.table-remove', function () {

    $(this).parents('tr').detach();
});
function initTableIndex() {
    //Pagination numbers
    $("#paginationSimpleNumbers>tbody").empty();
    $.ajax({
        url: '/Employee/Browse',
        method: "GET",
        xhrFields: {
            withCredentials: true
        },
        success: function (data) {
            $.each(data, function (a, b) {
                var sRow;
                sRow = "<tr><td style='text-align:center'><a type='button' class='btn btn-warning btn-sm' href='/Employee/EditEmployee/" + b.id + "'><i class='fas fa-pencil-alt'></i></a><a type='button' class='btn btn-danger btn-sm' href='/Employee/DeleteEmployee/" + b.id + "'><i class='fas fa-trash-alt'></i></a></td>";
                sRow += "<td>" + b.id + "</td>";
                sRow += "<td>" + b.name + "</td>";
                sRow += "<td>" + b.title + "</td>";
                if (b.active === true) {
                    sRow += "<td><div class='custom-control custom-checkbox'><input type='checkbox' class='custom-control-input' id='active' checked disabled><label class='custom-control-label' for='tableDefaultCheck1'></label></div></td>";
                }
                else {
                    sRow += "<td><div class='custom-control custom-checkbox'><input type='checkbox' class='custom-control-input' id='active' disabled><label class='custom-control-label' for='tableDefaultCheck1'></label></div></td>";
                }
                sRow += "<td>" + b.remarks + "</td></tr>";
                $("#paginationSimpleNumbers>tbody").append(sRow);

            });

            $("#paginationSimpleNumbers").DataTable({
                "pagingType": "simple_numbers",
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        }
    });
}
$('#btnAddFamily').click(function () {
    rowNumGrid = parseInt(rowNumGrid) + 1;
    var row = "<tr>";
    row += "<td class='RowNum'>" + rowNumGrid + "</td>";
    row += "<td><input name='tdName' id='tdName' type='text' class='form-control form-control-sm forms' value=''/></td>";
    row += "<td><input name='tdRelation' id='tdRelation' type='text' class='form-control form-control-sm' value=''/></td>";
    row += "<td><input name='tdBirthDate' id='tdBirthDate' type='text' class='form-control form-control-sm BirthDate' value=''/></td>";
    row += "<td><input name='tdAddress' id='tdAddress' type='text' class='form-control form-control-sm' value=''/></td>";
    row += "<td><select name='tdDependant' id='tdDependant' type='text' class='form-control form-control-sm' style='width:100%' value=''>";
    row += "<option value=''>Choose Relation</option><option value=true>Yes</option><option value=false>No</option></select></td>";

    row += "<td style='text-align:center' id='tdAction'><button type='button' name='btnDeleteFamily' onclick='DeleteFamily(this)' class='btn btn-danger-dark btn-sm btn-rounded'><i class='far fa-trash-alt'></i></button</td>";
    row += "</tr>";

    var rows = $(row);

    $('#tblEmployeeFamily>tbody').append(rows);    

});
function initTableFamily() {
    //Pagination numbers
    $('#paginationSimpleNumbers>tbody').empty();
    $.ajax({
        url: '/Employee/Browse',
        method: "GET",
        xhrFields: {
            withCredentials: true //if using API
        },
        success: function (data) {
            $.each(data, function (a, b) {
                var sRow;
                sRow = "<tr><td style='text-align:center'><a type='button' class='btn btn-warning btn-sm' href='/Employee/EditEmployee/" + b.id + "'><i class='fas fa-pencil-alt'></i></a><a type='button' class='btn btn-danger btn-sm' href='/Employee/DeleteEmployee/" + b.id + "'><i class='fas fa-trash-alt'></i></a></td>";
                sRow += "<td>" + b.id + "</td>";
                sRow += "<td>" + b.name + "</td>";
                sRow += "<td>" + b.title + "</td>";
                if (b.active === true) {
                    sRow += "<td><div class='custom-control custom-checkbox'><input type='checkbox' class='custom-control-input' id='active' checked disabled><label class='custom-control-label' for='tableDefaultCheck1'></label></div></td>";
                }
                else {
                    sRow += "<td><div class='custom-control custom-checkbox'><input type='checkbox' class='custom-control-input' id='active' disabled><label class='custom-control-label' for='tableDefaultCheck1'></label></div></td>";
                }
                sRow += "<td>" + b.remarks + "</td></tr>";
                $('#paginationSimpleNumbers>tbody').append(sRow);

            });

            $('#paginationSimpleNumbers').DataTable({
                "pagingType": "simple_numbers",
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        }
    });
}
$(document).ready(function () {
    initTableIndex();
    //initTableFamily()

    $('#demo').mdbWYSIWYG();
    $('#selectMultiple').materialSelect(); // Material multi Select Initialization

    // Material Select
    $('#selectDefault').materialSelect({ 
    });
    $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
        $(this).closest('.select-outline').find('label').toggleClass('active');
        $(this).closest('.select-outline').find('.caret').toggleClass('active');
    });
    $('#selectExample').materialSelect({
    });
    $('#searchCategory').materialSelect({
    });

    
});