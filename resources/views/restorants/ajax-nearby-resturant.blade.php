@if(count($vendors) != 0)
<div class="grid-nearby-block">
	@foreach($vendors as $vendor)
	<div class="grid-nearby-item">
		<div class="location-card-simple">
			<div class="simple-location-card">
				<div class="picture-wrapper">
					<img src="{{ empty($vendor->logo) ? asset('/images/default/default-logo.jpg') : asset('uploads/restorants/'.$vendor->logo.'_medium.jpg') }}" class="location-card-image" alt="{{ $vendor->name }}" loading="lazy" style="border-radius:1rem;">
				</div>
				<div class="location-card-description">
					<div class="">
						<p class="location-card-title">{{ $vendor->name }}</p>
					</div>
					<div class="row">
						<div class="col-8 location-card-desc-left">
						<div><p class="location-card-subtitle">{{ $vendor->description }}</p></div>
						<div><p class="location-card-address">{{ $vendor->address }}</p></div>
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
								{{ number_format($vendor->distance, 2) }} km
							</div>
							<div class="location-card-badge-featured"><a href="/restaurant/{{ $vendor->subdomain}}">Order</a></div>
							
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
@else
<div class="text-center">
	<p class="nearby-result-desc">No restaurants near the area</p>
</div>
@endif
