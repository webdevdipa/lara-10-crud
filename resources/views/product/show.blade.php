@extends('layouts.default')

@section('content')
<h1>Product Details</h1>

<p><strong>Title:</strong> {{ $product->title }}</p>
<p><strong>Description:</strong> {{ $product->description }}</p>
<p><strong>Slug:</strong> {{ $product->slug }}</p>
<p><strong>Status:</strong> {{ $product->status ? 'Active' : 'Disabled' }}</p>

<a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
@endsection
