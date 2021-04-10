@extends('layouts.app', ['title' => __('User Profile')])

@section('content')

<main class="main">
  <article class="container">
    @include('user-account._partials.top-section')
    @include('user-account._partials.tab-links')
    @include('user-account._partials.tab-content')

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

  // View Content Details
  $(document).on('click','.view-content-details',function(event) {
      var contentId = $(this).attr('data-id');

      $.ajax(
      {
          url: '{{route("user.content.get-details")}}',
          type: "post",
          datatype: "json",
          data:{content_id:contentId},
      }).done(function(data){

          if(data.status)
          {
            $('#content-details-wrap').html(data.html);

            $('#content-details-modal').modal('show');
          }
          else
          {
            swal('Error!!', data.message, 'error');
          }
      }).fail(function(jqXHR, ajaxOptions, thrownError){

      });

  });

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
            swal('Succes!!', data.message, 'success');
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
            swal('Succes!!', data.message, 'success');
            jQuery('#social-account-box-'+id).remove();
            return false;
        }
    }).fail(function(jqXHR, ajaxOptions, thrownError){
          //alert('No response from server');
          $(".content-listing-loader").hide();
    });
}

</script>
@endsection