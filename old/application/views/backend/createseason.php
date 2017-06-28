
<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create season</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createseasonsubmit");?>' enctype= 'multipart/form-data'>

<div class="row">
<div class="input-field col s6">
<label for="Name">Name</label>
<input type="text" id="Name" name="name" value='<?php echo set_value('name');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Name">Order No</label>
<input type="number" id="orderno" name="orderno" value='<?php echo set_value('orderno');?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewseason"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
