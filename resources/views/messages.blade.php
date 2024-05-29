<x-layout.master-layout>

  <div class="container">
    
    <div class="mt-3">
        <div class="col-md-12">
            <h3 class="text-primary"> Message List <span class="text-danger text-center h6">(Select Employee and select one or more issues and click Assign_Now button to assign issue to an Employee )</span>  </h3>
        </div>
    </div>

    <form action="{{ route('assign') }}" method="POST" class="col-md-12 mt-5">
      @csrf
      <div class="row">
          <div class="col-3 text-right">Select Employee</div>
          <div class="col-6">
            <div class="form-group">
              <select name="employee_id" class="form-control chosen-select myselect" aria-label="Default select example" @required(true)>
                <option value="" disabled selected>Select Employee</option>
                @foreach ($employees as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-3">
              <button type="submit" class="btn btn-dark mb-3">Assign Now</button>
          </div>
      </div>

        @if ($errors->any())
            <div class="alert alert-danger col-12">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
        @endif

      <table class="table table-striped custab table-bordered">
        <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Message_Category</th>
              <th scope="col">Message</th>
              <th scope="col">Customer_Name</th>
              <th scope="col">Assigned To (Employee)</th>
              <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>

          @forelse ($messages as  $key => $row)
              <tr>
                  <th scope="row">
                      <div class="form-check">
                          <label class="form-check-label " for="flexCheckDefault">
                              {{ $key + 1 }}
                          </label>
                          @if ($row->status == 'new')
                              <input class=" form-check-input" name="msg_id[]" type="checkbox"
                                  value="{{ $row->id }}" id="flexCheckDefault">
                          @endif
                      </div>
                  </th>
                  <td>{{ $row->message_category->name }}</td>
                  <td>{{ $row->message }}</td>
                  <td>{{ $row->customer->name }}</td>
                  <td>
                      @if ($row->employee)
                          {{ $row->employee->name }}
                      @endif
                  </td>
                  <td>
                      @if ($row->status == 'new')
                          <span class="badge bg-primary">{{ $row->status }}</span>
                      @elseif($row->status == 'solved')
                          <span class="badge bg-success">{{ $row->status }}</span>
                      @else
                          <span class="badge bg-info">{{ $row->status }}</span>
                      @endif
                  </td>
              </tr>
          @empty
              <tr>
                  <th colspan="">No records</th>
              </tr>
          @endforelse
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
          {!! $messages->links() !!}
      </div>
    </form>
  </div>     
</x-layout.master-layout>