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
    
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
      
       <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding-top:100px;">

            <table>
                <tr style="background-color: bisque; color: black;">
                    <th style="padding:10px">Doctor Name</th>
                    <th style="padding:10px">Email Address</th>
                    <th style="padding:10px">Phone</th>
                    <th style="padding:10px">Address</th>
                    <th style="padding:10px">Delete</th>
                    <th style="padding:10px">Update</th>
                </tr>

                @foreach ($data as $customer)
                <tr align="center" style="background-color: rgb(252, 232, 209); color: black;">

                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->address}}</td>
            
                    <td><a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletecustomer', $customer->id)}}">Delete</td>
                    <td><a class="btn btn-primary" href="{{url('update_customer', $customer->id)}}">Update</td>
                   

                </tr>
                @endforeach
        </div>
       </div>
        <!-- partial -->
      
 
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>