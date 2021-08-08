@extends('layouts.main')
@section('container')
  <div class="row flex-md-row-reverse align-items-center g-5 py-5">
    <div class="col-md-6">
      <img src="https://source.unsplash.com/700x500?coding" class="d-block mx-lg-auto img-fluid rounded" alt="Heroes images" loading="lazy">
    </div>
    <div class="col-md-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
      <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Get Started</button>
      </div>
    </div>
  </div>
@endsection