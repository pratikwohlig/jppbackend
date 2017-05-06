<div class="row">
    <div class="col s12">
        <h4 class="pad-left-15">Edit tournamentplayed</h4>
    </div>
</div>
<div class="row">
    <form class='col s12' method='post' action='<?php echo site_url("site/edittournamentplayedsubmit"); ?>' enctype='multipart/form-data'>
        <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">


<div class="row" style="display:none">
            <div class="input-field col s12 m8">
                <?php echo form_dropdown('player', $player, set_value('player',$before->player)); ?>
                 <label> player</label>
            </div>
        </div>

      <div class="row">
        <div class="input-field col s6">
            <label for="Name">Name</label>
            <input type="text" id="name" name="name" value='<?php echo set_value('name',$before->name);?>'>
        </div>
    </div>
      <div class="row">
        <div class="input-field col s6">
            <label for="Namehindi">Name In Hindi</label>
            <input type="text" id="namehindi" name="namehindi" value='<?php echo set_value('namehindi',$before->namehindi);?>'>
        </div>
    </div>
      <div class="row">
        <div class="input-field col s6">
            <label for="Year">Year</label>
            <input type="text" id="year" name="year" value='<?php echo set_value('year',$before->year);?>'>
        </div>
    </div>
        <div class="row saveclick createbuttonplacement">
				<div class="col m12 s12">
					<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
					<a href="<?php echo site_url("site/viewtournamentplayed?id=").$this->input->get("playerid");?>" class="waves-effect waves-light btn red">Cancel</a>
				</div>
			</div>
    </form>
</div>
