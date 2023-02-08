@extends('admin.layouts.base');

@section('title', 'Movies');

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Movies</h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-12 mb-3">
            <a href="{{ route('admin.movie.create') }}" class="btn btn-warning">Create Movie</a>
          </div>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
        @endif

        <div class="row">
          <div class="col-md-12">
            <table id="movie" class="table table-bordered table-hover">
              <thead>
                <tr class="text-center">
                  <th>Id</th>
                  <th>Title</th>
                  <th>Small Thumbnail</th>
                  <th>Large Thumbnail</th>
                  <th>Categories</th>
                  <th>Casts</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($movies as $movie)
                    <tr>
                      <td>{{ $movie->id }}</td>
                      <td>{{ $movie->title }}</td>
                      <td class="items-center">
                        <img src="{{ asset('storage/thumbnail/'.$movie->small_thumbnail) }}" width="50%">
                      </td>
                      <td class="text-center">
                        <img src="{{ asset('storage/thumbnail/'.$movie->large_thumbnail) }}" width="50%">
                      </td>
                      <td>{{ $movie->categories }}</td>
                      <td>{{ $movie->casts }}</td>
                      <td>
                        <a href="{{ route('admin.movie.edit', $movie->id) }}" class="btn btn-secondary">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form method="post" action="{{ route('admin.movie.destroy', $movie->id) }}">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
  <script>
    $('#movie').DataTable();
  </script>
@endsection
