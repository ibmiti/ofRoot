@extends('layouts.app')
@section ('title', 'upload media')
@section('content')

    <div class="container container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @if (session('status'))
                    <h6 class="alert alert-success">
                        {{ session('status') }}
                    </h6>
                @endif

                <div class="m-5">
                    <div class="card-header">
                        <h4>Add Media/Content to Server</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('upload_media') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-3 mb-3">
                                <label for="name">Name The Content</label>
                                <input type="text"
                                       name="name"
                                       class="form-control">
                            </div>
                            <div class="form-group mt-3 mb-3">
                                <label for="image">Media / Content</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group mt-5 mb-3 text-center">
                                <button type="submit"
                                        class="btn btn-primary">
                                            Upload Content
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
