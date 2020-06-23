<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(config('app.name')); ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/themify-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/elegant-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/nice-select.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/jquery-ui.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/style.css')); ?>" type="text/css">
   
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>
   

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="<?php echo e(url('/')); ?>">
                                <img src="<?php echo e(asset('public/img/logo.png')); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <?php if(\Request::is('/')): ?> 
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <form action="#" class="input-group">
                                <input type="text" class="search_input" placeholder="What do you need?">
                                <button type="button" class="search-but"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right"> 
                                <li class="cart-icon"><a href="<?php echo e(route('cart')); ?>">
                                        <i class="icon_bag_alt"></i>
                                        <span>0</span>
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <?php if(auth()->guard()->check()): ?>
                        <li><a href="<?php echo e(url('/cart')); ?>">Cart</a></li>
                        <?php endif; ?>
                        <!-- Authentication Links -->
                           <?php if(auth()->guard()->guest()): ?>
                             <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                             </li>
                           <?php else: ?>
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right size" aria-labelledby="navbarDropdown">
                                   <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                                    <a class="dropdown-item text-body" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                                   <?php endif; ?>
                                   <a class="dropdown-item text-body" href="#"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       <?php echo e(__('Logout')); ?>

                                   </a>
                                   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                       <?php echo csrf_field(); ?>
                                   </form>
                               </div>
                           </li>
                           <?php endif; ?>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header><br>
    <!-- Header End -->
           
         <?php echo $__env->yieldContent('main'); ?>

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="<?php echo e(asset('public/img/footer-logo.png')); ?>" alt=""></a>
                        </div>
                        
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5></h5>
                       
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5></h5>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail" class="subscribe-email">
                            <button type="button" class="subscribe-button">Subscribe</button>
                        </form>
                    </div>
                    <span class="subscribe-span"></span>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made  by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
    <script src="<?php echo e(asset('public/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.zoom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.dd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/mine.js')); ?>"></script>
    

    <script type="text/javascript">
    $(document).ready(function(){
      $('.subscribe-button').click(function(){BaseRecord.mailer($('.subscribe-email').val());
       return false;
      });
    });
    </script>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/front/layout.blade.php ENDPATH**/ ?>