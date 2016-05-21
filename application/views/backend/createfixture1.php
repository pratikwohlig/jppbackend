<!--
<div class="row">
    <div class="col s12">
        <h4 class="pad-left-15 capitalize">Create fixture</h4>
    </div>
    <form class='col s12' method='post' action='<?php echo site_url("site/createfixturesubmit");?>' enctype='multipart/form-data'>
        <div class="row" style="display:none;">
            <div class=" input-field col s6">
                <?php echo form_dropdown("schedule",$schedule,set_value('schedule',$this->input->get('id')));?>
                    <label>Schedule</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <?php echo form_dropdown("ishome",$ishome,set_value('ishome'));?>
                    <label for="ishome">Is Home</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select>
                    <option value="">Select Option</option>
                    <option value="2">Yes</option>
                    <option value="3">No</option>
                </select>
                <label>Is Home</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Team1 Player1 Name">Team1 Player1 Name</label>
                <input type="text" id="Team1 Player1 Name" name="team1player1name" value='<?php echo set_value(' team1player1name ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Team1 Player2 Name">Team1 Player2 Name</label>
                <input type="text" id="Team1 Player2 Name" name="team1player2name" value='<?php echo set_value(' team1player2name ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Team1 Player1 score">Team1 Player1 score</label>
                <input type="text" id="Team1 Player1 score" name="team1player1score" value='<?php echo set_value(' team1player1score ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Team1 Player2 Score">Team1 Player2 Score</label>
                <input type="text" id="Team1 Player2 Score" name="team1player2score" value='<?php echo set_value(' team1player2score ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Team2 Player1 Name">Team2 Player1 Name</label>
                <input type="text" id="Team2 Player1 Name" name="team2player1name" value='<?php echo set_value(' team2player1name ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Team2 Player2 Name">Team2 Player2 Name</label>
                <input type="text" id="Team2 Player2 Name" name="team2player2name" value='<?php echo set_value(' team2player2name ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Team2 Player1 score">Team2 Player1 score</label>
                <input type="text" id="Team2 Player1 score" name="team2player1score" value='<?php echo set_value(' team2player1score ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Team2 Player2 Score">Team2 Player2 Score</label>
                <input type="text" id="Team2 Player2 Score" name="team2player2score" value='<?php echo set_value(' team2player2score ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Raid points team1">Raid points team1</label>
                <input type="text" id="Raid points team1" name="raidpointsteam1" value='<?php echo set_value(' raidpointsteam1 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Raid points team2">Raid points team2</label>
                <input type="text" id="Raid points team2" name="raidpointsteam2" value='<?php echo set_value(' raidpointsteam2 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Tackle points team1">Tackle points team1</label>
                <input type="text" id="Tackle points team1" name="tacklepointsteam1" value='<?php echo set_value(' tacklepointsteam1 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Tackle points team2">Tackle points team2</label>
                <input type="text" id="Tackle points team2" name="tacklepointsteam2" value='<?php echo set_value(' tacklepointsteam2 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="All out point team1">All out point team1</label>
                <input type="text" id="All out point team1" name="alloutpointteam1" value='<?php echo set_value(' alloutpointteam1 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="All out point team2">All out point team2</label>
                <input type="text" id="All out point team2" name="alloutpointteam2" value='<?php echo set_value(' alloutpointteam2 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Extra points team1">Extra points team1</label>
                <input type="text" id="Extra points team1" name="extrapointsteam1" value='<?php echo set_value(' extrapointsteam1 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Extra points team2">Extra points team2</label>
                <input type="text" id="Extra points team2" name="extrapointsteam2" value='<?php echo set_value(' extrapointsteam2 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6">
                <button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
                <a href="<?php echo site_url(" site/viewfixture?id=").$this->input->get('id'); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
            </div>
        </div>
    </form>
</div>-->




<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create galleryslide</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/creategalleryslidesubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="Order">Order</label>
<input type="text" id="Order" name="order" value='<?php echo set_value('order');?>'>
</div>
</div>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("inhome",$inhome,set_value('inhome'));?>
<label>In Home</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Name">Name</label>
<input type="text" id="Name" name="name" value='<?php echo set_value('name');?>'>
</div>
</div>

<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewgalleryslide?id=").$this->input->get('id'); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
