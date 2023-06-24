<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"   rel="stylesheet" type="text/css" />
    @vite('resources/css/app.css')
    <title>@yield('title') | Farmtrics</title>

</head>
<body class="min-h-full bg-white">

    <div class="h-full">
        @extends('layouts.navbar')
        <main>
            @yield('content')
        </main>
        
        @extends('layouts.footer')
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 <!-- This is for toaster  -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script>
 @if (Session::has('message'))
 var type = "{{Session::get('alert-type','info')}}"
 switch(type){
   case 'info':
   toastr.info("{{Session::get('message')}} ");
   break;
   case 'success':
   toastr.success("{{Session::get('message')}} ");
   break;
   case 'warning':
   toastr.warning("{{Session::get('message')}} ");
   break;
   case 'error':
   toastr.error("{{Session::get('message')}} ");
   break;
 }
 
 @endif
 </script>
</body>
</html>