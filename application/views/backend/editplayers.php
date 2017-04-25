<div class="row">
    <div class="col s12">
    <h4 class="pad-left-15 capitalize">Edit players</h4>
    </div>
</div>
<div class="row">
    <form class='col s12' method='post' action='<?php echo site_url("site/editplayerssubmit");?>' enctype= 'multipart/form-data'>
        <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
        <div class="row">
            <div class="input-field col s6">
            <label for="Order">Order</label>
            <input type="text" id="Order" name="order" value='<?php echo set_value('order',$before->order);?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" value='<?php echo set_value('type',$before->type);?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Name">Name</label>
            <input type="text" id="Name" name="name" value='<?php echo set_value('name',$before->name);?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Name">Name in Hindi</label>
            <input type="text" id="Name" name="hname" value='<?php echo set_value('hname',$before->hname);?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Nationality">Nationality</label>
            <input type="text" id="Nationality" name="nationality" value='<?php echo set_value('nationality',$before->nationality);?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Nationality">Nationality in Hindi</label>
            <input type="text" id="Nationality" name="hnationality" value='<?php echo set_value('hnationality',$before->hnationality);?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Jerseyno">Jerseyno</label>
            <input type="text" id="Jerseyno" name="jerseyno" value='<?php echo set_value('jerseyno',$before->jerseyno);?>'>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6">
            <label>About</label>
            <textarea name="about" placeholder="Enter text ..."><?php echo set_value( 'about',$before->about);?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <textarea name="habout" class="materialize-textarea" length="400"><?php echo set_value( 'habout',$before->habout);?></textarea>
            <label>About in Hindi</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Dob">Dob</label><br>
            <input type="date" id="Dob" name="dob" value='<?php echo set_value('dob',$before->dob);?>'>
            </div>
        </div>
        
        <div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
					<?php if($before->smallimage == "") { } else {?>
                    <img src="<?php echo base_url('uploads')."/".$before->smallimage; ?>">
					<?php } ?>
				</span>
				<div class="btn blue darken-4">
					<span>Small Image</span>
					<input name="smallimage" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload Small Image" value="<?php echo set_value('smallimage',$before->smallimage);?>">
				</div>
			</div>
			  <span style=" display: block;">1278px X 637px</span>
		</div>
        <div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
					<?php if($before->bigimage == "") { } else {?>
                    <img src="<?php echo base_url('uploads')."/".$before->bigimage; ?>">
					<?php } ?>
				</span>
				<div class="btn blue darken-4">
					<span>big Image</span>
					<input name="bigimage" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload big Image" value="<?php echo set_value('bigimage',$before->bigimage);?>">
				</div>
			</div>
			  <span style=" display: block;">1278px X 637px</span>
		</div>
        
        
        <div class="row">
            <div class="input-field col s6">
            <label for="fb">fb</label>
            <input type="text" id="fb" name="fb" value='<?php echo set_value('fb',$before->fb);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="twitter">twitter</label>
            <input type="text" id="twitter" name="twitter" value='<?php echo set_value('twitter',$before->twitter);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="instagram">instagram</label>
            <input type="text" id="instagram" name="instagram" value='<?php echo set_value('instagram',$before->instagram);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="country">country</label>
            <input type="text" id="country" name="country" value='<?php echo set_value('country',$before->country);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="nativeplace">nativeplace</label>
            <input type="text" id="nativeplace" name="nativeplace" value='<?php echo set_value('nativeplace',$before->nativeplace);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="weight">weight</label>
            <input type="text" id="weight" name="weight" value='<?php echo set_value('weight',$before->weight);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="height">height</label>
            <input type="text" id="height" name="height" value='<?php echo set_value('height',$before->height);?>'>
            </div>
        </div>
        
        <div class="row">
			<div class="input-field col m6 s12">
				<?php echo form_dropdown( 'status',$status,set_value( 'status',$before->status)); ?>
					<label>Status</label>
			</div>
		</div>
        
        <div class="row">
            <div class="col s6">
            <button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
            <a href='<?php echo site_url("site/viewplayers"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
            </div>
        </div>
    </form>
</div>
