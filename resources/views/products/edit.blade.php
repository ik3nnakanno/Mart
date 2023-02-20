@extends('products.layout')
     
@section('content')
<style>
    img{
        border-radius: 7px;
        margin: 3px
    }
</style>
<nav class="nav">
    
    <a class="navbar-brand" href="{{ route('products.index') }}"><h3> Mart</h3></a>

    
        <ul class="ul">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-outline-secondary">Login </button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><button type="button" class="btn btn-outline-secondary">Register</button></a>
                </li>
            @else
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"><button type="button" class="btn btn-outline-secondary">Logout</button></a>
                </li>
                
            @endguest
        </ul>

</nav>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('products.update',$product->id) }}" class="nnn" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="pname" value="" class="form-control" placeholder="{{ $product->pname }}">
                </div>
        
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:120px" name="description" placeholder="description">{{ $product->description }}</textarea>
                </div>
        
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $product->image }}" width="140px">
                </div>
        
                <div class="form-group">
                    <strong>Quantity:</strong>
                    <input type="number" name="quantity" class="form-control" placeholder="{{ $product->quantity }}">
                </div>
        
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="{{ $product->price }}">
                </div>
        
                <div class="form-group">
                    <strong>Sold:</strong>
                    <input type="number" name="sold" class="form-control" placeholder="{{ $product->sold }}">
                </div>
            
            
              <button type="submit" class="btn btn-primary">Submit</button>
           
        
     
    </form>
@endsection