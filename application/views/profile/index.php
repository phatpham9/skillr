<div class="col-lg-8">
	<div id="div-profile">
		<div id="notification" class="alert fade in" style="display:none">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4></h4>
            <p></p>
        </div>
	</div>

    <section class="panel">
        <header class="panel-heading">
            User Account
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <img id="img-ava" src="{$base_url}{$profile.ava_url}" style="width:112px;">
                </div>
                <div class="col-lg-6">
                    <p><strong>Username:</strong> {$user.username}</p>
                    <p><strong>Email:</strong> {$user.email}</p>
                    <p><strong>Last IP:</strong> {$user.last_ip}</p>
                    <p><strong>Last login:</strong> {$user.last_login}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="panel">
        <header class="panel-heading">
            Profile
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
            </span>
        </header>
        <div class="panel-body">
            Coming soon.
        </div>
    </section>
</div>

<div class="col-lg-4">
    {include file="profile/change_password.php"}
    {include file="profile/change_email.php"}
</div>

<form id="form-ava" class="hidden" action="{$base_url}profile/change_ava" method="post" enctype="multipart/form-data">
    <input id="file-ava" type="file" name="ava">
</form>