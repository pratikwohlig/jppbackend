<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit wallpaper</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editwallpapersubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" row">
<div class=" input-field col s12 m6">
<?php echo form_dropdown("wallpapercategory",$wallpapercategory,set_value('wallpapercategory',$before->wallpapercategory));?>
<label for="Wallpaper Category">Wallpaper Category</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Name">Name</label>
<input type="text" id="Name" name="name" value='<?php echo set_value('name',$before->name);?>'>
</div>
</div>
<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image1 == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image1; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image1</span>
					<input name="image1" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image1',$before->image1);?>">
				</div>
			</div>
		</div>
<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image2 == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image2; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image2</span>
					<input name="image2" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image2',$before->image2);?>">
				</div>
			</div>
		</div>
<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image3 == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image3; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image3</span>
					<input name="image3" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image3',$before->image3);?>">
				</div>
			</div>
		</div>
<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image4 == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image4; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image4</span>
					<input name="image4" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image4',$before->image4);?>">
				</div>
			</div>
		</div>
<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image5 == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image5; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image5</span>
					<input name="image5" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image5',$before->image5);?>">
				</div>
			</div>
		</div>
<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image6 == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image6; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image6</span>
					<input name="image6" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image6',$before->image6);?>">
				</div>
			</div>
		</div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewwallpaper?id=").$this->input->get('wallpapercategoryid'); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
