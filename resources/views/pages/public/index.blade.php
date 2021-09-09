@extends('pages.layout.public')


@section('main-content')
<div class="container">
    <div class="section-header">
      <h1>Filter</h1>
      <li class="nav-link nav-link-lg message-toggle beep"><i class="fas fa-filter"></i></a>
      </li>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <article class="article">
        <div class="article-header">
          <div class="article-image" data-background="../assets/img/product.jpg">
          </div>
          <div class="article-title">
            <h2><a href="#">Product 1</a></h2>
          </div>
        </div>
        <div class="article-details">
            <s>
                $200.000
            </s>
          <h4>
            $80.000
          </h4>
          <div class="article-cta">
            <a href="{{ route('product-detail') }}" class="btn btn-success">Details</a>
          </div>
        </div>
      </article>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <article class="article">
        <div class="article-header">
            <div class="article-image" data-background="../assets/img/product2.jpg">
          </div>
          <div class="article-title">
            <h2><a href="#">Product 2</a></h2>
          </div>
        </div>
        <div class="article-details">
            <s>
                $500.000
            </s>
          <h4>
            $90.000
          <div class="article-cta">
            <a href="{{ route('product-detail') }}" class="btn btn-success">Details</a>
          </div>
        </div>
      </article>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <article class="article">
        <div class="article-header">
            <div class="article-image" data-background="../assets/img/product3.jpg">
          </div>
          <div class="article-title">
            <h2><a href="#">Product 3</a></h2>
          </div>
        </div>
        <div class="article-details">
            <s>
                $1000.000
            </s>
          <h4>
            $100.000
          </h4>
          <div class="article-cta">
            <a href="{{ route('product-detail') }}" class="btn btn-success">Details</a>
          </div>
        </div>
      </article>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <article class="article">
        <div class="article-header">
            <div class="article-image" data-background="../assets/img/product3.jpg">
          </div>
          <div class="article-title">
            <h2><a href="#">Product 4</a></h2>
          </div>
        </div>
        <div class="article-details">
            <s>
                $1000.000
            </s>
          <h4>
            $100.000
          </h4>
          <div class="article-cta">
            <a href="{{ route('product-detail') }}" class="btn btn-success">Details</a>
          </div>
        </div>
      </article>
    </div>
  </div>
@endsection