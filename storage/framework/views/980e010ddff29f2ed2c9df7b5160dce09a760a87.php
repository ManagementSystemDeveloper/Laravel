<nav id="navbar-main" class="navbar navbar-light navbar-expand-lg fixed-top">
  <div class="container">
      <a class="navbar-brand mr-lg-5" href="/">
        <img src="<?php echo e(asset('/default/logo_nearby.png')); ?>">
      </a>
      <div class="d-flex w-100 justify-content-between align-items-center">
      <?php if(session()->has('geolocation')): ?>
        <div>
          <div style="z-index: 10" class="delivery-location-title">
            Location
          </div>            
          <div class="d-flex justify-content-start">
            <span>
              <b id="top_address_info"><?php 
                echo mb_strimwidth(session('geolocation')->address, 0, 30, "..."); 
              ?></b>
              <a data-toggle="modal" href="#locationset" class="">▼</a>
            </span>
          </div>
        </div>
      <?php endif; ?>
        <div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="#">
                <img src="<?php echo e(asset('/default/logo_nearby.png')); ?>">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          
          <?php if(!config('settings.single_mode')&&config('settings.restaurant_link_register_position')=="navbar"): ?>
            <li class="nav-item">
              <a data-mode="popup" target="_blank" class="button nav-link nav-link-icon" href="<?php echo e(route('newrestaurant.register')); ?>"><?php echo e(__(config('settings.restaurant_link_register_title'))); ?></a>
            </li>
          <?php endif; ?>
          <?php if(config('app.isft')&&config('settings.driver_link_register_position')=="navbar"): ?>
          <li class="nav-item">
              <a data-mode="popup" target="_blank" class="button nav-link nav-link-icon" href="<?php echo e(route('driver.register')); ?>"><?php echo e(__(config('settings.driver_link_register_title'))); ?></a>
            </li>
            <?php endif; ?>
          <?php if(!empty(config('global.facebook'))): ?>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="<?php echo e(config('global.facebook')); ?>" target="_blank" data-toggle="tooltip" title="<?php echo e(__('Like us on Facebook')); ?>">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none"><?php echo e(__('Facebook')); ?></span>
            </a>
          </li>
          <?php endif; ?>
          <?php if(!empty(config('global.instagram'))): ?>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="<?php echo e(config('global.instagram')); ?>" target="_blank" data-toggle="tooltip" title="<?php echo e(__('Follow us on Instagram')); ?>">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none"><?php echo e(__('Instagram')); ?></span>
            </a>
          </li>
          <?php endif; ?>
          <?php echo $__env->yieldContent('addiitional_button_1'); ?>
          <?php echo $__env->yieldContent('addiitional_button_2'); ?>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          </ul>
        </ul>
      </div>
    </div>

  </nav>
<?php /**PATH /home/repairsp/eatin.pk/resources/views/layouts/menu/top_nearby.blade.php ENDPATH**/ ?>