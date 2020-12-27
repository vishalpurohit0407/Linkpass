@if($contentRatings->count() > 0)
    @foreach ($contentRatings as $item)
            <div class="col-md-12 mt10">
                <div class="d-flex align-items-center">
                    <div class="avtar">
                        <img src="{{$item->user->user_image_url}}" class="rounded-circle" width="50"></div>
                        <div class="ml10">
                            <strong>{{$item->user->name}}</strong> <span>{{$item->created_at->diffForHumans()}}</span>
                            <p>
                                <label>
                                    @php
                                        $image1 = $item->rating >= 1 ? asset('assets/img/sad-red.png') : asset('assets/img/sad.png');
                                    @endphp
                                    <img class="" src="{{$image1}}" width="20">
                                </label>

                                <label>
                                    @php
                                        $image2 = $item->rating >= 2 ? asset('assets/img/neutral-red.png') : asset('assets/img/neutral.png');
                                    @endphp
                                    <img class="" src="{{$image2}}" width="20">
                                </label>

                                <label>
                                    @php
                                        $image3 = $item->rating >= 3 ? asset('assets/img/neutral-red.png') : asset('assets/img/neutral.png');
                                    @endphp
                                    <img class="" src="{{$image3}}" width="20">
                                </label>

                                <label>
                                    @php
                                        $image4 = $item->rating >= 4 ? asset('assets/img/happy-red.png') : asset('assets/img/happy.png');
                                    @endphp
                                    <img class="" src="{{$image4}}" width="20">
                                </label>

                                <label>
                                    @php
                                        $image5 = $item->rating >= 5 ? asset('assets/img/happy-red.png') : asset('assets/img/happy.png');
                                    @endphp
                                    <img class="" src="{{$image5}}" width="20">
                                </label>

                                <span class="font-14 ml20">{{ $item->title }}</span>
                            </p>
                    </div>
                </div>
            </div>
    @endforeach
@else
<div class="col-lg-12">
    <div class="card col-md-12 text-center">
        <!-- Card body -->
        <div class="card-body">
            <span class="card-title mb-0 text-center">No matching records found</span>
        </div>
    </div>
</div>
@endif
