<!--logo start-->
<div class="brand">
    <a href="{$base_url}" class="logo">
        <img src="assets/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        {if $is_logged_in}
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{$base_url}{$ava_url}">
                <span class="username">{$username}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{$base_url}profile"><i class=" fa fa-suitcase"></i>Profile</a>
                </li>
                <li><a href="{$base_url}auth/logout"><i class="fa fa-key"></i> Log Out</a>
                </li>
            </ul>
        </li>
        {else}
        <li>
            <a href="{$base_url}auth/login">
                <img alt="" src="{$base_url}{$ava_url}">
                <span class="username">Login</span>
            </a>
        </li>
        {/if}
    </ul>
    <!--search & user info end-->
</div>