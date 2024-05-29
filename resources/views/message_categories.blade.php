<x-layout.master-layout>
  <div class="d-flex">
    <h3 class="text-primary">Message categores List</h3>
  </div>
  <div class="row col-md-12 custyle">
    <table class="table table-striped custab">
      <thead>
        <!-- <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a> -->
        <tr>
            <th>#</th>
            <th>Category Name</th>
        </tr>
      </thead>
      @forelse($message_categores as $key=>$row)
      <tr>
          <td>{{$key+1}}</td>
          <td>{{$row->name}}</td>
      </tr>
      @empty
        <tr>
          <td>No Data Found</td>
        </tr>
      @endforelse

    </table>
  </div>
  <div class="d-flex justify-content-center">
      {!! $message_categores->links() !!}
  </div>
</x-layout.master-layout>