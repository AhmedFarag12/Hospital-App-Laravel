
<!DOCTYPE html>
<html lang="en">
  <head>
  
    @include('admin.css')
  </head>
  <body> 
    <div class="container-scroller">

      @include('admin.sidebar')

      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
              
                <div class="container text-center py-3">

                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}
                    </div>
                @endif
                    <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="py-2">
                            <label for="">Doctor Name</label>
                            <input  type="text" name="name" style="color:black" placeholder="write the name" required>
                        </div>

                        <div class="py-2">
                            <label for="">Phone</label>
                            <input  type="number" name="phone" style="color:black" placeholder="write the number" required>
                        </div>

                        <div class="py-2">
                            <label for="">Speciality</label>
                            <select name="speciality" style="color:black;">
                                <option>--Select--</option>
                                <option value="skin">skin</option>
                                <option value="heart">heart</option>
                                <option value="eye">eye</option>
                                <option value="nose">nose</option>

                            </select>
                        </div>

                        <div class="py-2">
                            <label for="">Room No</label>
                            <input  type="number" name="room" style="color:black" placeholder="write the Room No" required>
                        </div>

                        <div class="py-2">
                            <label for="">Doctor Image</label>
                            <input type="file" name="file" required>
                        </div>

                        <div class="py-2">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                    
                </div>

       


        </div>
      @include('admin.script')

  </body>
</html>     