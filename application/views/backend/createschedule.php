<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create schedule</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createschedulesubmit");?>' enctype= 'multipart/form-data'>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("stadium",$stadium,set_value('stadium'));?>
<label>stadium</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Team1">Team1</label>
<input type="text" id="Team1" name="team1" value='<?php echo set_value('team1');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Team2">Team2</label>
<input type="text" id="Team2" name="team2" value='<?php echo set_value('team2');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Book Ticket">Book Ticket</label>
<input type="text" id="Book Ticket" name="bookticket" value='<?php echo set_value('bookticket');?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewschedule"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
