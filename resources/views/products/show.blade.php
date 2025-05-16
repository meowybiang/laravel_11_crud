@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-3">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <div class="float-start">
 Product Information
 </div>
 <div class="float-end">
 <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
 </div>
 </div>
 <div class="card-body">
 <div class="row">
  <div class="col-md-8">
   <div class="row">
    <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
    <div class="col-md-6" style="line-height: 35px;">
     {{ $product->code }}
    </div>
   </div>
   <div class="row">
    <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
    <div class="col-md-6" style="line-height: 35px;">
     {{ $product->name }}
    </div>
   </div>
   <div class="row">
    <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Quantity:</strong></label>
    <div class="col-md-6" style="line-height: 35px;">
     {{ $product->quantity }}
    </div>
   </div>
   <div class="row">
    <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label>
    <div class="col-md-6" style="line-height: 35px;">
     {{ $product->price }}
    </div>
   </div>
   <div class="row">
    <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
    <div class="col-md-6" style="line-height: 35px;">
     {{ $product->description }}
    </div>
   </div>
  </div>
  <div class="col-md-4">
   @if($product->image)
    <div class="product-image-container">
     <img src="{{ asset('storage/' . $product->image) }}" 
          alt="Product Image" 
          class="img-fluid rounded product-image"
          style="max-width: 100%; height: auto; object-fit: contain;">
    </div>
   @else
    <div class="product-image-container">
     <img src="{{ asset('images/no-image.png') }}" 
          alt="No Image Available" 
          class="img-fluid rounded product-image"
          style="max-width: 100%; height: auto; object-fit: contain;">
    </div>
   @endif
  </div>
 </div>
 </div>
 </div>
 </div> 
</div>

<style>
.product-image-container {
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 5px;
    margin-bottom: 20px;
    min-height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-image {
    max-height: 300px;
    width: auto;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
</style>

@endsection