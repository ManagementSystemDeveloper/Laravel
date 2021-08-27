

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header', [
        'title' => "",
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0"><?php echo e(__('Edit Profile')); ?></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('profile.update')); ?>" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>

                            <h6 class="heading-small text-muted mb-4"><?php echo e(__('User information')); ?></h6>

                            <?php if(session('status')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('status')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Name')); ?></label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name', auth()->user()->name)); ?>" required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-email"><?php echo e(__('Email')); ?></label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(old('email', auth()->user()->email)); ?>" required>

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('phone') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-phone"><?php echo e(__('Phone')); ?></label>
                                    <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Phone')); ?>" value="<?php echo e(old('phone', auth()->user()->phone)); ?>" required>

                                    <?php if($errors->has('phone')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('phone')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('lat') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-latitude"><?php echo e(__('Latitude')); ?></label>
                                    <input type="text" name="lat" id="input-latitude" class="form-control form-control-alternative<?php echo e($errors->has('lat') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Latitude')); ?>" value="<?php echo e(old('lat', auth()->user()->lat)); ?>" required>

                                    <?php if($errors->has('lat')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('lat')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('lng') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-longitude"><?php echo e(__('Longitude')); ?></label>
                                    <input type="text" name="lng" id="input-longitude" class="form-control form-control-alternative<?php echo e($errors->has('lng') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Longitude')); ?>" value="<?php echo e(old('lng', auth()->user()->lng)); ?>" required>

                                    <?php if($errors->has('lng')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('lng')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="text-center">
                                    <button type="button" id="get-latlong" class="btn btn-success mt-4"><?php echo e(__('Get Current Location')); ?></button>
                                    <button type="button" id="show-latlong" class="btn btn-success mt-4"><?php echo e(__('Show Current Location')); ?></button>
                                    <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Save')); ?></button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="<?php echo e(route('profile.password')); ?>" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>

                            <h6 class="heading-small text-muted mb-4"><?php echo e(__('Password')); ?></h6>

                            <?php if(session('password_status')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('password_status')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('old_password') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-current-password"><?php echo e(__('Current Password')); ?></label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative<?php echo e($errors->has('old_password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Current Password')); ?>" value="" required>

                                    <?php if($errors->has('old_password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('old_password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-password"><?php echo e(__('New Password')); ?></label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('New Password')); ?>" value="" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation"><?php echo e(__('Confirm New Password')); ?></label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="<?php echo e(__('Confirm New Password')); ?>" value="" required>
                                </div>

                                <div class="text-center">                                    
                                    <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Change password')); ?></button>
                                </div>
                            </div>
                        </form>
                        <?php if(auth()->user()->hasRole('owner')): ?>
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="text-center">
                                <form method="post" action="<?php echo e(route('user.destroy', auth()->user())); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button id="close_acc_btn" type="button" class="btn btn-danger mt-4">
                                        <i id="loadbtn" class="fa fa-spinner fa-spin"></i> &nbsp;<?php echo e(__('Close Account')); ?>

                                    </button>
                                </form>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('#loadbtn').hide();
        $('#close_acc_btn').on('click', function() {
            if (confirm('<?php echo e(__("Are you sure you want to cancel the account and all their data?")); ?>')) {
                this.parentElement.submit();
                $('#loadbtn').show();
            } else {
                return false;
            }
        });
        $('#get-latlong').on('click', function() {
            const input_latitude = document.querySelector('#input-latitude');
            const input_longitude = document.querySelector('#input-longitude');

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }

            function showPosition(position) {
                input_latitude.value = position.coords.latitude;
                input_longitude.value = position.coords.longitude;
            }
        });
        $('#show-latlong').on('click', function() {
            var latitude = document.querySelector('#input-latitude').value;
            var longitude = document.querySelector('#input-longitude').value;

            if(latitude !== '' && longitude !== '') {
                // check their validation
                var pattern_lat = /^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/;
                var pattern_lng = /^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/;

                if (pattern_lat.test(latitude) && pattern_lng.test(longitude)) {
                    var url = `https://www.google.com/maps/place/${latitude},${longitude}`;
                    window.open(url, '_blank').focus();
                }
            }            
        });
        
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('User Profile')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/repairsp/whatsapp.tifinbox.pk/resources/views/profile/edit.blade.php ENDPATH**/ ?>