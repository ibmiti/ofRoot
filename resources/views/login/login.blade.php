@extends ('layouts.app')
@section ('title', 'Admin Login')


<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
.col-lg  {
    /* font-family: 'Raleway', 'Roboto'; */
    font-family: 'Big Shoulders Stencil Display', cursive;
    font-size: 40px;
}
.container {
    max-width: 500px;
    margin: 50px auto;
    text-align: left;
    font-family: sans-serif;
}
}
</style>
<!-- TODO fix error with navbar not working - find a good solution -->

@section ('content')

<x-header-image/>

<div class="container">
    
    <div class="row">
        <h1 class="col-lg text-center">Login the Bassinet</h1>
    </div>
    
    <div class="row">
        <h1 class="col-lg text-center">Hello You</h1>
    </div>

    
    <form class="justify-content-center" method="post" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" name="username" id="name" class="form-control {{ $errors->has('username') ? 'error' : '' }}" placeholder="what's your user name?">

                @if($errors->has('username'))
                <div class="error">{{ $errors->first('username') }}</div>
                @endif

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'error' : '' }}" placeholder="what's your password?">

                @if ($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
                @endif

        </div>
        
        <div class="form-group">
            <input type="submit" name="send" value="Login" class="btn btn-dark btn-block">
        </div>
    </form>

</div>

  <div class="row">
    <form class="col-lg" action=""></form>
  </div>
</div>
@endsection