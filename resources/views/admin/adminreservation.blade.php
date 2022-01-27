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

        <div style="position:relative; top:70px;right:-150px">
            <table class="table">
                <tr>
                    <th style="padding:50px;">Name</th>
                    <th style="padding:50px;">Email</th>
                    <th style="padding:50px;">Phone</th>
                    <th style="padding:50px;">Date debut</th>
                    <th style="padding:50px;">Date fin</th>
                    <th style="padding:50px;">Message</th>
                </tr>

                @foreach($data as $data)
                <tr style="text-align:center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->dateD}}</td>
                    <td>{{$data->dateF}}</td>
                    <td>{{$data->message}}</td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>


    @include('admin.adminscript')
</html>