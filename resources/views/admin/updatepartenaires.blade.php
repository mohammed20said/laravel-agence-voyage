<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.admincss')
</head>
<body>

    <div class="container-scroller">
        @include('admin.nav')

        <form action="{{url('/updateFoodpartenaires',$data->id)}}" method="post" enctype="multipart/form-data" style="margin:auto">
            @csrf
            <div>
                <label for="">Name</label>
                <input style="color:blue" type="text" name="name" value="{{$data->name}}">
            </div><br>
            <div>
                <label for="">Location</label>
                <input style="color:blue" type="text" name="location" value="{{$data->location}}">
            </div><br>
            <div>
                <label for="">Old image</label>
                <img width="300" height="300"src="/partenairesimage/{{$data->image}}" alt="">
            </div><br>
            <div>
                <label for="">new image</label>
                <input type="file" name="image">
            </div><br>
            <div>
                <input style="color:blue" type="submit" value="Update Partenaire">
            </div>
        </form>



    </div>


    @include('admin.adminscript')
</html>