@extends('admin.app')

@section('content')
    <div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Categories</h5>
                    </div>
                    @if($images)
                    <div class="card-body">
                        <div class="row">
                        @foreach($images as $image)
                        <div class="col-6 col-md-3">
                            <div class="img-rounded">
                                <img src="{{$image->link}}" alt="{{$image->id}}" height="111px">
                            </div>
                            <p>
                                <a href="{{$image->link}}" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button class="btn btn-danger"
                                        onclick="event.preventDefault;
                                                document.getElementById('deleteImage-{{$image->id}}').submit();">
                                    <i class="fas fa-trash"></i>
                                </button>
                            <form id="deleteImage-{{$image->id}}" action="{{route('admin.images.delete',$image)}}" method="post" style="display:none;">
                                @csrf
                            </form>
                            </p>
                        </div>
                        @endforeach
                        </div>
                    </div>
                    @else
                        <div class="card-body text-center">
                            <h2>No Images Found Add A Image Now</h2>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-flex">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add a Image</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Type of Image</label>
                                <select name="path" id="" class="form-control">
                                    <option selected="">-- Select One --</option>
                                    <option value="1">Product Image</option>
                                    <option value="2">Banner Image</option>
                                    <option value="3">Avatar</option>
                                    <option value="4">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image Name</label>
                                <br>
                                <input type="file" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection