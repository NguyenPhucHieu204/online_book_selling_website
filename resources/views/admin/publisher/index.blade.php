@extends('admin.layoutadmin.master')
@section('title', 'Publisher List')
@section('content')
<div class="container">
    <h1>Publishers</h1>
    <a href="{{ route('admin.publisher.create') }}" class="btn btn-primary">Add New Publisher</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publishers as $publisher)
            <tr>
                <td>{{ $publisher->name }}</td>
                <td>
                    @if ($publisher->logo)
                        <img src="{{ asset('storage/' . $publisher->logo) }}" alt="{{ $publisher->name }}" width="50">
                    @else
                        <span>No logo</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.publisher.edit', $publisher->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.publisher.destroy', $publisher->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
