<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Dev CRM')); ?></title>

    <meta name="Author" content="@SYNC">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('public/favicon-16.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('public/favicon-32.png')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('public/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('public/android-192.png')); ?>">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo e(asset('public/android-512.png')); ?>">

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/auth/login.css'); ?>
</head>
<body>
<div class="wrapper relative z-10 w-[400px] p-8 rounded-xl bg-white/10 border border-white/30 backdrop-blur-md shadow-lg text-center text-white">
    <form method="POST" action="<?php echo e(route('login')); ?>" autocomplete="off" class="space-y-4">
    <?php echo csrf_field(); ?>
    <h2 class="text-2xl font-semibold mb-2 text-white">SYNC CRM</h2>
    <p class="text-white/70 mb-4">Access your account</p>
    <div class="relative">
        <input type="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Enter your email" autocomplete="off" class="w-full p-3 rounded-lg bg-white/20 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
    <div class="relative">
        <input type="password" name="password" required placeholder="Enter your password" autocomplete="off" class="w-full p-3 rounded-lg bg-white/20 border border-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-blue-400 focus:outline-none">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
    <div class="flex justify-between items-center text-white/70 text-sm mb-4">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="remember" class="w-4 h-4">
            Remember me
        </label>
        <a href="<?php echo e(route('password.request')); ?>" class="hover:underline">Forgot password?</a>
    </div>
    <button type="submit" class="w-full py-3 rounded-lg bg-blue-500 hover:bg-blue-600 transition text-white font-semibold">Sign in</button>
    <p class="text-white/70 mt-4 text-sm">
        Don't have an account? <a href="<?php echo e(route('register')); ?>" class="underline hover:text-white">Register</a>
    </p>
</form>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\sync\resources\views/auth/login.blade.php ENDPATH**/ ?>