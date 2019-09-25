
<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo e(url('dashbord')); ?>" class="navbar-brand">Barbershop</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo e(url('dashbord')); ?>">Dashboard <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <span class="caret"></span></a>
              <?php $role = Auth::user()->roleId; ?>
              <ul class="dropdown-menu" role="menu">
              
			 <li><a href="<?php echo e(url('services')); ?>">Services Master</a></li>
			 <li><a href="<?php echo e(url('discount')); ?>">Discount Master</a></li>
			 
          </ul>
			</div>	
			<!--/.navbar-collapse -->
			<!-- navbar right menu -->
			<div class="navbar-custom-menu">
				 <!-- Right Side Of Navbar -->
         <ul class="nav navbar-nav navbar-right">
             <!-- Authentication Links -->
              <?php if(Auth::guest()): ?>
            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                  <?php else: ?>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              <?php echo e(Auth::user()->userName); ?> <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="<?php echo e(route('logout')); ?>"
                                      onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                      <?php echo e(csrf_field()); ?>

                                  </form>
                              </li>
                          </ul>
                      </li>
                  <?php endif; ?>
              </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>