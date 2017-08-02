<section class="panel">
    <div class="panel-body">
        <ul id="nav-mobile">
          
            
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'viewGalleryImage' || $this->uri->segment(2) == 'editGalleryImage'  || $this->uri->segment(2) == 'createGalleryImage') {
    echo 'active';
} ?>" href="<?php echo site_url('site/editvideogallery?id=').$before1; ?>"> Video Gallery Details</a></li> 
            
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'viewGalleryImage' || $this->uri->segment(2) == 'editGalleryImage'  || $this->uri->segment(2) == 'createGalleryImage') {
    echo 'active';
} ?>" href="<?php echo site_url('site/viewvideos?id=').$before2; ?>">Videos</a></li> 
 
        </ul>
    </div>
</section>
