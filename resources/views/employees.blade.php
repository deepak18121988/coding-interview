<x-layout.master-layout>
  <div class="container">
    <div class="mt-3 row">
          <div class="col-4">
            <h3 class="text-primary">Employees List </h3>
          </div>  
            <div class="col-md-8 text-end">
            </div>
          <div class="col-12 text-center">
              <span class="text-danger text-center h6">Please click Name , you can see individual employee assigned issues </span>
            
        </div>
    </div>

    <div class="row col-md-12 custyle">
      <table class="table table-striped custab">
        <thead>
          <!-- <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a> -->
          <tr>
              <th>#</th>
              <th>Employee Name</th>
              <th>Email</th>
              <th>Total Issue Assigned</th>
              <th >Solved</th>
              <th >Pending</th>
          </tr>
        </thead>
        @forelse($employees as $key=>$row)
        <tr>
            <td>{{$key+1}}</td>
            <td><a href="{{url('my-messages/').'/'.$row->id}}"> {{$row->name}}</a></td>
            <td>{{$row->email}}</td>
            <td>{{$row->assigned_message_count+$row->solved_message_count}}</td>
            <td>{{$row->solved_message_count}}</td>
            <td>{{$row->assigned_message_count}}</td>
          </tr>
        @empty
          <tr>
            <td>No Data Found</td>
          </tr>
        @endforelse

      </table>
    </div>
    <div class="d-flex justify-content-center">
        {!! $employees->links() !!}
    </div>
    
  </div>  
</x-layout.master-layout>