<ul class="nav nav-pills mb-3 KeptPills" id="pills-tab" role="tablist">
    @if(Auth::user()->user_type == '0' || Auth::user()->user_type == '2')
        <li class="nav-item"> <a class="nav-link active" id="pills-Kept-tab" data-toggle="pill" href="#pills-Kept" role="tab" aria-controls="pills-Kept" aria-selected="true">Saved</a> </li>
    @endif
    @if(Auth::user()->user_type == '0' || Auth::user()->user_type == '2')
        <li class="nav-item"> <a class="nav-link" id="pills-Matches-tab" data-toggle="pill" href="#pills-Matches" role="tab" aria-controls="pills-Matches" aria-selected="false">Matches</a> </li>
    @endif

    <li class="nav-item"> <a class="nav-link" id="pills-Rated-tab" data-toggle="pill" href="#pills-Rated" role="tab" aria-controls="pills-Rated" aria-selected="false">Rated</a> </li>
    @if(Auth::user()->user_type == '1')
    <li class="nav-item"> <a class="nav-link active" id="pills-Cretors-tab" data-toggle="pill" href="#pills-Cretors" role="tab" aria-controls="pills-Cretors" aria-selected="false">Creators</a> </li>
    @endif
</ul>