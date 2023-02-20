@extends('products.layout')

<?php
    $name = Auth::user()->name ?? 0
?>
@section('content')
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}"><button type="button" class="btn btn-outline-info">Go Back</button></a>
                </li>
            @else
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}"><button type="button" class="btn btn-outline-info">Go Back</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"><button type="button" class="btn btn-outline-secondary">Logout</button></a>
                </li>
                
            @endguest
        </ul>

</nav>

     
@if ($errors->any())
    <div class="alert alert-danger">
        Problems encountered<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" class="nnn" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name</strong>
                <input type="text" name="pname" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:120px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        @if (!auth()->check())
            <label>Seller's name</label>
            <input type="text" name="name" class="form-control" placeholder="Your name">
     @endif</div>
     @if (auth()->check())
        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
        @endif
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="number" name="quantity" class="form-control" placeholder="quantity">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sold:</strong>
                <input type="number" name="sold" class="form-control" placeholder="sold">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>