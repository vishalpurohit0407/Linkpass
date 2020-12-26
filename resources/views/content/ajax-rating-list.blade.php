@if($contentRatings && count($contentRatings)>0)
    <div class="row">
        @include('content.content_rating_data')
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            {!! $contentRatings->links() !!}
        </ul>
    </nav>
@else
<div class="row">
    <div class="card col-md-12 text-center">
        <!-- Card body -->
        <div class="card-body">
            <span class="card-title mb-0 text-center">No matching records found</span>
        </div>
    </div>
</div>
@endif