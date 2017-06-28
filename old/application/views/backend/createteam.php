<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create team</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createteamsubmit");?>' enctype= 'multipart/form-data'>
<div class=" row" style="display:none;">
<div class=" input-field col s6">
<?php echo form_dropdown("type",$type,set_value('type'));?>
<label>Type</label>
</div>
</div>

<div class="row">
<div class="input-field col s6">
<label for="Name">Name</label>
<input type="text" id="Name" name="name" value='<?php echo set_value('name');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Name">Name in Hindi</label>
<input type="text" id="hname" name="hname" value='<?php echo set_value('hname');?>'>
</div>
</div>

<div class="row">
			<div class="file-field input-field col m6 s12">
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image');?>">
				</div>
			</div>
    
            <span style=" display: block;
            padding-top: 30px;">800px X 800px </span>
		</div>
		<div class="row">
			<div class="file-field input-field col m6 s12">
				<div class="btn blue darken-4">
					<span>App Image</span>
					<input name="appimage" type="file" >
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('appimage');?>">
				</div>
			</div>
    
            <span style=" display: block;
            padding-top: 30px;">800px X 800px </span>
		</div>
<div class="row">
<div class="input-field col s12">
<textarea name="content" class="materialize-textarea" length="400"><?php echo set_value( 'content');?></textarea>
<label>Content</label>
</div>
</div>
<div class="row">
<div class="input-field col s12">
<textarea name="hcontent" class="materialize-textarea" length="400"><?php echo set_value( 'hcontent');?></textarea>
<label>Content in Hindi</label>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewteam"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
