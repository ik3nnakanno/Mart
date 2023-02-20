
     
<?php $__env->startSection('content'); ?>
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
    
        <a class="navbar-brand" href="<?php echo e(route('products.index')); ?>"><h3> Mart</h3></a>
   
        
            <ul class="ul">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><button type="button" class="btn btn-outline-secondary">Login </button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><button type="button" class="btn btn-outline-secondary">Register</button></a>
                    </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('products.create')); ?>"><button class="btn btn-outline-success"> Add your Product</button></a>
                            </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"><button type="button" class="btn btn-outline-secondary">Logout</button></a>
                    </li>
                    
                <?php endif; ?>
            </ul>
  
        
    
</nav>
    
                
           
    <?php
                $name = Auth::user()->name ?? 0
                ?>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
     <br>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="products">
            <div class="top">
                <img src="/images/<?php echo e($product->image); ?>" width="90px" height="82px" alt="">
                <div class="topt">
                    <small><?php echo e($product->pname); ?></small><br>
                    <small>N <?php echo e($product->price); ?></small><br>
                    <small><span><?php echo e($product->quantity); ?> items left</span></small>
                </div>
            </div>
            <div class="desc">
                <h6>Description</h6>
                <small><?php echo e($product->description); ?></small>
            </div><br>
            <div class="down">
                <small>Seller <span><?php echo e($product->name); ?></span></small><br>
                <small>Sold <span><?php echo e($product->sold); ?></span></small>
            </div>
            <?php
                $name = Auth::user()->name ?? 0
                ?>
                <?php if( $name == $product->name): ?>

                <div class="lll">
                <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn-danger">Delete</button>
                </form>

                    <a href="<?php echo e(route('products.edit',$product->id)); ?>"><button class="btn-primary"> Edit</button></a>
     
            </div>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex justify-content-center">
        <?php echo $products->links('pagination::bootstrap-4'); ?>

    </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mart\resources\views/products/index.blade.php ENDPATH**/ ?>