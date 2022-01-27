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
            <form action="{{url('uploadourour')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div>
                    <label for="">Title</label>
                    <input style="color:blue;" type="text" name="title" placeholder="write a title" required>                
                </div>
<br>
                <div>
                    <label for="">Price</label>
                    <input style="color:blue;" type="num" name="price" placeholder="Price" required>                
                </div>
br

                <div>
                    <label for="">Image</label>
                    <input style="color:blue;" type="file" name="image" required>                
                </div>
<br>
                <div>
                    <label for="">Description</label>
                    <input style="color:blue;" type="text" name="description" placeholder="Description" required>                
                </div>
<br>
                <div>
                   
                    <input type="submit" value="save" class="btn btn-success">                
                </div>
            </form>
<br>
            <div>
                <table class="table">
                    <tr>
                        <th style="padding:30px;">Title</th>
                        <th style="padding:30px;">Price</th>
                        <th style="padding:30px;">Description</th>
                        <th style="padding:30px;">Image</th>
                        <th style="padding:30px;">Firdt Action</th>
                        <th style="padding:30px;">Seconde Action</th>
                    </tr>
                    @foreach($data as $data)
                    <tr style="text-align : center ; height:180px; bottom:20px">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td style="width:30% important;">{{$data->description}}</td>
                        <td><img src="/ourourimage/{{$data->image}}" width="100" height="100" alt=""></td>
                        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>


        </div>



    </div>
    

  @include('admin.adminscript')
</html>