$("#loginForm").submit(function(e){
    var url = "/ajax/login";
    $.ajax({
        type: "POST",
        url: url,
        data: $("#loginForm").serialize(),
        dataType: "json",
        success: function (data){
            if(data.error == true){
                window.location.href = '/myAccount';
            }else{
                alert(data.message);
            }
        }
    });
    e.preventDefault();
});
$("#myAccForm").submit(function(e){
    var url = "/ajax/UpdateMyAccount";
    $.ajax({
        type: "POST",
        url: url,
        data: $("#myAccForm").serialize(),
        dataType: "json",
        success: function (data){
            if(data.error == false){
                $("#error-password").html("Invalid Input!");
                $("#error-password").fadeTo(600,1).delay(1000).fadeOut(800,0);
            }
            else{
                $("#success").html("Successfully updated!");
                $("#success").fadeTo(600,1).delay(1000).fadeOut(800,0);
            }

        }
    });
    e.preventDefault();
});
//
//function showMessage(type, message){
//    $('#message-text').addClass(type)
//    $('#message-text').html(message);
//
//    $("#message-text").fadeTo(500,1);
//    setTimeout(function(){
//        $('#message-text').fadeTo(1000,0);
//    },3000);
//}