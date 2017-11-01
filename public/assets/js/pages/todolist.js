$(document).ready(function() {
    $.material.init();
    $("form#main_input_box").submit(function(event) {
        event.preventDefault();

        var deleteButton = " <a href='#' class='tododelete redcolor'><i class='material-icons task_icons'>delete</i></a>";
        var striks = " <span class='striks'>|</span>";
        var editButton = "<a href='' class='todoedit'> <i class='material-icons task_icons pencil'>edit</i></a>";
        var checkBox = "<label class='striked check_btn'><input type='checkbox' class='striked ' /></label>";
        var twoButtons = "<div class='col-md-4 col-sm-4 col-xs-8 pull-right showbtns todoitembtns'>" + editButton + striks + deleteButton + "</div>";
        var oneButton = "<div class='col-md-4 col-sm-4 col-xs-4  pull-right showbtns todoitembtns'>" + deleteButton + "</div>";
        $(".list_of_items").append("<div class='todolist_list showactions list1'>  " + "<div class='col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1'> <div class='checkbox todoitemcheck'>" + checkBox + "</div>" + "<div class='todotext todoitemjs'>" + $("#custom_textbox").val() + "</div><span class='label label-default'>" + $("#task_deadline").val() + "</span> </div>" + twoButtons);
        $.material.checkbox();
        $("#custom_textbox").val('');
        $("#task_deadline").val('');

    });

});
$(document).on('click', '.tododelete', function(e) {
    e.preventDefault();
    $(this).closest('.todolist_list').hide("slow", function() { $(this).remove(); });
});
$(document).on('click', '.striked', function(e) {
    var id = $(this).closest('.todolist_list').attr('id');
    var hasClass = $(this).closest('.todolist_list').find('.todotext').hasClass('strikethrough');
    var hasEdit = $(this).closest('.todolist_list').find('.todoedit').hasClass('todoedit');
    var striks = "<span class='striks'> |  </span>";
    var check = "<input type='checkbox' class='striked' />";
    var editButton = "<a href='' class='todoedit'><i class='material-icons task_icons pencil'>edit</i></a>";

    $.ajax({
        type: "POST",
        url: "admin/task/" + id + "/edit",
        data: { _token: $('meta[name="_token"]').attr('content'), 'finished': ((hasClass) ? 0 : 1) },
    });
    $(this).closest('.todolist_list').find('.todotext').toggleClass('strikethrough');
    if (!hasClass) {
        $(this).closest('.todolist_list').find('.todoedit').hide();
        $(this).closest('.todolist_list').find('.striks').hide();
    } else {
        $(this).closest('.todolist_list').find('.todoedit').show();
        $(this).closest('.todolist_list').find('.striks').show();
    }

    if (!hasEdit) {
        $(this).closest('.todolist_list').find('.tododelete').before(editButton + striks);
    }
});




$(document).on('click', '.todoedit .pencil', function(e) {

    e.preventDefault();
    var text = '';
    text = $(this).closest('.todolist_list').find('.todotext').text();
    text = "<input type='text' name='text' value='" + text + "' onkeypress='return event.keyCode != 13;' />";
    $(this).closest('.todolist_list').find('.todotext').html(text);
    $(this).removeClass('material-icons edit').text('edit').addClass('material-icons save').text('done');
    $(this).removeClass('pencil');
    $(this).closest('.todolist_list').find('.todoitemcheck').hide();
});

$(document).on('click', '.todoedit .save', function(e) {

    e.preventDefault();
    var edit1 = $(this).closest('.todolist_list').find("input[type='text'][name='text']").val();
    $(this).closest('.todolist_list').find('.todoitemcheck').show();
    if (edit1 === '') {
        alert('Come on! you can\'t create a todo without title');
        $(this).closest('.todolist_list').find("input[type='text'][name='text']").focus();
        return;
    }
    $(this).closest('.todolist_list').find('.todotext').html(edit1);
    $(this).removeClass('material-icons hidden-xs').text('check_all').addClass('material-icons').text('edit');
    $(this).closest('.todolist_list').find('.striked').show();
    $(this).removeClass('save').addClass('pencil');
});

// add task datepicker
$(function () {
    $(".datepicker").datetimepicker({
        format: 'YYYY/MM/DD',
        widgetPositioning:{
            vertical:'top'
        },
        keepOpen:false,
        useCurrent: false,
        minDate:new Date().setHours(0,0,0,0)
    });
    var date = new Date();
    date.setDate(date.getDate()-1);
    $('#datepicker').datetimepicker({
        startDate: date
    });
});

$(document).ready(function() {
    $('.add_button').on('click', function() {
        var myitem = $('#custom_textbox').text();
        var rexp = new RegExp("^[A-Za-z']+( [A-Za-z']+)*$");

        if (!myitem.test(rexp)) {
            alert("String contains only whitespace");
            $('.add_button').attr('disabled', true);

        } else {
            alert("String is good");
            $('.add_button').attr('disabled', false);
        }

    });
});
