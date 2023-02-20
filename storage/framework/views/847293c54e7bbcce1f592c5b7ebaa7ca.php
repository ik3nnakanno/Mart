
  
<?php $__env->startSection('content'); ?>

<style>
    body{
        padding: 20px
    }
    .nnn{
        width: 300px;
        box-shadow: 1px 2px 3px rgba(66, 66, 66, 0.211), -1px 2px 3px rgba(66, 66, 66, 0.211),
        -1px -2px 3px rgba(66, 66, 66, 0.211), 1px -2px 3px rgba(66, 66, 66, 0.211);
        padding: 7px;
        border-radius: 7px;
        margin: 10px auto
    }
    button{
        margin: 8px;
    }
</style>
                      <form action="<?php echo e(route('login.post')); ?>" class="nnn" method="POST">
                          <?php echo csrf_field(); ?>
                          <h5 align="center">Login</h5>
                          
                              <label>E-Mail Address</label>
                              
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  <?php if($errors->has('email')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                  <?php endif; ?>
                             
  
                          <br>
                              <label>Password</label>
                              
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  <?php if($errors->has('password')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                  <?php endif; ?>
                              </div>
  
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                            
                                <div class="checkbox">
                                    <label>
                                        <a href="<?php echo e(route('forget.password.get')); ?>">Reset Password</a>
                                    </label>
                                </div>
                            
                          
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>
                          
                      </form>
                        
                  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mee\resources\views/auth/login.blade.php ENDPATH**/ ?>