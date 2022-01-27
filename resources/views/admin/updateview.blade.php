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

        <div style="position:relative; top:60px;right:-150px;">
            <form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                <div>
                    <label for="">Title</label>
                    <input style="color:black;" type="text" name="title" value="{{$data->title}}" required>                
                </div>
<br>
                <div>
                    <label for="">Price</label>
                    <input style="color:black;" type="num" name="price" value="{{$data->price}}" required>                
                </div>
<br>
                <div>
                    <label for="">Description</label>
                    <input style="color:black;" type="text" name="description"value="{{$data->description}}" required>                
                </div>
<br>
                <div>
                    <label for="">Old Image</label>
                    <img src="/ourourimage/{{$data->image}}" height="200" width="200" alt="">               
                </div>
<br>
                <div>
                    <label for="">New Image</label>
                    <input style="color:black;" type="file" name="image" required>                
                </div>
<br>
                <div>
                   
                    <input type="submit" value="Update" class="btn btn-success">                
                </div>
            </form>
<br>
        </div>
    
    
    </div>

    @include('admin.adminscript')
</html>