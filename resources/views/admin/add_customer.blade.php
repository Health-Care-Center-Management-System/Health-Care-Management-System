
<!DOCTYPE html>
<html lang="en">
  <head>
   
    @include('admin.css')
    <style type="text/css">
      label{
        display: inline-block;
        width:300px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller"> 
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
    
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid page-body-wrapper">

          


          <div class="container" align="center" style="padding-top: 100px">

            @if(session()->has('message'))
          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"> x </button>
            {{session()->get('message')}}

          </div>
          @endif

            <form action="{{url('insert_customer')}}" method="POST" enctype="multipart/form-data">

              @csrf
              
              <div style="padding:15px;">
                
                <label> Customer Name </label>
                <input type="text" style="color:black" name="name" placeholder="Write the Full Name" required="">
              </div>

              <div style="padding:15px;">
                
                <label> Email </label>
                <input type="text" style="color:black" name="email" placeholder="Write the Email Address" required="">
              </div>

            
              <div style="padding:15px;">
                
                <label> Phone Number </label>
                <input type="number" style="color:black" name="phone" placeholder="Write the Phone Number" required="">
              </div>

              <div style="padding:15px;">
                
                <label> Address </label>
                <input type="text" style="color:black" name="address" placeholder="Write the Phone Number" >
              </div>

             
              <div style="padding:15px;">
                
                
                <input type="submit" class="btn btn-success">
                
              </div>
              
            </form>
  
          </div>
       </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>