@extends('layouts.master')

@section('content')

     <!-- Description -->
<section class="description">  
  <h3 class="text-center">Description</h3>   
<div class="container">
    <div class="row">
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
</div>

    <!-- Testimonial -->
  <section class="testimonial">
    <h3 class="text-center">Our Customers love our Product</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ url('/img/customer.png') }}">
              <blockquote>
              Deserunt excepteur nulla excepteur nisi tempor
              velit quis consectetur pariatur sunt esse cupidatat in
              Deserunt excepteur nulla excepteur nisi tempor
              velit quis consectetur pariatur sunt esse cupidatat in.
              </blockquote>
                 <cite>John Doe</cite>
          </div>
           <div class="col-md-4">
            <img src="{{ url('/img/customer.png') }}">  
              <blockquote>
              Deserunt excepteur nulla excepteur nisi tempor
              velit quis consectetur pariatur sunt esse cupidatat in
              Deserunt excepteur nulla excepteur nisi tempor
              velit quis consectetur pariatur sunt esse cupidatat in.
              </blockquote>
                 <cite>John Doe</cite>

          </div>
           <div class="col-md-4">
            <img src="{{ url('/img/customer.png') }}">
              <blockquote>
              Deserunt excepteur nulla excepteur nisi tempor
              velit quis consectetur pariatur sunt esse cupidatat in
              Deserunt excepteur nulla excepteur nisi tempor
              velit quis consectetur pariatur sunt esse cupidatat in.
              </blockquote>
              <cite>John Doe</cite>
          </div>
        </div>
      </div>
  </section>
  </section>

@endsection
