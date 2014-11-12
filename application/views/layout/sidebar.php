<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a {if $nav_active == 'browse'}{'class="active"'}{/if} href="{$base_url}browse">
            <i class="fa fa-globe"></i>
            <span>Browse</span>
        </a>
    </li>
    <li>
        <a {if $nav_active == 'my_skill'}{'class="active"'}{/if} href="{$base_url}skill">
            <i class="fa fa-user"></i>
            <span>My Skills</span>
        </a>
    </li>
</ul>