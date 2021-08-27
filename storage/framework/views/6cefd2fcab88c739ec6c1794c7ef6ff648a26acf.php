<?php if(count($vendors) != 0): ?>
<div class="grid-nearby-block">
	<?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="grid-nearby-item">
		<div class="location-card-simple">
			<div class="simple-location-card">
				<div class="picture-wrapper">
					<img src="<?php echo e(empty($vendor->logo) ? asset('/images/default/default-logo.jpg') : asset('uploads/restorants/'.$vendor->logo.'_medium.jpg')); ?>" class="location-card-image" alt="<?php echo e($vendor->name); ?>" loading="lazy">
				</div>
				<div class="location-card-description">
					<div class="">
						<p class="location-card-title"><?php echo e($vendor->name); ?></p>
					</div>
					<div class="row">
						<div class="col-8 location-card-desc-left">
						<div><p class="location-card-subtitle"><?php echo e($vendor->description); ?></p></div>
						<div><p class="location-card-address"><?php echo e($vendor->address); ?></p></div>
						<div class="location-card-extra">
							<div class="rating-container" size="4">
								<!-- <div class="single-star-rating" ></div> -->
								<div class="rating-desc">
									<p class="rating-score" size="4">
										DELIVERY:&nbsp;										
									</p>
									<p class="ratings-number" size="4">
										<?php
											$fee = floatval($vendor->fee);
											if($fee == 0.0) echo("FREE");
											else echo($vendor->fee);
										?>
									</p>
								</div>
							</div>
						</div>
						</div>
						<div class="col-4 location-card-desc-right">
						<div class="location-card-bottom">
							<div class="location-card-distance">
								<?php echo e(number_format($vendor->distance, 2)); ?> km
							</div>
							<div class="location-card-badge-featured"><a href="/restaurant/<?php echo e($vendor->subdomain); ?>">Order</a></div>
							
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php else: ?>
<div class="text-center">
	<p class="nearby-result-desc">No restaurants near the area</p>
</div>
<?php endif; ?>
<?php /**PATH /home/repairsp/eatin.pk/resources/views/restorants/ajax-nearby-resturant.blade.php ENDPATH**/ ?>