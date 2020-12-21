@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can edit your name, email, or profile picture from here.'),
        'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7 pb-5">
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
    </div>
@endsection

@section('pagewise_js')
<script type="text/javascript">
var loadFile = function(event) {
var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection