<div class="row">
<div class="col s12">
<h4 class="pad-left-15">Createtournamentplayed</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createtournamentplayedsubmit");?>' enctype= 'multipart/form-data'>

     <div class="row" style="display:none">
                <div class="input-field col s12 m8">
                    <?php echo form_dropdown('player', $player, set_value('player',$this->input->get("id"))); ?>
                     <label> player</label>
                </div>
            </div>

     <div class="row">
        <div class="input-field col s6">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value='<?php echo set_value('name');?>'>
        </div>
    </div>
     <div class="row">
        <div class="input-field col s6">
            <label for="namehindi">Name In Hindi</label>
            <input type="text" id="namehindi" name="namehindi" value='<?php echo set_value('namehindi');?>'>
        </div>
    </div>
     <div class="row">
        <div class="input-field col s6">
            <label for="Year">Year</label>
            <input type="text" id="year" name="year" value='<?php echo set_value('year');?>'>
        </div>
    </div>
    <div class="row saveclick createbuttonplacement">
        <div class="col m12 s12">
            <button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
            <a href="<?php echo site_url("site/viewtournamentplayed?id=").$this->input->get("id"); ?>" class="waves-effect waves-light btn red">Cancel</a>
        </div>
    </div>
    
</form>
</div>
