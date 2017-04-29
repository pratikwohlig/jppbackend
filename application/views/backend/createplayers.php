<div class="row">
    <div class="col s12">
        <h4 class="pad-left-15 capitalize">Create players</h4>
    </div>
    <form class='col s12' method='post' action='<?php echo site_url("site/createplayerssubmit");?>' enctype= 'multipart/form-data'>
        <div class="row">
            <div class="input-field col s6">
            <label for="Order">Order</label>
            <input type="text" id="Order" name="order" value='<?php echo set_value('order');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" value='<?php echo set_value('type');?>'>
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
            <input type="text" id="Name" name="hname" value='<?php echo set_value('hname');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Nationality">Nationality</label>
            <input type="text" id="Nationality" name="nationality" value='<?php echo set_value('nationality');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Nationality">Nationality in Hindi</label>
            <input type="text" id="Nationality" name="hnationality" value='<?php echo set_value('hnationality');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Jerseyno">Jerseyno</label>
            <input type="text" id="Jerseyno" name="jerseyno" value='<?php echo set_value('jerseyno');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <textarea name="about" class="materialize-textarea" length="400"><?php echo set_value( 'about');?></textarea>
            <label>About</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <textarea name="habout" class="materialize-textarea" length="400"><?php echo set_value( 'habout');?></textarea>
            <label>About in Hindi</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
            <label for="Dob">Dob</label><br>
            <input type="date" id="Dob" name="dob" value='<?php echo set_value('dob');?>'>
            </div>
        </div>
        
        <div class="row">
			<div class="file-field input-field col m6 s12">
				<div class="btn blue darken-4">
					<span>Small Image</span>
					<input name="smallimage" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload Small Image" value="<?php echo set_value('smallimage');?>">
				</div>
			</div>
			<span style=" display: block;">486px X 492px</span>
		</div>
        
        <div class="row">
			<div class="file-field input-field col m6 s12">
				<div class="btn blue darken-4">
					<span>Big Image</span>
					<input name="bigimage" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload Small Image" value="<?php echo set_value('bigimage');?>">
				</div>
			</div>
			<span style=" display: block;">685px X 1128px</span>
		</div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="fb">Facebook</label>
            <input type="text" id="fb" name="fb" value='<?php echo set_value('fb');?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="twitter">Twitter</label>
            <input type="text" id="twitter" name="twitter" value='<?php echo set_value('twitter');?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="instagram">Instagram</label>
            <input type="text" id="instagram" name="instagram" value='<?php echo set_value('instagram');?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" value='<?php echo set_value('country');?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="nativeplace">Native Place</label>
            <input type="text" id="nativeplace" name="nativeplace" value='<?php echo set_value('nativeplace');?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="weight">Weight</label>
            <input type="text" id="weight" name="weight" value='<?php echo set_value('weight');?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
            <label for="height">Height</label>
            <input type="text" id="height" name="height" value='<?php echo set_value('height');?>'>
            </div>
        </div>
        
		<div class="row">
			<div class="input-field col m6 s12">
				<?php echo form_dropdown( 'status',$status,set_value( 'status')); ?>
					<label>Status</label>
			</div>
		</div>
        
        <div class="row">
            <div class="col s12 m6">
            <button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
            <a href="<?php echo site_url("site/viewplayers"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
            </div>
        </div>
    </form>
</div>
