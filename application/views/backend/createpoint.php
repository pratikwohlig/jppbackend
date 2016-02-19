<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create point</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createpointsubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class=" input-field col s12 m6">
<?php echo form_dropdown("team",$team,set_value('team'));?>
<label for="team">Team</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="played">played</label>
<input type="text" id="played" name="played" value='<?php echo set_value('played');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Wins">Wins</label>
<input type="text" id="Wins" name="wins" value='<?php echo set_value('wins');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Lost">Lost</label>
<input type="text" id="Lost" name="lost" value='<?php echo set_value('lost');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Point">Point</label>
<input type="text" id="Point" name="point" value='<?php echo set_value('point');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="sd">sd</label>
<input type="text" id="sd" name="sd" value='<?php echo set_value('sd');?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewpoint"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
