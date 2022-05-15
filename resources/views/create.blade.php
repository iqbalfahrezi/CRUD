@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <h1>Add Product</h1>
        <br>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Product Name *</label>
                        <input type="text" name="nama" class="form-control" placeholder="VGA NVIDIA RTX 3090 TI">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="nama">Price (Rp) *</label>
                        <input type="number" name="nim" class="form-control" placeholder="12345">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="nama">Stock (pcs) *</label>
                        <textarea class="form-control" name="alamat" placeholder="0-99"></textarea>
                    </div>
                    <br>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn-primary">Add Product</button>
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