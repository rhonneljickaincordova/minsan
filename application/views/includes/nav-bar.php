<nav class="navbar navbar-default">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li ><a href="<?php echo base_url();?>staff/dashboard">
        <b class="nav-bar-title"><i class="fa fa-shield"></i> <i class="left-spacer"></i> MATINA INVESTIGATION SECURITY AGENCY SERVICES INC.</b></a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a  class="nav-bar-title">
           <?php echo $user_info->first_name?>  <?php echo $user_info->last_name?> | 
           <span ng-if="<?php echo $user_info->position;?> == 0 "> Admin</span>
           <span ng-if="<?php echo $user_info->position;?> == 1 "> Employee</span> 

          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle nav-bar-title" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i> Option <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Settings</a></li>
            <li><a href="<?php echo base_url();?>login/logout">Log out </a></li>
          </ul>
        </li>
      </ul>
  </div><!-- /.container-fluid -->
</nav>
