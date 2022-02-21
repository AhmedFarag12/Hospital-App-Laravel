
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      @include('admin.sidebar')
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div>
            <table class="table text-center">
                <thead >
                  <tr>
                    <th class="text-white" scope="col">Doctor Name</th>
                    <th class="text-white" scope="col">Phone</th>
                    <th class="text-white" scope="col">Specialty</th>
                    <th class="text-white" scope="col">Room</th>
                    <th class="text-white" scope="col">Image</th>
                    <th class="text-white" scope="col">Delete</th>
                    <th class="text-white" scope="col">Update</th>

                    
                  </tr>
                </thead> 

                <tbody>
           
                    @foreach ($data as $doctor)
                        
                      <tr>
                        
                      <td>{{$doctor->name}}</td>
                      <td>{{$doctor->phone}}</td>
                      <td>{{$doctor->speciality}}</td>
                      <td>{{$doctor->room}}</td>
                      <td><img style="height: 100px; width:100px;" src="doctorimage/{{$doctor->image}}" ></td>
                      <td><a onclick="return confirm('are you sure to delete this?')" class="btn btn-danger" href="{{url('deleteDoctor',$doctor->id)}}">Delete</a></td>
                      <td><a class="btn btn-primary" href="{{url('updateDoctor',$doctor->id)}}">Update</a></td>
        
        
                      </tr>
        
                      @endforeach
        </div>
      </div>

    @include('admin.script')

  </body>
</html> 