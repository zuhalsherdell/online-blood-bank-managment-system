@extends('admin.layout.index')
@section('contents')


<section class="content">
    <div class="container-fluid">
@include('common.alert')

<div class="card card-primary mt-2">
    <!-- form start -->
    <form action="{{ route('lab-technician.store') }}" method="post">
        @csrf
    <div class="card-body d-flex">
        <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}">
            @error('name')
                <span class="text text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Enter Phone" value="{{ old('phone') }}">
            @error('phone')
                <span class="text text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
            @error('email')
                <span class="text text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <!-- /.card-body -->
    
    <div class="card-footer">
        <button type="submit" class="btn btn-primary w-100">Submit New Lab Technician</button>
    </div>
    </form>

</div>
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lab Technicians List</h3>
        </div>

                    <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 280px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($labtechnician as $key => $item)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td><span class="btn btn-success btn-sm">Edit   </span></td>
                        <td><span class="btn btn-danger btn-sm">Delete</span></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
</div>

</div>
</section>
@endsection