<html>
    <head>
        @vite('./resources/css/app.css')
        <nav class="bg-green-500">
            <ul>
                <div class="flex justify-between">
                    <div class="flex justify-start items-center justify-items-center">
                        <a href="{{ route('dash.ui') }}"><li class="text-white p-5 text-xl font-bold">CopyPaste.my.id</li></a>
                        <li class="text-white p-5 font-bold">New Paste</li>  
                    </div>
                    <div class="flex justify-end items-center justify-items-center">
                        <a href="{{ route('login.form') }}"><li class="text-white p-5 items-center justify-items-center font-bold">Login</li></a>
                        <a href="{{ route('register.form') }}"><li class="text-white font-bold p-5">Register</li></a>
                        
                    </div>
                </div>
            </ul>
        </nav>
        
    </head> 
    <body>
        <div class="flex justify-center md:justify-end md:pr-40 pt-10">
            <form action="{{ route('login') }}" method="post" class="border border-green-500 rounded-2xl md:w-80 md:h-100">'
                @csrf
                <div class="flex items-center justify-items-center justify-self-center">
                <h1 class="font-bold text-2xl">Login</h1>
                </div>
                    <div class="pt-5 pl-3 md:pt-15">
                    <input type="text" name="name" id="" class="border-b border-black md:w-60 text-sm md:text-xl" placeholder="Username">
                </div>
                    <div class="pt-5 pl-3 md:pt-5">
                    <input type="text" name="password" id="" class="border-b border-black md:w-60 text-sm md:text-xl" placeholder="Password">
                </div>
                <div class="pt-5 pl-3 md:pt-15">
                    <button class="border border-green-500 text-xl w-25 h-10 rounded-2xl text-white bg-green-500">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>