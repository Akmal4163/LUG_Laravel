@extends('pages.layout.public')

@section('main-content') 
<div class="container">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <a href="{{ route('product.create') }}" class="btn btn-primary mb-4">Add Product</a>
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Product 1</td>
              <td>$80.000</td>
              <td><div class="badge badge-success">Active</div></td>
              <td><a href="{{ route('product.update')}}" class="btn btn-success btn-sm">Update</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                <a href="#" class="btn btn-info btn-sm">Detail</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Product 2</td>
              <td>$80.000</td>
              <td><div class="badge badge-success">Active</div></td>
              <td><a href="{{ route('product.update')}}" class="btn btn-success btn-sm">Update</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                <a href="#" class="btn btn-info btn-sm">Detail</a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Product 3</td>
              <td>$80.000</td>
              <td><div class="badge badge-danger">Not Active</div></td>
              <td><a href="{{ route('product.update')}}" class="btn btn-success btn-sm">Update</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                <a href="#" class="btn btn-info btn-sm">Detail</a></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Product 4</td>
              <td>$80.000</td>
              <td><div class="badge badge-success">Active</div></td>
              <td><a href="{{ route('product.update')}}" class="btn btn-success btn-sm">Update</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                <a href="#" class="btn btn-info btn-sm">Detail</a></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div> 
</div>  
@endsection