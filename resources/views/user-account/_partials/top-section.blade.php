@php
    $userProfileClass = '';
    if(Auth::user()->user_type == '0')
    {
        $userProfileClass = 'user-profile-bg';
    }
    if((isset(Auth::user()->user_type) && Auth::user()->user_type == '1'))
    {
        $userProfileClass = 'creator-profile-bg';
    }
    if(Auth::user()->user_type == '2')
    {
        $userProfileClass = 'hybrid-profile-bg';
    }
@endphp
<div class="row d-flex justify-content-between">
    <aside class="col-md-10">

        <div class="user-profile-avatar user-profile-avatar-top">
            <a href="{{route('user.account')}}">
            <img src="{{$user->user_image_url}}" alt="" class="rounded-circle height-64 width-64 {{$userProfileClass}}">
            </a>
        </div>

        <ul class="LinkVerb mt-3">
            @if(Auth::user()->id != $user->id)
                @if((Auth::user()->id != $user->id) && in_array($user->id, $followingIds))
                    <li class="active"><a class="" data-user-id="{{$user->id}}" href="javascript:void(0);">Linked</a></li>
                @else
                    <li class="active"><a class="follow-user" data-user-id="{{$user->id}}" href="javascript:void(0);">Link</a></li>
                @endif

                <li><a class="sm LinkVerbLabel" href="javascript:void(0);">Verb</a></li>
            @endif
        </ul>
    </aside>
    <aside class="col-md-2 head-link">
        <p><a href="javascript:void(0);" class="text-secondary">{{$user->account_name}}</a></p>
        <p><a href="javascript:void(0);" class="text-secondary">{{$user->name}}</a></p>
        <p class="font-14"><strong><a href="javascript:void(0);" class="text-primary">Here Since: <span>{{date('d M Y', strtotime($user->created_at))}}</span></a></strong></p>
        @if(!empty($user->location))
        <p class="font-14"><strong><a href="javascript:void(0);" class="text-primary">From: Your <span>{{ !empty($user->location) ? $user->location : 'N/A'}}</span></a></strong></p>
        @endif
    </aside>
</div>
<ul class="ListingList font-12">
    <li><strong><a href="javascript:void(0);" class="text-light">Linked: <span>{{count($followingIds)}}</span></a></strong></li>
    <li><strong><a href="javascript:void(0);" class="text-light">Linker: <span>{{count($followerIds)}}</span></a></strong></li>
</ul>