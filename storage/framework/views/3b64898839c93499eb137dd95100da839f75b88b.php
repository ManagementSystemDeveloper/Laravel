

<?php $__env->startSection('content'); ?>
<div class="section section-hero section-shaped">      
    <div class="section features-1">
      <div class="container">
        <div class="row">
          <div class="col-12 no-padding">
            <div class="nearby-header-container">
              <img class="bg-image" src="/images/default/nearby-top-banner-1.png" style="width: 100%;">
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-3 d-md-block d-sm-none"></div>
          <div class="col-md-6 col-12">
            <!-- <form> -->
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
                  <div class="input-group mb-4 border border-danger">
                    <input class="form-control" name="location" id="txtlocation1" value="<?php echo e(request()->get('location')); ?>" type="text">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                    </div>
                  </div>
              </div>
            <!-- </form> -->
          </div>
          <div class="col-md-3 d-md-block d-sm-none"></div>
        </div>
        <div class="section-restaurant-block">
          <h2 class="nearby-restaurant-title">Restarunts near me&nbsp;<small>(&nbsp;<?php $radius = intval(config('settings.nearby_radius')); echo $radius; ?>km )</small></h2>
          <div id="nearby_restaurants">
            <!-- <div class="grid-nearby-item">
              <div class="location-card-simple">
                <div class="simple-location-card">
                  <div class="picture-wrapper">
                    <img src="https://images.fresha.com/locations/location-profile-images/164425/514695/aeaf864c-7514-4954-99f8-3ccee50bdc7c.jpg?class=width-small" class="location-card-image" alt="The Barbery" loading="lazy">
                  </div>
                  <div class="location-card-description">
                    <div class="">
                      <p class="location-card-title">Pablo's</p>
                    </div>
                    <div class="row">
                      <div class="col-8 location-card-desc-left">
                        <div><p class="location-card-subtitle">Best Itailian Food in our city!</p></div>
                        <div><p class="location-card-address">29 Webber Street, London (South Bank), England</p></div>
                        <div class="location-card-extra">
                            <div class="rating-container" size="4">
                              <div class="single-star-rating" ></div>
                              <div class="rating-desc">
                                  <p class="rating-score" size="4">5.0 Great</p>
                                  <p class="ratings-number" size="4">485 ratings</p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-4 location-card-desc-right">
                        <div class="location-card-bottom">
                            <div class="location-card-distance">
                              1.2 km
                            </div>
                            <div class="location-card-badge-featured"><a href="#">Order Now</a></div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-nearby-item">
              <div class="location-card-simple">
                <div class="simple-location-card">
                  <div class="picture-wrapper">
                    <img src="https://images.fresha.com/locations/location-profile-images/164425/514695/aeaf864c-7514-4954-99f8-3ccee50bdc7c.jpg?class=width-small"class="location-card-image" alt="The Barbery" loading="lazy">
                  </div>
                  <div class="location-card-description">
                    <div class="">
                      <p class="location-card-title">Pablo's</p>
                    </div>
                    <div class="row">
                      <div class="col-8 location-card-desc-left">
                        <div><p class="location-card-subtitle">Best Itailian Food in our city!</p></div>
                        <div><p class="location-card-address">29 Webber Street, London (South Bank), England</p></div>
                        <div class="location-card-extra">
                            <div class="rating-container" size="4">
                              <div class="single-star-rating" ></div>
                              <div class="rating-desc">
                                  <p class="rating-score" size="4">5.0 Great</p>
                                  <p class="ratings-number" size="4">485 ratings</p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-4 location-card-desc-right">
                        <div class="location-card-bottom">
                            <div class="location-card-distance">
                              1.2 km
                            </div>
                            <div class="location-card-badge-featured"><a href="#">Order Now</a></div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-nearby-item">
              <div class="location-card-simple">
                <div class="simple-location-card">
                  <div class="picture-wrapper">
                    <img src="https://images.fresha.com/locations/location-profile-images/164425/514695/aeaf864c-7514-4954-99f8-3ccee50bdc7c.jpg?class=width-small"class="location-card-image" alt="The Barbery" loading="lazy">
                  </div>
                  <div class="location-card-description">
                    <div class="">
                      <p class="location-card-title">Pablo's</p>
                    </div>
                    <div class="row">
                      <div class="col-8 location-card-desc-left">
                        <div><p class="location-card-subtitle">Best Itailian Food in our city!</p></div>
                        <div><p class="location-card-address">29 Webber Street, London (South Bank), England</p></div>
                        <div class="location-card-extra">
                            <div class="rating-container" size="4">
                              <div class="single-star-rating" ></div>
                              <div class="rating-desc">
                                  <p class="rating-score" size="4">5.0 Great</p>
                                  <p class="ratings-number" size="4">485 ratings</p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-4 location-card-desc-right">
                        <div class="location-card-bottom">
                            <div class="location-card-distance">
                              1.2 km
                            </div>
                            <div class="location-card-badge-featured"><a href="#">Order Now</a></div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-nearby-item">
              <div class="location-card-simple">
                <div class="simple-location-card">
                  <div class="picture-wrapper">
                    <img src="https://images.fresha.com/locations/location-profile-images/164425/514695/aeaf864c-7514-4954-99f8-3ccee50bdc7c.jpg?class=width-small"class="location-card-image" alt="The Barbery" loading="lazy">
                  </div>
                  <div class="location-card-description">
                    <div class="">
                      <p class="location-card-title">Pablo's</p>
                    </div>
                    <div class="row">
                      <div class="col-8 location-card-desc-left">
                        <div><p class="location-card-subtitle">Best Itailian Food in our city!</p></div>
                        <div><p class="location-card-address">29 Webber Street, London (South Bank), England</p></div>
                        <div class="location-card-extra">
                            <div class="rating-container" size="4">
                              <div class="single-star-rating" ></div>
                              <div class="rating-desc">
                                  <p class="rating-score" size="4">5.0 Great</p>
                                  <p class="ratings-number" size="4">485 ratings</p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-4 location-card-desc-right">
                        <div class="location-card-bottom">
                            <div class="location-card-distance">
                              1.2 km
                            </div>
                            <div class="location-card-badge-featured"><a href="#">Order Now</a></div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-nearby-item">
              <div class="location-card-simple">
                <div class="simple-location-card">
                  <div class="picture-wrapper">
                    <img src="https://images.fresha.com/locations/location-profile-images/164425/514695/aeaf864c-7514-4954-99f8-3ccee50bdc7c.jpg?class=width-small"class="location-card-image" alt="The Barbery" loading="lazy">
                  </div>
                  <div class="location-card-description">
                    <div class="">
                      <p class="location-card-title">Pablo's</p>
                    </div>
                    <div class="row">
                      <div class="col-8 location-card-desc-left">
                        <div><p class="location-card-subtitle">Best Itailian Food in our city!</p></div>
                        <div><p class="location-card-address">29 Webber Street, London (South Bank), England</p></div>
                        <div class="location-card-extra">
                            <div class="rating-container" size="4">
                              <div class="single-star-rating" ></div>
                              <div class="rating-desc">
                                  <p class="rating-score" size="4">5.0 Great</p>
                                  <p class="ratings-number" size="4">485 ratings</p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-4 location-card-desc-right">
                        <div class="location-card-bottom">
                            <div class="location-card-distance">
                              1.2 km
                            </div>
                            <div class="location-card-badge-featured"><a href="#">Order Now</a></div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-nearby-item">
              <div class="location-card-simple">
                <div class="simple-location-card">
                  <div class="picture-wrapper">
                    <img src="https://images.fresha.com/locations/location-profile-images/164425/514695/aeaf864c-7514-4954-99f8-3ccee50bdc7c.jpg?class=width-small"class="location-card-image" alt="The Barbery" loading="lazy">
                  </div>
                  <div class="location-card-description">
                    <div class="">
                      <p class="location-card-title">Pablo's</p>
                    </div>
                    <div class="row">
                      <div class="col-8 location-card-desc-left">
                        <div><p class="location-card-subtitle">Best Itailian Food in our city!</p></div>
                        <div><p class="location-card-address">29 Webber Street, London (South Bank), England</p></div>
                        <div class="location-card-extra">
                            <div class="rating-container" size="4">
                              <div class="single-star-rating" ></div>
                              <div class="rating-desc">
                                  <p class="rating-score" size="4">5.0 Great</p>
                                  <p class="ratings-number" size="4">485 ratings</p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-4 location-card-desc-right">
                        <div class="location-card-bottom">
                            <div class="location-card-distance">
                              1.2 km
                            </div>
                            <div class="location-card-badge-featured"><a href="#">Order Now</a></div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-nearby-item">
              <div class="location-card-simple">
                <div class="simple-location-card">
                  <div class="picture-wrapper">
                    <img src="https://images.fresha.com/locations/location-profile-images/164425/514695/aeaf864c-7514-4954-99f8-3ccee50bdc7c.jpg?class=width-small"class="location-card-image" alt="The Barbery" loading="lazy">
                  </div>
                  <div class="location-card-description">
                    <div class="">
                      <p class="location-card-title">Pablo's</p>
                    </div>
                    <div class="row">
                      <div class="col-8 location-card-desc-left">
                        <div><p class="location-card-subtitle">Best Itailian Food in our city!</p></div>
                        <div><p class="location-card-address">29 Webber Street, London (South Bank), England</p></div>
                        <div class="location-card-extra">
                            <div class="rating-container" size="4">
                              <div class="single-star-rating" ></div>
                              <div class="rating-desc">
                                  <p class="rating-score" size="4">5.0 Great</p>
                                  <p class="ratings-number" size="4">485 ratings</p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-4 location-card-desc-right">
                        <div class="location-card-bottom">
                            <div class="location-card-distance">
                              1.2 km
                            </div>
                            <div class="location-card-badge-featured"><a href="#">Order Now</a></div>                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nearby', ['title' => __('Restaurants')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/repairsp/eatin.pk/resources/views/restorants/nearby.blade.php ENDPATH**/ ?>