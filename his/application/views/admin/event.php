<fieldset>
    <legend>Enter Event Details</legend>            
    <?php if(!empty($msg) && $msg != ""){?>
<div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>Error!</h4>
    <?php echo $msg;?>
</div>
<?php }  echo form_open('admin/validate'); ?>
    <div class="form-horizontal">	
        <div class="control-group">
            <label class="control-label" for="title">Event Title : </label>
            <div class="controls">
                <input type="text" name="Title" value="<?php echo set_value('Title'); ?>" placeholder="Event Title"/>
                <span class="site-error"><?php echo form_error('Title'); ?></span>
            </div>	
        </div>
        <div class="control-group">
            <label class="control-label" for="author">Period : </label>
            <div class="controls">
                <input type="text" name="period" value="<?php echo set_value('period'); ?>" placeholder="Event Period"/>
                <span class="site-error"><?php echo form_error('period'); ?></span>
            </div>	
        </div>
        <div class="control-group">
            <label class="control-label" for="description">Description : </label>
            <div class="controls">
                <textarea rows="4" cols="50" name="description" value="<?php echo set_value('description'); ?>" placeholder="description"></textarea>
<!--                <input type="text" name="description" value="<?php echo set_value('description'); ?>" placeholder="description" />-->
                <span class="site-error"><?php echo form_error('description'); ?></span>
            </div>	
        </div>
        <div class="control-group">
            <label class="control-label" for="organizers">Organizers : </label>
            <div class="controls">
                <input type="text" name="organizers" value="<?php echo set_value('organizers'); ?>" placeholder="organizers" />
                <span class="site-error"><?php echo form_error('organizers'); ?></span>
            </div>	
        </div>
        <div class="control-group">
            <div class="controls">
                <input type="submit" class="btn btn-primary" value="Add New event" id="submiteventId"/>
            </div>	
        </div>
    </div>
    <?php echo form_close(); ?>
</fieldset><br /><br /><br /><br /><br />
