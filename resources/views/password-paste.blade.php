<html>
    <head>
        @vite('./resources/css/app.css')
        <nav class="bg-green-500">
            <ul>
                <div class="flex justify-between">
                    <div class="flex justify-start items-center justify-items-center">
                        <a href="{{ route('dash.ui') }}"><li class="text-white p-5 text-xl font-bold">CopyPaste.my.id</li></a>
                        <a href="{{ route('paste') }}"><li class="text-white p-5 font-bold">New Paste</li> </a> 
                    </div>
                    @if(!Auth::user())
                    <div class="flex justify-end items-center justify-items-center">
                        <a href="{{ route('login.form') }}"><li class="text-white p-5 items-center justify-items-center font-bold">Login</li></a> 
                         <a href="{{ route('register.form') }}"><li class="text-white font-bold p-5">Register</li></a>
                        
                    </div>
                    @else
                        <div class="flex justify-end items-center justify-items-center">
                         <a href="{{ route('account') }}"><li class="text-white font-bold p-5">My Account</li></a>

                    @endif
                </div>
            </ul>
        </nav>
        
    </head> 

<body>
    <form action="{{ route('SecretCode',['id' => $found->id])}}" method="post">
    @csrf
    <div class="pt-5 flex justify-center">
        <input type="text" name="password" id="" class="border-b border-black" placeholder="Enter Secret Code">
        <input type="hidden" name="id" value="{{ $found->id }}">
        
    </div>
    <div class="pt-5 flex justify-center ">
             <button type="submit" class="border border-green-500 text-xl w-25 h-10 rounded-2xl text-white bg-green-500">Submit</button>
             </div>
    </form>
</body>
</html>