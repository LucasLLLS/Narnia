$(document).ready(function(){
    $("#send_form").click(function(){

        var values = $('form').serialize();

        $.get('email_recebe.php?'+values, function(data, status){
            
            alert(data);
          
        });

    });
});