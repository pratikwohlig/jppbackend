<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create Contactus</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createcontactussubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="Email">Email</label>
<input type="email" id="Email" name="email" value='<?php echo set_value('email');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="firstname">firstname</label>
<input type="text" id="firstname" name="firstname" value='<?php echo set_value('firstname');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="lastname">lastname</label>
<input type="text" id="lastname" name="lastname" value='<?php echo set_value('lastname');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Phone">Phone</label>
<input type="text" id="Phone" name="phone" value='<?php echo set_value('phone');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="city">city</label>
<input type="text" id="city" name="city" value='<?php echo set_value('city');?>'>
</div>
</div>
<div class="row" style="display:none;">
<div class="input-field col s12">
<textarea name="comment" class="materialize-textarea" length="400"><?php echo set_value( 'comment');?></textarea>
<label>Comment</label>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewcontactus"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
