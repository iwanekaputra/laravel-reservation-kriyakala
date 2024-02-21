<div>
    <div class="section-header">
        <h1>Studio</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.studio.create') }}" class="btn btn-primary">Add Studio</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>
                          <th class="text-center">
                            No
                          </th>
                          <th>Name Studio</th>
                          <th>Created_at</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($studios as $studio)
                        <tr>
                            <td>
                              {{ $loop->iteration }}
                            </td>
                            <td>{{ $studio->name }}</td>
                            <td>{{ $studio->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route("admin.studio.edit", $studio->id) }}" class="btn btn-info ms-2">Edit</a>
                                <a wire:click="confirmDelete({{ $studio->id }})" class="btn btn-danger ms-2 text-white">Delete</a>
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
