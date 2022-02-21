
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

      <div class="page-body-wrapper">
          <div >
        <table class="table">
            <thead >
              <tr>
                <th class="text-white" scope="col">Customer Name</th>
                <th class="text-white" scope="col">E-mail</th>
                <th class="text-white" scope="col">Phone</th>
                <th class="text-white" scope="col">Doctor Name</th>
                <th class="text-white" scope="col">Date</th>
                <th class="text-white" scope="col">Message</th>
                <th class="text-white" scope="col">Status</th>
                <th class="text-white" scope="col">Approve</th>
                <th class="text-white" scope="col">Cancel</th>


              </tr>
            </thead>
            <tbody>
           
            @foreach ($data as $appoint)
                
          

              <tr>
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->phone}}</td>
                <td>{{$appoint->doctor}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a></td>
                <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</a></td>



              </tr>

              @endforeach

          
          
        
            </tbody>
          </table>
        </div>
      </div>



    @include('admin.script')

  </body>
</html> 