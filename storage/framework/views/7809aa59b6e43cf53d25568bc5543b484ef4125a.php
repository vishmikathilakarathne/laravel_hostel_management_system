<?php $__env->startSection('title', 'Forgot Password'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="text-center m-5">
        <h1 class="text-white">Hostel Management System</h1>
    </div>

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="image">
                        <img src="<?php echo e(asset('images/uwu2.jpg')); ?>" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Reset Password!</h1>
                            </div>

                            <?php if(session('error')): ?>
                                <span class="text-danger"> <?php echo e(session('error')); ?></span>
                            <?php endif; ?>

                            <form method="POST" action="<?php echo e(route('password.email')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control form-control-user <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Enter Email Address.">

                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                                <button class="btn btn-primary btn-user btn-block">
                                    <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo e(route('login')); ?>">Already know your passwrd? Login Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <h6 class="text-white">Developed By : IIT Web Project group 2022</a></h6>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\techtool-laravel-admin\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>