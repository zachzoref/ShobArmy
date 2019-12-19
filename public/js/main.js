$(function() {

    // call the tablesorter plugin
    $("#journalTable").tablesorter({
        //theme: 'bootstrap',
        widthFixed : true,
        widgets: ["zebra","stickyHeaders", "filter"],
        //cssIcon: 'fa-sort',
        headerTemplate: '{content} {icon}',
        cssIconAsc: 'fas fa-arrow-up',
        cssIconDesc: 'fas fa-arrow-down',
        widgetOptions : {
            filter_cssFilter   : 'form-control',
            filter_childRows   : false,
            filter_hideFilters : false,
            filter_ignoreCase  : true,
            filter_reset : '.reset',
            filter_saveFilters : true,
            filter_searchDelay : 300,
            filter_startsWith  : false,

            stickyHeaders : '.fixed-top',
            stickyHeaders_offset : 48,
            stickyHeaders_cloneId : '-sticky',
            stickyHeaders_addResizeEvent : true,
            stickyHeaders_includeCaption : true,
            stickyHeaders_zIndex : 2,
            stickyHeaders_attachTo : null,
            stickyHeaders_xScroll : null,
            stickyHeaders_yScroll : null,
            stickyHeaders_filteredToTop: true
        }
    });

    $(".startDate").datetimepicker({
        format: 'DD/MM/YYYY HH:mm'
    });
    $('.endDate').datetimepicker({
        format: 'DD/MM/YYYY HH:mm',
        useCurrent: false
    });
    $(".startDate").on("change.datetimepicker", function (e) {
        $('.endDate').datetimepicker('minDate', e.date);
    });
    $(".endDate").on("change.datetimepicker", function (e) {
        $('.startDate').datetimepicker('maxDate', e.date);
    });

    $(".editEventButton").on("click", function () {
        let event = $(this).attr("id");
        let editID = $("#" + event + "id").text();
        let editType = $("#" + event + "type").text();
        let editSystem = $("#" + event + "system").text();
        let editStartDate = $("#" + event + "startDate").text();
        let editDetails = $("#" + event + "details").text();
        let editStatus = $("#" + event + "status").text();
        let editEndDate = $("#" + event + "endDate").text();
        $("#editEvent #editType").val(editType);
        $("#editEvent #editSystem").val(editSystem);
        $("#editEvent #editDetails").val(editDetails);
        $("#editEvent #editStatus").val(editStatus);
        $("#editEvent #editStartDate").val(editStartDate);
        $("#editEvent #editEndDate").val(editEndDate);
    });

    $("#nightFilter").on("click", function () {
        let e = $.Event( "keypress", { which: 13 } );
        $(".tablesorter-filter-row td:nth-child(6) input").val("Open").trigger(e);
    });
    $("#resetFilter").on("click", function () {
        $(".tablesorter-filter-row").trigger('filterReset').trigger('sortReset');
    });

});