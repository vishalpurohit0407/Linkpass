@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('You can edit your social account details from here.'),
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
                            <h4 class="mb-0 ml-3">{{ __('Edit Social Account : '. $socialAccount->name) }}</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form method="post" action="{{ route('user.social-account.update', $socialAccount->hashid) }}" autocomplete="off" enctype= "multipart/form-data">
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
                                        <input type="text" name="name" id="input-name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $socialAccount->name) }}"  autofocus>

                                        @if($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="url">{{ __('URL') }}</label>
                                    <div class="{{ $errors->has('url') ? ' has-danger' : '' }}">
                                        <input type="url" name="url" id="url" class="form-control {{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter URL') }}" value="{{ old('url', $socialAccount->url) }}">

                                        @if ($errors->has('url'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('url') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="account_url">{{ __('Account URL') }}</label>
                                    <div class="{{ $errors->has('account_url') ? ' has-danger' : '' }}">
                                        <input type="url" name="account_url" id="account_url" class="form-control {{ $errors->has('account_url') ? ' is-invalid' : '' }}" placeholder="{{ __('Enter Account URL') }}" value="{{ old('url', $socialAccount->account_url) }}">

                                        @if ($errors->has('account_url'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('account_url') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row row-example">
                                    <div class="col-12 col-md-8">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-file">{{ __('Image') }}</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="customFileLang" accept="image/*" lang="en" onchange="loadFile(event)">
                                                <label class="custom-file-label" for="customFileLang">Select Image</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <a href="javascript:void(0);">
                                            <img id="output" src="{{$socialAccount->image_url}}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="default-btn mt-4">{{ __('Save') }}</button>
                                    <a href="{{route('user.social-account.list')}}" class="default-btn btn-primary mt-4">{{ __('Cancel') }}</a>
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