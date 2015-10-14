$(document).ready(function() {
    $("#submit").click(function() {

        var self = this;

        var postLocation = window.location.href + "form.php";
       
        var proceed = true;
     
        $("#contactForm input[required=true]").each(function(){
            if(!$.trim($(this).val())){
                $(this).css('border','1px solid red');
                $(this).css('border-color','red');
                proceed = false;
            }
            else {
                $(this).css('border','none');
            }
        });

        var postData;
       
        if(proceed)
        {
            //get input field values data to be sent to server
            postData = {
                'name'     : $('input[name=name]').val(), 
                'email'    : $('input[name=email]').val(), 
                'website'  : $('input[name=website').val(), 
                'message'  : $('input[name=message]').val()
            };
            $.ajax({
                url: postLocation,
                type: "POST",
                data: postData,
                success: function(response){  
                    if(response.indexOf("error") > -1){
                        handleError();
                    }
                    else {
                        handleSuccess();
                    }
                },
                error: function(response){  
                    handleError();
                }
            });
        }
    });

    function handleSuccess() {
        $('#contactForm').slideToggle("slow");
        $('#contactSection').append("<p>Thank you! Your message has been successfully sent. I look forward to meeting you and will respond as soon as possible.</p>");        
    }

    function handleError() {
        $('#contactForm').slideToggle("slow");
        $('#contactSection').append("<p>I\'m sorry! An error occurred sending the message.</p><p>If you are looking to contact me via e-mail, please send your message to " +
         "<a href=\"mailto:connect@rachelrjoyce.com\">connect@rachelrjoyce.com</a>" +".</p>");
    }
});