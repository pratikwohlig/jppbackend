<div class="row">
<div class="col s12">
<div class="row">
<div class="col s12 drawchintantable">
<?php $this->chintantable->createsearch(" Schedule");?>
<table class="highlight responsive-table">
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="stadium">stadium</th>
<th data-field="team1">Team1</th>
<th data-field="team2">Team2</th>
<th data-field="season">Season</th>
<!--<th data-field="timestamp">Timestamp</th>-->
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
<?php $this->chintantable->createpagination();?>
<div class="createbuttonplacement"><a class="btn-floating btn-large waves-effect waves-light blue darken-4 tooltipped" href="<?php echo site_url("site/createschedule"); ?>"data-position="top" data-delay="50" data-tooltip="Create"><i class="material-icons">add</i></a></div>
</div>
</div>
<script>
function drawtable(resultrow) {
    if(resultrow.season==1){
        resultrow.season="Season 3";
    }
    else if(resultrow.season==2){
        resultrow.season="Season 4";
    }
    else if(resultrow.season==3){
        resultrow.season="World Cup 2016";
    }
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.stadium + "</td><td>" + resultrow.team1 + "</td><td>" + resultrow.team2 + "</td><td>" + resultrow.season + "</td><td><a class='btn btn-primary btn-xs waves-effect waves-light blue darken-4 z-depth-0 less-pad' href='<?php echo site_url('site/editschedule?id=');?>"+resultrow.id+"' data-position='top' data-delay='50' data-tooltip='Edit'><i class='fa fa-pencil propericon'></i></a><a class='btn btn-danger btn-xs waves-effect waves-light red pad10 z-depth-0 less-pad' onclick=\"return confirm('Are you sure you want to delete?');\") href='<?php echo site_url('site/deleteschedule?id='); ?>"+resultrow.id+"' data-position='top' data-delay='50' data-tooltip='Delete'><i class='material-icons propericon'>delete</i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
