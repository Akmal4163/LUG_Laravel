@extends('pages.layout.public')


@section('main-content')
<div class="container">
    <div class="section-header">
      <h1>Details</h1>
      <li class="nav-link nav-link-lg message-toggle beep"><i class="fas fa-filter"></i></a>
      </li>
    </div>
  </div>
  <div class="row">
    <div class="col">
        <img src="/assets/img/product2.jpg" alt="" class="img-fluid">
    </div>
    <div class="col">
        <h4>
            Lorem ipsum dolor sit amet.
        </h4>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit architecto porro fuga. Esse aspernatur sint corporis culpa minima maiores repellat in, vero ipsa quae ex, ipsam dignissimos, suscipit officiis nisi.
        </p>
        <s>
            $500.000
        </s>
        <h4 class="d-flex align-items-center">
            <i class="fas fa-tags mr-2"></i>
            $90.000
        </h4>
        <form action="">
            <div class="form-group">
                <label for="product_amount">Amount</label>
                <input type="text" id="product-amount" class="form-control">
            </div>
            <button type="submit" class="btn btn-success btn-round">Add To Cart</button>
        </form>
    </div>
  </div>
@endsection