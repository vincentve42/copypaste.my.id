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
                    
                        <div class="flex justify-end items-center justify-items-center">
                         <a href="{{ route('account') }}"><li class="text-white font-bold p-5">My Account</li></a>

                  
                </div>
            </ul>
        </nav>
        
    </head> 
    <body>
        <div class="pt-5">
            <h5 class="text-2xl font-bold">Newest Post</h5>
        @foreach($found as $datagua)
            <a href="{{ route('FindPaste', ['id' => $datagua->id]) }}"><div class="pt-5 pl-2 border-b border-black">
                <div class="flex items-center justify-items-center">
                    <h5 class="text-2xl">{{ $datagua->judul }} </h5>
                    <h5 class="pl-1">Views : {{ $datagua->views }}</h5>
                </div>
                <h5>Dibuat pada  {{ $datagua->created_at }}</h5>
            </div>  
            </a>

        @endforeach
        </div>
        
        </div>
    </body>
</html>