@extends('layouts.default')

@section('content')
<h1>Edit Product</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" value="{{ $product->title }}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="slug">Slug:</label>
        <input type="text" name="slug" class="form-control" value="{{ $product->slug }}">
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select name="status" class="form-control">
            <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Disabled</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update Product</button>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
</form>
@endsection
