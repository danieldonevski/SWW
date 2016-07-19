$("#loginForm").submit(function(e){
    var url = "App/Controllers/Ajax/AjaxController.php";
    $.ajax({
        type: "POST",
        url: url,
        data: $("#loginForm").serialize(),
        //dataType: "json",
        success: function (data){
            alert(data);
        }
    });
    e.preventDefault();

});
