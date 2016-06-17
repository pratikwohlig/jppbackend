<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Fan Corner Detail</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editclansubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<div class="input-field col s6">
<label for="Email">Email</label>
<input type="email" id="Email" name="email" value='<?php echo set_value('email',$before->email);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="name">Name</label>
<input type="text" id="name" name="name" value='<?php echo set_value('name',$before->name);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Timestamp">Timestamp</label>
<input type="text" id="Timestamp" name="timestamp" value='<?php echo set_value('timestamp',$before->timestamp);?>'>
</div>
</div>
 <div class="row" style="display:none">
    <form class="col s6">
      <div class="row">
        <div class="input-field col s6">
          <textarea id="comment" class="materialize-textarea"><?php echo set_value( 'comment',$before->comment);?></textarea>
          <label for="comment">Favourite Players</label>
        </div>
      </div>
    </form>
  </div>
<div class="row">
<div class="col s6">
<a href='<?php echo site_url("site/viewclan"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
