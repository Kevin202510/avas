@extends('layouts.template.master')

@section('content')
    <section id="menu" class="menu">
      <div class="container" id="cart_main">

        <div class="section-title">
          <h2>My <span>Cart</span></h2>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-3 col-md-6 form-group">
            <label>Product Name</label>
              <input type="text" name="name" class="form-control" id="product_name" disabled>
            </div>
            <div class="col-lg-3 col-md-6 form-group mt-3 mt-md-0">
            <label>Product Price</label>
              <input type="number" class="form-control" name="product_price" id="product_price">
            </div>
            <div class="col-lg-3 col-md-6 form-group mt-3 mt-md-0">
            <label>Quantity</label>
              <input type="number" class="form-control" name="product_quantity" id="product_quantity">
            </div>
            <div class="col-lg-3 col-md-6 form-group mt-3 mt-md-0">
            <label>Total</label>
              <input type="number" class="form-control" name="product_total" id="product_total" disabled>
            </div>
          </div>
        </form>

      </div>
    </section>    
@endsection

@section('javascript')
    <script src="{{ asset('js/cart/cart.js') }}"></script>
    <script>
      window.userID = {{ auth()->id() }};
    </script>
@endsection
