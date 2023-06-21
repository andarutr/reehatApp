@extends('layouts.admin')
@section('title','Create Artikel')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="dashboard_wrap">
            
            <div class="form_blocs_wrap">
                <form action="/admin/artikel" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row justify-content-between">
                        <div class="col-lg-12 col-md-7 col-sm-12">
                                
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
                                    
                                    <div class="form-group smalls">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                        @error('title')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>
                                    
                                    <div class="form-group smalls">
                                        <label>Description</label>
                                        <textarea class="summernote" name="description">{{ old('description') }}</textarea>
                                        @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                                    </div>

                                    <div class="form-group smalls">
                                        <label>Foto</label>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="customFile" name="picture">
                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                          @error('picture')<p class="text-danger">{{ $message }}</p>@enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection