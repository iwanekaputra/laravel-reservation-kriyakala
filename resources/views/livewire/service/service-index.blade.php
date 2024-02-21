<div>
    <div class="section-header">
        <h1>Service</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route('admin.service.create') }}">Add Service</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>
                          <th class="text-center">
                            No
                          </th>
                          <th>Studio</th>
                          <th>Name Service</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($services as $service)
                        <tr>
                            <td>
                              {{ $loop->iteration }}
                            </td>
                            <td>{{ $service->studio->name }}</td>
                            <td>
                             {{ $service->name }}
                            </td>
                            <td>
                                <a href="{{ route("admin.service.edit", $service->id) }}" class="btn btn-info ms-2">Edit</a>
                                <a wire:click="confirmDelete({{ $service->id }})" class="btn btn-danger ms-2 text-white">Delete</a>
                            </td>


                          </tr>
                        @empty
                        <div class="text-center">Tidak ada data</div>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
</div>
