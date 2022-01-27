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


        <div class="container">
            <h1>Customer Order</h1>
            <form action="{{url('/search')}}" method="get">
                @csrf
                <input type="text" name="search" placeholder="Search" style="color:blue">
                <button type="submit" class="btn btn-success">Search</button>
            </form>

            <table class="table">
                <tr>
                    <th style="padding:30px;text-align:center">Name</th>
                    <th style="padding:30px;text-align:center">Phone</th>
                    <th style="padding:30px;text-align:center">Address</th>
                    <th style="padding:30px;text-align:center">Title</th>
                    <th style="padding:30px;text-align:center">Price</th>
                    <th style="padding:30px;text-align:center">Nombre</th>
                    <th style="padding:30px;text-align:center">Total Price</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td style="padding:30px">{{$data->name}}</td>
                    <td style="padding:30px">{{$data->phone}}</td>
                    <td style="padding:30px">{{$data->address}}</td>
                    <td style="padding:30px">{{$data->title}}</td>
                    <td style="padding:30px">{{$data->price}}dh</td>
                    <td style="padding:30px">{{$data->number}}</td>
                    <td style="padding:30px">{{$data->price * $data->number}}dh</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


    @include('admin.adminscript')
</html>