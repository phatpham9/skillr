<aside class="profile-nav fade in" data-id="{$skill.id}">
    <section class="panel">
        <header class="panel-heading">
            <strong>{$skill.start_date}</strong> - <strong>{$skill.end_date}</strong>
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-times btn-show-delete" data-toggle="modal" data-id="{$skill.id}" data-name="{$skill.name}"></a>
                <a href="javascript:;" class="fa fa-pencil btn-show-update" data-id="{$skill.id}" data-url="{$base_url}skill/get_skill"></a>
                {if !$skill.is_done}
                <a href="javascript:;" class="fa fa-check btn-show-done" data-toggle="modal" data-id="{$skill.id}" data-name="{$skill.name}" data-is-done="{$skill.is_done}"></a>
                {elseif $skill.is_done}
                <a href="javascript:;" class="fa fa-undo btn-show-done" data-toggle="modal" data-id="{$skill.id}" data-name="{$skill.name}" data-is-done="{$skill.is_done}"></a>
                {/if}
            </span>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="{$base_url}{$ava_url}">
            </a>
            <h1>{$skill.name}</h1>
            <p>{$skill.description}</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
            {if $skill.note}
            <li> <i class="fa fa-book"></i> {auto_link(nl2br($skill.note), {"both"}, {"TRUE"})}</li>
            {/if}
            <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: {$skill.duration}
                {if $skill.is_done}
                <span class="label label-primary pull-right r-activity label-skill-info" style="margin-top:3px;">Done</span>
                {elseif isset($skill.time_to_go)}
                <span class="label label-warning pull-right r-activity label-skill-info" style="margin-top:3px;">{$skill.time_to_go}</span>
                {elseif isset($skill.time_delayed)}
                <span class="label label-danger pull-right r-activity label-skill-info" style="margin-top:3px;">{$skill.time_delayed}</span>
                {/if}
            </li>
        </ul>
    </section>
</aside>