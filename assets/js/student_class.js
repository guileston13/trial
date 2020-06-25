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

        $("#section1").empty();
        html = [];
        for (var i = 0; i <= data.length; i++) {
            if (data[i]) {
                html[i] = "<option value=" + data[i].section_id + ">" + data[i].section_name + "</option>";
            }
        }
        $("#section1").append(html);
    },

});



$('#querter_id23').change(function () {
    var quarter_id = $('#querter_id23').val();
    var subject_id = $('#subject_id').text();
    var event = $('#event').text();
    var year_level = $('#year_level').text();
    var sectionion = $('#sectionion').text();

    console.log(quarter_id);
    console.log(subject_id);
    console.log(event);
    console.log(year_level);
    console.log(sectionion);
    $.ajax({
        type: "POST",
        cache: false,
        url: 'http://localhost/formgen/Teacher_Dashboard/quiz_counter',
        data: {
            quarter_id: quarter_id,
            subject_id: subject_id,
            event: event,
            year_level: year_level,
            sectionion: sectionion
        },
        dataType: 'json',
        success: function (data) {

            console.log(data);
            $("#quiz_nu").text(data);
        },
    });
});

$("#school_year1").change(function () {
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

            $("#section1").empty();
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

            $("#section1").empty();
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