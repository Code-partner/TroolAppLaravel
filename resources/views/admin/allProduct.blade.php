@extends('admin.app')

@section('content')
    <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">

        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Product</h5>
            </div>
            @if($products)
            <div class="card-body">
                <a href="{{route('admin.createProduct')}}" class="btn btn-lg btn-primary mb-2">Add A Product</a>
                <table class="table table-stripped col-12">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>SKU Code</th>
                        <th>Actions</th>

                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><img src="{{$product->product_img}}" height="111px" alt=""></td>
                        <td>{{$product->name}}</td>
                        <td>
                            @foreach($product->skus as $sku)
                            <p>{{$sku->sku}}</p>
                            @endforeach
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('product',$product->slug)}}" target="_blank">
                                <i class="fa fa-eye"></i>
                            </a>

                            <a class="btn btn-warning" href="{{route('admin.edit_product',$product)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn btn-danger"
                                    onclick="event.preventDefault();
                                                     document.getElementById('delete-{{$product->id}}').submit();">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form id="delete-{{$product->id}}" action="{{ route('admin.product.delete',$product) }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
            @else

                <div class="card-body text-center">
                    <h2>No Products Found Add A Product Now</h2>
                    <div class="col-12 col-sm-6 col-md-4 m-sm-auto">
                        <a href="{{route('admin.createProduct')}}" class="btn btn-lg btn-primary">Add A Product</a>
                    </div>
                </div>

            @endif
        </div>
    </div>
@endsection