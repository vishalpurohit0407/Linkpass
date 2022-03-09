<div class="row">
  @if(count($items) > 0)
    @foreach ($items as $content)
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

          $tab = isset($tab) ? $tab : '';

          $contentType         = array(1 => 'Images', 2 => 'Video', 3 => 'Audio', 4 => 'Text/Blog');
          $contentTypeDuration = array(1 => $content->number_of_images.($content->number_of_images == 1 ? ' Image' : ' Images'), 2 => $content->video_length, 3 => $content->podcast_length, 4 => $content->number_of_words.($content->number_of_words == 1 ? ' Word' : ' Words'));

      @endphp
      <aside class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-3" id="content-box-{{$content->id}}">
        <div class="AddVideo {!!$content->user_views_count == 0 ? 'content-visited1111' : '' !!}">
          <div class="YoutubeLable"><span>{{ isset($content->content_account->name) ? $content->content_account->name : 'N/A'}}</span></div>
          @php
            $category_name = isset($content->content_category->name) ? $content->content_category->name : '';
            $sub_category = !empty($content->sub_category) ? ": ".$content->sub_category : '';
          @endphp
          <a href="javascript:void(0);" class="CategoryTitle">{{$category_name}}{{$sub_category}} </a>
          <h4>{{ $content->main_title }}</h4>

          <div class="pull-left mb-2 w100p">
            <div class=" image-type">{{ isset($contentType[$content->type]) ? $contentType[$content->type] : 'N/A' }}</div>
            <div class=" image-date">{{ date("M d, 'y", strtotime($content->posted_at)) }}</div>
            @if(isset($content->content_account->host_name) && !empty($content->content_account->host_name) )
              <div class="image-host-name">{{ isset($content->content_account->host_name) ? Str::limit($content->content_account->host_name, 25) : '' }}</div>
            @endif
          </div>

          <div class="VideoUser">
            <div class="mr-2 height-75 width-75 user-profile-avatar ">
              @if(isset($content->content_account->image_url))
                <a href="{{route('user.account.contents', [$content->content_account->hashid, $content->content_user->hashid])}}">
                  <img src="{{$content->content_account->image_url}}" alt="" class="rounded-circle height-75 width-75 creator-profile-bg1">
                </a>
                @else
                <img src="{{asset('assets/img/no_img.png')}}" alt="" class="rounded-circle height-75 width-75 creator-profile-bg1">
              @endif
            </div>
          </div>
          <div class="">
            <div class="item">
              <div class="imgvid">
                <img src="{{ $content->main_image_url}}">

                  <span class="image-duration">{{ isset($contentTypeDuration[$content->type]) ? $contentTypeDuration[$content->type] : '0' }}</span>
                  @php
                    $currentRoute = Route::currentRouteName();
                    $showLeftBorder=false;
                    $showRightBorder=false;
                    $KeepLeftClass = $currentRoute == 'results' ? 'left-0' : '';
                  @endphp
                  @if(!isset($content->content_user_remove->id) && (isset(Auth::user()->user_type)) && $currentRoute != 'results' && Auth::user()->id != $content->user_id && $tab != 'created')
                    @php
                      $showLeftBorder=true;
                    @endphp
                   <div class="Remove">
                       <a href="javascript:void(0);" data-action="5" data-content-id="{{ $content->id }}" class="content-action" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="{{$tab == 'matched' ? 'Remove' : 'Delete'}}"><span>{{$tab == 'matched' ? 'Remove' : 'Delete'}}</span></a>
                    </div>
                  @endif

                  @if(!isset($content->content_user_keep->id) && (isset(Auth::user()->user_type)) && Auth::user()->id != $content->user_id)
                    @php
                      $showRightBorder=true;
                    @endphp

                    <div class="Keep Save {{$KeepLeftClass}}">
                      <a href="javascript:void(0);" data-action="4" data-content-id="{{ $content->id }}" class="content-action" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Save"><span>Save</span></a>
                    </div>
                  @endif
              </div>
            </div>
          </div>

          @if($showLeftBorder == true || $showRightBorder == true)
            <div style="float:left;padding:8px;width:100%">
               @if($showRightBorder == true)
                <span class="pull-left" style="border:2px solid #DDD;width:46%;margin-right:4%;"></span>
               @endif

               @if($showLeftBorder == true)
                <span class="pull-right" style="border:2px solid #DDD;width:46%;margin-left:4%;"></span>
               @endif
            </div>
          @endif
          <p class="date">
            {{-- @if($content->ratings_count)
                <span class="text-danger text-uppercase">Rated</span>
            @else
                <a href="javascript:void(0);" data-id="{{$content->id}}" class="text-white text-uppercase badge badge-pill badge-info rateListingContent">Rate</a>
            @endif --}}
            <span>{{ date("M d, 'y", strtotime($content->created_at)) }}</span>
            <span id="view-count-{{$content->id}}">{{$content->views_count}} {{$content->views_count == 1 ? 'Visit' : 'Visits'}}</span>
          </p>
          <ul class="d-flex justify-content-between">
            <li>
              @php
                $likeClass = (isset($content->content_user_like->id) || isset($content->content_user_unlike->id) || (isset(Auth::user()->user_type) && Auth::user()->user_type == '1')) ? 'action-disabled content-action-like-disabled' : 'content-action content-action-like';
                $userLikeClass = (isset($content->content_user_like->id) && !isset($content->content_user_unlike->id)) ? 'like-action-disabled' : '';
              @endphp
              <a href="javascript:void(0);" data-login="{{isset(Auth::user()->id) ? 1 : 0 }}" data-action="1" data-content-id="{{ $content->id }}" class="mr20 content-like-{{ $content->id }}  {{$likeClass}} {{$userLikeClass}}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Recommend"><i class="fas fa-check fa-2x like-color"></i> <span class="actionCount">{{$content->like_count}}</span></a>
            </li>
            <li>
              @php
                $unlikeClass = (isset($content->content_user_like->id) || isset($content->content_user_unlike->id) || (isset(Auth::user()->user_type) && Auth::user()->user_type == '1')) ? 'action-disabled content-action-unlike-disabled' : 'content-action content-action-unlike';
                $userUnlikeClass = (!isset($content->content_user_like->id) && isset($content->content_user_unlike->id)) ? 'unlike-action-disabled' : '';
              @endphp
              <a href="javascript:void(0);" data-login="{{isset(Auth::user()->id) ? 1 : 0 }}" data-action="2" data-content-id="{{ $content->id }}" class="mr20 content-unlike-{{ $content->id }} {{$unlikeClass}} {{$userUnlikeClass}}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Not Recommend"><i class="fas fa-times fa-2x unlike-color"></i> <span class="actionCount">{{$content->unlike_count}}</span></a>
            </li>

            <li>
              <a class="social-share" data-content-id="{{ $content->hashid }}" data-content-title="{{ $content->main_title }}" href="javascript:void(0);"><i class="far fa-2x fa-share-alt"></i> <span class="share-action-label">Share</span></a>
            </li>

            <li>
              @php
                $inappropriateClass = (isset(Auth::user()->user_type) && Auth::user()->user_type == '1') ? 'action-disabled' : 'content-action';
              @endphp
              <a href="javascript:void(0);" data-login="{{isset(Auth::user()->id) ? 1 : 0 }}" data-action="3" data-content-id="{{ $content->id }}" class="mr20 report-icon-color {{$inappropriateClass}}"><i class="far fa-2x fa-flag"></i> <span class="inappropriate-action-label">Report<span></a>
            </li>
          </ul>

          <div class="d-flex justify-content-between align-items-center">

            <span class="d-flex align-items-center">
              @php
                $creatorName = isset($content->content_user->account_name) ? $content->content_user->account_name  : '';
              @endphp
              <div class="mr-2 height-32 width-32 user-profile-avatar">
                <img src="{{$content->content_user->user_image_url}}" alt="" class="rounded-circle  {{$userProfileClass}}">
              </div>
              <strong><a href="{{route('other-user.account', $content->content_user->hashid)}}" class="account-label">{{$creatorName}}</a></strong>
            </span>

            {{-- <span class="d-flex align-items-center">
              {{ in_array($content->user_id, $followingIds) ? 'Linked' : '' }}
              {{ in_array($content->user_id, $followerIds) ? ' | Linker' : '' }}
            </span> --}}

          </div>
          @if(!empty($content->description))
           <p class="desc-bg mt-2">{{  Str::limit($content->description, 100)}}</p>
          @else
            <p class="desc-bg mt-2 text-center">No description added</p>
          @endif

          <!-- Button slider start -->
          <div class="owl-carousel owl-theme owl-three">
            <div class="item">
              <div class="d-flex justify-content-between align-items-center">
                @if(isset($content->content_user_keep->id) && isset(Auth::user()->id) && Auth::user()->id != $content->user_id && $tab != 'saved')
                <div class="w30p text-left">
                    <span class="text-danger text-uppercase mr-5 saved-label" style="font-weight: bold;">SAVED</span>
                </div>
                @endif
                <div class="w30p  {{ (!isset($content->content_user_keep->id) || $tab == 'saved') ? 'text-left' : 'text-center' }}">
                  <a href="javascript:void(0);" style="" data-id="{{ $content->id }}" class="btn btn-primary btn-sm goto-content-details visit-btn">VISIT</a>
                </div>

                <div class="text-right {!! isset($content->content_user_keep->id) ? 'w30p' : 'w65p' !!}">
                  <a href="javascript:void(0);" style="background:none;color:#666;padding:0;" data-id="{{ $content->id }}" class="btn btn-primary view-content-details " id="view-content-details-{{$content->id}}"><i class="far fa-2x fa-expand"></i></a>
                </div>
              </div>
            </div>
            @if(isset($editable) && $editable == true)
              <div class="item">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-left">
                      <a href="{{ route('user.content.edit', $content->hashid)}}" class="btn btn-primary btn-sm pull-right"><i class="far fa-edit"></i></a>
                    </div>
                    <div class="text-right">
                      <a href="javascript:void(0);" data-id="{{ $content->id }}" class="btn btn-primary btn-sm pull-right delete-content"><i class="far fa-trash"></i></a>
                    </div>
                </div>
              </div>
            @endif
          </div>
          <!-- Button slider end -->

        </div>
      </aside>
    @endforeach
  @else
      <div class="col-lg-12 col-md-12 col-sm-12 mt-10 text-center">No listings found</div>
  @endif
</div>



