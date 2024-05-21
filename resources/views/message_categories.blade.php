<x-layout.master-layout>
  <div class="row col-md-12 custyle">
    <table class="table table-striped custab">
      <thead>
        <!-- <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a> -->
        <tr>
            <th>Sr. No.</th>
            <th>Category Name</th>
            <th class="text-center">Action</th>
        </tr>
      </thead>
      @forelse($message_categores as $key=>$row)
      <tr>
          <td>{{$key+1}}</td>
          <td>{{$row->name}}</td>
          <td class="text-center">
            <a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a>
            <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
          </td>
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