$(document).ready(function() {
    $('#addPermissions input[type="text"]').blur(function(){
        if(!$(this).val()){
            $(this).addClass("err");
        } else{
            $(this).removeClass("err");
        }
    });
    
    $('#permissionModalClose').click(function() {
        $('#permission-error').text('');
        $('#classify-error').text('');
        $('#successPermission').text('');
        $('#errorPermission').text('');
        $('.success').hide();
        $('.error').hide();

        $('#permissionModal').modal('hide')
        window.location.reload()
    })

    $('#submitPermissions').click(function(e) {
        $('#permissions-error').text('');
        $('#classify-error').text('');
        $('#successPermission').text('');
        $('#errorPermission').text('');
        $('.success').hide();
        $('.error').hide();
        e.preventDefault();


        var fail = false;
        var fail_log = '';
        var name;

        $('#addPermissions').find('input').each(function(){
            if(! $(this).prop('required')) {

            }else {
                if(! $(this).val()){
                    fail = true;
                    name = $(this).attr('name');
                    fail_log += '<p>' + 'permission' + ' is required!</p>';
                    if(name == 'name') {
                        $('#permissions-error').text('Permission is required');
                    }
                }
            }

            if($('#classificationId').val().length == 0) {
                $('#classify-error').text('This field is required');
            }
        });

        // Submit iffail is false

        if(!fail) {
            $.ajax({
                type: 'POST',
                url: 'add-permissions',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    "permission": $("#perm").tagsinput()[0].itemsArray, 
                    'classificationId': $('#classificationId').val()
                },

                success:function(data) {
                    console.log(data)
                    $('#successPermission').text(data.message);
                    $('#errorPermission').text(data.error);

                    if(!$('#successPermission').text().length == 0) {
                        $('.error').hide();
                        $('.success').show();

                        
                    $('#close').click(function(){
                        $('.success').hide();
                        $('#successPermission').text('');
                    });
                    }
                    if(!$('#errorPermission').text().length == 0 ) {
                        $('.success').hide();
                        $('.error').show();

                        
                    $('#closeError').click(function(){
                        $('.error').hide();
                        $('#errorPermission').text('');
                    });
                    }

                },

                error:function(error){
                    console.log(error);
                    $('#errorPermission').text(error.statusText + ', contact the administrator for help');
                    $('.error').show();
                    $('.success').hide();

                    $('#closeError').click(function(){
                        $('.error').hide();
                        $('#errorPermission').text('');
                    });
                }
            })
        }
        
    })
});