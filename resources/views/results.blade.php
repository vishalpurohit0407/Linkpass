@extends('layouts.app')

@section('content')

<main class="main">
  <article class="container" style="min-height: 375px;">

    @if($isUserListing == 1)
        @foreach($items as $user)
            @php
                $userProfileClass = '';
                if($user->user_type == '0')
                {
                    $userProfileClass = 'user-profile-bg';
                }
                if($user->user_type == '1')
                {
                    $userProfileClass = 'creator-profile-bg';
                }
                if($user->user_type == '2')
                {
                    $userProfileClass = 'hybrid-profile-bg';
                }
            @endphp
                <div class="col-md-6 AddVideo pb10">
                    <div class="row ">
                        <aside class="col-md-3">
                            <div class="user-profile-avatar-90 user-profile-avatar-top  ml-10">
                                <a href="{{route('other-user.account', $user->hashid)}}">
                                <img src="{{$user->user_image_url}}" alt="" class="rounded-circle height-90 width-90 {{$userProfileClass}}">
                                </a>
                            </div>

                        </aside>
                        <aside class="col-md-9">
                            <p><a href="{{route('other-user.account', $user->hashid)}}" class="text-secondary">{{$user->account_name}}</a></p>
                            <p><a href="{{route('other-user.account', $user->hashid)}}" class="text-secondary">{{$user->name}}</a></p>
                            <p class="font-14"><a href="javascript:void(0);" class="text-primary"><strong class="text-primary">Here Since: </strong><span>{{date('d M Y', strtotime($user->created_at))}}</span></a></p>
                        </aside>
                    </div>
                </div>
        @endforeach

        @include('content-rows', array('items' =>$user->contents))

    @else
        <div id="search-results">

        </div>

        @if($items->count() > 0)
            <div class="text-center mt-2">
                <button class="btn btn-primary col-md-12" id="load-more" data-paginate="2">Load more...</button>
                <p class="invisible">No listings found</p>
            </div>
        @else
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">No listings found</div>
        @endif
    @endif

  </article>
</main>
<!--End main Part-->
@endsection

@section('pagewise_js')
<script type="text/javascript">
  var loadFile = function(event) {
  var output     = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
  };

  // View Content Details
  var pageno=1;

  jQuery(document).ready(function($) {

        var id = "{{ (request()->has('id') && !empty(request()->get('id'))) ? decodeHashId(request()->get('id')) : ''}}";

        if(id != '')
        {
            setTimeout(function(){
                $('#view-content-details-'+id).trigger('click');
            }, 1000);
        }

        $.contextMenu({
            selector: '.social-share',
            trigger: 'left',
            callback: function(key, options, e) {

                var contentTitle = $(options.$trigger).attr('data-content-title');
                var contentId = $(options.$trigger).attr('data-content-id');
                var url = '{{ url("results?search=")}}'+contentTitle+'&id='+contentId;
                var ShareUrl = '';

                if(key == 'facebook')
                {
                    var ShareUrl = 'https://www.facebook.com/sharer/sharer.php?u='+url+'&quote='+url+'';
                }

                if(key == 'whatsapp')
                {
                    var ShareUrl = 'https://wa.me/?text='+url;
                }

                if(key == 'email')
                {
                    var ShareUrl = 'mailto:?subject= Linkpasser: '+url+' &amp;body='+url;
                }

                if(key == 'copy')
                {
                    const body = document.querySelector('body');
                    const area = document.createElement('textarea');
                    body.appendChild(area);

                    area.value = url;
                    area.select();
                    document.execCommand('copy');

                    body.removeChild(area);
                }

                if(key != 'copy')
                {
                    window.open(ShareUrl, '_blank').focus();
                }
            },
            items: {
                // "facebook": {name: " Facebook", icon: "fab fa-lg fa-facebook"},
                // "whatsapp": {name: " Whatsapp", icon: "fab fa-lg fa-whatsapp"},
                // "email": {name: " Email", icon: "fas fa-lg fa-envelope"},
                "copy": {name: " Copy Link", icon: "far fa-lg fa-copy"},
            }
        });

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
                    //getRatingsData();

                    $('#content-details-modal').modal('show');
                }
                else
                {
                    swal('Error!!', data.message, 'error');
                }
            }).fail(function(jqXHR, ajaxOptions, thrownError){

            });
        });

        $(document).on("click","#close-content-detail-modal",function(e) {
            e.preventDefault();
            $('#content-details-modal').modal('hide');
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
            //getRatingsData();
            $('[data-toggle="tooltip"]').tooltip();

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

        //   if(userId == '')
        //   {
        //       $('#loginModalPrompt').modal('show');
        //   }

          $.ajax(
          {
              url: '{{route("user.content.goto-content-details")}}',
              type: "post",
              datatype: "json",
              data:{content_id:contentId},
          }).done(function(data){

              if(data.status)
              {
                  var visitStr = parseInt(data.count) == 1 ? 'Visit' : 'Visits';
                  $('#view-count-'+contentId).html(data.count+ ' ' +visitStr);

                  window.open(data.url, '_blank').focus();
              }
              else
              {
                swal('Error!!', data.message, 'error');
              }
          }).fail(function(jqXHR, ajaxOptions, thrownError){

          });

      });

      $(document).on('click', '.ratings-pagination.pagination a',function(event){
          event.preventDefault();

          $('li').removeClass('active');
          $(this).parent('li').addClass('active');

          var myurl = $(this).attr('href');
          pageno=$(this).attr('href').split('page=')[1];
          //getRatingsData();
      });


      // $(".rating").click(function(e){
      //     e.preventDefault();
      //     $(".rating").removeClass('checked');
      //     $(this).addClass('checked');
      //     $('.rating-img').css('border', 'none');
      //     $(this).next('.rating-img').css('border-bottom', '2px solid red');
      // });

      $(document).on("click",".content-action",function(e) {
          e.preventDefault();
          var action = $(this).attr('data-action');
          var content_id = $(this).attr('data-content-id');
          var login = $(this).attr('data-login');

          if((action == '1' || action == '2' || action == '3') && login == '0')
          {
             $('#loginModalPrompt').modal('show');
             return false;
          }

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
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
                    toastr.success(data.message);

                  $('.ratingsCount').html(data.ratingsCount);

                  $('#rating-text').val('');
                  pageno=1;
                  //getRatingsData();

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
                  //getRatingsData();

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

      var text = '',
        visitCount = parseInt($('#view-count-'+content_id).html());

      switch(action) {
      case '1':
          text = "Are you sure you want to recommend this listing?";
          break;
      case '2':
        text = "Are you sure you want to not recommend this listing?";
          break;
      case '3':
        text = "<p>Are you sure you want to report this listing?</p>";

        text += '<p class="text-align-left">Reason:</p>';
        text += '<select class="form-control" id="report-reason">';
        text += '  <option value="Abusive">Abusive</option>';
        text += '  <option value="Copyright infringement">Copyright infringement</option>';
        text += '  <option value="Directly selling a product or service">Directly selling a product or service</option>';
        text += '  <option value="Illegal activities">Illegal activities</option>';
        text += '  <option value="Pornography">Pornography</option>';
        text += '  <option value="Spam">Spam</option>';
        text += '</select>';
        break;
      case '4':
        text = "Are you sure you want to Keep this listing?";
        break;
      case '5':
        text = "Are you sure you want to Remove this listing?";
        break;
    }

    if(action == '4')
    {
        $.ajax(
        {
            url: '{{route("user.content.save-action")}}',
            type: "post",
            datatype: "json",
            data:{content_id : content_id, action : action, reason : ''},
        }).done(function(data){

            if(data.status)
            {
                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
                toastr.success(data.message);

                setTimeout(function()
                {
                    location.reload();
                }, 3000);

                return false;
            }
            else
            {
                swal('Error!!', data.message, 'error');
                return false;
            }
        }).fail(function(jqXHR, ajaxOptions, thrownError){

        });

        return false;
    }

    if(['1','2','3'].includes(action) && visitCount == 0)
    {
        swal('', 'Please visit the listed content first.', 'error');
        return false
    }

        if(text.length > 0)
        {
          swal({
              title: "Are you sure?",
              html: text,
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              confirmButtonText: 'Yes',
              cancelButtonText: "Cancel"
          }).then((result) => {
              if (result.value) {

                var reportReason = ($('#report-reason').length && action == '3') ? $('#report-reason').val() : '';

                  $.ajax(
                  {
                      url: '{{route("user.content.save-action")}}',
                      type: "post",
                      datatype: "json",
                      data:{content_id : content_id, action : action, reason : reportReason},
                  }).done(function(data){

                      if(data.status)
                      {
                        toastr.options =
                        {
                            "closeButton" : true,
                            "progressBar" : true
                        }
                        toastr.success(data.message);

                        if(action == '4' || action == '5' || data.reload == '1')
                        {
                            setTimeout(function()
                            {
                                location.reload();
                            }, 3000);
                        }

                          $(element).removeClass('content-action');
                          $(element).addClass('action-disabled');

                          if(action == '1')
                          {
                            $(element).addClass('like-action-disabled');
                            $('.content-unlike-'+content_id).removeClass('content-action');
                            $('.content-unlike-'+content_id).addClass('action-disabled');

                          }
                          else if(action == '2')
                          {
                            $(element).addClass('unlike-action-disabled');
                            $('.content-like-'+content_id).removeClass('content-action');
                            $('.content-like-'+content_id).addClass('action-disabled');
                          }

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

    var paginate = 1;
    loadMoreData(paginate);

    $('#load-more').click(function() {
        var page = $(this).data('paginate');
        loadMoreData(page);
        $(this).data('paginate', page+1);
    });
    // run function when user click load more button
    function loadMoreData(paginate) {

        var sUrl = "{{ url('results')}}";
        var keyword = "{{ request()->get('search')}}";

        $.ajax({
            url: '?page=' + paginate+'&search=' + keyword,
            type: 'get',
            datatype: 'html',
            beforeSend: function() {
                $('#load-more').text('Loading...');
            }
        })
        .done(function(data) {
            if(data.length == 0) {
                $('.invisible').removeClass('invisible');
                $('#load-more').hide();
                return;
            } else {
                $('#load-more').text('Load more...');
                $('#search-results').append(data);
                $('[data-toggle="tooltip"]').tooltip();
            }

            $('[data-toggle="tooltip"]').tooltip();

            $('.owl-three').owlCarousel({
                loop: false,
                margin: 0,
                nav: false,
                dots: true,
                autoplay: false,
                slideSpeed: 6000,
                autoplayTimeout: 5000,
                autoplaySpeed: 6000,
                autoplayHoverPause: true,
                navText: [
                    '<span aria-label="' + 'Previous' + '"><i class="far fa-arrow-left"></i></span>',
                    '<span aria-label="' + 'Next' + '"><i class="far fa-arrow-right"></i></span>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    690: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    960: {
                        items: 1
                    },
                    1025: {
                        items: 1
                    }
                }
            });

            $.contextMenu({
            selector: '.social-share',
            trigger: 'left',
            callback: function(key, options, e) {

                var contentTitle = $(options.$trigger).attr('data-content-title');
                var contentId = $(options.$trigger).attr('data-content-id');
                var url = '{{ url("results?search=")}}'+contentTitle+'&id='+contentId;
                var ShareUrl = '';

                if(key == 'facebook')
                {
                    var ShareUrl = 'https://www.facebook.com/sharer/sharer.php?u='+url+'&quote='+url+'';
                }

                if(key == 'whatsapp')
                {
                    var ShareUrl = 'https://wa.me/?text='+url;
                }

                if(key == 'email')
                {
                    var ShareUrl = 'mailto:?subject= Linkpasser: '+url+' &amp;body='+url;
                }

                if(key == 'copy')
                {
                    const body = document.querySelector('body');
                    const area = document.createElement('textarea');
                    body.appendChild(area);

                    area.value = url;
                    area.select();
                    document.execCommand('copy');

                    body.removeChild(area);
                }

                if(key != 'copy')
                {
                    window.open(ShareUrl, '_blank').focus();
                }
            },
            items: {
                // "facebook": {name: " Facebook", icon: "fab fa-lg fa-facebook"},
                // "whatsapp": {name: " Whatsapp", icon: "fab fa-lg fa-whatsapp"},
                // "email": {name: " Email", icon: "fas fa-lg fa-envelope"},
                "copy": {name: " Copy Link", icon: "far fa-lg fa-copy"},
            }
           });
        })
           .fail(function(jqXHR, ajaxOptions, thrownError) {
              alert('Something went wrong.');
           });
    }
</script>
@endsection