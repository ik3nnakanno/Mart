
     
<?php $__env->startSection('content'); ?>
<style>
    img{
        border-radius: 7px;
        margin: 3px
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
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"><button type="button" class="btn btn-outline-secondary">Logout</button></a>
                </li>
                
            <?php endif; ?>
        </ul>

</nav>
     
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <form action="<?php echo e(route('products.update',$product->id)); ?>" class="nnn" method="POST" enctype="multipart/form-data"> 
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="pname" value="" class="form-control" placeholder="<?php echo e($product->pname); ?>">
                </div>
        
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:120px" name="description" placeholder="description"><?php echo e($product->description); ?></textarea>
                </div>
        
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/<?php echo e($product->image); ?>" width="140px">
                </div>
        
                <div class="form-group">
                    <strong>Quantity:</strong>
                    <input type="number" name="quantity" class="form-control" placeholder="<?php echo e($product->quantity); ?>">
                </div>
        
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="<?php echo e($product->price); ?>">
                </div>
        
                <div class="form-group">
                    <strong>Sold:</strong>
                    <input type="number" name="sold" class="form-control" placeholder="<?php echo e($product->sold); ?>">
                </div>
            
            
              <button type="submit" class="btn btn-primary">Submit</button>
           
        
     
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mee\resources\views/products/edit.blade.php ENDPATH**/ ?>