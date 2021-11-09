@extends('layouts.app', ['title' => __('User Profile')])

@section('content')

<main class="main">
  <article class="container">
    @include('user-account._partials.top-section')
    @include('user-account._partials.tab-links')
    @include('user-account._partials.tab-content')

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

    <!-- Start Modal -->
    <div class="modal fade" id="content-terms" style="top:35px;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Listing Rules</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body" id="">
                <ul>
                    <li> - Do not create listings for content you do not own</li>
                    <li> - Do not list illegal content</li>
                    <li> - Do not list meaningless, short text tweets</li>
                    <li> - Do not list singular images (minimum is 2 images)</li>
                    <li> - Do not list pornography content</li>
                    <li> - Do not list abusive content</li>
                    <li> - Do not list content where there is direct selling of a product or service (no commercial
                        content)</li>
                    <li> - Do not spam or create a misleading listing</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" id="confirm-create-content" class="btn btn-primary">Ok</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
    </div>
    <!-- End Modal -->

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

jQuery(document).ready(function($) {

  // Delete Content
  $(document).on('click','.delete-content',function(event) {
      var contentId = $(this).attr('data-id');

      swal({
          title: "Are you sure?",
          text: "Would you like to delete this content!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: '#DD6B55',
          confirmButtonText: 'Yes, Delete it!',
          cancelButtonText: "No, Cancel it!"
      }).then((result) => {
          if (result.value) {
              deleteContent(contentId);
          }
      });
  });

  // Delete Social Account
    $(document).on('click','.delete-social-account',function(event) {
      var socialAccId = $(this).attr('data-id');

      swal({
          title: "Are you sure?",
          text: "Would you like to delete this account!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: '#DD6B55',
          confirmButtonText: 'Yes, Delete it!',
          cancelButtonText: "No, Cancel it!"
      }).then((result) => {
          if (result.value) {
              deleteSocialAccount(socialAccId);
          }
      });
    });

    // Delete Social Account
    $(document).on('click','.follow-user',function(event) {
        var linkedUserId = $(this).attr('data-user-id');

        $(".content-listing-loader").show();
        $.ajax(
        {
            url: '{{route("user.follow")}}',
            type: "post",
            datatype: "json",
            data:{linked_user_id:linkedUserId},
        }).done(function(data){

            if(data.success)
            {
                $('.follow-user').html('Linked');
                $('.LinkVerbLabel').parents('li').remove();
            }

            $(".content-listing-loader").hide();

        }).fail(function(jqXHR, ajaxOptions, thrownError){
            $(".content-listing-loader").hide();
        });

    });

    // Content Terms
    $(document).on('click','#content-terms-button',function(event)
    {
        $('#content-terms').modal({
            show: true
        });
    });

    $(document).on('click','#confirm-create-content',function(event)
    {
        var addContentUrl = '{{route('user.content.create', ['saId'=> @$socialAccountId])}}';

        window.location = addContentUrl;
    });

});

function deleteContent(id){
    $(".content-listing-loader").show();
    $.ajax(
    {
        url: '{{route("user.content.delete")}}',
        type: "post",
        datatype: "json",
        data:{content_id:id},
    }).done(function(data){

        $(".content-listing-loader").hide();

        if(data.status)
        {
            swal('Success!', data.message, 'success');
            jQuery('#content-box-'+id).remove();
            return false;
        }
    }).fail(function(jqXHR, ajaxOptions, thrownError){
          //alert('No response from server');
          $(".content-listing-loader").hide();
    });
}

function deleteSocialAccount(id){

    $(".content-listing-loader").show();
    $.ajax(
    {
        url: '{{route("user.social-account.delete")}}',
        type: "post",
        datatype: "json",
        data:{social_account_id:id},
    }).done(function(data){

        $(".content-listing-loader").hide();

        if(data.status)
        {
            swal('Success!', data.message, 'success');
            jQuery('#social-account-box-'+id).remove();
            return false;
        }
    }).fail(function(jqXHR, ajaxOptions, thrownError){
          //alert('No response from server');
          $(".content-listing-loader").hide();
    });
}

</script>

<script type="text/javascript">

  // View Content Details
  var pageno=1;

  jQuery(document).ready(function($) {

    var userType = "{{ isset(Auth::user()->id) ? Auth::user()->user_type : '' }}";

    if(userType == '0')
    {
        if($('#pills-Matches-tab').length > 0)
        {
            setTimeout(function(){ $('#pills-Matches-tab').click(); }, 1000);
        }
    }
    else
    {
        if($('#pills-Cretors-tab').length > 0)
        {
            setTimeout(function(){ $('#pills-Cretors-tab').click(); }, 1000);
        }
    }

    $(document).on('click','.sortContentListing',function(event) {
        var filterBy = $(this).attr('data-filter-by');
        var tabName = $(this).data('tab-name');
        $('.sortContentListing').parent().removeClass('active');
        $('.sortContentListing').removeClass('active');
        $(this).addClass('active');
        $(this).parent().addClass('active');
        getTabsContentData(tabName, filterBy);
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
               // getRatingsData();

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

      $(document).on('click', '.ratings-pagination.pagination a',function(event){
          event.preventDefault();

          $('li').removeClass('active');
          $(this).parent('li').addClass('active');

          var myurl = $(this).attr('href');
          pageno=$(this).attr('href').split('page=')[1];
          //getRatingsData();
      });

      $(document).on('click', '.content-tabs',function(event){
        var tabName = $(this).data('tab-name');
        getTabsContentData(tabName);
      });

      $(document).on('click', '.content-pagination.pagination a',function(event){
          event.preventDefault();

          $('.content-pagination > li').removeClass('active');
          $(this).parent('li').addClass('active');

          var myurl = $(this).attr('href');
          pageno=$(this).attr('href').split('page=')[1];

          var tabName = $('.content-tabs.active').data('tab-name');

          getTabsContentData(tabName);
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
                  swal('Success!', data.message, 'success');

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

        $(document).on("click", ".loadUnpublishedContents",function() {

            $.ajax(
            {
                url: '{{route("user.content.load-unpublished-contents")}}',
                type: "post",
                datatype: "json",
                data:{},
            }).done(function(data){

                if(data.status)
                {
                    var tabName = $('.content-tabs.active').data('tab-name');

                    getTabsContentData(tabName);
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

      $(document).on("click","#close-content-detail-modal",function(e) {
        e.preventDefault();
        $('#content-details-modal').modal('hide');
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

  function getTabsContentData(tab, filterBy)
  {
        $.ajax(
        {
            url: '{{ route("user.content.get-tabs-contents") }}',
            type: 'get',
            datatype: 'json',
            data:{page:pageno,tab:tab, filterBy:filterBy, user_id : '{{ isset($user->id) ? $user->id : ''}}'},
        }).done(function(data){

            if(tab == 'matched')
            {
                $('.matchesContent').html(data);

                $('.savedContent').html(data);
                $('.content-visited').addClass('active');

            }

            if(tab == 'saved')
            {
                $('.savedContent').html(data);

                $(".Remove").find('a').attr('data-original-title', 'Delete');

                $('.content-visited').addClass('active');
            }

            if(tab == 'rated')
            {
                $('.ratedContent').html(data);
            }
            //$("#ratings_data").html(data);

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
                var url = '{{ url("results?search=")}}'+contentTitle;
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

            //location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
            //alert('No response from server');

        });
  }

  function saveContentAction(element, action, content_id){

      var text       = '',
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

    if(action == '4' || action == '5')
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
                swal('Success!', data.message, 'success');
                var tabName = $('.content-tabs.active').data('tab-name');

                getTabsContentData(tabName);
            }
        });

        return false;
    }

    if(['1','2','3'].includes(action) && visitCount == 0)
    {
        swal('Oops!', 'Please visit the content before take this action', 'error');
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
              cancelButtonText: "No"
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
                          swal('Success!', data.message, 'success');

                          $(element).removeClass('content-action');
                          $(element).addClass('action-disabled');
                          $(element).find('.actionCount').html(data.actionCount);

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
                          else if(action == '5')
                          {
                             $('#pills-Kept-tab').trigger('click');
                          }

                          if(action == '3' && data.reload == '1')
                          {
                            var tabName = $('.content-tabs.active').data('tab-name');

                            getTabsContentData(tabName);
                          }

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