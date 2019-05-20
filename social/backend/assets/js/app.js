$(document).ready(() => {
    //Login event ->
    $('#login-submit').on('click', e => {
        e.preventDefault();
        $('#login').addClass('load');
    });
    //New account event
    $('#new-acount-submit').on('click', e => {
        e.preventDefault();
        $('#new-account').addClass('load');
        $.ajax({
            url: '/api',
            method: 'POST',
            data: {
                    new_user: true,
                    email: $('#new-user-email').val(),
                    name: $('#new-user-name').val(),
                    pass: $('#new-user-pass').val(),
                    about: $('#new-user-about').val(),
                  }
        }).done(function(msg){
            $('#new-account').removeClass('load');
            console.log(msg);
            window.location.href = "/set_session?session="+msg;
        });
    });
    // Hash change event ->
    $( window ).on('hashchange',  e => {
        console.log('hash changed');
    });
});