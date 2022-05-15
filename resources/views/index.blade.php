@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>DATABASE TOKOIQBAL.COM</h1>
                <a href="{{url('create')}}" class="btn btn-success">+ Add Product</a>
                <br>

                @if(Session::has('success'))
                <p class="alert alert-success mt-2">{{ Session::get('success')}}</p>
                @endif
                <br>

                <form class="col-md-5" action="" method="post">
                    <div class="input-group">
                    <input type="text" name="keyword" placeholder="Search" class="form-control" autocomplete="off" autofocus>
                    <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>

            </div>
            <div class="col-lg-10 mt-1">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Price (Rp)</th>
                        <th>Stock (pcs)</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $dataMahasiswa)
                    <tr>
                        <td>{{ $dataMahasiswa->id }}</td>
                        <td>{{ $dataMahasiswa->nama }}</td>
                        <td>{{ $dataMahasiswa->nim }}</td>
                        <td>{{ $dataMahasiswa->alamat }}</td>
                        <td>
                            <a href="{{url('/show/' . $dataMahasiswa->id) }}" class="btn btn-warning">Update</a>
                            <a href="{{url('/destroy/' . $dataMahasiswa->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection