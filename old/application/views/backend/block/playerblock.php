<section class="panel">
    <div class="panel-body">
        <ul id="nav-mobile">
          
            
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'editplayers' ) {
    echo 'active';
} ?>" href="<?php echo site_url('site/editplayers?id=').$before1; ?>"> Players Details</a></li> 
            
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'viewtournamentplayed' || $this->uri->segment(2) == 'createtournamentplayed'  || $this->uri->segment(2) == 'edittournamentplayed') {
    echo 'active';
} ?>" href="<?php echo site_url('site/viewtournamentplayed?id=').$before2; ?>">Tournament Played</a></li> 
            
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'viewachievment' || $this->uri->segment(2) == 'createachievment'  || $this->uri->segment(2) == 'editachievment') {
    echo 'active';
} ?>" href="<?php echo site_url('site/viewachievment?id=').$before2; ?>">Achievments</a></li> 
 
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'viewcareer' || $this->uri->segment(2) == 'createcareer'  || $this->uri->segment(2) == 'editcareer') {
    echo 'active';
} ?>" href="<?php echo site_url('site/viewcareer?id=').$before2; ?>">Career</a></li> 
 
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'viewcurrent' || $this->uri->segment(2) == 'createcurrent'  || $this->uri->segment(2) == 'editcurrent') {
    echo 'active';
} ?>" href="<?php echo site_url('site/viewcurrent?id=').$before2; ?>">Current</a></li> 
 
            <li><a class="waves-effect waves-light <?php if ($this->uri->segment(2) == 'viewlastseason' || $this->uri->segment(2) == 'createlastseason'  || $this->uri->segment(2) == 'editlastseason') {
    echo 'active';
} ?>" href="<?php echo site_url('site/viewlastseason?id=').$before2; ?>">Last Season</a></li> 
 
        </ul>
    </div>
</section>
