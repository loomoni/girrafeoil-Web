$(document).ready(function() {
    $('#addClassifications input[type="text"]').blur(function(){
        if(!$(this).val()){
            $(this).addClass("err");
        } else{
            $(this).removeClass("err");
        }
    });
    
    $('.closeModal').click(function() {
        $('#classification-error').text('');
        $('#successClassification').text('');
        $('#errorClassification').text('');
        $('.success').hide();
        $('.error').hide();

        $('#classificationModal').modal('hide')
        window.location.reload()
    })

    $('#submitClassification').click(function(e) {
        $('#classifications-error').text('');
        $('#successClassification').text('');
        $('#errorClassification').text('');
        $('.success').hide();
        $('.error').hide();
        e.preventDefault();


        var fail = false;
        var fail_log = '';
        var name;

        $('#addClassifications').find('input').each(function(){
            if(! $(this).prop('required')) {

            }else {
                if(! $(this).val()){
                    fail = true;
                    name = $(this).attr('name');
                    fail_log += '<p>' + 'classification name' + ' is required!</p>';
                    $('#classifications-error').html(fail_log);
                }
            }
        });

        // Submit if fail is false

        if(!fail) {
            $.ajax({
                type: 'POST',
                url: 'add-classifications',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {"classifications": $("#classification").tagsinput()[0].itemsArray},

                success:function(data) {
                    console.log(data)
                    $('#successClassification').text(data.message);
                    $('#errorClassification').text(data.error);

                    if(!$('#successClassification').text().length == 0) {
                        $('#addClassifications')[0].reset()
                        $('.error').hide();
                        $('.success').show();


                        
                    $('#close').click(function(){
                        $('.success').hide();
                        $('#successClassification').text('');
                    });
                    }
                    if(!$('#errorClassification').text().length == 0 ) {
                        $('.success').hide();
                        $('.error').show();

                        
                    $('#closeError').click(function(){
                        $('.error').hide();
                        $('#errorClassification').text('');
                    });
                    }

                },

                error:function(error){
                    console.log(error);
                    $('#errorClassification').text(error.statusText + ', contact the administrator for help');
                    $('.error').show();
                    $('.success').hide();

                    $('#closeError').click(function(){
                        $('.error').hide();
                        $('#errorClassification').text('');
                    });
                }
            })
        }
        
    })
});