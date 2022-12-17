// JavaScript source code
/*$(document).ready(function () {
    var table = $('#table-view').DataTable({
        "responsive ": true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false,
        "scrollX": false
    });


    new $.fn.dataTable.FixedHeader(table);
});

$(document).ready(function () {
    var table = $('#table-view2').DataTable({
        "responsive ": true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false,
        "scrollX": false
    });


    new $.fn.dataTable.FixedHeader(table);
});*/



$(document).ready(function () {

    var myTables1 = $('#myTable').DataTable({

        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 1, targets: 4 },
            { responsivePriority: 2, targets: -2 }
        ],
        buttons: [
            'excel'
        ]
    });



});


$(document).ready(function () {

    var cktb1 = $('#cktb').DataTable({
        responsive: true,
        "paging": false,
        "ordering": false,
        "info": false,
        "bFilter": false,
        "scrollX": false
    });
    var cktb1 = $('#cktb').DataTable();

    $('#cktb tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }
        else {
            cktb1.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
/*
    $('#cktb').click(function () {
        cktb1.row('.selected').remove().draw(false);

    });*/

/*    new $.fn.dataTable.FixedHeader(cktb);*/
});


$(document).ready(function () {

    var edtb1 = $('#edtb').DataTable({

        responsive: true,
        "paging": true,
        "ordering": true,
        "info": true,
        "bFilter": false,
        "bSortable": true,
    });



});


$(document).ready(function () {
    function searchByColumn(table) {
        var defaultSearch = 1 //Name
        $(document).on('change', '#select-column', function () {
            defaultSearch = this.value;
        });
        $(document).on('change', '#search-by-column', function () {
            table.search('').columns().search('').draw();
            table.column(defaultSearch).search(this.value).draw();
        });
    }
    var table = $('#page1').DataTable({
        responsive: true,
        "paging": true,
        "ordering": true,
        "info": true,
        "bFilter": true,
        "bSortable": true,
    });
    searchByColumn(table);
});


/*$(document).ready(function () {

    $('#page1').DataTable({

        responsive: true,
        "paging": true,
        "ordering": true,
        "info": true,
        "bFilter": false,
        "bSortable": true,
    });




 
});*/

$(document).ready(function () {
    $("#tableSearchIndex1").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#page1 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});



$(document).ready(function () {
    $("#tableSearchIndex").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#page2 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#tableSearchIndex2").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#page2 tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});