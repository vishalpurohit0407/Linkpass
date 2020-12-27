@extends('layouts.app')

@section('content')

<div class="container">
    <form method="get" action="{{route('results')}}">
        <div class="row mt-4 mb-2">
            <div class="col-md-10 col-lg-8 mx-auto pr-0">
                <div class="form-group">
                    <div class="input-group input-group-merge">
                        <input class="form-control" name="search" placeholder="Search" type="text">
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-4 mx-auto pl-2">
                <button class="btn btn-icon btn-primary" type="submit">
                    <span class="btn-inner--icon"><i class="fas fa-search"></i></span>
                    <span class="btn-inner--text">Search</span>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="projects-horizontal">
    <div class="container">
       <div class="row projects">
        @if($results->count() > 0)
            @foreach ($results as $item)
            <div class="col-md-12 col-sm-12 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="{!! route('result.get-details', $item->id) !!}"><img class="img-fluid" src="{{!empty($item->main_image_url) ? $item->main_image_url : asset('assets/img/no_img.png')}}"></a></div>
                    <div class="col">
                        <h3 class="name">{!! $item->main_title !!}</h3>
                        <p class="description">{!! $item->description !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        @else
        <div class="col-md-12 col-sm-12 text-center">
            No records available
        </div>
       @endif
       </div>
    </div>
 </div>




<style>
.projects-horizontal {
  color: #313437;
  background-color: #fff;
}

.projects-horizontal p {
  color: #7d8285;
}

.projects-horizontal h2 {
  font-weight: bold;
  margin-bottom: 40px;
  padding-top: 40px;
  color: inherit;
}

@media (max-width:767px) {
  .projects-horizontal h2 {
    margin-bottom: 25px;
    padding-top: 25px;
    font-size: 24px;
  }
}

.projects-horizontal .intro {
  font-size: 16px;
  max-width: 500px;
  margin: 0 auto 10px;
}

.projects-horizontal .projects {
  padding-bottom: 40px;
}

.projects-horizontal .item {
  padding-top: 60px;
  min-height: 160px;
}

@media (max-width:767px) {
  .projects-horizontal .item {
    padding-top: 40px;
    min-height: 160px;
  }
}

.projects-horizontal .item .name {
  font-size: 18px;
  font-weight: bold;
  margin-top: 10px;
  margin-bottom: 15px;
  color: inherit;
}

@media (max-width:991px) {
  .projects-horizontal .item .name {
    margin-top: 22px;
  }
}

.projects-horizontal .item .description {
  font-size: 15px;
  margin-bottom: 0;
}

/* Content List - End */
</style>


@endsection
