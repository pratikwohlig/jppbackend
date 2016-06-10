<div class="row">
    <div class="col s12">
        <h4 class="pad-left-15 capitalize">Create schedule</h4>
    </div>
    <form class='col s12' method='post' action='<?php echo site_url("site/createschedulesubmit");?>' enctype='multipart/form-data'>
         <div class=" row">
            <div class=" input-field col s6">
                <?php echo form_dropdown("season",$season,set_value('season'));?>
                    <label>Season</label>
            </div>
        </div>
        <div class=" row">
            <div class=" input-field col s6">
                <?php echo form_dropdown("stadium",$stadium,set_value('stadium'));?>
                    <label>stadium</label>
            </div>
        </div>
        <div class=" row">
            <div class=" input-field col s6">
                <?php echo form_dropdown("team1",$team1,set_value('team1'));?>
                    <label>Team 1</label>
            </div>
        </div>
        <div class=" row">
            <div class=" input-field col s6">
                <?php echo form_dropdown("team2",$team2,set_value('team2'));?>
                    <label>Team 2</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input type="date" class="datepicker" name="startdate" value="<?php echo set_value('startdate');?>">
                <label>Start Date</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6" style="margin-top: -18px;">
                <label for="Start Time">Start Time</label>
            </div>
        </div>
        <div class="row">
            <div class=" input-field col s6">
                <?php echo form_dropdown("hour",$hour,set_value('hour'));?>
                    <label>Hour</label>
            </div>

            <div class=" input-field col s6">
                <?php echo form_dropdown("minute",$minute,set_value('minute'));?>
                    <label>minute</label>
            </div>
        </div>
        <div class="row" style="display:none">
            <div class="input-field col s6">
                <label for="starttime">Start Time</label>
                <input type="text" id="starttime" name="starttime" value='<?php echo set_value(' starttime ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="score1">Score1</label>
                <input type="text" id="score1" name="score1" value='<?php echo set_value(' score1 ');?>'>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="score2">Score2</label>
                <input type="text" id="score2" name="score2" value='<?php echo set_value(' score2 ');?>'>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <?php echo form_dropdown("ishome",$ishome,set_value('ishome'),'id="homeval"');?>
                    <label>Home Game</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <label for="Book Ticket">Book Ticket</label>
                <input type="text" id="Book Ticket" name="bookticket" value='<?php echo set_value(' bookticket ');?>'>
            </div>
        </div>
         <div class="row">
            <div class="input-field col s6">
                <label for="matchtime">Match Time</label>
                <input type="text" id="matchtime" name="matchtime" value='<?php echo set_value('matchtime');?>'>
            </div>eg : 00:00
        </div>
        <div class="row">
            <div class="col s12 m6">
                <button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
                <a href="<?php echo site_url("site/viewschedule"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {

        function changestarttime() {
            $("#starttime").val($(".combodate select.hour").val() + ":" + $(".combodate select.minute").val());

        }
        $(".combodate select.hour").change(changestarttime);
        $(".combodate select.minute").change(changestarttime);
        changestarttime();

        $(".chupado").hide();
        $("#homeval").change(function() {
            if ($('#homeval').val() == 1) {
                $(".chupado").show();
            } else {
                $(".chupado").hide();
            }

        });
    });

</script>

</script>
