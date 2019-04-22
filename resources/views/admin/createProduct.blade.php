@extends('admin.app')

@section('content')
    <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">

        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Add a Product</h5>
            </div>
            <div class="card-body">

                <div class="col-12 col-sm-10 col-lg-8 m-lg-auto">
                    @if($errors->any())
                        <div class="alert alert-danger bg-danger text-light">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <form method="post" action=""  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="p_name" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <select class="custom-select" name="category">
                                <option selected="">Open this select menu</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="form-label">Actual Price</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">&#8377;</div>
                                    </div>
                                    <input type="text" name="actual_price" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Actual Price">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label">Selling Price</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">&#8377;</div>
                                    </div>
                                    <input type="text" name="selling_price" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Selling Price">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Short Description</label>
                            <textarea class="form-control" name="short_desc" placeholder="Short Description" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 52px;"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-sm-6">
                                <label class="form-label w-100">Product Image</label>
                                <input type="file" name="p_img">
                                <small class="form-text text-muted">A high Quality Image with High Defination</small>
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label class="form-label w-100">Back Image</label>
                                <input type="file" name="back_sc">
                                <small class="form-text text-muted">A high Quality Image with High Defination</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Long Description</label>
                            <textarea class="form-control" name="long_desc" placeholder="Long Description" rows="2" style="margin-top:0; margin-bottom:0; height: 52px;"></textarea>
                        </div>
                        <div class="form-row">
                            @foreach($sizes as$size)
                            <div class="form-group ml-3">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="size[]" value="{{$size->id}}">
                                    <span class="custom-control-label">{{$size->name}}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label class="form-label w-100">Color</label>
                            <select class="custom-select" name="color">
                                <option selected="">Open this select menu</option>
                                @foreach($colors as $color)
                                    <option value="{{$color->id}}">{{$color->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection