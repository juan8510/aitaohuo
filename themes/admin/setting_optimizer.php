<?php echo $setting_header;?>
<div class="formmain">
<?php echo $setting_nav;?>
<div class="formbox">
  <form action="<?php echo spUrl('admin','setting_optimizer',array('act'=>'save'));?>" method="post"  class="form-horizontal settingform">
        <fieldset>
        	<div class="control-group">
            <label class="control-label" for="cache_time_album"><?php echo T('cache_time_album');?></label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="cache_time_album" name="cache_time_album" value="<?php echo $vsettings['cache_time_album'];?>">
              <p class="help-block"><?php echo T('cache_time_album_tip');?></p>
            </div>
          </div>
        	<div class="control-group">
            <label class="control-label" for="cache_time_star"><?php echo T('cache_time_star');?></label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="cache_time_star" name="cache_time_star" value="<?php echo $vsettings['cache_time_star'];?>">
              <p class="help-block"><?php echo T('cache_time_star_tip');?></p>
            </div>
          </div>
        	<div class="control-group">
            <label class="control-label" for="cache_time_count"><?php echo T('cache_time_count');?></label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="cache_time_count" name="cache_time_count" value="<?php echo $vsettings['cache_time_count'];?>">
              <p class="help-block"><?php echo T('cache_time_count_tip');?></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="rewrite_open"><?php echo T('rewrite_open');?></label>
            <div class="controls">
              <input type="radio" name="rewrite_open" class="input-xlarge" value="1" <?php echo $vsettings['rewrite_open']?'checked':'';?>><?php echo T('open');?></input>
              <input type="radio" name="rewrite_open" class="input-xlarge" value="0" <?php echo !$vsettings['rewrite_open']?'checked':'';?>><?php echo T('close');?></input>
              <p class="help-block"><?php echo T('rewrite_open_tip');?></p>
            </div>
          </div>
         
          <div class="form-actions">
            <button type="submit" class="btn btn-primary"><?php echo T('save');?></button>
          </div>
        </fieldset>
      </form>
</div>
</div>
</div>
</body>
</html>
