@extends('layouts.app', ['title' => __('User Profile')])

@section('content')

<main class="main">
    <article class="container">
        <hr class="mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <aside class="col-lg-12">
                    <div class="border-0">
                        <div class="row align-items-center ">
                            <h4 class="mb-4 ml-5">{{ __('Edit Social Account') }}</h4>
                        </div>
                    </div>
                    <div class="pt-0">
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
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="customFileLang" accept="image/*" lang="en" onchange="loadFile(event)">
                                                <label class="custom-file-label" for="customFileLang">Select Image</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 social-account-avatar">
                                        <a href="javascript:void(0);">
                                            <img id="output" src="{{$socialAccount->image_url}}" class="rounded-circle height-75 width-75 creator-profile-bg" style="width: 140px;">
                                        </a>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary rounded-30 text-uppercase float-left w-50">Save</button>
                                    <a href="{{route('user.account')}}" class="btn btn-default rounded-30 text-uppercase float-left ml-2 w-45">{{ __('Cancel') }}</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </aside>
            </div>
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