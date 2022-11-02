@extends('layouts.template.master')

@section('content')
    <section id="menu" class="menu">
      <div class="container" id="menu_main">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <select class="form-control" id="category-id">
            </select>
          </div>
        </div>

      </div>
    </section>    
@endsection

@section('javascript')
    <script src="{{ asset('js/menu/menu.js') }}"></script>
@endsection
