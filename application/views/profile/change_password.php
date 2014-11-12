<section id="sec-change-password" class="panel">
    <header class="panel-heading">
        Change Password
        <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
        {$form_change_password_open}
            <div class="form-group">
                {$form_old_password}
                {if isset($form_errors.old_password)}
                    {$form_errors.old_password}
                {/if}
                {if isset($errors.old_password)}
                    {$errors.old_password}
                {/if}
            </div>
            <div class="form-group">
                {$form_new_password}
                {if isset($form_errors.new_password)}
                    {$form_errors.new_password}
                {/if}
                {if isset($errors.new_password)}
                    {$errors.new_password}
                {/if}
            </div>
            <div class="form-group">
                {$form_confirm_new_password}
                {if isset($form_errors.confirm_new_password)}
                    {$form_errors.confirm_new_password}
                {/if}
                {if isset($errors.confirm_new_password)}
                    {$errors.confirm_new_password}
                {/if}
            </div>
            <div class="form-group">
                {$form_change_password_submit}
            </div>
        {$form_change_password_close}
    </div>
</section>