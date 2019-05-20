$(document).ready(() => {
    // Login event ->
    $('#login-submit').on('click', e => {
        e.preventDefault();
        //$('#login').addClass('load');
        $login = $('#user-login').val();
        $pass = $('#user-pass').val();
        $.ajax({
            url: '/api',
            method: 'POST',
            data: {
                    login: true,
                    email: $login,
                    pass: $pass,
                  }
        }).done(function(msg){
            $('#new-account').removeClass('load');
            if(msg=="nofound"){
                throw new error('Login no found');
            }
            if(msg!=''){
                window.location.href = "/set_session?session="+msg;
            }//end if
        });
    });
    // New account event
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
    // Search
    $('#search-input').keyup(function(){
        $('.media-features').addClass('load');
        $.ajax({
            url: '/api',
            method: 'POST',
            data: {
                    search: true,
                    data: $('#search-input').val(),
                  }
        }).done(function(msg){
            $('#search_return').html(msg);
            setTimeout(() => $('.media-features').removeClass('load'), 2000);
        });
    });
});//end document ready