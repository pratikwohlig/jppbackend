<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create gallery</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/creategallerysubmit");?>' enctype= 'multipart/form-data'>
   <div class="row">
            <div class="input-field col s12 m8">
                <?php echo form_dropdown('season', $season, set_value('season')); ?>
                 <label>Season</label>
            </div>
        </div>
<div class="row">
<div class="input-field col s6">
<label for="Order">Order</label>
<input type="text" id="Order" name="order" value='<?php echo set_value('order');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Name">Name</label>
<input type="text" id="Name" name="name" value='<?php echo set_value('name');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="Name">Name in Hindi</label>
<input type="text" id="Name" name="hname" value='<?php echo set_value('hname');?>'>
</div>
</div>
   <div class="row">
            <div class="input-field col s12 m8">
                <?php echo form_dropdown('type', $type, set_value('type')," id='typeid'"); ?>
                 <label>Type</label>
            </div>
        </div>

<div class="row big">
<div class="file-field input-field col s12 m6">
<div class="btn blue darken-4">
<span>Image</span>
<input type="file" name="image1" multiple>
</div>
<div class="file-path-wrapper">
<input class="file-path validate" type="text" placeholder="Upload big image" value='<?php echo set_value('image1');?>'>
</div>
</div>
 <span style=" display: block;">Big : 1472px X 327px</span>
    <span style=" display: block;">Small : 800px X 356px</span>
</div>
<!--
<div class="row small">
<div class="file-field input-field col s12 m6">
<div class="btn blue darken-4">
<span>Image2</span>
<input type="file" name="image2" multiple>
</div>
<div class="file-path-wrapper">
<input class="file-path validate" type="text" placeholder="Upload small image" value='<?php echo set_value('image2');?>'>
</div>
</div>
 <span style=" display: block;
    padding-top: 30px;">700px X 500px</span>
</div>
-->
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewgallery"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
