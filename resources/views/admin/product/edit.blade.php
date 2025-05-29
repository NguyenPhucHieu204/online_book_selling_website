@extends('admin.layoutadmin.master')
@section('title', 'Products edit')

@section('content')
<div class="container">
    <h1>Edit Product</h1>

    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category">category</label>
            <select name="category_id" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="publisher">PPublisher</label>
            <select name="publisher_id" id="publisher" class="form-control">
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" 
                        {{ $product->publisher_id == $publisher->id ? 'selected' : '' }}>
                        {{ $publisher->name }}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control"  value="{{ $product->price }}" required>
        </div>

          <!-- Mô tả sản phẩm -->
          <label for="description">Description:</label>
          <textarea name="description" id="description" required>{{ $product->description }}</textarea>

        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
