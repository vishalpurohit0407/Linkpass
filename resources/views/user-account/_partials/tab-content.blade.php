<div class="tab-content" id="pills-tabContent">
    <!--Start Kept-->
    <div class="tab-pane fade {{($user->user_type == '0' || $user->user_type == '2') ? 'show active' : ''}}" id="pills-Kept" role="tabpanel" aria-labelledby="pills-Kept-tab">
      <div class="d-flex justify-content-center TabFilter disabled">
        <ul>
          <li><a class="AllTab bg-secondary" id="showall">All</a></li>
        </ul>
        <ul>
          <li class="active"><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-align-left"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-plus"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-success"><i class="far fa-check"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-danger"><i class="far fa-times"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-success"><i class="far fa-arrow-up"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-danger"><i class="far fa-arrow-down"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-eye"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-eye-slash"></i></a></li>
        </ul>

      </div>
      <div class="CompanyList savedContent">
        <div class="row">
          @if(false)
            @for($i=0; $i<=5;$i++)
              <aside class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="AddVideo">
                  <div class="YoutubeLable"><span>YouTube</span></div>
                  <a href="javascript:void(0);" class="CategoryTitle">Sports: Golf</a>
                  <h4>Video Title</h4>
                  <div class="VideoUser"><img src="{{asset('assets/img/unnamed.jpg')}}" alt=""></div>
                  <div class="owl-carousel owl-theme owl-one">
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                  </div>
                  <ul class="d-flex justify-content-between">
                    <li><a href="javascript:void(0);"><i class="fal fa-check"></i> <span>647</span></a></li>
                    <li><a href="javascript:void(0);"><i class="fal fa-times"></i> <span>99</span></a></li>
                    <li><a href="javascript:void(0);"><i class="far fa-share-alt"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fas fa-exclamation-triangle"></i></a></li>
                  </ul>
                  <p class="date"><span class="text-danger text-uppercase">Rated</span> <span>1,280,707 views</span></p>
                  <div class="d-flex justify-content-between align-items-center"><span>16 Jan 2021</span> <span class="d-flex align-items-center">
                    <div class="width32 mr-2"><img src="{{asset('assets/img/unnamed.jpg')}}" alt="" class="rounded-circle border border-danger"></div>
                    <strong><a href="javascript:void(0);">Creator Account</a></strong></span></div>
                  <hr class="my-3">
                  <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                  <!-- Button trigger modal -->
                  <div class="VideoPopup">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-expand"></i></button>
                  </div>
                </div>
              </aside>
            @endfor
          @else
              <div class="col-lg-12 col-md-12 col-sm-12 mt-10 text-center">Content could not found</div>
          @endif
        </div>
      </div>
    </div>
    <!--Start Matches-->
    <div class="tab-pane fade" id="pills-Matches" role="tabpanel" aria-labelledby="pills-Matches-tab">
      <div class="d-flex justify-content-center TabFilter">
        <ul>
          <li><a class="AllTab bg-secondary" id="showall">All</a></li>
        </ul>
        <ul>
          <li class="active"><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-align-left"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-plus"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-success"><i class="far fa-check"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-danger"><i class="far fa-times"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-success"><i class="far fa-arrow-up"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-danger"><i class="far fa-arrow-down"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-eye"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-eye-slash"></i></a></li>
        </ul>

      </div>
      <div class="CompanyList matchesContent">
        <div class="row">
          @if(false)
            @for($i=0; $i<=5;$i++)
              <aside class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="AddVideo">
                  <div class="YoutubeLable"><span>YouTube</span></div>
                  <a href="javascript:void(0);" class="CategoryTitle">Sports: Golf</a>
                  <h4>Video Title</h4>
                  <div class="VideoUser"><img src="{{asset('assets/img/unnamed.jpg')}}" alt=""></div>
                  <div class="owl-carousel owl-theme owl-one">
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                  </div>
                  <ul class="d-flex justify-content-between">
                    <li><a href="javascript:void(0);"><i class="fal fa-check"></i> <span>647</span></a></li>
                    <li><a href="javascript:void(0);"><i class="fal fa-times"></i> <span>99</span></a></li>
                    <li><a href="javascript:void(0);"><i class="far fa-share-alt"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fas fa-exclamation-triangle"></i></a></li>
                  </ul>
                  <p class="date"><span class="text-danger text-uppercase">Rated</span> <span>1,280,707 views</span></p>
                  <div class="d-flex justify-content-between align-items-center"><span>16 Jan 2021</span> <span class="d-flex align-items-center">
                    <div class="width32 mr-2"><img src="{{asset('assets/img/unnamed.jpg')}}" alt="" class="rounded-circle border border-danger"></div>
                    <strong><a href="javascript:void(0);">Creator Account</a></strong></span></div>
                  <hr class="my-3">
                  <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                  <!-- Button trigger modal -->
                  <div class="VideoPopup">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-expand"></i></button>
                  </div>
                </div>
              </aside>
            @endfor
          @else
              <div class="col-lg-12 col-md-12 col-sm-12 mt-10 text-center">Content could not found</div>
          @endif
        </div>
      </div>
    </div>
    <!--Start Rated-->
    <div class="tab-pane fade" id="pills-Rated" role="tabpanel" aria-labelledby="pills-Rated-tab">
      <div class="d-flex justify-content-center TabFilter disabled">
        <ul>
          <li><a class="AllTab bg-secondary" id="showall">All</a></li>
        </ul>
        <ul>
          <li class="active"><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-align-left"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-plus"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-success"><i class="far fa-check"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-danger"><i class="far fa-times"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-success"><i class="far fa-arrow-up"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-danger"><i class="far fa-arrow-down"></i></a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-eye"></i></a></li>
          <li><a href="javascript:void(0);" class="bg-secondary"><i class="fas fa-eye-slash"></i></a></li>
        </ul>

      </div>
      <div class="CompanyList ratedContent">
        <div class="row">
          @if(false)
            @for($i=0; $i<=5;$i++)
              <aside class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="AddVideo">
                  <div class="YoutubeLable"><span>YouTube</span></div>
                  <a href="javascript:void(0);" class="CategoryTitle">Sports: Golf</a>
                  <h4>Video Title</h4>
                  <div class="VideoUser"><img src="{{asset('assets/img/unnamed.jpg')}}" alt=""></div>
                  <div class="owl-carousel owl-theme owl-one">
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                    <div class="item">
                      <div class="imgvid">
                        <img src="{{asset('assets/img/no_img.png')}}">
                      </div>
                    </div>
                  </div>
                  <ul class="d-flex justify-content-between">
                    <li><a href="javascript:void(0);"><i class="fal fa-check"></i> <span>647</span></a></li>
                    <li><a href="javascript:void(0);"><i class="fal fa-times"></i> <span>99</span></a></li>
                    <li><a href="javascript:void(0);"><i class="far fa-share-alt"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fas fa-exclamation-triangle"></i></a></li>
                  </ul>
                  <p class="date"><span class="text-danger text-uppercase">Rated</span> <span>1,280,707 views</span></p>
                  <div class="d-flex justify-content-between align-items-center"><span>16 Jan 2021</span> <span class="d-flex align-items-center">
                    <div class="width32 mr-2"><img src="{{asset('assets/img/unnamed.jpg')}}" alt="" class="rounded-circle border border-danger"></div>
                    <strong><a href="javascript:void(0);">Creator Account</a></strong></span></div>
                  <hr class="my-3">
                  <p>Lorem ipsum dolor sit amet righteous, consectetur adipiscing elit, sed is a do eiusmod is tempor incididunt ut labore et dolore magna dolor aliqua ullamco tempor laboris.</p>
                  <!-- Button trigger modal -->
                  <div class="VideoPopup">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-expand"></i></button>
                  </div>
                </div>
              </aside>
            @endfor
          @else
            <div class="col-lg-12 col-md-12 col-sm-12 mt-10 text-center">Content could not found</div>
          @endif
        </div>
      </div>
    </div>
    <!--Start Creators-->
    <div class="tab-pane fade {{($user->user_type == '1') ? 'show active' : ''}}" id="pills-Cretors" role="tabpanel" aria-labelledby="pills-Cretors-tab">
      <div class="d-flex justify-content-center TabFilter">
        <ul>
          <li class="disabled-li"><a class="filter-btn-disabled" id="showall">All</a>

          </li>
        </ul>
        <ul>
          <li class="disabled-li"><a href="javascript:void(0);" class="filter-btn-disabled"><i class="fas fa-align-left"></i></a></li>
          @if($editable)
            @if($type == 'socialAccount')
              <li class="disabled-li"><a href="{{route('user.social-account.create')}}" class="bg-secondary"><i class="fas fa-plus"></i></a></li>
            @else
              <li class="disabled-li"><a href="{{route('user.content.create', ['saId'=> @$socialAccountId])}}" class="bg-secondary"><i class="fas fa-plus"></i></a></li>
            @endif
          @else
            <li class="disabled-li"><a href="javascript:void(0);" class="filter-btn-disabled"><i class="far fa-plus"></i></a></li>
          @endif
        </ul>
        <ul>
          <li class="disabled-li"><a href="javascript:void(0);" class="filter-btn-disabled"><i class="far fa-check"></i></a></li>
          <li class="disabled-li"><a href="javascript:void(0);" class="filter-btn-disabled"><i class="far fa-times"></i></a></li>
        </ul>
        <ul>
          <li class="disabled-li"><a href="javascript:void(0);" class="filter-btn-disabled"><i class="far fa-arrow-up"></i></a></li>
          <li class="disabled-li"><a href="javascript:void(0);" class="filter-btn-disabled"><i class="far fa-arrow-down"></i></a></li>
        </ul>
        <ul>
          <li class="disabled-li"><a href="javascript:void(0);" class="filter-btn-disabled"><i class="fas fa-eye"></i></a></li>
          <li class="disabled-li"><a href="javascript:void(0);" class="filter-btn-disabled"><i class="fas fa-eye-slash"></i></a></li>
        </ul>

      </div>
      <div class="CompanyList creatorsContent">
        <div class="content-listing-loader" style="display: none;">
          <i class="fa fa-spinner fa-pulse"></i>
        </div>

          {{-- Social Accounts --}}
          @if($type == 'socialAccount')
            <div class="row">
              @if(count($socialAccounts) > 0)
                @foreach ($socialAccounts as $socialAccount)
                  <aside class="col-lg-3 col-md-4 col-sm-6" id="social-account-box-{{$socialAccount->id}}">
                    <div class="AddListing">
                      <h4>{{$socialAccount->name}}</h4>
                      <p class="ListingList">{{$socialAccount->contents()->count()}} Listing</p>
                      <div class="social-account-avatar">
                        <a href="{{route('user.account.contents', [$socialAccount->hashid, $user->hashid])}}" class="ListingLogo">
                          <img class="rounded-circle height-75 width-75 creator-profile-bg" src="{{$socialAccount->image_url}}" alt="">
                        </a>
                      </div>
                      @if($editable)
                      <div class="VideoPopup text-center">
                        <a href="{{route('user.social-account.edit', $socialAccount->hashid)}}" class="btn btn-primary pull-right"><i class="far fa-edit"></i></a>
                        <a href="javascript:void(0);" data-id="{{ $socialAccount->id }}" class="btn btn-primary mr-3 pull-right delete-social-account"><i class="far fa-trash"></i></a>
                      </div>
                      @endif

                    </div>
                  </aside>
                @endforeach
              @else
                <div class="col-lg-12 col-md-12 col-sm-12 mt-10 text-center">Social Account could not found</div>
              @endif
            </div>
          @endif

          {{-- Contents --}}
          @if($type == 'content')
            <div class="row">
              <div class="col-md-6 mt-3">
                <h5>{{ isset($socialAccount->name) ? $socialAccount->name : '' }}</h5>
              </div>
              <div class="col-md-6 mt-3">
                @if($editable)
                  <a href="{{route('user.account')}}" class="btn btn-primary btn-sm rounded-30 text-uppercase pull-right ">Back</a>
                @else
                  <a href="{{route('other-user.account', $user->hashid)}}" class="btn btn-primary btn-sm rounded-30 text-uppercase pull-right ">Back</a>
                @endif
              </div>
            </div>

            @include('content-rows')

          @endif
      </div>
    </div>
  </div>