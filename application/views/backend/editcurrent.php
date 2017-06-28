<div class="row">
    <div class="col s12">
        <h4 class="pad-left-15">Edit current</h4>
    </div>
</div>
<div class="row">
    <form class='col s12' method='post' action='<?php echo site_url("site/editcurrentsubmit"); ?>' enctype='multipart/form-data'>
        <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">


        <div class="row" style="display:none">
            <div class="input-field col s12 m8">
                <?php echo form_dropdown('player', $player, set_value('player',$before->player)); ?>
                 <label> player</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <label for="matchplayed">Match Played</label>
                <input type="text" id="matchplayed" name="matchplayed" value='<?php echo set_value('matchplayed',$before->matchplayed);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="totalpoints">Total Points</label>
                <input type="text" id="totalpoints" name="totalpoints" value='<?php echo set_value('totalpoints',$before->totalpoints);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="totalraidpoints">Total Raid Points</label>
                <input type="text" id="totalraidpoints" name="totalraidpoints" value='<?php echo set_value('totalraidpoints',$before->totalraidpoints);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="totaldefencepoints">Total Defence Points</label>
                <input type="text" id="totaldefencepoints" name="totaldefencepoints" value='<?php echo set_value('totaldefencepoints',$before->totaldefencepoints);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="raids">Raids</label>
                <input type="text" id="raids" name="raids" value='<?php echo set_value('raids',$before->raids);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="successfulraids">Successful Raids</label>
                <input type="text" id="successfulraids" name="successfulraids" value='<?php echo set_value('successfulraids',$before->successfulraids);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="unsuccessfulraids">Unsuccessful Raids</label>
                <input type="text" id="unsuccessfulraids" name="unsuccessfulraids" value='<?php echo set_value('unsuccessfulraids',$before->unsuccessfulraids);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="emptyraids">Empty Raids</label>
                <input type="text" id="emptyraids" name="emptyraids" value='<?php echo set_value('emptyraids',$before->emptyraids);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="tackles">Tackles</label>
                <input type="text" id="tackles" name="tackles" value='<?php echo set_value('tackles',$before->tackles);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="successfultackles">Successful Tackles</label>
                <input type="text" id="successfultackles" name="successfultackles" value='<?php echo set_value('successfultackles',$before->successfultackles);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="unsuccessfultackles">Unsuccessful Tackles</label>
                <input type="text" id="unsuccessfultackles" name="unsuccessfultackles" value='<?php echo set_value('unsuccessfultackles',$before->unsuccessfultackles);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="greencards">Green Cards</label>
                <input type="text" id="greencards" name="greencards" value='<?php echo set_value('greencards',$before->greencards);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="redcards">Red Cards</label>
                <input type="text" id="redcards" name="redcards" value='<?php echo set_value('redcards',$before->redcards);?>'>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <label for="yellowcards">Yellow Cards</label>
                <input type="text" id="yellowcards" name="yellowcards" value='<?php echo set_value('yellowcards',$before->yellowcards);?>'>
            </div>
        </div>
        <div class="row">
		<div class="input-field col m6 s12">
			<?php echo form_dropdown( 'status',$status,set_value( 'status',$before->status)); ?>
				<label> Status</label>
		</div>
	</div>
        <div class="row saveclick createbuttonplacement">
		  <div class="col m12 s12">
			<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
			<a href="<?php echo site_url("site/viewcurrent?id=").$this->input->get("playerid");?>" class="waves-effect waves-light btn red">Cancel</a>
		  </div>
		</div>
    </form>
</div>
