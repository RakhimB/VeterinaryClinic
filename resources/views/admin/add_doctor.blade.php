<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">

        label
        {
            display: inline-block;
            width:200px;
        }

    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">



      <div class="container" align="center" style="padding-top: 100px;">

        @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>

        @endif

        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            

            @csrf
      <div style="padding:15px;">
            <label>Doctor Name</label>
            <input type="text" style="color:black;" name="name" placeholder="Write the Name" required="">
      </div>
      <div>

      <div style="padding:15px;">
            <label>Phone Number</label>
            <input type="number" style="color:black;" name="number" placeholder="Write the Number" required="">
      </div>

      <div style="padding:15px;">
            <label>Doctor Speciality</label>
            <select name="speciality" style="color:black; width:200px;" required="">
                <option>--Please Select--</option>
                <option value="Pet Ophthalmology">Pet Ophthalmology</option>
                <option value="Pet Neurology">Pet Neurology</option>
                <option value="General Veterinary Diagnostic Services">General Veterinary Diagnostic Services</option>
                <option value="Pet Surgery & Procedures">Pet Surgery & Procedures</option>
                <option value="Chronic Illness Management">Chronic Illness Management</option>
                <option value="Microchipping">Microchipping</option>
                <option value="Pet Dental Care">Pet Dental Care</option>
            </select>
      </div>

     <div style="padding:15px;">
            <label>Room Number</label>
            <input type="text" style="color:black;" name="room" placeholder="Write the Room Number" required="">
      </div>

     <div style="padding:15px;">
            <label>Doctor Image</label>
            <input type="file" name="file" required="">
     </div>

     <div style="padding:15px;">
            
            <input type="submit" class="btn btn-success" >
     </div>

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>