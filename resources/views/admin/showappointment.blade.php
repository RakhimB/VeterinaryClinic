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
                    <th style="padding:10px">Customer Name</th>
                    <th style="padding:10px">Email</th>
                    <th style="padding:10px">Phone</th>
                    <th style="padding:10px">Doctor Name</th>
                    <th style="padding:10px">Date</th>
                    <th style="padding:10px">Message</th>
                    <th style="padding:10px">Status</th>
                    <th style="padding:10px">Approve</th>
                    <th style="padding:10px">Cancel</th>
                </tr>

                @foreach($data as $appoint)

                <tr align="center" style="background-color:white; color:black">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success ml-lg-3" style="margin-bottom:10px; margin-top:10px" href="{{url('approved',$appoint->id)}}">Approved</a>
                    </td>
                    <td>
                        <a class="btn btn-danger ml-lg-3" style="margin-bottom:10px; margin-top:10px" href="{{url('canceled',$appoint->id)}}">Canceled</a>
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