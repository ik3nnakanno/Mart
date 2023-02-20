@extends('products.layout')
     
@section('content')
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
    }

    body {
        padding: 0px;
        margin-bottom: 40px;
    }

    nav h2 {
        color: green;
    }

    main {
        display: flex;
        gap: 20px;
    }

    .products {
        width: 230px;
        padding: 9px;
        box-shadow: 1px 2px 3px rgba(128, 128, 128, 0.274), -1px 2px 3px rgba(128, 128, 128, 0.199), 1px -2px 3px rgba(128, 128, 128, 0.199), -1px -2px 3px rgba(128, 128, 128, 0.199);
        border-radius: 5px;
        margin: 15px auto;
        cursor: pointer;
    }

    .products:hover {
        transform: scale(1.005);
        box-shadow: 1px 3px 3px rgba(128, 128, 128, 0.274), -1px -3px 3px rgba(128, 128, 128, 0.199);
    }

    .top {
        display: flex;
        flex-direction: row;
    }

    .topt {
        padding: 10px;
    }
    img{
        border-radius: 4px
    }
    .top span {
        color: rgb(180, 36, 10);
    }

    .down {
        display: flex;
        flex-direction: column;
    }
    .lll{
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
    }
    .down span {
        color: blue;
    }
    button{
        padding: 7px 15px;
        border-radius: 6px;
    }
    a:visited{
        text-decoration: none;
    }
    a:active{
        text-decoration: none;
    }
    a:hover{
        text-decoration: none;
    }
    a{
        text-decoration: none;
    }
    .btn {
        display: block;
        margin-left: 150px;
    }
    .button{
        padding: 4px
    }
    .nav{
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        width: 100%;
        border-bottom: 2px solid rgba(128, 128, 128, 0.11); 
        margin-bottom: 25px;
        padding: 9px;
        align-items: center;
    }
    .ul{
        display: flex;
        justify-content: space-evenly
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
                    <a class="nav-link" href="{{ route('products.create') }}"><button class="btn btn-outline-success"> Add your Product</button></a>
                            </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"><button type="button" class="btn btn-outline-secondary">Logout</button></a>
                    </li>
                    
                @endguest
            </ul>
  
        
    
</nav>
    
                
           
    <?php
                $name = Auth::user()->name ?? 0
                ?>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     <br>

    @foreach ($products as $product)
        <div class="products">
            <div class="top">
                <img src="/images/{{ $product->image }}" width="90px" height="82px" alt="">
                <div class="topt">
                    <small>{{ $product->pname }}</small><br>
                    <small>N {{ $product->price }}</small><br>
                    <small><span>{{ $product->quantity }} items left</span></small>
                </div>
            </div>
            <div class="desc">
                <h6>Description</h6>
                <small>{{ $product->description }}</small>
            </div><br>
            <div class="down">
                <small>Seller <span>{{ $product->name }}</span></small><br>
                <small>Sold <span>{{ $product->sold }}</span></small>
            </div>
            <?php
                $name = Auth::user()->name ?? 0
                ?>
                @if ( $name == $product->name)

                <div class="lll">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Delete</button>
                </form>

                    <a href="{{ route('products.edit',$product->id) }}"><button class="btn-primary"> Edit</button></a>
     
            </div>
            @endif
        </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {!! $products->links('pagination::bootstrap-4') !!}
    </div>
        
@endsection