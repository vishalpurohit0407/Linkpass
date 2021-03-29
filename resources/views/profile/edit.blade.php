@extends('layouts.app', ['title' => __('User Profile')])

@section('content')

    {{-- <div class="container-fluid mt--7 pb-5">
        <div class="row">
            <div class="col-xl-4 order-xl-1 mb-5 mb-xl-0">
                @include('profile.left-bar-links')
            </div>
            <div class="col-xl-8 order-xl-2">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center ">
                            <h4 class="mb-0 ml-3">{{ __('Edit Profile') }}</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype= "multipart/form-data">
                            @csrf
                            @method('put')

                            @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <div class="{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input type="text" name="name" id="input-name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}"  autofocus>

                                        @if($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <div class="{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <input type="email" name="email" id="input-email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="category">{{ __('Category') }}</label>
                                    <div class="select-wrapper {{ $errors->has('category') ? ' has-danger' : '' }}">
                                        <select name="category" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}">
                                            <option value="">Please Select Category</option>
                                            @if(count($categories) > 0)
                                                @foreach($categories as $category)
                                                    <option value="{{$category['id']}}" @if($category['id'] == auth()->user()->category_id)) selected @endif>{!! $category['name'] !!}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @if ($errors->has('category'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('category') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="tags">{{ __('Tags') }}</label>
                                    <div class="{{ $errors->has('tags') ? ' has-danger' : '' }}">
                                        <input type="text" name="tags" class="form-control" id="tags" value="{{old('tags', $userTags)}}" data-role="tagsinput" />
                                        @if ($errors->has('tags'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('tags') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row row-example">
                                    <div class="col-12 col-md-8">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-file">{{ __('Profile Picture') }}</label>
                                            <div class="custom-file">
                                                <input type="file" name="profile_img" class="custom-file-input" id="customFileLang" accept="image/*" lang="en" onchange="loadFile(event)">
                                                <label class="custom-file-label" for="customFileLang">Select file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img id="output" src="{{auth()->user()->user_image_url}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="default-btn mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <main class="main">
        <article class="container">
          <ul class="LinkVerb">
            <li class="active"><a href="#">New # Group</a></li>
            <li><a href="#"># Group : 2</a></li>
            <li><a href="#"># Group : 3</a></li>
            <li><a href="#"># Total : 22</a></li>
          </ul>
          <div class="row">
            <aside class="col-md-6">
              <article class="SettingBox">
                <div class="d-flex justify-content-between align-items-center SettingBoxHead">
                  <h5><a href="#"># Location 1 :</a></h5>
                  <div class="custom-control custom-switch">
                    <input name="subscribe" type="checkbox" class="custom-control-input condition-trigger" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1"></label>
                    <span class="text-primary" id="valueOfSwitch1">Off</span> </div>
                  <div class="SettingBoxHeadLast">
                    <ul>
                      <li><a href="#" class="btn btn-dark btn-sm rounded-30">Add #</a></li>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="nav-item"> <a class="nav-link" href="#"><i class="fal fa-edit"></i> Edit</a> </li>
                          <li class="nav-item"> <a class="nav-link" href="#"><i class="fal fa-trash-alt"></i> Delete</a> </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card mt-2 py-2 px-3 rounded-lg">
                  <div class="detail-tag"> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"># test</span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"># test</span> <span class="label-info-tag"><a href="#"># test</a></span> </div>
                </div>
              </article>
            </aside>
            <aside class="col-md-6">
              <article class="SettingBox">
                <div class="d-flex justify-content-between align-items-center SettingBoxHead">
                  <h5><a href="#"># Location 1 :</a></h5>
                  <div class="custom-control custom-switch">
                    <input name="subscribe" type="checkbox" class="custom-control-input condition-trigger" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2"></label>
                    <span class="text-primary" id="valueOfSwitch2">Off</span> </div>
                  <div class="SettingBoxHeadLast">
                    <ul>
                      <li><a href="#" class="btn btn-dark btn-sm rounded-30">Add #</a></li>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="nav-item"> <a class="nav-link" href="#"><i class="fal fa-edit"></i> Edit</a> </li>
                          <li class="nav-item"> <a class="nav-link" href="#"><i class="fal fa-trash-alt"></i> Delete</a> </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card mt-2 py-2 px-3 rounded-lg">
                  <div class="detail-tag"> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"># test</span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># test</span> </div>
                </div>
              </article>
            </aside>
            <aside class="col-md-6">
              <article class="SettingBox">
                <div class="d-flex justify-content-between align-items-center SettingBoxHead">
                  <h5><a href="#"># Location 1 :</a></h5>
                  <div class="custom-control custom-switch">
                    <input name="subscribe" type="checkbox" class="custom-control-input condition-trigger" id="customSwitch3">
                    <label class="custom-control-label" for="customSwitch3"></label>
                    <span class="text-primary" id="valueOfSwitch3">Off</span> </div>
                  <div class="SettingBoxHeadLast">
                    <ul>
                      <li><a href="#" class="btn btn-dark btn-sm rounded-30">Add #</a></li>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="nav-item"> <a class="nav-link" href="#"><i class="fal fa-edit"></i> Edit</a> </li>
                          <li class="nav-item"> <a class="nav-link" href="#"><i class="fal fa-trash-alt"></i> Delete</a> </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card mt-2 py-2 px-3 rounded-lg">
                  <div class="detail-tag"> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"># test</span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"># test</span> <span class="label-info-tag"><a href="#"># test</a></span> </div>
                </div>
              </article>
            </aside>
            <aside class="col-md-6">
              <article class="SettingBox">
                <div class="d-flex justify-content-between align-items-center SettingBoxHead">
                  <h5><a href="#"># Location 1 :</a></h5>
                  <div class="custom-control custom-switch">
                    <input name="subscribe" type="checkbox" class="custom-control-input condition-trigger" id="customSwitch4">
                    <label class="custom-control-label" for="customSwitch4"></label>
                    <span class="text-primary" id="valueOfSwitch4">Off</span> </div>
                  <div class="SettingBoxHeadLast">
                    <ul>
                      <li><a href="#" class="btn btn-dark btn-sm rounded-30">Add #</a></li>
                      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="nav-item"> <a class="nav-link" href="#"><i class="fal fa-edit"></i> Edit</a> </li>
                          <li class="nav-item"> <a class="nav-link" href="#"><i class="fal fa-trash-alt"></i> Delete</a> </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card mt-2 py-2 px-3 rounded-lg">
                  <div class="detail-tag"> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"># test</span> <span class="label-info-tag"><a href="#"># Example</a></span> <span class="label-info-tag"># Example</span> <span class="label-info-tag"><a href="#"># test</a></span> <span class="label-info-tag"># test</span> </div>
                </div>
              </article>
            </aside>
          </div>
          <hr class="mb-3">
          <div class="row d-flex justify-content-center">
            <aside class="col-lg-5">
              <ul class="nav nav-pills mb-3 KeptPills" id="pills-tab" role="tablist">
                <li class="nav-item w-auto"> <a class="nav-link {{ (request()->old('updateProfile') || !request()->old('changePass')) ? 'active' : '' }}" id="pills-Profile-tab" data-toggle="pill" href="#pills-Profile" role="tab" aria-controls="pills-Profile" aria-selected="true">Profile Setting</a> </li>
                <li class="nav-item w-auto"> <a class="nav-link {{ request()->old('changePass') ? 'active' : '' }}" id="pills-Pass-tab" data-toggle="pill" href="#pills-Pass" role="tab" aria-controls="pills-Pass" aria-selected="false">Change Password</a> </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <!--Start Profile-->
                <div class="tab-pane fade {{ (request()->old('updateProfile') || !request()->old('changePass')) ? 'show active' : '' }}" id="pills-Profile" role="tabpanel" aria-labelledby="pills-Profile-tab">
                  <div class="login-box text-center">
                    <h5><strong>Profile Setting</strong></h5>

                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype= "multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" name="updateProfile">
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="pl-lg-4">
                            <div class="form-group text-left">
                                <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                <div class="{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <input type="text" name="name" id="input-name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">

                                    @if($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                <div class="{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <input type="email" name="email" id="input-email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group text-left">
                                <label class="form-control-label" for="category">{{ __('Category') }}</label>
                                <div class="select-wrapper {{ $errors->has('category') ? ' has-danger' : '' }}">
                                    <select name="category" class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}">
                                        <option value="">Please Select Category</option>
                                        @if(count($categories) > 0)
                                            @foreach($categories as $category)
                                                <option value="{{$category['id']}}" @if($category['id'] == auth()->user()->category_id)) selected @endif>{!! $category['name'] !!}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('category') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group text-left">
                                <label class="form-control-label" for="tags">{{ __('Tags') }}</label>
                                <div class="{{ $errors->has('tags') ? ' has-danger' : '' }}">
                                    <input type="text" name="tags" class="form-control" id="tags" value="{{old('tags', $userTags)}}" data-role="tagsinput" />
                                    @if ($errors->has('tags'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('tags') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row row-example">
                                <div class="col-12 col-md-8">
                                    <div class="form-group text-left">
                                        <label class="form-control-label" for="input-file">{{ __('Profile Picture') }}</label>
                                        <div class="custom-file">
                                            <input type="file" name="profile_img" class="custom-file-input" id="customFileLang" accept="image/*" lang="en" onchange="loadFile(event)">
                                            <label class="custom-file-label" for="customFileLang">Select file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <a href="javascript:void(0);">
                                        <img id="output" src="{{auth()->user()->user_image_url}}" class="img-center img-fluid shadow shadow-lg--hover" style="width: 140px;height:140px;">
                                    </a>
                                </div>
                            </div>

                            <div class="form-group login-btn mt-3">
                                <button type="submit" class="btn btn-primary rounded-30 text-uppercase w-100">Save</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>

                <!--Start Pass-->
                <div class="tab-pane fade {{ request()->old('changePass') ? 'show active' : '' }}" id="pills-Pass" role="tabpanel" aria-labelledby="pills-Pass-tab">
                  <div class="login-box text-center">
                    <h5><strong>Change Password</strong></h5>

                    <form method="post" action="{{ route('profile.password') }}" autocomplete="off" >
                        @csrf
                        @method('put')
                        <input type="hidden" name="changePass" value="1">
                        @if (session('password_status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('password_status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="pl-lg-4">
                            <div class="form-group text-left">
                                <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                                <div class="{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <input type="password" name="old_password" id="input-current-password" class="form-control {{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" >

                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback"  role="alert">
                                           {{ $errors->first('old_password') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                                <div class="{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" >

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" >
                            </div>

                            <div class="form-group login-btn">
                                <button type="submit" class="btn btn-primary rounded-30 text-uppercase w-100">Save</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </article>
      </main>
      <!--End main Part-->
@endsection

@section('pagewise_js')
<script type="text/javascript">
var loadFile = function(event) {
var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection