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
                    
                        <div class="flex justify-end items-center justify-items-center">
                         <a href="<?php echo e(route('account')); ?>"><li class="text-white font-bold p-5">My Account</li></a>

                  
                </div>
            </ul>
        </nav>
        
    </head> 
    <body>
        <div class="pt-5">
            <h5 class="text-2xl font-bold">Newest Post</h5>
        <?php $__currentLoopData = $found; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datagua): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
        
        </div>
    </body>
</html><?php /**PATH G:\website\copypaste\resources\views/myaccount.blade.php ENDPATH**/ ?>