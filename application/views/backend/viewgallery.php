<div class="row">
<div class="col s12">
<div class="row">
<div class="col s12 drawchintantable">
<?php $this->chintantable->createsearch(" Gallery");?>
<table class="highlight responsive-table">
<thead>
<tr>
<th data-field="id">ID</th>
<th data-field="order">Order</th>
<th data-field="name">Name</th>
<th data-field="image1">Image1</th>
<th data-field="season">Season</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
<?php $this->chintantable->createpagination();?>
<div class="createbuttonplacement"><a class="btn-floating btn-large waves-effect waves-light blue darken-4 tooltipped" href="<?php echo site_url("site/creategallery"); ?>"data-position="top" data-delay="50" data-tooltip="Create"><i class="material-icons">add</i></a></div>
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
     var image1 = "<a class='img-center' href='<?php echo base_url('uploads').'/'; ?>" + resultrow.image1 + "' ><img src='<?php echo base_url('uploads').'/'; ?>" + resultrow.image1 + "'></a>";
        if (resultrow.image1 == "") {
            image = "No Receipt Available";
        }
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.order + "</td><td>" + resultrow.name + "</td><td>" + image1 + "</td><td>" + resultrow.season + "</td><td><a class='btn btn-primary btn-xs waves-effect waves-light blue darken-4 z-depth-0 less-pad' href='<?php echo site_url('site/editgallery?id=');?>"+resultrow.id+"' data-position='top' data-delay='50' data-tooltip='Edit'><i class='fa fa-pencil propericon'></i></a><a class='btn btn-danger btn-xs waves-effect waves-light red pad10 z-depth-0 less-pad' onclick=\"return confirm('Are you sure you want to delete?');\") href='<?php echo site_url('site/deletegallery?id='); ?>"+resultrow.id+"' data-position='top' data-delay='50' data-tooltip='Delete'><i class='material-icons propericon'>delete</i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
