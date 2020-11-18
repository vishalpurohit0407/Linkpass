<!-- Admin Dashboard Page -->
@extends('layouts.adminapp')
@section('content')
@php
    $stepcount=count($content_step);
    if($stepcount==0){
        $stepcount=1;
    }
    $step_count=old('step_count',$stepcount);
@endphp
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Add Content</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{!! url('admin') !!}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{!! url('admin/content') !!}">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Content</li>
            </ol>
          </nav>
        </div>

      </div>
      <!-- Card stats -->

    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Add Content</h3>
        </div>

        <!-- Card body -->
        <div class="card-body">
          <form action="{{ route('admin.content.update',$content->hashid) }}" method="post" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT') }}
              <div class="row">
                <div class="col-md-5 main-img">
                  <div class="form-group">
                    <label class="form-control-label" for="content_main_image">Main Image</label>

                    <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="{{route('admin.content.mainupload',['id' => $content->id])}}">
                      <div class="fallback">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="content_main_image">
                          <label class="custom-file-label" for="content_main_image">Choose file</label>
                        </div>
                      </div>
                      <div class="dz-message" data-dz-message><span>Drop file here or click to upload.</span></div>
                      <div class="dz-preview dz-preview-single" style="height: 300px;">
                        <div class="dz-preview-cover">
                          <img class="dz-preview-img" src="" data-dz-thumbnail>
                        </div>
                      </div>
                    </div>
                    <p class="text-info mb-0"><strong>Recommended Size: 800 X 600 px</strong></p>
                  </div>

                  <div class="form-group">
                    <label class="form-control-label" for="category_id">Category <strong class="text-danger">*</strong></label><br>
                    <select class="js-example-basic-single form-control @if($errors->has('category_id')) is-invalid @endif" id="category_id" name="category_id">
                      <option value="">Please Select Category</option>
                        @if(count($categories) > 0)
                          @foreach($categories as $category)
                            <option value="{{$category['id']}}" @if($category['id'] == $content['category_id'])) selected @endif>{!! $category['name'] !!}</option>
                          @endforeach
                        @endif
                    </select>
                    @if($errors->has('category_id'))
                        <span class="invalid-feedback">{{ $errors->first('category_id') }}</span>
                    @endif
                  </div>

                  <div class="form-group">
                      <label class="form-control-label" for="type">Website</label>
                      <input type="url" class="form-control @if($errors->has('website')) is-invalid @endif" id="website" name="website" placeholder="Website" value="{{old('website', $content->website)}}">
                      @if($errors->has('website'))
                          <span class="invalid-feedback">{{ $errors->first('website') }}</span>
                      @endif
                  </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group ">
                        <label class="form-control-label" for="example3cols2Input">Main Title <strong class="text-danger">*</strong></label>
                        <input type="text" name="main_title" class="form-control @if($errors->has('main_title')) is-invalid @endif" id="main_title" value="{{old('main_title', $content->main_title)}}">
                        @if($errors->has('main_title'))
                            <span class="invalid-feedback">{{ $errors->first('main_title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-control-label @if($errors->has('description')) has-danger @endif" for="description">Description <strong class="text-danger">*</strong></label>
                        <textarea class="form-control @if($errors->has('description')) is-invalid @endif" id="description" name="description" rows="5">{{old('description', $content->description)}}</textarea>
                        @if($errors->has('description'))
                            <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="user_id">Author <strong class="text-danger">*</strong></label><br>
                        <select class="js-example-basic-single form-control @if($errors->has('user_id')) is-invalid @endif" id="user_id" name="user_id">
                          <option value="">Please Select Author</option>
                          @if(count($users) > 0)
                            @foreach($users as $user)
                              <option value="{{$user['id']}}" @if($user['id'] == $content['user_id'])) selected @endif>{!! $user['name'] !!}</option>
                            @endforeach
                          @endif
                        </select>
                        @if($errors->has('user_id'))
                          <span class="invalid-feedback">{{ $errors->first('user_id') }}</span>
                        @endif
                    </div>



                    <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label class="form-control-label" for="type">Posted At <strong class="text-danger">*</strong></label>
                              <input type="date" class="form-control @if($errors->has('posted_at')) is-invalid @endif" id="posted_at" name="posted_at" placeholder="Posted At" value="{{old('posted_at', !empty($content->posted_at) ? date('Y-m-d', strtotime($content->posted_at)) : '')}}">
                              @if($errors->has('posted_at'))
                                  <span class="invalid-feedback">{{ $errors->first('posted_at') }}</span>
                              @endif
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label class="form-control-label" for="type">Published At <strong class="text-danger">*</strong></label>
                              <input type="date" class="form-control @if($errors->has('published_at')) is-invalid @endif" id="published_at" name="published_at" placeholder="Published At" value="{{old('published_at', !empty($content->published_at) ? date('Y-m-d', strtotime($content->published_at)) : '')}}">
                              @if($errors->has('published_at'))
                                  <span class="invalid-feedback">{{ $errors->first('published_at') }}</span>
                              @endif
                          </div>
                      </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                      <label class="form-control-label" for="tags">Tags</label><br>
                      <input type="text" class="form-control" id="tags" name="tags" value="{{old('tags', $content->tags)}}" data-toggle="tags" />
                  </div>
                </div>
              </div>

              <hr class="hr-dotted mb-3 mt-0">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="form-control-label" for="example4cols3Input">Summary</label>
                    <textarea name="introduction" id="introduction" class="form-control" rows="10">{{old('introduction', $content->introduction)}}</textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="form-control-label" for="vid_link_type">Video Link</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <select class="custom-select" id="vid_link_type" name="vid_link_type" style="border-radius: 0;font-size:1rem;">
                              <option value="youtube" @if(old('vid_link_type', $content->introduction_video_type) == 'youtube') selected @endif>Youtube</option>
                              <option value="vimeo" @if(old('vid_link_type', $content->introduction_video_type) == 'vimeo') selected @endif>Vimeo</option>
                            </select>
                          </div>
                          <input type="url" class="form-control" id="vid_link_url" name="vid_link_url" placeholder="Enter here the URL of a Youtube or Vimeo video" value="{{old('vid_link_url', $content->introduction_video_link)}}">
                        </div>
                        <p class="text-info mb-0"><strong>Note: Please add embed URL for Youtube and Vimeo video.</strong></p>
                    </div>
                </div>
              </div>

              <hr class="hr-dotted mb-3 mt-0">
              <div class="content_repeater">
                <div data-repeater-list="content_step">
                    <script type="text/javascript">let stepMediaArr = new Array();</script>

                    @if(old('step_count') == '' && $content_step->count() > 0)
                        @foreach ($content_step as $key => $contentstep)

                            <div class="content_step_list" data-repeater-item>
                                <div class="row mb-3">
                                  <div class="col-sm-12">
                                    <h1 class="step">Media <span class="step_number">{{$key + 1}}</span></h1>
                                    <a href="javascript:;" data-repeater-delete="" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></a>
                                    <input type="hidden" class="step_key" name="step_key" value="{{ $contentstep->step_key }}">
                                    <input type="hidden" id="media_wrap_{{$key}}">
                                    <div class="dropzone dropzone-init"></div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group mb-0">
                                        <label class="form-control-label" for="step_title">Title</label>
                                        <input type="text" class="form-control" name="step_title" placeholder="Title" value="{{ $contentstep->title }}">
                                      </div>
                                      <div class="form-group">
                                          <label class="form-control-label" for="step_video">Video</label>
                                          <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <select class="custom-select" id="step_video_type" name="step_video_type" style="border-radius: 0;font-size:1rem;">
                                                <option value="youtube" @if(old('step_video_type', $contentstep->video_type) == 'youtube') selected @endif>Youtube</option>
                                                <option value="vimeo" @if(old('step_video_type', $contentstep->video_type) == 'vimeo') selected @endif>Vimeo</option>
                                              </select>
                                            </div>
                                            <input type="text" class="form-control" id="step_video_media" name="step_video_media" placeholder="Enter here the URL of a Youtube or vimeo video" value="{{old('step_video_media', $contentstep->video_media)}}">
                                          </div>
                                          <p class="text-info mb-0"><strong>Note: Please add embed URL for Youtube and Vimeo video.</strong></p>
                                      </div>
                                  </div>
                                </div>
                                <hr>
                            </div>
                            @if($contentstep->media)
                                <script type="text/javascript">var subMediaArr = new Array();</script>
                                @foreach ($contentstep->media as $key => $substep)
                                    <script type="text/javascript">
                                        subMediaArr.push({ name: '{{$substep->media}}', size: '', url: '{{$substep->media_url}}', id: '{{$substep->id}}'});
                                    </script>
                                @endforeach
                                <script type="text/javascript">
                                    stepMediaArr['{{$contentstep->step_key}}'] = subMediaArr;
                                </script>
                            @endif

                        @endforeach
                    @else

                      <div class="content_step_list" data-repeater-item>

                        <div class="row mb-3">
                          <div class="col-sm-12">
                            <h1 class="step">Media <span class="step_number">1</span></h1>
                            <a href="javascript:;" data-repeater-delete="" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></a>
                            <input type="hidden" class="step_key" name="step_key" value="{{ old('content_step.0.step_key') }}">
                            <input type="hidden" id="media_wrap_1">
                            <div class="dropzone dropzone-init"></div>

                            @if($errors->has('content_step.0.stepfilupload'))
                                <div class="invalid-feedback" >{{ $errors->first('content_step.0.stepfilupload') }}</div>
                            @elseif($errors->has('content_step.0.stepfilupload.*'))
                                <div class="invalid-feedback" >{{ $errors->first('content_step.0.stepfilupload.*') }}</div>
                            @endif
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6">
                                <div class="form-group @if($errors->has('content_step.0.step_title')) has-danger @endif">
                                  <label class="form-control-label" for="step_title">Title</label>
                                  <input type="text" class="form-control @if($errors->has('content_step.0.step_title')) is-invalid @endif" name="step_title" placeholder="Title" value="{{ old('content_step.0.step_title') }}">
                                    @if($errors->has('content_step.0.step_title'))
                                        <span class="invalid-feedback">{{ $errors->first('content_step.0.step_title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-0">
                                  <label class="form-control-label" for="step_video">Video</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <select class="custom-select" id="step_video_type" name="step_video_type" style="border-radius: 0;font-size:1rem;">
                                            <option value="youtube" @if(old('content_step.0.step_video_type') == 'youtube') selected @endif>Youtube</option>
                                            <option value="vimeo" @if(old('content_step.0.step_video_type') == 'vimeo') selected @endif>Vimeo</option>
                                          </select>
                                        </div>
                                        <input type="text" class="form-control" id="step_video_media" name="step_video_media" placeholder="Enter here the URL of a Youtube or vimeo video" value="{{old('content_step.0.step_video_media')}}">
                                    </div>
                                    <p class="text-info mb-0"><strong>Note: Please add embed URL for Youtube and Vimeo video.</strong></p>
                                </div>
                          </div>
                        </div>
                        <hr>
                      </div>
                        @if($step_count>=2)
                            @for($e=1;$e<$step_count;$e++)
                            <div class="content_step_list" data-repeater-item>
                                <div class="row mb-3">
                                  <div class="col-sm-12">
                                    <h1 class="step">Media <span class="step_number">{{ $e+1 }}</span></h1>
                                    <a href="javascript:;" data-repeater-delete="" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></a>
                                    <input type="hidden" class="step_key" name="step_key" value="{{ old('content_step.'.$e.'.step_key') }}">
                                    <input type="hidden" id="media_wrap_{{$e+1}}">
                                    <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://">
                                      <div class="fallback">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" name="stepfilupload" multiple>
                                          <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                        </div>
                                      </div>
                                      <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                        <li class="list-group-item px-0">
                                          <img class="avatar-img rounded" src="" data-dz-thumbnail>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-0">
                                            <div class="form-group @if($errors->has('content_step.'.$e.'.step_title')) has-danger @endif">
                                                <label class="form-control-label" for="step_title">Title</label>
                                                <input type="text" class="form-control @if($errors->has('content_step.'.$e.'.step_title')) is-invalid @endif" name="step_title" placeholder="Title" value="{{ old('content_step.'.$e.'.step_title') }}">
                                                @if($errors->has('content_step.'.$e.'.step_title'))
                                                    <span class="invalid-feedback">{{ $errors->first('content_step.'.$e.'.step_title') }}</span>
                                                @endif
                                            </div>
                                            <label class="form-control-label" for="step_video">Video</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <select class="custom-select" id="step_video_type" name="step_video_type" style="border-radius: 0;font-size:1rem;">
                                                    <option value="youtube" @if(old('content_step.'.$e.'.step_video_type') == 'youtube') selected @endif>Youtube</option>
                                                    <option value="vimeo" @if(old('content_step.'.$e.'.step_video_type') == 'vimeo') selected @endif>Vimeo</option>
                                                  </select>
                                                </div>
                                                <input type="text" class="form-control" id="step_video_media" name="step_video_media" placeholder="Enter here the URL of a Youtube or vimeo video" value="{{ old('content_step.'.$e.'.step_video_media') }}">
                                            </div>
                                            <p class="text-info mb-0"><strong>Note: Please add embed URL for Youtube and Vimeo video.</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                              </div>
                            @endfor
                        @endif
                    @endif
                </div>
                <input class="btn btn-primary btn-sm" data-repeater-create type="button" value="Add More Media"/>
              </div>

              <hr class="hr-dotted mb-3 mt-3">

              <div class="row">
                <div class="col-6">
                    @if($content->status == '3')
                        <input type="submit" class="btn btn-info" name="submit" value="Save As Draft">
                    @endif
                    <input type="submit" class="btn btn-success" name="submit" value="Published">
                    <a href="{{route('admin.content.list')}}" class="btn btn-primary">Cancel</a>
                    <input type="hidden" name="step_count" id="step_count" value="{{$step_count}}">
                </div>
              </div>
            </form>

        </div>
      </div>


    </div>
<style type="text/css">
  .main-img .dz-default.dz-message{
    height: 300px;
    padding: 8rem 1rem;
  }
  .dropzone-multiple .dz-default.dz-message{
    height: 150px;
  }
  .dropzone-multiple .dz-message{
    padding-top: 4rem;
  }
  .dz-size{
    display: none;
  }
</style>

@endsection
@section('pagewise_js')
<script src="{{asset('assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-repeater/jquery.repeater.min.js')}}"></script>
<script type="text/javascript">
var stepCount = 1;
let content_id= '{{$content->id}}';
$(document).ready(function() {
    // console.log(stepMediaArr);
    @if($content->main_image)
        $(".dz-preview.dz-preview-single").html('<div class="dz-preview-cover dz-processing dz-image-preview dz-success dz-complete"><img class="dz-preview-img" src="{{asset($content->main_image_url)}}"></div>');
        $(".dropzone.dropzone-single").addClass('dz-clickable dz-max-files-reached');
    @endif

    $('.js-example-basic-single').select2();

    CKEDITOR.replace('introduction', {
      extraPlugins:'justify,videodetector',
      height : '300px',
      allowedContent : true,
      filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
    });


    function addon_step_unique_id(){
        return "key_"+Math.random().toString(16).slice(2);
    }
    var step_count      = {!! $step_count!!};
    var audioExtensions = {!! json_encode(config('default.audio_extensions')) !!};

    $(".content_repeater").repeater({
        initEmpty:false,
        isFirstItemUndeletable: true,
        defaultValues:{},
        show:function(){
            step_count++;
            $("#step_count").val(step_count);
            $(this).find('.is-invalid').removeClass("is-invalid");
            $(this).find('.has-danger').removeClass("has-danger");
            $(this).find('.text-danger').remove();
            $(this).find('.step_number').text(step_count);
            $(this).show('fast',function(){

                var unique_id = addon_step_unique_id();

                $(this).find(".step_key").val(unique_id);

                $(this).find(".media_wrap").attr('id','media_wrap_'+step_count);

                $(this).find("#step_video_type").val('youtube'); // Set Default

                Dropzone.options.myAwesomeDropzone = false;
                Dropzone.autoDiscover = false;

                $(this).find('.dropzone-init').each(function(){

                    var dropUrl = "{{ route('admin.content.upload', ['_token' => csrf_token()]) }}";
                    dropUrl+="&unique_id="+unique_id+"&content_id="+content_id;
                    var dropMaxFiles = 6;
                    var dropParamName = 'file_image';
                    var dropMaxFileSize = 2048;

                    $(this).dropzone({
                        url: dropUrl,
                        maxFiles: dropMaxFiles,
                        paramName: dropParamName,
                        maxFilesSize: dropMaxFileSize,
                        dictDefaultMessage : 'Drop files(images/audio) here or click to upload.',
                        acceptedFiles :  'image/jpeg, image/png, image/gif, image/svg, audio/mpeg, audio/mp4, audio/vnd.wav',
                        addRemoveLinks: true,
                        init: function() {
                            this.on("complete", function(file) {
                                //linkObj.find(".dz-remove").html("<span class='fa fa-trash text-danger' style='font-size: 1.5em'></span>");
                                $(file._removeLink).html("<span class='fa fa-trash text-danger' style='font-size: 1.5em'></span>");
                            });
                        },
                        success: function(file, response){

                            if(response.status)
                            {
                                $(file._removeLink).attr("data-dz-media_id", response.id);
                                callRemoveImg();
                            }
                        }
                        // Rest of the configuration equal to all dropzones
                    });
                });
            })
        },
        hide:function(e){
            var keyId = $(this).find('.step_key').val();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if(result.value){

                    $.ajax({
                        url: "{{ route('admin.content.remove.step',['_token' => csrf_token() ]) }}",
                        data: { step_key: keyId},
                        type: 'POST',
                        success: function (data) {

                            console.log();
                        },
                        error: function (data) {

                        }
                    });
                    step_count--;
                    $("#step_count").val(step_count);
                    $(this).remove();
                    stepgenerateID();
                }
            });
        },
        ready: function (setIndexes) {

            Dropzone.options.myAwesomeDropzone = false;
            Dropzone.autoDiscover = false;

            $('.content_step_list').each(function(){

                var unique_id = $(this).find(".step_key").val();

                if($(this).find(".step_key").val()==''){
                    var unique_id=addon_step_unique_id();
                    $(this).find(".step_key").val(unique_id);
                }

                $(this).find('.dropzone-init').each(function(){

                    var dropUrl    = "{{ route('admin.content.upload', ['_token' => csrf_token()]) }}",
                        audioThumb = "{{asset('assets/img/icons/audio.png')}}";

                    dropUrl+="&unique_id="+unique_id+"&content_id="+content_id;
                    var dropMaxFiles = 6;
                    var dropParamName = 'file_image';
                    var dropMaxFileSize = 2048;

                    $(this).dropzone({
                        url: dropUrl,
                        maxFiles: dropMaxFiles,
                        paramName: dropParamName,
                        maxFilesSize: dropMaxFileSize,
                        dictDefaultMessage: 'Drop files(images/audio) here or click to upload.',
                        acceptedFiles:  'image/jpeg, image/png, image/gif, image/svg, audio/mpeg, audio/mp4, audio/vnd.wav',
                        addRemoveLinks: true,
                        init: function() {
                            this.on("complete", function(file) {
                                //linkObj.find(".dz-remove").html("<span class='fa fa-trash text-danger' style='font-size: 1.5em'></span>");
                                $(file._removeLink).html("<span class='fa fa-trash text-danger' style='font-size: 1.5em'></span>");
                            });

                            let myDropzone = this;

                            // If you only have access to the original image sizes on your server,
                            // and want to resize them in the browser:

                            if(stepMediaArr[unique_id]){
                                for (i = 0; i < stepMediaArr[unique_id].length; i++) {

                                    var mockFileName    = stepMediaArr[unique_id][i].name,
                                        mockFile        = { name: mockFileName},
                                        ext             = mockFileName.split('.').pop(),
                                        thumbnailURL    = stepMediaArr[unique_id][i].url;

                                    if(audioExtensions.includes(ext))
                                    {
                                      thumbnailURL = audioThumb;
                                    }

                                    myDropzone.emit("addedfile", mockFile);
                                    myDropzone.emit("thumbnail", mockFile, thumbnailURL);
                                    myDropzone.emit("complete", mockFile);

                                    $(mockFile._removeLink).attr("data-dz-media_id", stepMediaArr[unique_id][i].id);
                                    $(mockFile.previewTemplate).find(".dz-image img").addClass("dropzone-saved-img");
                                    //$(myDropzone).find(".dz-remove").attr("data-dz-media_id", stepMediaArr[unique_id][i].id);
                                }
                            }

                            callRemoveImg();

                        },
                        success: function(file, response){

                            if(response.status){
                                //linkObj.find(".dz-remove").attr("data-dz-media_id", response.id);
                                $(file._removeLink).attr("data-dz-media_id", response.id);
                                callRemoveImg();
                            }
                        }
                    });
                });

            });
        },
    });
    function stepgenerateID(){
        var step_number=0;
        $( "#content_repeater > .content_step_list").each(function( index ) {
            step_number++;
            $(this).find('.step_number').text(step_number);
        });
    }

});


function callRemoveImg(){

    $(".dz-remove").on("click", function (e) {

        e.preventDefault();
        e.stopPropagation();

        var imageId = $(this).data('dz-media_id');

        if(imageId){

            $.ajax({
                url: "{{ route('admin.content.remove.image',['_token' => csrf_token() ]) }}",
                data: { imageId: imageId},
                type: 'POST',
                success: function (data) {

                    console.log();
                },
                error: function (data) {

                }
            });
        }
    });
}

</script>
@endsection