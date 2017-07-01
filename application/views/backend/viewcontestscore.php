<div class="row">
    <div class="col s12">
        <div class="row">
            <div class="col s12 drawchintantable">
                 <?php $this->chintantable->createsearch("ContestScore");?>
                <table class="highlight responsive-table">
                    <thead>
                        <tr>
                            <!--<th data-field="id">Id</th>-->
                            <th data-field="contestname">Contest</th>
                            <th data-field="username">User</th>
                            <th data-field="email">Email</th>
                            <th data-field="score">Score</th>
                            <th data-field="Date">Date</th>
            
                        </tr>
                    </thead>
                    <tbody>
            
                    </tbody>
                </table>
            </div>
        </div>
        <?php $this->chintantable->createpagination();?>



    </div>
     
      
</div>
<script>
    function drawtable(resultrow) {
        /*if (!resultrow.username) {
            resultrow.username = "";
        }username
        if (!resultrow.logintype) {
            resultrow.logintype = "";
        }
        if (!resultrow.json) {
            resultrow.json = "";
        }*/
        return "<tr><!--<td>" + resultrow.id + "</td>--><td>" +resultrow.contestname+ "</td><td>" + resultrow.username + "</td><td>" + resultrow.email + "</td><td>" + resultrow.score + "</td><td>" + resultrow.timestamp + "</td><tr>";
    }
    generatejquery('<?php echo $base_url;?>');
</script>