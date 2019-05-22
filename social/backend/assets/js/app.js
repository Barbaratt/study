//functions
function open_blog(){
    $('.open-media').click(function(){
        //set toggle class
        $('body').addClass('load');
        //get the media path
        $media = $(this).attr("open-blog");
        $type = $(this).attr("type");
        $.ajax({
            url: '/api',
            method: 'POST',
            data: {
                    get_blog: true,
                    media: $media,
                    type: $type,
                  }
        //ajax success
        }).done(function(msg){
            //remove load
            $content = $(msg).find('.content');
            $('body').removeClass('load');
            $('#get_blog').html(msg);
        });//end done
    });//end on click
}

//on ready
$(document).ready(() => {
    // #Login event ->
    //login button click
    $('#login-submit').on('click', e => {
        //prevent the default action
        e.preventDefault();
        //$('#login').addClass('load');
        //get the login and key
        $login = $('#user-login').val();
        $pass = $('#user-pass').val();
        //call ajax to the api
        $.ajax({
            url: '/api',
            method: 'POST',
            data: {
                    login: true,
                    email: $login,
                    pass: $pass,
                  }
        //ajax success
        }).done(function(msg){
            //remove load
            $('#new-account').removeClass('load');
            //if there is error on the login
            if(msg=="nofound"){
                //call error
                throw new Error('Login no found');
            }
            //if sucess
            if(msg!=''){
                window.location.href = "/set_session?session="+msg;
            }//end if
        });//end done
    });//end on click
    // New account event
    //New account button click
    $('#new-acount-submit').on('click', e => {
        //prevent default
        e.preventDefault();
        //add load class
        $('#new-account').addClass('load');
        //call ajax to api
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
        //if done
        }).done(function(msg){
            //remove load
            $('#new-account').removeClass('load');
            //generate cookie
            window.location.href = "/set_session?session="+msg;
        });//end dome
    });//end on click
    // Hash change event ->
    $( window ).on('hashchange',  e => {
        //log
        console.log('hash changed');
    });
    // Search
    //event key up
    $('#search-input').keyup(function(){
        //add load class
        $('.media-features').addClass('load');
        //call ajax
        $.ajax({
            url: '/api',
            method: 'POST',
            data: {
                    search: true,
                    data: $('#search-input').val(),
                  }
        //if done
        }).done(function(msg){
            //write the result
            $('#search_return').html(msg);
            //After 2s remove the load class
            setTimeout(() => $('.media-features').removeClass('load'), 2000);
            open_blog();
        });//end done
    });//end on keyup
    // #New blog
    //Blog click event
    $('#new-blog').click(function(e){
        $('body').addClass('load');
        //prevent the default action
        e.preventDefault();
        $blog_title = $().val();
        $blog_tags = $().val();
        $blog_content = $('#area_editor').val();
        //get the tags
        $tags = "";
        for(i=0; i < $('.taggle_text').length; i++)
        {
           $tags+= $('.taggle_text').eq(i).text()+", ";
        }
        //call ajax to api
        $.ajax({
            url: '/api',
            method: 'POST',
            data: {
                    new_blog: true,
                    user: $('#dashboard').attr('user'),
                    title: $('#blog_title').val(),
                    blog_content: $('#blog_editor').val(),
                    tags: $tags,
                  }
        //if done
        }).done(function(msg){
            //clear pupup fields
            $('#blog_title').val('');
            $('.taggle').remove();
            $('.jodit_container').remove();
            $('#blog_editor').val("");
            var editor = new Jodit('#blog_editor', { });
            //remove loadclass and hide popup
            setTimeout(() => {$('body').removeClass('load'); $('#upload_file').click(); }, 3000);
        });//end dome
    });//end click
    


    // Call global functions
        open_blog(); 
});//end document ready