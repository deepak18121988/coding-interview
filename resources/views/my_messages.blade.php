<x-layout.master-layout>
  <div class="container">
    <div class="mt-3 row">
          <div class="col-4">
            <h3 class="text-primary"> Message categores List </h3>
          </div>  
            <div class="col-md-8 text-end">
                <h4> Name: {{ $employee->name }} , Email: {{ $employee->email }}</h4>
            </div>
          <div class="col-12">
              <span class="text-danger text-center h6">This is without authentication when we will use authentication, This page can be accessed by only authenticated Employee & ONLY assigned issues will be loaded </span>
            
        </div>
    </div>
    <div class="col-md-12 custyle mt-1">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      <table class="table table-striped custab">
        <thead>
          <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Customer_Name</th>
              <th>Status</th>
              <th class="text-center">Action</th>
          </tr>
        </thead>
        @forelse($message_categores as $key=>$row)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$row->message_category ? $row->message_category->name : '' }}</td>
            <td>{{$row->customer? $row->customer->name :''}}</td>
            <td>
              @if($row->status == 'new')
                <span class="badge bg-success">{{$row->status}}</span>
              @elseif($row->status == 'assigned')
                <span class="badge bg-info">{{$row->status}}</span>
                
              @else
                <span class="badge bg-info">{{$row->status}}</span>
                            
              @endif

            </td>
            <td class="text-center">
                @if ($row->status == 'solved')
                    <button type="button" class="btn btn-success">Closed</button>
                @else
                    <form method="POST" action="{{ route('message.update', ['id' => $row->id]) }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary">Complete</button>
                    </form>
                @endif
            </td>
        </tr>
        @empty
          <tr>
            <td>No Data Found</td>
          </tr>
        @endforelse

      </table>
    </div>
</div>

  
</x-layout.master-layout>