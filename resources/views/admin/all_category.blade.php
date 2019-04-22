@extends('admin.app')

@section('content')
    <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Categories</h5>
                    </div>
                    @if($categories)
                    <div class="card-body">
                                <table class="table table-stripped">
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>No. of Product</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{count($category->products)}}</td>
                                            <td>
                                                <a class="btn btn-warning" href="#">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger"
                                                        onclick="event.preventDefault();
                                                                document.getElementById('delete-{{$category->id}}').submit();">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form id="delete-{{$category->id}}" action="" method="POST" style="display: none;">
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
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card card-flex">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add a Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="c_name" placeholder="Category Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection