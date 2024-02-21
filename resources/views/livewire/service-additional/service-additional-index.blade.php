<div>
    <div class="section-header">
        <h1>Additionals</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route('admin.additional.create') }}">Add Additionals</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>
                          <th class="text-center">
                            No
                          </th>
                          <th>Name Service</th>
                          <th>Name Additional</th>
                          <th>Price Weekday</th>
                          <th>Price Weekend</th>
                          <th>Discount Weekday</th>
                          <th>Discount Weekend</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($serviceAdditionals as $serviceAdditional)
                        <tr>
                            <td>
                              {{ $loop->iteration }}
                            </td>
                            <td>{{ $serviceAdditional->service->name }}</td>
                            <td>
                             {{ $serviceAdditional->name }}
                            </td>
                            <td>
                             Rp. {{ number_format((int) $serviceAdditional->price_weekday , 0, ',', '.') }}
                            </td>
                            <td>
                             Rp.    {{ number_format((int) $serviceAdditional->price_weekend , 0, ',', '.') }}
                            <td>
                                {{ $serviceAdditional->discount_weekday }} %
                            </td>
                            <td>
                                {{ $serviceAdditional->discount_weekend }} %
                            </td>

                            <td>
                                <a href="{{ route("admin.additional.edit", $serviceAdditional->id) }}" class="btn btn-info ms-2">Edit</a>
                                <a wire:click="confirmDelete({{ $serviceAdditional->id }})" class="btn btn-danger ms-2 text-white">Delete</a>

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
