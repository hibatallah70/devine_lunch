<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
    
<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
        @include("admin.navbar")
        <div style="position: relative; top: 60px; right: -150px "> 
            <table border = 10px  width: 100%  >
                <tr align="center"  style=" lineheight: 15px" >
                    <th   style=" padding: 80px">Name</th>
                    <th style=" padding: 80px">Email</th>
                    <th style=" padding: 80px">action</th>
                </tr> 
                @foreach($data as $data)   
                <tr align= "center"  >
                    <td  align="center">{{$data ->name}}</td>
                    <td  align="center" >{{$data ->email}}</td>

                    @if($data->usertype=="0")
                    <td  align="center" ><a href="{{url('/deleteuser', $data->id )}}" > Delete </a> </td>
                    @else 
                    <td  align="center"><a>Not Allowed</a></td>
                    @endif
                </tr>
                @endforeach 

            </table>
         </div>
    </div>
        @include("admin.adminscript")
  </body>
</html>

</body>
</html>