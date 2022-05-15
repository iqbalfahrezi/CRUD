@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <h1>Edit Product Data</h1>
        <br>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/update/'. $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Product Name *</label>
                        <input type="text" name="nama" class="form-control" placeholder="VGA ASRock 6900 XT" value="{{$data->nama}}">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="nama">Price (Rp) *</label>
                        <input type="number" name="nim" class="form-control" placeholder="12345" value="{{$data->nim}}">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="nama">Stock (pcs) *</label>
                        <textarea class="form-control" name="alamat" placeholder="0-99" >{{$data->alamat}}</textarea>
                    </div>
                    <br>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn-primary">Edit Product</button>
                    </div>

                    <div class="form-group mt-2">
                        <a href="{{url('/')}}"> << Back to main page</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection