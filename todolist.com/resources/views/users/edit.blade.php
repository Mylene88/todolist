@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Update User info</div>
                <div class="panel-body">
                    <form method="post" action="{{ route('users.update-profile')}}">
                    {{ csrf_field() }}
                      

                    <div class="card-body">
                               

<div class="form-group row">
    <label class="col-md-4 control-label" for="name" id="name" >Name</label>
    <div class="col-md-6">
    <input class="form-control" type="text" name="name"  value="{{ $user->name }}" />
</div>
</div>

 <div class="form-group row">
    <label for="email" class="col-md-4 control-label" > Email</label>
    <div class="col-md-6">
    <input class="form-control" type="email" name="email"  value="{{ $user->email }}" />
 </div>
 </div>
 <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                </div>
        
</form>
</div>


</div>
</div>
</div>
</div>

<section class="my-5">
<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Update Password</div>
                <div class="panel-body">
                   
            <div class="card">
    
                <div class="card-body">
                    <form method="POST" role="form" action="{{ route('change.password') }}">
                        {{ csrf_field() }}
                    
    
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</section>

</div>
@endsection