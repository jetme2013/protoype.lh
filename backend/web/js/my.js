
$(document).ready(function(){

    $(document).on('submit', '#notes-poll', function(e){
        e.preventDefault();
        //
        //var $that = $(this),
        //formData = new FormData($that.get(0));
        var senddata = $(this).serializeArray();
        console.log(senddata[2]);
        $.ajax({
            url: "/experiment.php",
            type: "POST",
            contentType: false,
            processData: false,
            data:   {answers:senddata},
            dataType: 'html',
            success: function(html){
                $('#poll').html('<div><h1 class="panel-title"><span class="glyphicon glyphicon-arrow-right"></span>Спасибо за ваше мнение! Принять участиев опросе можно только один раз.</h1></div>');

            },

            error: function(err){
                console.log(err)
            }
        });
    });
    /*	$.ajax({
            url: "/moduls/dashboard/poll3.php",
            method: "POST",
                data: {answers: senddata,
                items: ['year2017_gifts']
                             },
                dataType: "html",
                success: function(response){

                    $('#poll').html(response);
                }
            });*/


    $.ajax({
        url: "/experiment.php",
        method: "POST",
        data: { items: ['year2017_gifts'] },
        dataType: "html",
        success: function(response){

            $('#poll').html(response);
        }
    });

});