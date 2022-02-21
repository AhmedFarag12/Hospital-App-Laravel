<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')

      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}
                    </div>
                         @endif
            <div class="container" style="padding:50px">
                    <form action="{{url('editDoctor',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="">Doctor Name</label>
                            <input style="color: #000" type="text" name="name" value="{{$data->name}}">
                        </div>

                        <div>
                            <label for="">Phone</label>
                            <input  style="color: #000" type="text" name="phone" value="{{$data->phone}}">
                        </div>

                        <div>
                            <label for="">Speciality</label>
                            <input  style="color: #000" type="text" name="speciality" value="{{$data->speciality}}">
                        </div>

                        <div>
                            <label for="">Room</label>
                            <input  style="color: #000" type="text" name="room" value="{{$data->room}}">
                        </div>

                        <div>
                            <label for="">Old Image</label>
                            <img style="height: 100px; width: 100px" src="doctorimage/{{$data->image}}" alt="">
                        </div>

                        <div>
                            <label for="">Change Image</label>
                            <input type="file" name="file" >
                        </div>

                        <div>
                            <input type="submit" value="Change" class="btn btn-primary">
                        </div>
                    </form>
            </div>

      </div>
    @include('admin.script')

  </body>
</html> 