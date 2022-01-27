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
        <div>
        <form action="{{url('/uploadpartenaires')}}" method="POST" enctype="multipart/form-data"style="margin:auto;height:auto important">
            @csrf
            <div>
                <label for="">Name</label>
                <input style="color:blue" type="text" name="name" placeholder="Enter Name" required="">
            </div><br>
            <div>
                <label for="">Location</label>
                <input style="color:blue" type="text" name="location" placeholder="Enter Location" required="">
            </div><br>
            <div>
                <input type="file" name="image" required="">
            </div><br>
            <div>
                <input style="color:black" type="submit" value="Save" class="btn btn-success">
            </div>
        </form>
        </div>
        <div style="float:left;width:80%;top:20% important">
        <table class="table">
            <tr>
                <th style="padding:30px ;text-align:center">Partenaire Name</th>
                <th style="padding:30px;text-align:center">Location</th>
                <th style="padding:30px;text-align:center">Image</th>
                <th style="padding:30px;text-align:center">Action1</th>
                <th style="padding:30px;">Action2</th>
            </tr>
            @foreach( $data as $data)
            <tr>
                <td style="text-align:center">{{$data->name}}</td>
                <td style="text-align:center">{{$data->location}}</td>
                <td><img style="width:100px important; height:100px important;" src="/partenairesimage/{{$data->image}}" alt=""></td>
                <td style="text-align:center"> <a href="{{url('/updatepartenaires',$data->id)}}">Update</a> </td>
                <td style="text-align:center"><a href="{{url('/deletepartenaires',$data->id)}}">Delete</a></td>
            </tr>  
            @endforeach 
        </table>
        </div>

    </div>


    @include('admin.adminscript')
</html>