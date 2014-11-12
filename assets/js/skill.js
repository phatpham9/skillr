$(function(){
    $("textarea").autosize();
    window.prettyPrint && prettyPrint();
    $(".default-date-picker").datepicker({
        format: "yyyy-mm-dd"
    });
    $("div.alert a").click(function(){
        var id = $(this).attr("data-target");
        scroll_to($("aside[data-id='" + id + "']"));
        return false;
    });

    function scroll_to(aid){
        var tag = $(aid);
        $('html,body').animate({scrollTop: tag.offset().top - 80}, 'slow');
    }

    //create skill
    $("#form-create").submit(function(event){
        var url = $(this).attr("action");
        var type = $(this).attr("method");

        $.ajax({
           	type: type,
           	url: url,
           	data: $(this).serialize(),
            dataType: "json",
           	beforeSend: function()
           	{
             	$("#btn-create").val("Creating...");
             	$("#btn-create").attr("disabled");
           	},
           	success: function(data)
           	{
              	if (data.status == "1") {
                		$("#form-create")[0].reset();
                    if (data.prev_position != null) {
                        var new_skill = $(data.html);
                        new_skill.insertAfter($("aside[data-id='" + data.prev_position + "']"));
                        
                        scroll_to(new_skill);
                    } else {
                        $("#div-skills-list").prepend(data.html);
                    }
              	} else {
              		$("#notifyModal h4.modal-title").html("Created skill unsuccessfully");
                    $("#notifyModal div.modal-body").html(data.message);
                    $("#notifyModal").modal("show");
              	}
           	},
           	error: function()
           	{
             	$("#notifyModal h4.modal-title").html("Error");
                $("#notifyModal div.modal-body").html("Fail to connect to server. Please try again later.");
                $("#notifyModal").modal("show");
           	},
           	complete: function()
           	{
             	$("#btn-create").val("Save skill");
             	$("#btn-create").removeAttr("disabled");
           	}
        });

        return false;
    });

    //show update skill
    $("#div-skills-list").on("click", ".btn-show-update", function(){
        var id = $(this).attr("data-id");
        var url = $(this).attr("data-url");

        $.ajax({
            type: "get",
            url: url,
            data: {id: id},
            dataType: "json",
            success: function(data)
            {
                if (data.status == "1") {
                    $("#form-update").attr("data-id", id);

                    $("#form-update .skill-id").val(data.skill.id);
                    $("#form-update .skill-name").val(data.skill.name);
                    $("#form-update .skill-description").val(data.skill.description);
                    $("#form-update .skill-note").val(data.skill.note);
                    $("#form-update .skill-start-date").val(data.skill.start_date);
                    $("#form-update .skill-end-date").val(data.skill.end_date);
                    $("#form-update .skill-is-done").val(data.skill.is_done);

                    $("#form-update .skill-start-date").datepicker("setValue", data.skill.start_date);
                    $("#form-update .skill-end-date").datepicker("setValue", data.skill.end_date);

                    $("#sec-create").hide();
                    $("#sec-update").show();

                    scroll_to($("#sec-update"));
                } else {
                    $("#notifyModal h4.modal-title").html("Get skill unsuccessfully");
                    $("#notifyModal div.modal-body").html(data.message);
                    $("#notifyModal").modal("show");
                }
            },
            error: function()
            {
                $("#notifyModal h4.modal-title").html("Error");
                $("#notifyModal div.modal-body").html("Fail to connect to server. Please try again later.");
                $("#notifyModal").modal("show");
            },
        });
    });
    //cancel update skill
    $("#btn-cancel-update").click(function(){
        $("#form-update")[0].reset();
        $("#sec-update").hide();
        $("#sec-create").show();
    });
    //update skill
    $("#form-update").submit(function(event){
        var url = $(this).attr("action");
        var type = $(this).attr("method");
        var id = $(this).attr("data-id");

        $.ajax({
            type: type,
            url: url,
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function()
            {
                $("#btn-update").val("Updating...");
                $("#btn-update").attr("disabled");
            },
            success: function(data)
            {
                if (data.status == "1") {
                    //delete old skill
                    $("aside[data-id='" + id + "']").remove();

                    //add updated skill
                    if (data.prev_position != null) {
                        var new_skill = $(data.html);
                        new_skill.insertAfter($("aside[data-id='" + data.prev_position + "']"));
                        
                        scroll_to(new_skill);
                    } else {
                        $("#div-skills-list").prepend(data.html);
                    }

                    $("#form-update")[0].reset();
                    $("#sec-update").hide();
                    $("#sec-create").show();
                } else {
                    $("#notifyModal h4.modal-title").html("Updated skill unsuccessfully");
                    $("#notifyModal div.modal-body").html(data.message);
                    $("#notifyModal").modal("show");
                }
            },
            error: function()
            {
                $("#notifyModal h4.modal-title").html("Error");
                $("#notifyModal div.modal-body").html("Fail to connect to server. Please try again later.");
                $("#notifyModal").modal("show");
            },
            complete: function()
            {
                $("#btn-update").val("Update skill");
                $("#btn-update").removeAttr("disabled");
            }
        });

        return false;
    });

    //show delete modal
    $("#div-skills-list").on("click", ".btn-show-delete", function(){
        var id = $(this).attr("data-id");
        var name = $(this).attr("data-name");

        $("#deleteModal input[name=id]").val(id);
        $("#deleteModal strong.skill-name").html(name);
        $("#deleteModal #form-delete").attr("data-id", id);
        $("#deleteModal").modal("show");
    });
    //delete skill
    $("#form-delete").submit(function(event){
        var url = $(this).attr("action");
        var type = $(this).attr("method");
        var id = $(this).attr("data-id");

        $.ajax({
            type: type,
            url: url,
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function()
            {
                $("#btn-delete").val("Deleting...");
                $("#btn-create").attr("disabled");
            },
            success: function(data)
            {
                $("#deleteModal").modal("hide");

                if (data.status == "1") {
                    $("aside[data-id='" + id + "']").remove();
                } else {
                    $("#notifyModal h4.modal-title").html("Deleted skill unsuccessfully");
                    $("#notifyModal div.modal-body").html(data.message);
                    $("#notifyModal").modal("show");
                }
            },
            error: function()
            {
                $("#deleteModal").modal("hide");

                $("#notifyModal h4.modal-title").html("Error");
                $("#notifyModal div.modal-body").html("Fail to connect to server. Please try again later.");
                $("#notifyModal").modal("show");
            },
            complete: function()
            {
                $("#btn-delete").val("Confirm");
                $("#btn-delete").removeAttr("disabled");
            }
        });

        return false;
    });

    //show done modal
    $("#div-skills-list").on("click", ".btn-show-done", function(){
        var id = $(this).attr("data-id");
        var name = $(this).attr("data-name");
        var is_done = $(this).attr("data-is-done");
        
        if (is_done == "0") {
            $("#doneModal input[name=id]").val(id);
            $("#doneModal strong.skill-name").html(name);
            $("#doneModal #form-done").attr("data-id", id);
            $("#doneModal").modal("show");
        } else {
            $("#undoneModal input[name=id]").val(id);
            $("#undoneModal strong.skill-name").html(name);
            $("#undoneModal #form-undone").attr("data-id", id);
            $("#undoneModal").modal("show");
        }
    });
    //done training skill
    $("#form-done").submit(function(event){
        var url = $(this).attr("action");
        var type = $(this).attr("method");
        var id = $(this).attr("data-id");

        $.ajax({
            type: type,
            url: url,
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function()
            {
                $("#btn-done").val("Processing...");
                $("#btn-done").attr("disabled");
            },
            success: function(data)
            {
                $("#doneModal").modal("hide");

                if (data.status == "1") {
                    if (!$("aside[data-id='" + id + "'] .duration span.label-skill-info").length) {
                        $("aside[data-id='" + id + "'] .duration").append('<span class="label label-danger pull-right r-activity label-skill-info" style="margin-top:3px;"></span>');
                    }
                    $("aside[data-id='" + id + "'] span.label-skill-info").removeClass("label-warning").removeClass("label-danger");
                    $("aside[data-id='" + id + "'] span.label-skill-info").addClass("label-primary");
                    $("aside[data-id='" + id + "'] span.label-skill-info").html("Done");

                    $("aside[data-id='" + id + "'] a.btn-show-done").removeClass("fa-check");
                    $("aside[data-id='" + id + "'] a.btn-show-done").addClass("fa-undo");
                    $("aside[data-id='" + id + "'] a.btn-show-done").attr("data-is-done", "1");
                } else {
                    $("#notifyModal h4.modal-title").html("Done skill training unsuccessfully");
                    $("#notifyModal div.modal-body").html(data.message);
                    $("#notifyModal").modal("show");
                }
            },
            error: function()
            {
                $("#doneModal").modal("hide");

                $("#notifyModal h4.modal-title").html("Error");
                $("#notifyModal div.modal-body").html("Fail to connect to server. Please try again later.");
                $("#notifyModal").modal("show");
            },
            complete: function()
            {
                $("#btn-done").val("Confirm");
                $("#btn-done").removeAttr("disabled");
            }
        });

        return false;
    });
    //undone training skill
    $("#form-undone").submit(function(event){
        var url = $(this).attr("action");
        var type = $(this).attr("method");
        var id = $(this).attr("data-id");

        $.ajax({
            type: type,
            url: url,
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function()
            {
                $("#btn-undone").val("Processing...");
                $("#btn-undone").attr("disabled");
            },
            success: function(data)
            {
                $("#undoneModal").modal("hide");

                if (data.status == "1") {
                    $("aside[data-id='" + id + "'] span.label-skill-info").removeClass("label-primary");
                    
                    if (data.time_to_go != null) {
                        $("aside[data-id='" + id + "'] span.label-skill-info").addClass("label-warning");
                        $("aside[data-id='" + id + "'] span.label-skill-info").html(data.time_to_go);
                    } else if (data.time_delayed) {
                        $("aside[data-id='" + id + "'] span.label-skill-info").addClass("label-danger");
                        $("aside[data-id='" + id + "'] span.label-skill-info").html(data.time_delayed);
                    } else {
                        $("aside[data-id='" + id + "'] span.label-skill-info").remove();
                    }
                    $("aside[data-id='" + id + "'] a.btn-show-done").removeClass("fa-undo");
                    $("aside[data-id='" + id + "'] a.btn-show-done").addClass("fa-check");
                    $("aside[data-id='" + id + "'] a.btn-show-done").attr("data-is-done", "0");
                } else {
                    $("#notifyModal h4.modal-title").html("Undone skill training unsuccessfully");
                    $("#notifyModal div.modal-body").html(data.message);
                    $("#notifyModal").modal("show");
                }
            },
            error: function()
            {
                $("#undoneModal").modal("hide");

                $("#notifyModal h4.modal-title").html("Error");
                $("#notifyModal div.modal-body").html("Fail to connect to server. Please try again later.");
                $("#notifyModal").modal("show");
            },
            complete: function()
            {
                $("#btn-undone").val("Confirm");
                $("#btn-undone").removeAttr("disabled");
            }
        });

        return false;
    });
});