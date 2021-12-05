<ul class="nav nav-pills mb-3 KeptPills" id="pills-tab" role="tablist">
    @php
        $currentRoute = Route::currentRouteName();

        $class = '';
        $disabledClass = '';
        if($user->user_type == '2' || !isset(Auth::user()->id) || (Auth::user()->id && Auth::user()->id != $user->id))
        {
            $class = 'tabs-33-perc';
        }
        else
        {
            $class = 'tabs-50-perc';
        }

        if(!isset(Auth::user()->id) || (Auth::user()->id && Auth::user()->id != $user->id))
        {
            $disabledClass = 'disabled';
        }

    @endphp


    @if($user->user_type == '0' || $user->user_type == '2' || !isset(Auth::user()->id) || (Auth::user()->id && Auth::user()->id != $user->id))
        <li class="nav-item {{$class}}"> <a data-tab-name="matched" class="nav-link active content-tabs {{$disabledClass}}" id="pills-Matches-tab" data-toggle="pill" href="#pills-Matches" role="tab" aria-controls="pills-Matches" aria-selected="false" >Matches</a> </li>
    @endif

    @if($user->user_type == '1' || $user->user_type == '2')
        <li class="nav-item {{$class}}"> <a data-tab-name="creators" class="nav-link content-tabs" id="pills-Cretors-tab" data-toggle="pill" href="#pills-Cretors" role="tab" aria-controls="pills-Cretors" aria-selected="false">Created</a> </li>
    @endif
    {{-- <li class="nav-item"> <a data-tab-name="rated" class="nav-link content-tabs" id="pills-Rated-tab" data-toggle="pill" href="#pills-Rated" role="tab" aria-controls="pills-Rated" aria-selected="false">Rated</a> </li> --}}


    <li class="nav-item {{$class}}"> <a data-tab-name="saved" class="nav-link content-tabs" id="pills-Kept-tab" data-toggle="pill" href="#pills-Kept" role="tab" aria-controls="pills-Kept" aria-selected="true">Saved</a> </li>

</ul>