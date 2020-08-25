$(document).ready(() => {

    $('.basic-data').submit((e) => {


        let url = $('.basic-data').attr('action')

        //text=test : formname = userinput
        let data = $('.basic-data').serialize()
        //clear input
        $('input[type="text"]').val('');

        $.post(url, data, (r) => {
            $('.table-data').append('<tr>' +
                '<td> '+r.firstname+' </td>' +
                '<td> '+r.lastname+' </td>' +
                '</tr>');

            //If token is error
            if(r.response == 'error'){
                window.location.href = r.redirect;
            }
        }, 'json');

        return false;
    })


});