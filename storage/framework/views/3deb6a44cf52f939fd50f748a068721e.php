<html>
    <head>
        <?php echo app('Illuminate\Foundation\Vite')('./resources/css/app.css'); ?>
        <nav class="bg-green-500">
            <ul>
                <div class="flex justify-between">
                    <div class="flex justify-start items-center justify-items-center">
                        <a href="<?php echo e(route('dash.ui')); ?>"><li class="text-white p-5 text-xl font-bold">CopyPaste.my.id</li></a>
                        <a href="<?php echo e(route('paste')); ?>"><li class="text-white p-5 font-bold">New Paste</li> </a> 
                    </div>
                    <?php if(!Auth::user()): ?>
                    <div class="flex justify-end items-center justify-items-center">
                        <a href="<?php echo e(route('login.form')); ?>"><li class="text-white p-5 items-center justify-items-center font-bold">Login</li></a> 
                         <a href="<?php echo e(route('register.form')); ?>"><li class="text-white font-bold p-5">Register</li></a>
                        
                    </div>
                    <?php else: ?>
                        <div class="flex justify-end items-center justify-items-center">
                        <a href="<?php echo e(route('account')); ?>"> <a href="<?php echo e(route('account')); ?>"><li class="text-white font-bold p-5">My Account</li></a>

                    <?php endif; ?>
                </div>
            </ul>
        </nav>
        
    </head> 
    <body>
        <div class="pt-5">
            <h5 class="text-2xl font-bold">Newest Post</h5>
        <?php $__currentLoopData = $tampil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datagua): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('FindPaste', ['id' => $datagua->id])); ?>"><div class="pt-5 pl-2 border-b border-black">
                <div class="flex items-center justify-items-center">
                    <h5 class="text-2xl"><?php echo e($datagua->judul); ?> </h5>
                    <h5 class="pl-1">Views : <?php echo e($datagua->views); ?></h5>
                </div>
                <h5>Dibuat pada  <?php echo e($datagua->created_at); ?></h5>
            </div>  
            </a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="pt-10">
            <h5 class="text-2xl font-bold">Trending Post</h5>
            <?php $__currentLoopData = $tampils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('FindPaste', ['id' => $datagua->id])); ?>"><div class="pt-5 pl-2 border-b border-black">
                <div class="flex items-center justify-items-center">
                    <h5 class="text-2xl"><?php echo e($dataz->judul); ?> </h5>
                    <h5 class="pl-1">Views : <?php echo e($dataz->views); ?></h5>
                </div>
                <h5>Dibuat pada  <?php echo e($dataz->created_at); ?></h5>
            </div>  
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </body>
</html><?php /**PATH G:\website\copypaste\resources\views/index.blade.php ENDPATH**/ ?>