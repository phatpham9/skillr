<section id="sec-create" class="panel">
    <header class="panel-heading">
        Recent Done
    	<span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
    	{if $recent_done}
    		{foreach $recent_done item=skill}
		<p>
			{$skill.user} - {$skill.date_done}<br>
			<strong>{$skill.name}</strong><br>
			<strong>{$skill.description}</strong>
		</p>
    		{/foreach}
    	{/if}
    </div>
</section>