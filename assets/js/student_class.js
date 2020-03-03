var grade_level = $('#grade_level1').val();
var year_level = $('#school_year1').val();

$.ajax({
    type: "POST",
    cache: false,
    url: 'http://localhost/formgen/student_class/school_year',
    data: {
        grade_level: grade_level,
        year_level: year_level
    },
    dataType: 'json',
    success: function (data) {

        $("#section").empty();
        html = [];
        for (var i = 0; i <= data.length; i++) {
            if (data[i]) {
                html[i] = "<option value=" + data[i].section_id + ">" + data[i].section_name + "</option>";
            }
        }
        $("#section1").append(html);
    },

});



$('#querter_id2').change(function () {
    var quarter_id = $('#quarter2').text();
    var subject_id = $('#subject_id').text();
    var event = $('#event').text();
    console.log(event);
    $.ajax({
        type: "POST",
        cache: false,
        url: 'http://localhost/formgen/Teacher_Dashboard/quiz_counter',
        data: {
            quarter_id: quarter_id,
            subject_id: subject_id,
            event: event
        },
        dataType: 'json',
        success: function (data) {
            //console.log(data);
            $("#quiz_nu").append(html);

        },
    });
});

$("#grade_level1").change(function () {
    var grade_level = $('#grade_level1').val();
    var year_level = $('#school_year1').val();

    $.ajax({
        type: "POST",
        cache: false,
        url: 'http://localhost/formgen/student_class/school_year',
        data: {
            grade_level: grade_level,
            year_level: year_level
        },
        dataType: 'json',
        success: function (data) {

            $("#section").empty();
            html = [];
            for (var i = 0; i <= data.length; i++) {
                if (data[i]) {
                    html[i] = "<option value=" + data[i].section_id + ">" + data[i].section_name + "</option>";
                }
            }
            $("#section1").append(html);
        },

    });
});