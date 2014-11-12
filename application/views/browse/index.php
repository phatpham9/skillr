<div class="col-lg-8">
    <div id="div-skills-list">
		{if $skills_list}
			{foreach $skills_list item=skill}
				{include file="browse/details.php"}
		    {/foreach}
	    {/if}
	</div>
</div>

<div class="col-lg-4">
	{include file="browse/recent_done.php"}
</div>