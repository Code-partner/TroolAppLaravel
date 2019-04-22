@extends('admin.app')

@section('content')
    <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Categories</h5>
                    </div>
                    @if($sizes)
                    <div class="card-body">
                                <table class="table table-stripped">
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>No. of Product</th>
                                        <th>Actions</th>

                                    </tr>
                                    @foreach($sizes as $size)
                                        <tr>
                                            <td>{{$size->id}}</td>
                                            <td>{{$size->name}}</td>
                                            <td>{{count($size->products)}}</td>
                                            <td>
                                                <a class="btn btn-warning" href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger"
                                                        onclick="event.preventDefault();
                                                                document.getElementById('delete-{{$size->id}}').submit();">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form id="delete-{{$size->id}}" action="" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach
                                </table>
                    </div>
                    @else
                        <div class="card-body text-center">
                            <h2>No Products Found Add A Size Now</h2>
                            <div class="col-12 col-sm-6 col-md-4 m-sm-auto">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card card-flex">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add a Size</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Size Name</label>
                                <input type="text" class="form-control" name="size_name" placeholder="Size Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection