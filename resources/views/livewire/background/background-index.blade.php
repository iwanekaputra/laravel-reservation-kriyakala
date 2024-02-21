<div>
    <div class="section-header">
        <h1>Background</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route('admin.background.create') }}">Add Background</a>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" >
                      <thead>
                        <tr>
                          <th class="text-center">
                            No
                          </th>
                          <th>Name Service</th>
                          <th>Name Background</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody >
                        @foreach ($backgroundColors as $backgroundColor)
                        <tr>
                            <td>
                              {{ $loop->iteration }}
                            </td>
                        <td>{{ $backgroundColor->service->name }}</td>
                            <td>
                             {{ $backgroundColor->name }}
                            </td>
                            <td>
                                {{-- <a href="{{ route("admin.background.show", $backgroundColor->id) }}" class="btn btn-secondary">Detail</a> --}}
                                <a href="{{ route("admin.background.edit", $backgroundColor->id) }}" class="btn btn-info ms-2">Edit</a>
                                {{-- <a wire:click="confirmDelete({{ $backgroundColor->id }})" class="btn btn-danger ms-2 text-white">Delete</a> --}}
                                <a wire:click="confirmDelete({{ $backgroundColor->id }})" class="btn btn-danger ms-2 text-white">Delete</a>

                            </td>

                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="text-end">

                    {{ $backgroundColors->links() }}
                </div>
              </div>
            </div>
          </div>
      </div>
</div>
