

@extends('layouts.app')

@section('content')


 <!--Start main Part-->
<main class="main">
  <div class="header bg-gradient-primary pt-lg-3">
    <div class="container">
      <div class="header-body text-center ">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <span class="Small-Title">{{ $page ? $page->title : '' }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-md-10">
        <div class="card border-0 mb-0">
          <div class="card-body pt-0 pb-0">
            <div class="text-center">
              <p class="lead">{!! $page ? $page->content : '' !!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--End main Part-->
@endsection
