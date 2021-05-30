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
      @endphp
      <aside class="col-xl-4 col-lg-6 col-md-6 col-sm-6" id="content-box-{{$content->id}}">
        <div class="AddVideo">
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

                  @if(!isset($content->content_user_remove->id))
                    <div class="Remove">
                      <a href="javascript:void(0);" data-action="5" data-content-id="{{ $content->id }}" class="content-action"><span class="badge badge-info">Remove</span></a>
                    </div>
                  @endif

                  @if(!isset($content->content_user_keep->id))
                    <div class="Keep">
                      <a href="javascript:void(0);" data-action="4" data-content-id="{{ $content->id }}" class="content-action"><span class="badge badge-info">Keep</span></a>
                    </div>
                  @endif
              </div>
            </div>
          </div>
          <ul class="d-flex justify-content-between">
            <li>
              @php
                $likeClass = (isset($content->content_user_like->id) || isset($content->content_user_unlike->id) || (isset(Auth::user()->user_type) && Auth::user()->user_type == '1')) ? 'action-disabled' : 'content-action';
              @endphp
              <a href="javascript:void(0);" data-action="1" data-content-id="{{ $content->id }}" class="mr20 {{$likeClass}}"><i class="fal fa-check"></i> <span class="actionCount">{{$content->like_count}}</span></a>
            </li>
            <li>
              @php
                $unlikeClass = (isset($content->content_user_like->id) || isset($content->content_user_unlike->id) || (isset(Auth::user()->user_type) && Auth::user()->user_type == '1')) ? 'action-disabled' : 'content-action';
              @endphp
              <a href="javascript:void(0);" data-action="2" data-content-id="{{ $content->id }}" class="mr20 {{$unlikeClass}}"><i class="fal fa-times"></i> <span class="actionCount">{{$content->unlike_count}}</span></a>
            </li>

            <li>
              <a href="javascript:void(0);"><i class="far fa-share-alt"></i></a>
            </li>

            <li>
              @php
                $inappropriateClass = (isset($content->content_user_inappropriate->id) || (isset(Auth::user()->user_type) && Auth::user()->user_type == '1')) ? 'action-disabled' : 'content-action';
              @endphp
              <a href="javascript:void(0);" data-action="3" data-content-id="{{ $content->id }}" class="mr20 {{$inappropriateClass}}"><i class="fas fa-exclamation-triangle"></i> </a>
            </li>
          </ul>
          <p class="date">
            {{-- @if($content->ratings_count)
                <span class="text-danger text-uppercase">Rated</span>
            @else
                <a href="javascript:void(0);" data-id="{{$content->id}}" class="text-white text-uppercase badge badge-pill badge-info rateListingContent">Rate</a>
            @endif --}}
            <span id="view-count-{{$content->id}}">{{$content->views_count}} views</span>
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
              <strong><a href="{{route('other-user.account', $content->content_user->hashid)}}">{{$creatorName}}</a></strong>
            </span>
          </div>
          <hr class="my-3">
          <p>{{  Str::limit($content->description, 100)}}</p>
          <!-- Button trigger modal -->
          <div class="row">

            <div class="col-md-4 text-left">
              @if(isset($content->content_user_keep->id))
              <span class="text-danger text-uppercase mr-5" style="font-weight: bold;">SAVED</span>
              @endif
            </div>

            <div class="col-md-4 text-center">
              <a href="javascript:void(0);" style="background-color: #3498DB; color:#FFF; padding:5px 15px 5px 15px;" data-id="{{ $content->id }}" class="btn btn-primary goto-content-details mr-2">VISIT</a>
            </div>

            <div class="col-md-4 text-right">
              <a href="javascript:void(0);" style="background:none;color:#666;padding:0;" data-id="{{ $content->id }}" class="btn btn-primary view-content-details" id="view-content-details-{{$content->id}}"><i class="far fa-expand"></i></a>
            </div>


            @if(isset($editable) && $editable == true)
              <a href="{{ route('user.content.edit', $content->hashid)}}" class="btn btn-primary mr-3 pull-right"><i class="far fa-edit"></i></a>
              <a href="javascript:void(0);" data-id="{{ $content->id }}" class="btn btn-primary mr-3 pull-right delete-content"><i class="far fa-trash"></i></a>
            @endif
          </div>
        </div>
      </aside>
    @endforeach
  @else
      <div class="col-lg-12 col-md-12 col-sm-12 mt-10 text-center">Content could not found</div>
  @endif
</div>
  <!-- Start Modal -->
  <div class="modal fade user-modal" id="content-details-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      <div class="modal-body" id="content-details-wrap">
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->



