<?php $__env->startSection('content'); ?>
<section class="log-reg login-2">
    <div class="overlay">
        <div class="container">
            <div class="top-head-area">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-5 col">
                        <a class="back-home" href="<?php echo e(route('admin.home')); ?>">
                            <img src="<?php echo e(asset('assets/auth/img/left-icon.png')); ?>" alt="image">
                        </a>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="<?php echo e(route('admin.home')); ?>">
                            <img src="<?php echo e(asset('assets/auth/img/logo.png')); ?>" style="height: 60px; width:auto;" alt="image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5">
                    <div class="img-area">
                        <img src="<?php echo e(asset('assets/auth/img/login-bg-2.png')); ?>" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 z-1 text-center d-flex justify-content-center pb-120">
                    <div class="form-box">
                        <h4>Log in to Otopilot</h4>
                        <p class="dont-acc">Don't have an account? <a href="<?php echo e(route('auth.register')); ?>">Register</a></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="personal-tab" data-bs-toggle="tab"
                                    data-bs-target="#personal" type="button" role="tab" aria-controls="personal"
                                    aria-selected="true">Personal</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="business-tab" data-bs-toggle="tab" data-bs-target="#business"
                                    type="button" role="tab" aria-controls="business"
                                    aria-selected="false">Business</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                <div class="login-with d-flex align-items-center">
                                    <a href="javascript:void(0)"><img src="<?php echo e(asset('assets/auth/img/google.png')); ?>" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="<?php echo e(asset('assets/auth/img/fb.png')); ?>" alt="image"></a>
                                </div>
                                <div class="continue"><p>Or continue with</p></div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="password" class="passInput" placeholder="Password">
                                                <img class="showPass" src="<?php echo e(asset('assets/auth/img/show-hide.png')); ?>" alt="image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="remember-forgot d-flex justify-content-between">
                                        <div class="form-group d-flex">
                                            <div class="checkbox_wrapper" >
                                                <input class="check-box" id="check1" type="checkbox">
                                                <label></label>
                                            </div>
                                            <label for="check1"><span class="check_span">Remember Me</span></label>
                                        </div>
                                        <div class="forget-pw">
                                            <a href="javascript:void(0)">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="btn-area">
                                        <a href="<?php echo e(route('admin.home')); ?>" class="cmn-btn">Log in</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <div class="login-with d-flex align-items-center">
                                    <a href="javascript:void(0)"><img src="<?php echo e(asset('assets/auth/img/google.png')); ?>" alt="image"></a>
                                    <a href="javascript:void(0)"><img src="<?php echo e(asset('assets/auth/img/fb.png')); ?>" alt="image"></a>
                                </div>
                                <div class="continue"><p>Or continue with</p></div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="email" placeholder="Business email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-input d-flex align-items-center">
                                                <input type="password" class="passInput" placeholder="Password">
                                                <img class="showPass" src="<?php echo e(asset('assets/auth/img/show-hide.png')); ?>" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="remember-forgot d-flex justify-content-between">
                                        <div class="form-group d-flex">
                                            <div class="checkbox_wrapper" >
                                                <input class="check-box" id="check2" type="checkbox">
                                                <label></label>
                                            </div>
                                            <label for="check2"><span class="check_span">Remember Me</span></label>
                                        </div>
                                        <div class="forget-pw">
                                            <a href="javascript:void(0)">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="btn-area">
                                        <a href="<?php echo e(route('admin.home')); ?>" class="cmn-btn">Log in</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/cbaa8a44-147a-4ce3-a95c-72c7dc2b7daa/DoDoSoftec/OtopilotDashboard/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>