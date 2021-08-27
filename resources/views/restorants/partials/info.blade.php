<div class="pl-lg-4">
    <form id="restorant-form" method="post" action="{{ route('admin.restaurants.update', $restorant) }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
        <div class="col-md-6">
        <input type="hidden" id="rid" value="{{ $restorant->id }}"/>
        @include('partials.fields',['fields'=>[
            ['ftype'=>'input','name'=>"Restaurant Name",'id'=>"name",'placeholder'=>"Restaurant Name",'required'=>true,'value'=>$restorant->name],
            ['ftype'=>'input','name'=>"Restaurant description",'id'=>"description",'placeholder'=>"Restaurant description",'required'=>true,'value'=>$restorant->description],
            ['ftype'=>'input','name'=>"Restaurant address",'id'=>"address",'placeholder'=>"Restaurant address",'required'=>true,'value'=>$restorant->address],
            ['ftype'=>'input','name'=>"Restaurant phone",'id'=>"phone",'placeholder'=>"Restaurant phone",'required'=>true,'value'=>$restorant->phone],
            ['ftype'=>'input','name'=>"Restaurant latitude",'id'=>"lat",'placeholder'=>"Restaurant latitude",'required'=>true,'value'=>$restorant->lat],
            ['ftype'=>'input','name'=>"Restaurant longitude",'id'=>"lng",'placeholder'=>"Restaurant longitude",'required'=>true,'value'=>$restorant->lng],
        ]])
        <button type="button" id="get-latlong" class="btn btn-success mt-4">{{ __('Get Current Location') }}</button>
        <button type="button" id="show-latlong" class="btn btn-success mt-4">{{ __('Show Current Location') }}</button>
        @if(config('settings.multi_city'))
            @include('partials.fields',['fields'=>[
                ['ftype'=>'select','name'=>"Restaurant city",'id'=>"city_id",'data'=>$cities,'required'=>true,'value'=>$restorant->city_id],
            ]])
        @endif
       
        @if(auth()->user()->hasRole('admin'))
            <br/>
            <div class="row">
                <div class="col-6 form-group{{ $errors->has('fee') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-description">{{ __('Fee percent') }}</label>
                    <input type="number" name="fee" id="input-fee" step="any" min="0" max="100" class="form-control form-control-alternative{{ $errors->has('fee') ? ' is-invalid' : '' }}" value="{{ old('fee', $restorant->fee) }}" required autofocus>
                    @if ($errors->has('fee'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fee') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-6 form-group{{ $errors->has('static_fee') ? ' has-danger' : '' }}">
                    <label class="form-control-label" for="input-description">{{ __('Static fee') }}</label>
                    <input type="number" name="static_fee" id="input-fee" step="any" min="0" class="form-control form-control-alternative{{ $errors->has('static_fee') ? ' is-invalid' : '' }}" value="{{ old('static_fee', $restorant->static_fee) }}" required autofocus>
                    @if ($errors->has('static_fee'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('static_fee') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <br/>
            <div class="form-group">
                <label class="form-control-label" for="item_price">{{ __('Is Featured') }}</label>
                <label class="custom-toggle" style="float: right">
                    <input type="checkbox" name="is_featured" <?php if($restorant->is_featured == 1){echo "checked";}?>>
                    <span class="custom-toggle-slider rounded-circle"></span>
                </label>
            </div>
            <br/>
        @endif
        <br/>
        @if(config('app.isft'))
            @include('partials.fields',['fields'=>[
                ['ftype'=>'bool','name'=>"Pickup",'id'=>"can_pickup",'value'=>$restorant->can_pickup == 1 ? "true" : "false"],
                ['ftype'=>'bool','name'=>"Delivery",'id'=>"can_deliver",'value'=>$restorant->can_deliver == 1 ? "true" : "false"],
                ['ftype'=>'bool','name'=>"Self Delivery",'id'=>"self_deliver",'value'=>$restorant->self_deliver == 1 ? "true" : "false"],
                ['ftype'=>'bool','name'=>"Free Delivery",'id'=>"free_deliver",'value'=>$restorant->free_deliver == 1 ? "true" : "false"],
            ]])
        @elseif(config('app.isqrsaas') && !config('settings.is_whatsapp_ordering_mode'))
            @include('partials.fields',['fields'=>[
                ['ftype'=>'bool','name'=>"Disable Call Waiter",'id'=>"disable_callwaiter",'value'=>$restorant->getConfig('disable_callwaiter', 0) ? "true" : "false"],
            ]])
        @endif  
        <br/>
        <div class="row">
            <?php
                $images=[
                    ['name'=>'resto_wide_logo','label'=>__('Restaurant wide logo'),'value'=>$restorant->logowide,'style'=>'width: 200px; height: 62px;','help'=>"PNG 650x120 recomended"],
                    ['name'=>'resto_wide_logo_dark','label'=>__('Dark restaurant wide logo'),'value'=>$restorant->logowidedark,'style'=>'width: 200px; height: 62px;','help'=>"PNG 650x120 recomended"],
                    ['name'=>'resto_logo','label'=>__('Restaurant Image'),'value'=>$restorant->logom,'style'=>'width: 295px; height: 200px;','help'=>"JPEG 590 x 400 recomended"],
                    ['name'=>'resto_cover','label'=>__('Restaurant Cover Image'),'value'=>$restorant->coverm,'style'=>'width: 200px; height: 100px;','help'=>"JPEG 2000 x 1000 recomended"]
                ]
            ?>
            @foreach ($images as $image)
                <div class="col-md-6">
                    @include('partials.images',$image)
                </div>
            @endforeach
        </div>    
        
        </div>
        <div class="col-md-6">
            @include('restorants.partials.ordering')
            @include('restorants.partials.localisation')

            <!-- WHATS APP MODE -->
            @if (config('settings.is_whatsapp_ordering_mode'))
                @include('restorants.partials.social_info')  
            @endif

            @if (config('settings.whatsapp_ordering'))
                <!-- We have WP ordering -->
                @if (config('app.isft'))
                    <!-- FT -->
                    @if(auth()->user()->hasRole('admin'))
                        @include('restorants.partials.waphone')
                    @endif
                @else
                    <!-- QR -->
                    @include('restorants.partials.waphone')
                @endif
            @endif

        </div>

        </div>


        <div class="text-center">
            <!-- <button type="button" id="get-latlong" class="btn btn-success mt-4">{{ __('Get Current Location') }}</button>
            <button type="button" id="show-latlong" class="btn btn-success mt-4">{{ __('Show Current Location') }}</button> -->
            <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
        </div>
        
    </form>
    
</div>
@section('js')    
    <script>
        $('#get-latlong').on('click', function() {
            const input_latitude = document.querySelector('#lat');
            const input_longitude = document.querySelector('#lng');

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
            var latitude = document.querySelector('#lat').value;
            var longitude = document.querySelector('#lng').value;

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
@endsection
