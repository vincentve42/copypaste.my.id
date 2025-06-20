<html>
    <head>
        <script>
            function Copy() {
        const text = document.getElementById("paste").innerText;

        navigator.clipboard.writeText(text)
            .then(() => {
            alert("Berhasil");
            })
            .catch(err => {
            console.error("Gagal", err);
            });
        }
        </script>
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

<body class="bg-gray-200">
    <div class="mt-10 ml-5 mr-5 bg-white">
        <div class="flex items-center justify-items-center">
        <h5 class="pl-5 font-bold text-xl"><?php echo e($found->judul); ?></h5><p class="pl-5">Published By <?php echo e($nama_user); ?></p>
        
        </div>
        <div class="flex justify-center">
            <button class="border border-indigo-500 w-20 h-10 bg-indigo-500 rounded-2xl text-white" onclick="Copy()">Copy All</button>
        </div>
        <div id='paste' class="pt-2">
       <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sayuz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
        <div  class="flex">
            <p class="text-sm font-bold"><?php echo e($count++); ?></p><p class="pl-5 text-sm"><?php echo e($sayuz); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
    
</body>
</html><?php /**PATH G:\website\copypaste\resources\views/view-paste.blade.php ENDPATH**/ ?>