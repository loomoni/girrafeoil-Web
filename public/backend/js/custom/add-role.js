$(document).ready(function() {
    $('#role_name').keyup(function(e) {
        var str = $('#role_name').val();
        str = str.replace(/\W+(?!$)/g, '-').toLowerCase(); // replace stapces with dash

        $('#role_slug').val(str)
        $('#role_slug').attr('placeholder', str)
    });
    $('#addRole input[type="text"]').blur(function(){
        if(!$(this).val()){
            $(this).addClass("err");
        } else{
            $(this).removeClass("err");
        }
    });
    
    $('.modalClose').click(function() {
        $('#role-error').text('');
        $('#success').text('');
        $('#error').text('');
        $('.success').hide();
        $('.error').hide();

        $('#roleModal').modal('hide')
        window.location.reload()
    })

    $('#submit').click(function(e) {
        $('#role-error').text('');
        $('#success').text('');
        $('#error').text('');
        $('.success').hide();
        $('.error').hide();
        e.preventDefault();


        var fail = false;
        var fail_log = '';
        var name;

        $('#addRole').find('input').each(function(){
            if(! $(this).prop('required')) {

            }else {
                if(! $(this).val()){
                    fail = true;
                    name = $(this).attr('name');
                    fail_log += '<p>' + name + ' is required!</p>';
                    if(name == 'role'){
                        $('#role-error').html('user role is required');
                    }
                    else {
                        $('#role-slug-error').html('role slug is required');
                    }
                }
            }
        });

        // Submit iffail is false

        if(!fail) {
            $.ajax({
                type: 'POST',
                url: 'add-role',
                data: $('#addRole').serialize(),

                success:function(data) {
                    $('#success').text(data.message);
                    $('#error').text(data.error);

                    if(!$('#success').text().length == 0) {
                        $('.error').hide();
                        $('.success').show();

                        
                    $('#close').click(function(){
                        $('.success').hide();
                        $('#success').text('');
                    });
                    }
                    if(!$('#error').text().length == 0 ) {
                        $('.success').hide();
                        $('.error').show();

                        
                    $('#closeError').click(function(){
                        $('.error').hide();
                        $('#error').text('');
                    });
                    }

                },

                error:function(error){
                    console.log(error);
                    $('#error').text(error.statusText + ', contact the administrator for help');
                    $('.error').show();
                    $('.success').hide();

                    $('#closeError').click(function(){
                        $('.error').hide();
                        $('#error').text('');
                    });
                }
            })
        }
        
    })
});