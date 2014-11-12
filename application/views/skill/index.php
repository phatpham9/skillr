<div class="col-lg-8">
    {if isset($alert_messages)}
        {if $alert_messages.time_delayed}
        <div class="alert alert-danger fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4>Are you doing good !?</h4>
            <p>
                Your 
                {foreach $alert_messages.time_delayed as $message}
                <strong><a href="javascript:;" data-target="{$message.skill_id}">{$message.skill_name}</a></strong> skill is delayed <strong>{$message.time_delayed}</strong>. 
                {/foreach}
                Please take time get it done.
            </p>
        </div>
        {/if}
        {if $alert_messages.deadline_today}
        <div class="alert alert-warning fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4>How is it going !?</h4>
            <p>
                Today is <strong>deadline</strong> of your 
                {foreach $alert_messages.deadline_today as $message}
                <strong><a href="javascript:;" data-target="{$message.skill_id}">{$message.skill_name}</a></strong> skill. 
                {/foreach}
            </p>
        </div>
        {/if}
        {if $alert_messages.time_to_go}
        <div class="alert alert-warning fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4>Yay!</h4>
            <p>
                You have only 
                {foreach $alert_messages.time_to_go as $message}
                <strong>{$message.time_to_go}</strong> to complete <strong><a href="javascript:;" data-target="{$message.skill_id}">{$message.skill_name}</a></strong> skill. 
                {/foreach}
            </p>
        </div>
        {/if}
    {/if}

	<div id="div-skills-list">
		{if $skills_list}
			{foreach $skills_list item=skill}
				{include file="skill/details.php"}
		    {/foreach}
	    {/if}
	</div>
</div>

<div class="col-lg-4">
	{include file="skill/create.php"}
    {include file="skill/update.php"}
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Delete Skill</h4>
            </div>
            <div class="modal-body">
            	Would you really want to delete skill named "<strong class="skill-name"></strong>" ? Click <strong>Confirm</strong> button to perform skill deletion.
            </div>
            <div class="modal-footer" style="margin-top:0;">
            	<form id="form-delete" action="{$base_url}skill/delete_skill" method="post">
            		<input type="hidden" name="id" value>
	                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	                <button id="btn-delete" class="btn btn-warning" type="submit"> Confirm</button>
	            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="doneModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Done Skill Training</h4>
            </div>
            <div class="modal-body">
            	Are you totally sure that you have done "<strong class="skill-name"></strong>" skill training ? Click <strong>Confirm</strong> button to done skill training.
            </div>
            <div class="modal-footer" style="margin-top:0;">
            	<form id="form-done" action="{$base_url}skill/done_skill" method="post">
            		<input type="hidden" name="id" value>
	                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	                <button id="btn-done" class="btn btn-warning" type="submit"> Confirm</button>
	            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="undoneModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Undone Skill Training</h4>
            </div>
            <div class="modal-body">
            	Well! You always are encouraged to improve your skill more. </br>Do you want to undone this "<strong class="skill-name"></strong>" skill training ? Click <strong>Confirm</strong> button to undone skill training.
            </div>
            <div class="modal-footer" style="margin-top:0;">
            	<form id="form-undone" action="{$base_url}skill/undone_skill" method="post">
            		<input type="hidden" name="id" value>
	                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	                <button id="btn-undone" class="btn btn-warning" type="submit"> Confirm</button>
	            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="notifyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer" style="margin-top:0;">
                <button class="btn btn-danger" type="button" data-dismiss="modal"> Ok got it</button>
            </div>
        </div>
    </div>
</div>