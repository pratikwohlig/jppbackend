<div class="row">
<div class="col s12">
<div class="row">
<div class="col s12 drawchintantable">
<?php $this->chintantable->createsearch("fixture");?>
<table class="highlight responsive-table">
<thead>
<tr>
<th data-field="id">ID</th>
<!--<th data-field="schedule">Schedule</th>-->
<th data-field="team1player1name">Team1 Player1 Name</th>
<th data-field="team1player2name">Team1 Player2 Name</th>
<!--
<th data-field="team1player1score">Team1 Player1 score</th>
<th data-field="team1player2score">Team1 Player2 Score</th>
<th data-field="team2player1name">Team2 Player1 Name</th>
<th data-field="team2player2name">Team2 Player2 Name</th>
<th data-field="team2player1score">Team2 Player1 score</th>
<th data-field="team2player2score">Team2 Player2 Score</th>
<th data-field="raidpointsteam1">Raid points team1</th>
<th data-field="raidpointsteam2">Raid points team2</th>
<th data-field="tacklepointsteam1">Tackle points team1</th>
<th data-field="tacklepointsteam2">Tackle points team2</th>
<th data-field="alloutpointteam1">All out point team1</th>
<th data-field="alloutpointteam2">All out point team2</th>
<th data-field="extrapointsteam1">Extra points team1</th>
<th data-field="extrapointsteam2">Extra points team2</th>
-->
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
<?php $this->chintantable->createpagination();?>
<?php if($checkrow==0){?>
<div class="createbuttonplacement"><a class="btn-floating btn-large waves-effect waves-light blue darken-4 tooltipped" href="<?php echo site_url("site/createfixture?id=").$this->input->get('id'); ?>"data-position="top" data-delay="50" data-tooltip="Create"><i class="material-icons">add</i></a></div>
<?php }?>

</div>
</div>
<script>
function drawtable(resultrow) {
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.team1player1name + "</td><td>" + resultrow.team1player2name + "</td><td><a class='btn btn-primary btn-xs waves-effect waves-light blue darken-4 z-depth-0 less-pad' href='<?php echo site_url('site/editfixture?id=');?>"+resultrow.id+"&scheduleid="+resultrow.schedule+"' data-position='top' data-delay='50' data-tooltip='Edit'><i class='fa fa-pencil propericon'></i></a><a class='btn btn-danger btn-xs waves-effect waves-light red pad10 z-depth-0 less-pad' onclick=\"return confirm('Are you sure you want to delete?');\") href='<?php echo site_url('site/deletefixture?id='); ?>"+resultrow.id+"&scheduleid="+resultrow.schedule+"' data-position='top' data-delay='50' data-tooltip='Delete'><i class='material-icons propericon'>delete</i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
