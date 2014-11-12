$(function(){
    //change password
    $("#form-change-password").submit(function(event){
        var url = $(this).attr("action");
        var type = $(this).attr("method");

        $.ajax({
           	type: type,
           	url: url,
           	data: $(this).serialize(),
            dataType: "json",
           	beforeSend: function()
           	{
             	$("#btn-change-password").val("Processing...");
             	$("#btn-change-password").attr("disabled");
           	},
           	success: function(data)
           	{
              	if (data.status == "1") {
                	$("#form-change-password")[0].reset();

                    $("#notification").removeClass("alert-danger");
                    $("#notification").addClass("alert-success");
                    $("#notification h4").html("Well done!");
                    $("#notification p").html(data.message);

                    $("#notification").clone().removeAttr("id").prependTo("#div-profile").show();
              	} else {
                    $("#notification").removeClass("alert-success");
                    $("#notification").addClass("alert-danger");
                    $("#notification h4").html("Oh snap!");
                    $("#notification p").html(data.message);

                    $("#notification").clone().removeAttr("id").prependTo("#div-profile").show();
              	}
           	},
           	error: function()
           	{
                $("#notification").removeClass("alert-success");
                $("#notification").addClass("alert-danger");
                $("#notification h4").html("Error !");
                $("#notification p").html("Fail to connect to server. Please try again later.");

                $("#notification").clone().removeAttr("id").prependTo("#div-profile").show();
           	},
           	complete: function()
           	{
             	$("#btn-change-password").val("Change password");
             	$("#btn-change-password").removeAttr("disabled");
           	}
        });

        return false;
    });

    //change email
    $("#form-change-email").submit(function(event){
        var url = $(this).attr("action");
        var type = $(this).attr("method");

        $.ajax({
            type: type,
            url: url,
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function()
            {
                $("#btn-change-email").val("Processing...");
                $("#btn-change-email").attr("disabled");
            },
            success: function(data)
            {
                if (data.status == "1") {
                    $("#form-change-email")[0].reset();

                    $("#notification").removeClass("alert-danger");
                    $("#notification").addClass("alert-success");
                    $("#notification h4").html("Well done!");
                    $("#notification p").html(data.message);

                    $("#notification").clone().removeAttr("id").prependTo("#div-profile").show();
                } else {
                    $("#notification").removeClass("alert-success");
                    $("#notification").addClass("alert-danger");
                    $("#notification h4").html("Oh snap!");
                    $("#notification p").html(data.message);

                    $("#notification").clone().removeAttr("id").prependTo("#div-profile").show();
                }
            },
            error: function()
            {
                $("#notification").removeClass("alert-success");
                $("#notification").addClass("alert-danger");
                $("#notification h4").html("Error !");
                $("#notification p").html("Fail to connect to server. Please try again later.");

                $("#notification").clone().removeAttr("id").prependTo("#div-profile").show();
            },
            complete: function()
            {
                $("#btn-change-email").val("Send confirmation email");
                $("#btn-change-email").removeAttr("disabled");
            }
        });

        return false;
    });

    //change password
    $("#img-ava").click(function(){
      $("#file-ava").trigger('click');
    });
    $("#file-ava").change(function(){
      $("#form-ava").trigger('submit');
    });
    $("#form-ava").submit(function(){
        var formdata = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: formdata,
            processData: false,
            contentType: false,
            dataType: "json",
            beforeSend: function()
            {
                $("#img-ava").attr("disabled");
            },
            success: function(data){
                if (data.status == "1") {
                   location.reload();
                } else {
                    $("#notification").removeClass("alert-success");
                    $("#notification").addClass("alert-danger");
                    $("#notification h4").html("Oh snap!");
                    $("#notification p").html(data.message);

                    $("#notification").clone().removeAttr("id").prependTo("#div-profile").show();
                }
            },
            error: function(){
                $("#notification").removeClass("alert-success");
                $("#notification").addClass("alert-danger");
                $("#notification h4").html("Error !");
                $("#notification p").html("Fail to connect to server. Please try again later.");

                $("#notification").clone().removeAttr("id").prependTo("#div-profile").show();
            },
            complete: function()
            {
                $("#img-ava").removeAttr("disabled");
            },
        });
        return false;
    });
});