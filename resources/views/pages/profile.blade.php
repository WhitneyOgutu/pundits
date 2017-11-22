@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create your profile</div>
                <div class="panel-body">
                <form class="form-horizontal" method="post">

                <div class="form-group">
                    <label class="col-md-4 control-label" for="username">Username</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="usernname" required>
                     </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="title">Title</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="title" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bio" class="col-md-4 control-label">Bio</label>
                        <div class="col-md-6">
                            <textarea name="bio" class="form-control" id="bio" cols="30" rows="10" placeholder="Describe your skills" required></textarea>
                        </div>
                </div>

                <div class="form-group">
                    <label for="link" class="col-md-4 control-label">Portfolio link</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="link" required>
                        </div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-md-4 control-label">State</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="state" required>
                        </div>
                </div>

                <div class="form-group">
                    <label for="city" class="col-md-4 control-label">City</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="city" required>
                        </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" href="#" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>


@include('partials.footer')    
@endsection