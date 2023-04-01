@extends('admin.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
@endsection

@section('main-content')

    <section class="section">
        <div class="section-header">
            <h1>Posts</h1>
            
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="news_date">Date</label> <span class="text-danger">*</span>
                                        <input type="text" autocomplete="off" id="date-picker" name="news_date"
                                        class="form-control @error('news_date') is-invalid @enderror"
                                        value="{{ old('news_date') }}">
                                        @error('news_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="title">Title</label> <span class="text-danger">*</span>
                                        <input id="title" type="text" name="title" class="form-control {{ $errors->has('title') ? " is-invalid " : '' }}" value="{{ old('title') }}">
                                        @error('last_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="gender">Category</label> <span class="text-danger">*</span>
                                        <select id="cat_id" name="cat_id" class="form-control @error('cat_id') is-invalid @enderror">
                                            <option value="1">Event</option>                                              
                                            <option value="2">Publication</option>                                           
                                        </select>
                                        @error('cat_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label>Publish</label> 
                                        <select id="publish" name="publish" class="form-control @error('publish') is-invalid @enderror">
                                            <option value="1">Yes</option>                                              
                                            <option value="0">No</option>                                           
                                        </select>
                                        @error('publish')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>                 
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="summary">Summary</label> <span class="text-danger">*</span>
                                        <textarea name="summary"
                                                  class="summernote-simple form-control height-textarea @error('summary')
                                                      is-invalid @enderror"
                                                  id="summary" >
                                            {{ old('summary') }}
                                        </textarea>
                                        @error('summary')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col">
                                        <label for="descrip">Description</label>
                                        <textarea name="descrip"
                                                  class="summernote-simple form-control height-textarea @error('descrip')
                                                      is-invalid @enderror"
                                                  id="descrip" >
                                            {{ old('descrip') }}
                                        </textarea>
                                        @error('descrip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="customFile">{{ __('visitor.image') }}</label> 
                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" onchange="readURL(this);">
                                            <label  class="custom-file-label" for="customFile">{{ __('visitor.choose_file') }}</label>
                                        </div>
                                        @if ($errors->has('image'))
                                            <div class="help-block text-danger">
                                                {{ $errors->first('image') }}
                                            </div>
                                        @endif
                                        <img class="img-thumbnail image-width mt-4 mb-3" id="previewImage" src="{{ asset('assets/img/default/user.png') }}" alt="your image"/>
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="customFile">File</label>
                                        <div class="custom-file">
                                            <input name="file" type="file" class="custom-file-input @error('file') is-invalid @enderror" id="customFile" onchange="readURL(this);">
                                            <label  class="custom-file-label" for="customFile">{{ __('visitor.choose_file') }}</label>
                                        </div>
                                        @if ($errors->has('file'))
                                            <div class="help-block text-danger">
                                                {{ $errors->first('file') }}
                                            </div>
                                        @endif 
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer ">
                                <button class="btn btn-primary mr-1" type="submit">{{ __('levels.submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/post/create.js') }}"></script>
@endsection