<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
            <li class="<?php if($this->uri->segment(2)=="dashboard"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/dashboard">Overview</a></li>
            <li class="<?php if($this->uri->segment(2)=="articles"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/articles">Articles</a></li>
           	<li class="<?php if($this->uri->segment(2)=="categories"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/categories">Categories</a></li>
            <li class="<?php if($this->uri->segment(2)=="users"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/users">Users</a></li>
			<li class="<?php if($this->uri->segment(2)=="groups"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/groups">User Groups</a></li>
			<li class="<?php if($this->uri->segment(2)=="settings"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/settings">Settings</a></li>
    </ul>
</div>