<section id="sec-change-email" class="panel">
    <header class="panel-heading">
        Change Email
        <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
        {$form_change_email_open}
            <div class="form-group">
                {$form_password}
                {if isset($form_errors.password)}
                    {$form_errors.password}
                {/if}
                {if isset($errors.password)}
                    {$errors.password}
                {/if}
            </div>
            <div class="form-group">
                {$form_email}
                {if isset($form_errors.email)}
                    {$form_errors.email}
                {/if}
                {if isset($errors.email)}
                    {$errors.email}
                {/if}
            </div>
            <div class="form-group">
                {$form_change_email_submit}
            </div>
        {$form_change_email_close}
    </div>
</section>