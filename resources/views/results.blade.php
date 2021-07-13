@extends('layouts.app')

@section('content')

<main class="main">
  <article class="container">

    @include('content-rows')

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

      $(document).on('click', '.ratings-pagination.pagination a',function(event){
          event.preventDefault();

          $('li').removeClass('active');
          $(this).parent('li').addClass('active');

          var myurl = $(this).attr('href');
          pageno=$(this).attr('href').split('page=')[1];
          getRatingsData();
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

                            if(action == '4' || action == '5')
                            {
                                setTimeout(function()
                                {
                                    location.reload();
                                }, 3000);
                            }

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