

<?php
    $name = Auth::user()->name ?? 0
?>
<?php $__env->startSection('content'); ?>
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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('products.index')); ?>"><button type="button" class="btn btn-outline-info">Go Back</button></a>
                </li>
            <?php else: ?>
            <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('products.index')); ?>"><button type="button" class="btn btn-outline-info">Go Back</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"><button type="button" class="btn btn-outline-secondary">Logout</button></a>
                </li>
                
            <?php endif; ?>
        </ul>

</nav>

     
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        Problems encountered<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('products.store')); ?>" class="nnn" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    
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
        <?php if(!auth()->check()): ?>
            <label>Seller's name</label>
            <input type="text" name="name" class="form-control" placeholder="Your name">
     <?php endif; ?></div>
     <?php if(auth()->check()): ?>
        <input type="hidden" name="name" value="<?php echo e(Auth::user()->name); ?>">
        <?php endif; ?>
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
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mee\resources\views/products/create.blade.php ENDPATH**/ ?>