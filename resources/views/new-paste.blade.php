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
    <form action="{{ route('new-paste') }}" method="post" class="pt-1">
            @csrf
        <div>
            <div class="pl-2 pt-5">
                <input type="text" name="judul" id="" placeholder="Judul" class="text-xl border border-black bg-gray-200" >
            </div>
             <div class="pl-2 pt-5">
                <input type="text" name="password" id="" placeholder="Password" class="text-xl border border-black bg-gray-200" >
            </div>
            <div class="pl-2 pt-10">
                <textarea class="border border-black" cols="250" rows="16" id="isitext" name="isi"></textarea>
            </div>
        </div>
            <div class="pt-5">
             <button type="submit" class="border border-green-500 text-xl w-25 h-10 rounded-2xl text-white bg-green-500">Submit</button>
             </div>
        </form>
    </body>
   <script type="text/javascript">
        textarea = document.querySelector("#isitext");
        textarea.addEventListener('input', autoResize, false);
        function autoResize() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        }
    </script>
</html>