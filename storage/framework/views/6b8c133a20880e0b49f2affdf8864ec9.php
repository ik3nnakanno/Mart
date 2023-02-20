
  
<?php $__env->startSection('content'); ?>

                  
  
                      <form action="<?php echo e(route('register.post')); ?>" class="nnn" method="POST">
                          <?php echo csrf_field(); ?>
                          <h5 align="center">Register</h5>
                              <label for="name">Name</label>
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  <?php if($errors->has('name')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                  <?php endif; ?>
                             
  
                          
                              <label for="email_address">E-Mail Address</label>
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  <?php if($errors->has('email')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                  <?php endif; ?>
                              
  
                          
                              <label for="password">Password</label>
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  <?php if($errors->has('password')): ?>
                                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                  <?php endif; ?>
                              
  
                          
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mee\resources\views/auth/registration.blade.php ENDPATH**/ ?>