@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif           
        </div>  
    </div>
</div>

    @include('partials.footer')
@endsection
 