@extends('admin.layoutadmin.master')
@section('title', 'Publisher Edit')

@section('content')
<div class="container">
    <h1>Edit Publisher</h1>

    <form action="{{ route('admin.publisher.update', $publisher->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Publisher Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $publisher->name }}" required>
        </div>
        
        <div class="form-group">
            <label for="logo">Publisher Logo</label>
            <input type="file" name="logo" id="logo" class="form-control">
            @if ($publisher->logo)
                <img src="{{ asset('storage/' . $publisher->logo) }}" alt="{{ $publisher->name }}" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
