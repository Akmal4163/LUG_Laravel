@extends('pages.layout.public')

@section('main-content')
<div class="row">
    <div class="col-lg-5">
      <img src="/assets/img/news/img08.jpg" alt="" class="img-fluid">
    </div>
    <div class="col">
      <h3>Lorem ipsum dolor sit amet.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis esse exercitationem nam placeat omnis magnam voluptas iste eligendi facere voluptatem.</p>
      <h4 class="d-flex align-items-center mb-4"><i class="fas fa-tags mr-2"></i> 200.000</h4>
      <h5>Order Amount</h5>
      <form action="">
        <div class="form-group">
          <input id="order_amount" name="order_amount" type="text" class="form-control" value="2">
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Order Update</button>
      </form>
    </div>
  </div>
@endsection