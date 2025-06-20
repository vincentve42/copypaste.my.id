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
                         <a href="<?php echo e(route('account')); ?>"><li class="text-white font-bold p-5">My Account</li></a>

                    <?php endif; ?>
                </div>
            </ul>
        </nav>
        
    </head> 

<body>
    <form action="<?php echo e(route('SecretCode',['id' => $found->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="pt-5 flex justify-center">
        <input type="text" name="password" id="" class="border-b border-black" placeholder="Enter Secret Code">
        <input type="hidden" name="id" value="<?php echo e($found->id); ?>">
        
    </div>
    <div class="pt-5 flex justify-center ">
             <button type="submit" class="border border-green-500 text-xl w-25 h-10 rounded-2xl text-white bg-green-500">Submit</button>
             </div>
    </form>
</body>
</html><?php /**PATH G:\website\copypaste\resources\views/password-paste.blade.php ENDPATH**/ ?>