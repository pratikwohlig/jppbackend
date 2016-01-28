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
<label for="Nationality">Nationality</label>
<input type="text" id="Nationality" name="nationality" value='<?php echo set_value('nationality');?>'>
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
<div class="input-field col s6">
<label for="Dob">Dob</label>
<input type="date" id="Dob" name="dob" value='<?php echo set_value('dob');?>'>
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
