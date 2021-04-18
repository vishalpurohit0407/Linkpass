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
              <img src="{{$content->content_user->user_image_url}}" alt="" class="rounded-circle  {{$userProfileClass}}">
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
                $likeClass = (isset($content->content_user_like->id) || isset($content->content_user_unlike->id)) ? 'action-disabled' : 'content-action';
              @endphp
              <a href="javascript:void(0);" data-action="1" data-content-id="{{ $content->id }}" class="mr20 {{$likeClass}}"><i class="fal fa-check"></i> <span class="actionCount">{{$content->like_count}}</span></a>
            </li>
            <li>
              @php
                $unlikeClass = (isset($content->content_user_like->id) || isset($content->content_user_unlike->id)) ? 'action-disabled' : 'content-action';
              @endphp
              <a href="javascript:void(0);" data-action="2" data-content-id="{{ $content->id }}" class="mr20 {{$unlikeClass}}"><i class="fal fa-times"></i> <span class="actionCount">{{$content->unlike_count}}</span></a>
            </li>

            <li>
              <a href="javascript:void(0);"><i class="far fa-share-alt"></i></a>
            </li>

            <li>
              @php
                $inappropriateClass = isset($content->content_user_inappropriate->id) ? 'action-disabled' : 'content-action';
              @endphp
              <a href="javascript:void(0);" data-action="3" data-content-id="{{ $content->id }}" class="mr20 {{$inappropriateClass}}"><i class="fas fa-exclamation-triangle"></i> </a>
            </li>
          </ul>
          <p class="date">
            @if($content->ratings_count)
                <span class="text-danger text-uppercase">Rated</span>
            @else
                <a href="javascript:void(0);" data-id="{{$content->id}}" class="text-white text-uppercase badge badge-pill badge-info rateListingContent">Rate</a>
            @endif
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
          <p>{{  Str::limit($content->description, 150)}}</p>
          <!-- Button trigger modal -->
          <div class="VideoPopup">
            <a href="javascript:void(0);" data-id="{{ $content->id }}" class="btn btn-primary pull-right view-content-details" id="view-content-details-{{$content->id}}"><i class="far fa-expand"></i></a>
            <a href="javascript:void(0);" data-id="{{ $content->id }}" class="btn btn-primary pull-right goto-content-details mr-2"><i class="far fa-eye"></i></a>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      <div class="modal-body" id="content-details-wrap">
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
@section('pagewise_js')
<script type="text/javascript">
  var loadFile = function(event) {
  var output     = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
  };

  // View Content Details
  var pageno=1;

  jQuery(document).ready(function($) {

      $(document).on('click','.rateListingContent',function(event) {

        var contentId = $(this).attr('data-id');

          $.ajax(
          {
              url: '{{route("result.get-details")}}',
              type: "post",
              datatype: "json",
              data:{content_id:contentId},
          }).done(function(data){

              if(data.status)
              {
                $('#content-details-wrap').html(data.html);

                pageno=1;
                getRatingsData();

                $('#content-details-modal').modal('show');
              }
              else
              {
                swal('Error!!', data.message, 'error');
              }
          }).fail(function(jqXHR, ajaxOptions, thrownError){

          });
      });

      $(document).on('click','.view-content-details',function(event) {

          var contentId = $(this).attr('data-id');

          $.ajax(
          {
              url: '{{route("result.get-details")}}',
              type: "post",
              datatype: "json",
              data:{content_id:contentId},
          }).done(function(data){

              if(data.status)
              {
                $('#content-details-wrap').html(data.html);

                pageno=1;
                getRatingsData();

                $('#content-details-modal').modal('show');
              }
              else
              {
                swal('Error!!', data.message, 'error');
              }
          }).fail(function(jqXHR, ajaxOptions, thrownError){

          });
      });

      // Go to Content Details
      $(document).on('click','.goto-content-details',function(event) {

          var contentId = $(this).attr('data-id');
          var userId    = "{{ isset(Auth::user()->id) ? Auth::user()->id : '' }}";

          if(userId == '')
          {
              $('#loginModalPrompt').modal('show');
          }

          $.ajax(
          {
              url: '{{route("user.content.goto-content-details")}}',
              type: "post",
              datatype: "json",
              data:{content_id:contentId},
          }).done(function(data){

              if(data.status)
              {
                  $('#view-count-'+contentId).html(data.count+ ' views');

                  window.open(data.url, '_blank').focus();
              }
              else
              {
                swal('Error!!', data.message, 'error');
              }
          }).fail(function(jqXHR, ajaxOptions, thrownError){

          });

      });

      $(document).on('click', '.pagination a',function(event){
          event.preventDefault();

          $('li').removeClass('active');
          $(this).parent('li').addClass('active');

          var myurl = $(this).attr('href');
          pageno=$(this).attr('href').split('page=')[1];
          getRatingsData();
      });

      $(".rating").click(function(e){
          e.preventDefault();
          $(".rating").removeClass('checked');
          $(this).addClass('checked');
          $('.rating-img').css('border', 'none');
          $(this).next('.rating-img').css('border-bottom', '2px solid red');
      });

      $(document).on("click",".content-action",function(e) {
          e.preventDefault();
          var action = $(this).attr('data-action');
          var content_id = $(this).attr('data-content-id');

          saveContentAction(this, action, content_id);
      });

      $(document).on("click","#saveRating",function() {

          var rating      =  $("#emoji-div").emoji("getvalue");
          var ratingText  =  $('#rating-text').val();
          var content_id  =  $(this).data('id');

          if(rating.length == 0)
          {
              swal('Error!', 'Please give a rating', 'error');
              return false;
          }

          $.ajax(
          {
              url: '{{route("user.content.save-rating")}}',
              type: "post",
              datatype: "json",
              data:{content_id : content_id, rating : rating, ratingText : ratingText},
          }).done(function(data){

              if(data.status)
              {
                  swal('Succes!!', data.message, 'success');

                  $('.ratingsCount').html(data.ratingsCount);

                  $('#rating-text').val('');
                  pageno=1;
                  getRatingsData();

                  return false;
              }
              else
              {
                  swal('Error!!', data.message, 'error');
                  return false;
              }
          }).fail(function(jqXHR, ajaxOptions, thrownError){

          });
      });

      $(document).on("click",".ratingVoteAction",function() {

          var type      = $(this).data('type');
          var rating_id = $(this).data('id');

          $.ajax(
          {
              url: '{{route("user.content.save-rating-vote")}}',
              type: "post",
              datatype: "json",
              data:{rating_id : rating_id, type : type},
          }).done(function(data){

              if(data.status)
              {
                  pageno=1;
                  getRatingsData();

                  return false;
              }
              else
              {
                  swal('Error!!', data.message, 'error');
                  return false;
              }
          }).fail(function(jqXHR, ajaxOptions, thrownError){

          });
      });

      $(".togglelink").click(function(e){
          e.preventDefault();
          $($(this).attr('href')).slideToggle();
          if ($(this).text() == "hide")
              $(this).text("show")
          else
              $(this).text("hide");
      });

      $("#content-sr li a[href^='#']").on('click', function(e) {
          e.preventDefault();
          var hash = this.hash;
          // animate
          return $('html, body').animate({
              scrollTop: $(hash).offset().top-20
            }, 1000, function(){
              // /window.location.hash = hash;
              return window.history.pushState(null, null, hash)
            });
      });
  });

  function getRatingsData()
  {
    var ratingWrap = $("#ratings_data");

    var content_id = ratingWrap.data('content-id');

      $.ajax(
      {
          url: '{{ route("user.content.get-ratings") }}',
          type: "get",
          datatype: "html",
          data:{page:pageno,content_id:content_id},
      }).done(function(data){
          $("#ratings_data").html(data);

          $("#emoji-div").emoji({width: '20px'});

          $('#rating-text').focus();

          //location.hash = page;
      }).fail(function(jqXHR, ajaxOptions, thrownError){
          //alert('No response from server');

      });
  }

  function saveContentAction(element, action, content_id){

      var text = '';

      switch(action) {
      case '1':
          text = "Would you like to marked as a 'Like' this content?";
          break;
      case '2':
          text = "Would you like to marked as a 'Unlike' this content?";
          break;
      case '3':
          text = "Would you like to marked as a 'InAppropriate' this content?";
          break;
      case '4':
          text = "Would you like to Keep this content?";
          break;
      case '5':
          text = "Would you like to Remove this content?";
          break;

      }

      if(text.length > 0)
      {
          swal({
              title: "Are you sure?",
              text: text,
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              confirmButtonText: 'Yes',
              cancelButtonText: "No, Cancel it!"
          }).then((result) => {
              if (result.value) {
                  $.ajax(
                  {
                      url: '{{route("user.content.save-action")}}',
                      type: "post",
                      datatype: "json",
                      data:{content_id : content_id, action : action},
                  }).done(function(data){

                      if(data.status)
                      {
                          swal('Succes!!', data.message, 'success');

                          $(element).removeClass('content-action');
                          $(element).addClass('action-disabled');
                          $(element).find('.actionCount').html(data.actionCount);

                          return false;
                      }
                      else
                      {
                          swal('Error!!', data.message, 'error');
                          return false;
                      }
                  }).fail(function(jqXHR, ajaxOptions, thrownError){

                  });
              }
          });
      }
  }
  </script>
<!--End main Part-->
@endsection


