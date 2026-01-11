<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo e(config('app.name', 'Dev CRM')); ?></title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('public/favicon-16.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('public/favicon-32.png')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('public/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('public/android-192.png')); ?>">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo e(asset('public/android-512.png')); ?>">


    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body class="">
    
    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal785aa89cb5e4b7a0bdd2387b4230b4ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785aa89cb5e4b7a0bdd2387b4230b4ed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.theme-switcher','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('theme-switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785aa89cb5e4b7a0bdd2387b4230b4ed)): ?>
<?php $attributes = $__attributesOriginal785aa89cb5e4b7a0bdd2387b4230b4ed; ?>
<?php unset($__attributesOriginal785aa89cb5e4b7a0bdd2387b4230b4ed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785aa89cb5e4b7a0bdd2387b4230b4ed)): ?>
<?php $component = $__componentOriginal785aa89cb5e4b7a0bdd2387b4230b4ed; ?>
<?php unset($__componentOriginal785aa89cb5e4b7a0bdd2387b4230b4ed); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
   
    <?php echo e($slot ?? ''); ?>

    
    <?php echo $__env->yieldPushContent('modals'); ?>
    
    <?php echo $__env->make('modals.offcanvas', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<?php echo $__env->make('modals.modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <footer class="footer mt-auto xl:ps-[15rem] font-normal font-inter bg-white leading-normal !text-[0.875rem] shadow-[0_0_0.4rem_rgba(0,0,0,0.1)] dark:bg-bodybg py-4 text-center">
        <div class="container">
            <span class="text-gray dark:text-defaulttextcolor/50">Copyright &copy;<span id="year"><?php echo e(date('Y')); ?></span><a href="javascript:void(0);" class="text-defaulttextcolor font-semibold dark:text-defaulttextcolor">&nbsp;<?php echo e(config('app.name')); ?></a> All rights reserved.
            </span>
        </div>
    </footer> 

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
    </div>
    <div id="responsive-overlay"></div>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


    <script src="<?php echo e(asset('assets/libs/@popperjs/core/umd/popper.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/js/defaultmenu.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/libs/tabulator-tables/js/tabulator.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/js/datatable.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/js/custom-switcher.js')); ?>" defer></script>
    <script src="<?php echo e(asset('assets/js/switch.js')); ?>"></script>
    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sync\resources\views/layouts/app.blade.php ENDPATH**/ ?>