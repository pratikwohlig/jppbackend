<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Fan Corner Detail</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editcontactussubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<div class="input-field col s6">
<label for="Email">Email</label>
<input type="email" id="Email" name="email" value='<?php echo set_value('email',$before->email);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="firstname">firstname</label>
<input type="text" id="firstname" name="firstname" value='<?php echo set_value('firstname',$before->firstname);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="lastname">lastname</label>
<input type="text" id="lastname" name="lastname" value='<?php echo set_value('lastname',$before->lastname);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Phone">Phone</label>
<input type="text" id="Phone" name="phone" value='<?php echo set_value('phone',$before->phone);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Timestamp">Timestamp</label>
<input type="text" id="Timestamp" name="timestamp" value='<?php echo set_value('timestamp',$before->timestamp);?>'>
</div>
</div>
<!--
<div class="row">
<div class="col s12 m6">
<label>Favourite Players</label>
<textarea name="comment" placeholder="Enter text ..."><?php echo set_value( 'comment',$before->comment);?></textarea>
</div>
</div>
-->
 <div class="row">
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
<a href='<?php echo site_url("site/viewcontactus"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
