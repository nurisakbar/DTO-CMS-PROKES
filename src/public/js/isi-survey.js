
    $( document ).ready(function() {
        selectedJawabanTerpilih();
    });

    function selectedJawabanTerpilih()
    {
        var survey_id            = $("#survey_id").val();
        var instrument_survey_id = $("#id").val();
        var user_id              = $("#object").val();
        $.ajax({
            url: "/jawaban-survey/"+instrument_survey_id,
            type: "GET",
            data: {instrument_survey_id:instrument_survey_id,survey_id:survey_id,user_id:user_id},
            success: function (response) {
                if(response!=null)
                {
                    $("#nilai-"+response['jawaban']).attr( 'checked', true );
                }else{
                    $("#nilai-"+1).attr( 'checked', true )
                }
                
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }
    function simpanJawaban(jawaban)
    {
        var instrument_survey_id = $("#id").val();
        var survey_id            = $("#survey_id").val();
        var user_id              = $("#object").val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "/isi-survey",
            type: "post",
            data: {_token: CSRF_TOKEN,user_id:user_id,jawaban:jawaban,instrument_survey_id:instrument_survey_id,survey_id:survey_id},
            success: function (response) {
                //$(".row-"+id).text('Terpilih').addClass('btn-success');
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }
