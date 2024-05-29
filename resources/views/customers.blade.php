<x-layout.master-layout>
  <div class="d-flex">
    <h3 class="text-primary">Customers List</h3>
  </div>
  <div class="row col-md-12 custyle">
    <table class="table table-striped custab">
      <thead>
        <tr>
            <th>#</th>
            <th>Customer Name</th>
            <th>Email</th>
        </tr>
      </thead>
      @forelse($customers as $key=>$row)
      <tr>
          <td>{{$key+1}}</td>
          <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
      </tr>
      @empty
      <tr>
        <td>No Data Found</td>
      </tr>
      @endforelse

    </table>
  </div>
  <div class="d-flex justify-content-center">
      {!! $customers->links() !!}
  </div>

</x-layout.master-layout>