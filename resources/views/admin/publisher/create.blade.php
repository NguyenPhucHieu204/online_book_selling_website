@extends('admin.layoutadmin.master')
@section('title', 'Publisher List')

@section('content')
<div class="container">
    <h1>Add New Publisher</h1>

    <form action="{{ route('admin.publisher.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
     
        <div class="form-group">
            <label for="name">Publisher Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="logo">Publisher Logo</label>
            <input type="file" name="logo" id="logo" class="form-control">
        </div>  

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
