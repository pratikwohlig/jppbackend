<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">View App Home Image</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/apphomeimagesubmit");?>' enctype= 'multipart/form-data'>

<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file" >
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image',$before->image);?>">
				</div>
			</div>
    
              <span style=" display: none;
           ">800px X 800px </span>
		</div>
	
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewapphomeimage"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
