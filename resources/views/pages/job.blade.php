@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create a Job</div>
                <div class="panel-body">
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                        <label for="title" class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="title" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>
                                <div class="col-md-6">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10" required></textarea>
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="amount" class="col-md-4 control-label">Amount</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" id="amount">
                                </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    </div>
</div>

@endsection