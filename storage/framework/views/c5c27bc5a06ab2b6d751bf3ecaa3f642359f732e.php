

<?php $__env->startSection('main'); ?>
    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2><?php echo e(__('Login')); ?></h2>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="group-input">
                                <label for="username"><?php echo e(__('E-Mail Address')); ?></label>
                                <input id="email" id="username" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            
                            </div>

                            <div class="group-input">
                                <label for="pass"><?php echo e(__('Password')); ?></label>
                                <div class="col-md-6">
                                <input id="pass" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">
                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                              </div>
                             </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                       <?php echo e(__('Remember Me')); ?>

                                        <input type="checkbox" id="save-pass" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <span class="checkmark"></span>
                                    </label>
                                    <?php if(Route::has('password.request')): ?>
                                    <a href="#" class="forget-pass"><?php echo e(__('Forgot Your Password?')); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn"><?php echo e(__('Login')); ?></button>
                        </form>
                        <div class="switch-login">
                            <a href="<?php echo e(url('/register')); ?>" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/auth/login.blade.php ENDPATH**/ ?>