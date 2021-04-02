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

          <div class="custom-control custom-switch">
            @php $status = $user->user_type == 2 ? 'checked' : ''; @endphp
            <input name="subscribe" type="checkbox" class="custom-control-input condition-trigger userTypeToggle" id="customSwitchHybrid" {{$status}}>
            <label class="custom-control-label" for="customSwitchHybrid"></label>
            <span class="text-primary" id="valueOfSwitch">Hybrid</span>
         </div>

          <ul class="LinkVerb">
            <li class="active"><a id="addNewUserPreferencesGroup" href="javascript:void(0);">New # Group</a></li>
            <li><a href="javascript:void(0);"># Total : <span id="userPreferencesCount"></span></a></li>
          </ul>
          <div id="userPreferencesWrap">

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

                            {{-- <div class="form-group text-left">
                                <label class="form-control-label" for="tags">{{ __('Tags') }}</label>
                                <div class="{{ $errors->has('tags') ? ' has-danger' : '' }}">
                                    <input type="text" name="tags" class="form-control" id="tags" value="{{old('tags', $userTags)}}" data-role="tagsinput" />
                                    @if ($errors->has('tags'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('tags') }}
                                        </span>
                                    @endif
                                </div>
                            </div> --}}

                            <div class="row row-example">
                                <div class="col-12 col-md-8">
                                    <div class="form-group text-left">
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

jQuery(document).ready(function($) {
    $(document).on('click', '#addNewUserPreferencesGroup', function(event) {
        event.preventDefault();

        var totalGroup = $('.userPreferencesBox').length;

        if (totalGroup == 4) {
            swal('Error!!', 'You can add maximum 3 groups', 'error');
            return false;
        }

        saveUserPreferencesGroup(this);
    });

    $(document).on('click', '.editNewUserPreferencesGroup', function(event) {
        event.preventDefault();
        saveUserPreferencesGroup(this);
    });

    $(document).on('click', '.deleteUserPreferencesGroup', function(event) {
        event.preventDefault();
        deleteUserPreferencesGroup(this);
    });

    $(document).on('change', '.groupStatusToggle', function(event) {
        event.preventDefault();

        var status   = this.checked ? 1 : 0,
            group_id = $(this).attr('data-group-id')

        $.ajax({
            url: '{{ route("user.set-preferences-group-status") }}',
            type: "post",
            data : {status : status, group_id : group_id},
            datatype: "json"
        }).done(function(data) {
              getUserPreferences();
              swal('Succes!!', data.message, 'success');
              return false;
        })
    });

    $(document).on('change', '#customSwitchHybrid', function(event) {
        event.preventDefault();

        var status = this.checked ? 2 : 0;

        $.ajax({
            url: '{{ route("user.set-user-type") }}',
            type: "post",
            data : {status : status},
            datatype: "json"
        }).done(function(data) {
              swal('Succes!!', data.message, 'success');
              return false;
        })
    });



    $(document).on('click', '.addNewTag', function(event) {
        event.preventDefault();

        saveUserPreferencesGroupTag(this);
    });
});

// Load User Preferences
getUserPreferences();

function getUserPreferences() {
    $.ajax({
        url: '{{ route("user.get-preferences") }}',
        type: "get",
        datatype: "json",
    }).done(function(data) {

        if (data.success) {
            $('#userPreferencesWrap').html(data.html);
            $('#userPreferencesCount').html(data.userPreferencesCount);
        }
    }).fail(function(jqXHR, ajaxOptions, thrownError) {
        //alert('No response from server');

    });
}

function saveUserPreferencesGroup(element) {

    var htmlStr    = '',
        group_id   = $(element).attr('data-group-id') ? $(element).attr('data-group-id') : '',
        group_name = $(element).attr('data-group-name') ? $(element).attr('data-group-name') : '';

    htmlStr = '<input type="text" class="form-control" value="'+group_name+'" name="group_name" id="group_name">';

    if (htmlStr.length > 0) {
        swal({
            title: "Group Name",
            html: htmlStr,
            type: "info",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: group_id != '' ? 'Update' : 'Create',
            cancelButtonText: "No, Cancel it!"
        }).then((result) => {
            if (result.value) {
                var group_name = $('#group_name').val();

                if (group_name == '') {
                    swal({
                        title: "Error!!",
                        text: 'Please enter group name',
                        type: "error",
                        showCancelButton: false,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Ok',
                    }).then((result) => {
                        $('#addNewUserPreferencesGroup').trigger('click');
                    });

                    return false;
                }

                $.ajax({
                    url: '{{route("user.save-preferences-group")}}',
                    type: "post",
                    datatype: "json",
                    data: {
                        name: group_name,
                        id  : group_id
                    },
                }).done(function(data) {
                    if (data.success) {
                        getUserPreferences();
                        swal('Succes!!', data.message, 'success');
                        return false;
                    } else {
                        swal({
                            title: "Error!!",
                            text: data.message,
                            type: "error",
                            showCancelButton: false,
                            confirmButtonColor: '#DD6B55',
                            confirmButtonText: 'Ok',
                        }).then((result) => {
                            $('#addNewUserPreferencesGroup').trigger('click');
                        });

                        return false;
                    }
                }).fail(function(jqXHR, ajaxOptions, thrownError) {

                });
            }
        });
    }
}

function deleteUserPreferencesGroup(element) {

  var group_id = $(element).attr('data-group-id');

    swal({
        title: "Please Confirm",
        text: "Would you like to delete selected group?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes',
        cancelButtonText: "No, Cancel it!"
    }).then((result) => {
        if (result.value) {

            $.ajax({
                url: '{{route("user.delete-preferences-group")}}',
                type: "post",
                datatype: "json",
                data: {
                    id  : group_id
                },
            }).done(function(data) {
                if (data.success) {
                    getUserPreferences();
                    swal('Succes!!', data.message, 'success');
                    return false;
                } else {
                    swal('Error!!', data.message, 'error');
                    return false;
                }
            }).fail(function(jqXHR, ajaxOptions, thrownError) {

            });
        }
    });
}

function saveUserPreferencesGroupTag(element) {

  var htmlStr = '';

  htmlStr = '<input type="text" class="form-control" name="tag_name" id="tag_name">';

  if (htmlStr.length > 0) {
      swal({
          title: "Tag Name",
          html: htmlStr,
          type: "info",
          showCancelButton: true,
          confirmButtonColor: '#DD6B55',
          confirmButtonText: 'Create',
          cancelButtonText: "No, Cancel it!"
      }).then((result) => {
          if (result.value) {
              var group_id = $(element).attr('data-group-id');
              var tag_name = $('#tag_name').val();

              if (tag_name == '') {
                  swal({
                      title: "Error!!",
                      text: 'Please enter tag name',
                      type: "error",
                      showCancelButton: false,
                      confirmButtonColor: '#DD6B55',
                      confirmButtonText: 'Ok',
                  }).then((result) => {
                      $('#addNewTag'+group_id).trigger('click');
                  });

                  return false;
              }

              $.ajax({
                  url: '{{route("user.save-preferences-group-tag")}}',
                  type: "post",
                  datatype: "json",
                  data: {
                      name: tag_name,
                      group_id: group_id
                  },
              }).done(function(data) {
                  if (data.success) {
                      getUserPreferences();
                      swal('Succes!!', data.message, 'success');
                      return false;
                  } else {
                      swal({
                          title: "Error!!",
                          text: data.message,
                          type: "error",
                          showCancelButton: false,
                          confirmButtonColor: '#DD6B55',
                          confirmButtonText: 'Ok',
                      }).then((result) => {
                          $('#addNewTag'+group_id).trigger('click');
                      });

                      return false;
                  }
              }).fail(function(jqXHR, ajaxOptions, thrownError) {

              });
          }
      });
  }
}
</script>
@endsection