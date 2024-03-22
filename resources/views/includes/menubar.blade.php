<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php // echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php // echo $user['username']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTS</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="header">MANAGE</li>
        
        <li><a href="students.php"><i class="fa fa-users"></i> <span>List of Scholars</span></a></li>
        <!--li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i>
            <span>Institutions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="cardbank.php"><i class="fa fa-circle-o"></i>CARD BANK Inc</a></li>
            <li><a href="cardinc.php"><i class="fa fa-circle-o"></i>CARD Inc</a></li>
            <li><a href="cardsme.php"><i class="fa fa-circle-o"></i>CARD SME</a></li>
            <li><a href="cardmri.php"><i class="fa fa-circle-o"></i>CARD MRI Rizal Bank</a></li>
            <li><a href="list.php"><i class="fa fa-circle-o"></i>List of all Areas and Units</a></li>
          </ul>
        </li -->
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
              <span>Scholar Type</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="scholars/college.php"><i class="fa fa-circle-o"></i>College</a></li>
            <li><a href="scholars/highschool.php"><i class="fa fa-circle-o"></i>High School</a></li>
            <li><a href="scholars/seniorhigh.php"><i class="fa fa-circle-o"></i>Senior High</a></li>
            <li><a href="scholars/balikeskwela.php"><i class="fa fa-circle-o"></i>Balik-Eskwela</a></li>
            <li><a href="scholars/dhsp.php"><i class="fa fa-circle-o"></i>DHSP/College</a></li>
           
          </ul>
        </li>

       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Total Graduates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="graduates/institution.php"><i class="fa fa-circle-o"></i>per Institution</a></li>
            <!-- li><a href="hiring/region.php"><i class="fa fa-circle-o"></i>per Region</a></li -->
            <li><a href="graduates/area.php"><i class="fa fa-circle-o"></i>per Area</a></li>
            <li><a href="graduates/unit.php"><i class="fa fa-circle-o"></i>per Unit</a></li>
           
          </ul>
        </li>
        <li><a href="hiring/institution.php"><i class="fa fa-users"></i> <span>Available for Hiring</span></a></li>

        <!-- li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Available For Hiring</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="hiring/institution.php"><i class="fa fa-circle-o"></i>Institution</a></li>
            < !-- li><a href="hiring/region.php"><i class="fa fa-circle-o"></i>Region</a></li - ->
            <li><a href="hiring/area.php"><i class="fa fa-circle-o"></i>Area</a></li>
            <li><a href="hiring/unit.php"><i class="fa fa-circle-o"></i>Unit</a></li>
           
          </ul>
        </li -->

        <!-- <li><a href="deduction.php"><i class="fa fa-file-text"></i>Total Graduates</a></li> -->
        <!-- <li><a href="position.php"><i class="fa fa-suitcase"></i>Available for Hiring</a></li> -->
        <li class="header">REPORTS</li>
        <li><a href="approval.php"><i class="fa fa-files-o"></i> <span>Disbursement of Allowance</span></a></li>
        <li><a href="summary.php"><i class="fa fa-clock-o"></i> <span>Summary Report</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>