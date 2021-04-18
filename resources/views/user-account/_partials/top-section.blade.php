@php
    $userProfileClass = '';
    if(Auth::user()->user_type == '0')
    {
        $userProfileClass = 'user-profile-bg';
    }
    if(Auth::user()->user_type == '1')
    {
        $userProfileClass = 'creator-profile-bg';
    }
    if(Auth::user()->user_type == '2')
    {
        $userProfileClass = 'hybrid-profile-bg';
    }
@endphp
<div class="row d-flex justify-content-between">
    <aside class="col-md-4">

        <div class="user-profile-avatar">
            <a href="{{route('user.account')}}">
            <img src="{{$user->user_image_url}}" alt="" class="rounded-circle height-64 width-64 {{$userProfileClass}}">
            </a>
        </div>
        <ul class="LinkVerb mt-3">
        <li class="active"><a href="javascript:void(0);">Link</a></li>
        <li><a class="sm" href="javascript:void(0);">Verb</a></li>
        </ul>
    </aside>
    <aside class="col-md-4 head-link">
        <p><a href="javascript:void(0);" class="text-secondary">{{$user->account_name}}</a></p>
        <p><a href="javascript:void(0);" class="text-secondary">{{$user->name}} {{$user->surname}}</a></p>
        <p class="font-14"><strong><a href="javascript:void(0);" class="text-primary">Here Since: <span>{{date('d M Y', strtotime($user->created_at))}}</span></a></strong></p>
        <p class="font-14"><strong><a href="javascript:void(0);" class="text-primary">From: Your <span>{{ !empty($user->location) ? $user->location : 'N/A'}}</span></a></strong></p>
    </aside>
</div>
<ul class="ListingList font-12">
    <li><strong><a href="javascript:void(0);" class="text-light">Linked: <span>0</span></a></strong></li>
    <li><strong><a href="javascript:void(0);" class="text-light">Linker: <span>0</span></a></strong></li>
</ul>