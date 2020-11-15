<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name', 'Argon Dashboard') }}</title>
  <!-- Favicon -->
  <!-- Fonts -->
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css"  media='screen,print'>
  <!-- Page plugins -->
  <!-- Argon CSS -->
</head>
<style type="text/css">
    .custom-colum:nth-child(3n+0){
        clear: both;
    }
</style>
<body>
    <!-- Sidenav -->
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Header -->
        <div class="header bg-primary">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center">
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid">
            <!-- Card stats -->
            <div class="card">
                <div class="card-body">
                    <div class="col-xs-12">
                        <h5 class="h3">{{$content->main_title}}</h5>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <div class="tuto-main-image noprint">
                            <a class="image" id="lightgallery" >
                                <img class="img-fluid mt-3 mb-3" style="filter: blur(0px); width: 100%; height: 250px;" src="{{asset($content->main_image_url)}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p>{!!$content->description!!}</p>
                    </div>
                    <div class="col-xs-12">

                        <div class="alert alert-secondary fade show" style="clear: both !important;  margin-bottom: 15px;">
                            <span class="alert-icon mt-1"><i class="fas fa-tag mt-1"></i></span>
                            <span class="alert-text">Categories</span>
                            @php
                                $category_id = $content->guide_category->pluck('category_id')->toArray();
                                $category_name = App\Category::whereIn('id',$category_id)->pluck('name')->toArray();
                            @endphp
                            <span class="alert-text-right"><strong>{{implode(', ',$category_name)}}</strong></span>
                        </div>
                        <div class="" style="width: 100%; position: relative; margin-top: 5px;">
                            <div class="alert d-inline-block  alert-secondary fade show"  style="width:42.90%;  display: inline-block; margin-bottom: 3px;">
                                <span class="alert-icon mt-1"><i class="fas fa-cube mt-1"></i></span>
                                <span class="alert-text">Type</span>
                                <span class="alert-text-right"><strong>{{$content->type}}</strong></span>
                            </div>
                            <div class="alert d-inline-block  alert-secondary fade show " style="width:42.90%;  display: inline-block; margin-bottom: 2px;">
                                <span class="alert-icon mt-1"><i class="fas fa-tachometer-alt mt-1"></i></span>
                                <span class="alert-text">Difficulty</span>
                                <span class="alert-text-right"><strong>{{$content->difficulty}}</strong></span>
                            </div>
                        </div>
                        <div class="" style="width: 100%; position: relative; margin-top: 5px;">
                            <div class="alert d-inline-block  alert-secondary fade show" style="width:42.90%;  display: inline-block;margin-bottom: 3px;">
                                <span class="alert-icon mt-1"><i class="fas fa-clock mt-1"></i></span>
                                <span class="alert-text">Duration</span>
                                <span class="alert-text-right"><strong>{{$content->duration}}&nbsp;{{$content->duration_type}}</strong></span>
                            </div>
                            <div class="alert d-inline-block  alert-secondary fade show" style="width:42.90%;  display: inline-block;margin-bottom: 2px;">
                                <span class="alert-icon mt-1"><i class="fas fa-money-bill-alt mt-1"></i></span>
                                <span class="alert-text">Cost</span>
                                <span class="alert-text-right"><strong>{{$content->cost}} USD ($)</strong></span>
                            </div>
                        </div>
                        <div class="alert alert-secondary fade show mt-1" role="alert">
                            <span class="alert-icon"><i class="fas fa-list-ol"></i></span>
                            <span class="alert-text">Contents</span>
                            <ol id="content-sr">
                            @if($content->guide_step)
                            @php $step = 1; @endphp
                                <li class="toclevel-1">
                                    <a href="#Introduction">
                                        <span class="toctext">Introduction</span>
                                    </a>
                                </li>
                                @foreach($content->guide_step as $stepdata)
                                    <li class="toclevel-1">
                                        <a>
                                            <span class="toctext">Step {{$step}} - {{$stepdata->title}}</span>
                                        </a>
                                    </li>
                                    @php $step++; @endphp
                                @endforeach
                            @endif
                            </ol>
                        </div>
                    </div>
                    <hr>
                    @if($content->introduction)
                        <div id="Introduction">
                            <h5 class="mb-0">Introduction</h5>
                            <p>{!!$content->introduction!!}</p>
                        </div>
                        <hr>
                    @endif
                    @if($content->introduction_video_link)
                        <h5 class="">Video overview</h5>
                        <a href="{{$content->introduction_video_link}}">
                            {{$content->introduction_video_link}}
                        </a>
                        <hr>
                    @endif
                    @if($content->guide_step)
                    @php $step = 1; @endphp
                        @foreach($content->guide_step as $stepkey => $stepdata)
                                <div class="col-xs-12 step-instructions mb-1">
                                    <h5 class="">Step {{$step}} - {{$stepdata->title}}</h5>
                                    <div>
                                        {!!$stepdata->description!!}
                                    </div>
                                </div>
                                <div class="" style="width: 100%; position: relative; margin-top: 20px;  clear: both !important;">
                                    @if($stepdata->media)
                                        @php $counter = 1 @endphp
                                            @foreach($stepdata->media as $media)
                                            <div class="custom-colum" style="width:32%;  display: inline-block ;margin-bottom: 5px; margin-top: 5px; ">
                                                <img class="w-100" style="height: 190px;" src="{{asset($media->media_url)}}" alt="">
                                            </div>
                                            @if ($counter % 3 == 0)
                                            </div>
                                            <div class="" style="width: 100%; position: relative; margin-top: 10px; clear: both !important;" >
                                            @endif
                                        @php $counter++; @endphp
                                        @endforeach
                                    @endif
                                </div>
                                @if($stepdata->video_media)
                                    <div class="col-xs-12 step-instructions mb-1">
                                        Video Media : <a href="{{$stepdata->video_media}}" target="_blank">{{$stepdata->video_media}}</a>
                                    </div>
                                @endif
                                <hr>
                        @php $step++; @endphp
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{public_path('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>