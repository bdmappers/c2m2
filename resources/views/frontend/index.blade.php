@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="section-header pb-6 pb-lg-10 bg-soft">
    <div class="container">

        <div class="row justify-content-center text-center mb-4 text-secondary">
            <div class="col">
                <h2 class="display-3">
                    Covid Mitigation Mapping Dashboard for Bangladesh
                </h2>
            </div>
        </div>

        <div class="row justify-content-center">
            @include('frontend.includes.messages')

            <div class="col-12 col-sm-6">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5 class="card-title text-uppercase text-white bg-warning p-2 mb-2">New Cases</h5>
                                    </div>
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">
                                            123
                                        </span>
                                        <br>
                                        <span>
                                            <small>Last 24 Hours</small>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                        <br>
                                        <span>
                                            <small>Total Cases</small>
                                        </span>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5 class="card-title text-uppercase text-white bg-primary p-2 mb-2">Tests</h5>
                                    </div>
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">
                                            123
                                        </span>
                                        <br>
                                        <span>
                                            <small>Last 24 Hours</small>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                        <br>
                                        <span>
                                            <small>Total Tests</small>
                                        </span>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5 class="card-title text-uppercase text-white bg-success p-2 mb-2">Recovered</h5>
                                    </div>
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">
                                            123
                                        </span>
                                        <br>
                                        <span>
                                            <small>Last 24 Hours</small>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                        <br>
                                        <span>
                                            <small>Total Cases</small>
                                        </span>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5 class="card-title text-uppercase text-white bg-danger p-2 mb-2">Deaths</h5>
                                    </div>
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">
                                            123
                                        </span>
                                        <br>
                                        <span>
                                            <small>Last 24 Hours</small>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                        <br>
                                        <span>
                                            <small>Total Tests</small>
                                        </span>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('img/banner-1.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="pattern bottom"></div> -->
</section>
<section class="section-header pb-6 pb-lg-10 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center">
                <h1 class="display-1 mb-4">{{app_name()}}</h1>
                <p class="lead text-muted">
                    {!! setting('meta_description') !!}
                </p>
            </div>
        </div>
    </div>
    <!-- <div class="pattern bottom"></div> -->
</section>
<section class="section-header pb-6 pb-lg-10 bg-soft">
    <div class="container">
        <div class="text-center">
            <h2 class="display-3">
                Map Area
            </h2>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-12 col-sm-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-primary">
                            Dhaka Map
                        </h4>
                        <div id="mapid"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-primary">
                            Bangladesh Map
                        </h4>
                        <div id="mapid2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="pattern bottom"></div> -->
</section>

<!-- News and Events -->
<section class="section-header pb-6 pb-lg-10">
    <div class="container">
        <div class="text-center">
            <h2 class="display-3">
                Video
            </h2>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-12 col-sm-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XfjBCCT3x8M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>
                            মা টেলিহেল্থ
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8YcKC4WoH-Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <p>
                            আমার ঘরে আমার স্কুল
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="pattern bottom"></div> -->
</section>

<section class="section-header pb-6 pb-lg-10">
    <div class="container">
        <div class="text-center">
            <h2 class="display-3">
                News & Events
            </h2>
        </div>
        <div class="row mt-4 justify-content-center">
            <?php
            $posts = \Modules\Article\Entities\Post::take(6)->latest()->get();
            $module_name = "posts";
            $module_name_singular = "post";
            ?>
            @foreach ($posts as $$module_name_singular)
            @php
            $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-white border-light shadow-soft p-4 rounded">
                    <a href="{{$details_url}}"><img src="{{$$module_name_singular->featured_image}}" class="card-img-top" alt=""></a>
                    <div class="card-body p-0 pt-4">
                        <a href="{{$details_url}}" class="h3">{{$$module_name_singular->name}}</a>
                        <div class="d-flex align-items-center my-4">
                            <img class="avatar avatar-sm rounded-circle" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="">
                            {!!isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href="'.route('frontend.users.profile', $$module_name_singular->created_by).'"><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'!!}
                        </div>
                        <p class="mb-3">{{$$module_name_singular->intro}}</p>
                        <a href="{{route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])}}" class="badge badge-primary">{{$$module_name_singular->category_name}}</a>
                        <p>
                            @foreach ($$module_name_singular->tags as $tag)
                            <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" class="badge badge-warning">{{$tag->name}}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- <div class="pattern bottom"></div> -->
</section>


@endsection


@push('after-styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>

<style media="screen">
    #mapid { height: 350px; }
    #mapid2 { height: 350px; }
</style>
@endpush

@push('after-scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
<script type="text/javascript">
var map = L.map('mapid').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
</script>

<script type="text/javascript">
var mapid2 = L.map('mapid2').setView([51.505, -0.09], 10);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mapid2);

L.marker([51.5, -0.09]).addTo(mapid2)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
</script>
@endpush
