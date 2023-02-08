@extends('admin.layouts.base');

@section('title', 'Movies');

@section('content')
<div class="row">
    <div class="col-md-12">

      {{-- Alert Here --}}
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
      @endif

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create Movie</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form enctype="multipart/form-data" method="POST" action="{{ route('admin.movie.store') }}">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="e.g Guardian of The Galaxy" value="{{ old('title') }}">
            </div>
            <div class="form-group">
              <label for="trailer">Trailer</label>
              <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Video url" value="{{ old('trailer') }}">
            </div>
            <div class="form-group">
              <label for="duration">Duration</label>
              <input type="text" class="form-control" id="duration" name="duration" placeholder="1h 39m" value="{{ old('duration') }}">
            </div>
            <div class="form-group">
              <label>Date:</label>
              <div class="input-group date" id="release-date" data-target-input="nearest">
                <input type="text" name="release_date" value="{{ old('release_date') }}" class="form-control datetimepicker-input" data-target="#release-date"/>
                <div class="input-group-append" data-target="#release-date" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="short-about">Casts</label>
              <input type="text" class="form-control" id="short-about" name="casts" value="{{ old('casts') }}" placeholder="Jackie Chan">
            </div>
            <div class="form-group">
              <label for="short-about">Categories</label>
              <input type="text" class="form-control" id="short-about" name="categories" value="{{ old('categories') }}" placeholder="Action, Fantasy">
            </div>
            <div class="form-group">
              <label for="small-thumbnail">Small Thumbnail</label>
              <input type="file" class="form-control" name="small_thumbnail">
            </div>
            <div class="form-group">
              <label for="large-thumbnail">Large Thumbnail</label>
              <input type="file" class="form-control" name="large_thumbnail">
            </div>
            <div class="form-group">
              <label for="short-about">Short About</label>
              <input type="text" class="form-control" id="short-about" name="short_about" placeholder="Awesome Movie">
            </div>
            <div class="form-group">
              <label for="short-about">About</label>
              <input type="text" class="form-control" id="about" name="about" placeholder="Awesome Movie">
            </div>
            <div class="form-group">
              <label>Featured</label>
              <select class="custom-select" name="featured">
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection
