<div class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s12 drawchintantable">
                <?php $this->chintantable->createsearch(" Players");?>
                <table class="highlight responsive-table">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="order">Order</th>
                            <th data-field="type">Type</th>
                            <th data-field="name">Name</th>
                            <th data-field="nationality">Nationality</th>
                            <th data-field="jerseyno">Jerseyno</th>
                            <th data-field="about">About</th>
                            <th data-field="dob">Dob</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <?php $this->chintantable->createpagination();?>
        <div class="createbuttonplacement">
            <a class="btn-floating btn-large waves-effect waves-light blue darken-4 tooltipped" href="<?php echo site_url("site/createplayers"); ?>"data-position="top" data-delay="50" data-tooltip="Create"><i class="material-icons">add</i></a>
        </div>
    </div>
</div>
<script>
    function drawtable(resultrow) {
    return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.order + "</td><td>" + resultrow.type + "</td><td>" + resultrow.name + "</td><td>" + resultrow.nationality + "</td><td>" + resultrow.jerseyno + "</td><td>" + resultrow.about + "</td><td>" + resultrow.dob + "</td><td><a class='btn btn-primary btn-xs waves-effect waves-light blue darken-4 z-depth-0 less-pad' href='<?php echo site_url('site/editplayers?id=');?>"+resultrow.id+"' data-position='top' data-delay='50' data-tooltip='Edit'><i class='fa fa-pencil propericon'></i></a><a class='btn btn-danger btn-xs waves-effect waves-light red pad10 z-depth-0 less-pad' onclick=\"return confirm('Are you sure you want to delete?');\") href='<?php echo site_url('site/deleteplayers?id='); ?>"+resultrow.id+"' data-position='top' data-delay='50' data-tooltip='Delete'><i class='material-icons propericon'>delete</i></a></td></tr>";
    }
    generatejquery("<?php echo $base_url;?>");
</script>
