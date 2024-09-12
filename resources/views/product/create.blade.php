@extends('layouts.default')

@section('content')
<h1>Create Product</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
        <label for="slug">Slug:</label>
        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select name="status" class="form-control">
            <option value="1">Active</option>
            <option value="0">Disabled</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Create Product</button>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
</form>
@endsection
