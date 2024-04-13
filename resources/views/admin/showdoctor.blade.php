<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top:100px;">
            <table>
                <tr align="center" style="background-color:black;">
                    <th style="padding:10px">Doctor Name</th>
                    <th style="padding:10px">Phone</th>
                    <th style="padding:10px">Speciality</th>
                    <th style="padding:10px">Room</th>
                    <th style="padding:10px">Image</th>
                    <th style="padding:10px">Update</th>
                    <th style="padding:10px">Delete</th>
                </tr>
                @foreach($data as $doctor)
                    <tr align="center" style="background-color:white; color:black">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt="doctorimage"></td>

                        <td>
                            <a class="btn btn-primary ml-lg-3" style="margin-bottom:10px; margin-top:10px" href="{{url('updatedoctor', $doctor->id)}}">Update</a>
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to Delete all this Doctor Data?')" class="btn btn-danger ml-lg-3" style="margin-bottom:10px; margin-top:10px" href="{{url('deletedoctor', $doctor->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
