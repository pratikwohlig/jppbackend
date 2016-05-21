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
<label for="Dob">Dob</label>
<input type="date" id="Dob" name="dob" value='<?php echo set_value('dob',$before->dob);?>'>
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
