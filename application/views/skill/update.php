<section id="sec-update" class="panel" style="display:none">
    <header class="panel-heading">
        Update skill
        <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
        <form action="{$base_url}skill/update_skill" method="post" accept-charset="utf-8" id="form-update">
            <div class="form-group">
                <input type="hidden" name="id" value="" class="form-control skill-id" placeholder="Skill id">
                <input type="text" name="name" value="" class="form-control skill-name" placeholder="Skill name" maxlength="256">
            </div>
            <div class="form-group">
                <input type="text" name="description" value="" class="form-control skill-description" placeholder="Short description" maxlength="256">
            </div>
            <div class="form-group">
                <textarea name="note" cols="40" rows="3" class="form-control skill-note" placeholder="Note" maxlength="512" style="resize: none; overflow: hidden; word-wrap: break-word; height: 74px;"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="start_date" value="" class="form-control default-date-picker skill-start-date" placeholder="Start date">
            </div>
            <div class="form-group">
                <input type="text" name="end_date" value="" class="form-control default-date-picker skill-end-date" placeholder="End date">
            </div>
            <div class="form-group">
                <select class="form-control skill-is-done" name="is_done">
                    <option value="0">Not done yet</option>
                    <option value="1">100% Done</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update skill" id="btn-update" class="btn btn-danger pull-right" style="margin-bottom:0;">
                <input type="button" value="Cancel" id="btn-cancel-update" class="btn btn-default pull-right" style="margin-bottom:0; margin-right:5px;">
            </div>
        </form>
    </div>
</section>