<!DOCTYPE html>
<html lang="en">
  <head>
   
    <base href="/public">

    <style type="text/css">
    label{
        display:inline-block;
        width: 200px;
    }
    </style>

    @include('admin.css')


  </head>
  <body>
   <div class="container-scroller"> 
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
    
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
      
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

           

            <div class="container" align="center" style="padding: 100px">

                @if(session()->has('message'))
                <div class="alert alert-success">
      
                  <button type="button" class="close" data-dismiss="alert"> x </button>
                  {{session()->get('message')}}
      
                </div>
                @endif

                <form action="{{url('edit_customer', $data->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px">
                        <label>Customer Name</label>
                     <input type="text" style="color:black" name="name" value="{{$data->name}}">
                    </div>

                    <div style="padding: 15px">
                        <label>Email</label>
                     <input type="text" style="color:black" name="email" value="{{$data->email}}">
                    </div>

                    <div style="padding: 15px">
                        <label>Phone Number</label>
                     <input type="number" style="color:black" name="phone" value="{{$data->phone}}">
                    </div>

                    <div style="padding: 15px">
                        <label>Address</label>
                     <input type="text" style="color:black" name="address" value="{{$data->address}}">
                    </div>
                    
                    <div style="padding: 15px">  
                     <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>


        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>