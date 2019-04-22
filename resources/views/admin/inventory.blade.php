@extends('admin.app')

@section('content')
    <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">

        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Product</h5>
            </div>
            @if($inventories)
            <div class="card-body">
                <table class="table table-stripped col-12">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>SKU Code</th>
                        <th>Quantity</th>
                        <th>Cost</th>

                    </tr>
                    @foreach($inventories as $inventory)
                    <tr>
                        <td>{{$inventory->id}}</td>
                        <td><img class="img img-rounded" src="{{$inventory->sku->product->product_img}}" alt="Image" height="111px"></td>
                        <td>{{$inventory->sku->sku}}</td>
                        <td>
                            <form method="post" action="{{route('admin.inventory.update',$inventory)}}" class="form-inline">
                                @csrf
                                <input name="quantity" type="text" value="{{$inventory->quantity}}">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                            </form>
                        </td>
                        <td>
                            <form method="post" action="{{route('admin.inventory.update',$inventory)}}" class="form-inline">
                                @csrf
                                <input name="cost" type="text" value="{{$inventory->cost}}">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
            @else

                <div class="card-body text-center">
                    <h2>No Products Found Add A Product Now</h2>
                </div>

            @endif
        </div>
    </div>
@endsection