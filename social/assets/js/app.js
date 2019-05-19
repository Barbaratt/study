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
    });
    // Hash change event ->
    $( window ).on('hashchange',  e => {
        console.log('hash changed');
    });
});