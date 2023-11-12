
<!DOCTYPE html>
<html lang="en">
  <head>
   <base href="/public">
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

            <form action="{{url('sendemail',$data->id)}}" method="POST" >

              @csrf
              
              <div style="padding:15px;">
                
                <label>Greeting</label>
                <input type="text" style="color:black" name="greeting" placeholder="Write the name" required="">
              </div>

              <div style="padding:15px;">
                
                <label>Body</label>
                <input type="text" style="color:black" name="body" placeholder="Write the number" required="">
              </div>

              

              <div style="padding:15px;">
                
                <label>Action Text</label>
                <input type="text" style="color:black" name="actiontext" placeholder="Write the room number" required="">
              </div>

              <div style="padding:15px;">
                
                <label>Action Url</label>
                <input type="text" style="color:black" name="actionurl" placeholder="Write the room number" required="">
              </div>

              <div style="padding:15px;">
                
                <label>End Part</label>
                <input type="text" style="color:black" name="endpart" placeholder="Write the room number" required="">
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