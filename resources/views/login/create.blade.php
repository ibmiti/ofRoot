@extends('layouts.app')
@section ('title', 'create user')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">
                    {{ session('status') }}
                </h6>
            @endif

            <x-header-image/>

            <div class="card">
                <div class="card-header">
                    <h4>Add Content Writer</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('storeAdmin') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">User Name</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection