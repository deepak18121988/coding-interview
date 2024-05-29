<x-layout.master-layout>
  <div class="d-flex">
    <h3 class="text-primary">Admin List</h3>
  </div>
  <div class="row col-md-12 custyle">
    <table class="table table-striped custab">
      <thead>
        <!-- <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a> -->
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
      </thead>
      @forelse($admins as $key=>$row)
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
      {!! $admins->links() !!}
  </div>
  <div class="row mt-5">
      <h5 class="text-danger">Notes: i just added basic functionalities of this dataflow, there can be added more
          functionalities such #Validaton #Proper data checking, Employee message checking,
      </h5>
      <h4><li>please run this command after running <br> php artisan migrate:fresh --seed </li></h4>

  </div>
</x-layout.master-layout>