@php
    $userProfileClass = '';
    if($content->content_user->user_type == '0')
    {
        $userProfileClass = 'user-profile-bg';
    }
    if($content->content_user->user_type == '1')
    {
        $userProfileClass = 'creator-profile-bg';
    }
    if($content->content_user->user_type == '2')
    {
        $userProfileClass = 'hybrid-profile-bg';
    }
@endphp
<div class="row d-flex align-items-stretch">
    <aside class="col-lg-7">
      <div class="AddVideo mt-0 h-100">
        <div class="YoutubeLable"><span>{{ isset($content->content_account->name) ? $content->content_account->name : 'N/A'}}</span></div>
        @php
        $category_name = isset($content->content_category->name) ? $content->content_category->name : '';
        @endphp
        <a href="javascript:void(0);" class="CategoryTitle">{{$category_name}}</a>
        <h4>{{$content->main_title}}</h4>
        <div class="VideoUser">
            <div class="mr-2 height-32 width-32 user-profile-avatar">
              @if(isset($content->content_account->image_url))
                <img src="{{$content->content_account->image_url}}" alt="" class="rounded-circle ">
              @else
                <img src="{{asset('assets/img/theme/unnamed.jpg')}}" alt="" class="rounded-circle ">
              @endif
            </div>
        </div>
        <div class="">
          <div class="item">
            <div class="imgvid">
              <img src="{{ $content->main_image_url}}">
            </div>
          </div>
        </div>
        <ul class="d-flex justify-content-between">
          <li>
            @php
              $likeClass = (isset($content->content_user_like->id) || isset($content->content_user_unlike->id) || Auth::user()->user_type == '1') ? 'action-disabled' : 'content-action';
            @endphp
            <a href="javascript:void(0);" data-action="1" data-content-id="{{ $content->id }}" class="mr20 {{$likeClass}}"><i class="fal fa-check"></i> <span class="actionCount">{{$content->like_count}}</span></a>
          </li>
          <li>
            @php
              $unlikeClass = (isset($content->content_user_like->id) || isset($content->content_user_unlike->id) || Auth::user()->user_type == '1') ? 'action-disabled' : 'content-action';
            @endphp
            <a href="javascript:void(0);" data-action="2" data-content-id="{{ $content->id }}" class="mr20 {{$unlikeClass}}"><i class="fal fa-times"></i> <span class="actionCount">{{$content->unlike_count}}</span></a>
          </li>

          <li>
            <a href="javascript:void(0);"><i class="far fa-share-alt"></i></a>
          </li>

          <li>
            @php
              $inappropriateClass = (isset($content->content_user_inappropriate->id) || Auth::user()->user_type == '1') ? 'action-disabled' : 'content-action';
            @endphp
            <a href="javascript:void(0);" data-action="3" data-content-id="{{ $content->id }}" class="mr20 {{$inappropriateClass}}"><i class="fas fa-exclamation-triangle"></i> </a>
          </li>
        </ul>
        <p class="date">
           @if($content->ratings_count)
              <span class="text-danger text-uppercase">Rated</span>
           @else
              <a href="javascript:void(0);" data-content-id="{{$content->id}}" class="text-white text-uppercase badge badge-pill badge-info rateContent">Rate</a>
           @endif

           <span>{{$content->views_count}} views</span>
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <span>{{ date("d M Y", strtotime($content->created_at)) }}</span>
            <span class="d-flex align-items-center">
                @php
                $creatorName = isset($content->content_user->name) ? $content->content_user->name : '';
                @endphp
                <div class="mr-2 height-32 width-32 user-profile-avatar">
                 <img src="{{$content->content_user->user_image_url}}" alt="" class="rounded-circle  {{$userProfileClass}}">
                </div>
                <strong><a href="javascript:void(0);">{{$creatorName}}</a></strong>
            </span>
        </div>
        <hr class="my-3">

        <div class="scrollbar-250" id="style-1">
            <div class="force-overflow-250">
                <p>{{ $content->description }}</p>
            </div>
        </div>

      </div>
    </aside>
    <aside class="col-lg-5">
      <div class="card bg-light h-100 PopupCard">
        <div class="card-body">
          <ul class="RatingList d-flex justify-content-between">
            <li><span class="ratingsCount">{{$content->ratings_count}}</span> Total Ratings</li>
            {{-- <li class="sepreter">|</li>
            <li>0 Linked Account Ratings </li> --}}
          </ul>

          <div class="row content-actions">
            {{-- <aside class="col-8">
              <input type="email" class="form-control" id="RatingsWords" placeholder="Enter Rating Word(s) here">
            </aside>
            <aside class="col-4">
              <select class="form-control" id="Score">
                <option>Score</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </aside> --}}
              @if(Auth::user()->user_type != '1')
                <aside class="col-md-4">
                  <div id="emoji-div"></div>
                </aside>

                <aside class="col-md-6 pr-1">
                    <input class="form-control" type="text" name="rating-text" id="rating-text" placeholder="Enter Rating Word(s) here" />
                </aside>

                <aside class="col-md-2 pl-0">
                    <button name="saveRating" data-id="{{$content->id}}" id="saveRating" class="default-btn-sm">Rate</button>
                </aside>
              @endif
          </div>

          <div class="scrollbar" id="style-1">
            <div class="force-overflow" id="ratings_data" data-content-id="{{$content->id}}">
            </div>
          </div>
        </div>
      </div>
    </aside>
  </div>