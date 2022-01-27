<x-app-layout>
  
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
   
    <div class="container-scroller">
         @include('admin.nav')
        <div style="position:relative; top:60px;right:-150px;">
            <table class="table">
                <tr>
                    <th style="padding:30px;text-align:center">nom</th>
                    <th style="padding:30px;text-align:center">email</th>
                    <th style="padding:30px;text-align:center">action</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    @if($data->usertype == "0")
                    <td> <a href="{{url('/deleteuser',$data->id)}}">delete</a> </td>
                    @else
                    <td>not allowd</td>
                    @endif

                </tr>
                @endforeach
            
            </table>
        </div>


    </div>

  @include('admin.adminscript')
</html>