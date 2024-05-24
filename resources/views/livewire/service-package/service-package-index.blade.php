<div>
    <div class="section-header">
        <h1>Service Packages</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ route('admin.package.create') }}">Add Package</a>
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
                                        <th>Name Package</th>
                                        <th>Price Weekday</th>
                                        <th>Price Weekend</th>
                                        <th>Discount Weekday</th>
                                        <th>Discount Weekend</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($servicePackages as $servicePackage)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $servicePackage->service->name }}</td>
                                            <td>
                                                {{ $servicePackage->name }}
                                            </td>
                                            <td>
                                                Rp.
                                                {{ number_format((int) $servicePackage->price_weekday, 0, ',', '.') }}
                                            </td>
                                            <td>
                                                Rp.
                                                {{ number_format((int) $servicePackage->price_weekend, 0, ',', '.') }}

                                            </td>
                                            <td>
                                                {{ $servicePackage->discount_weekday }} %

                                            </td>
                                            <td>
                                                {{ $servicePackage->discount_weekend }} %

                                            </td>
                                            <td>
                                                <a href="{{ route('admin.package.edit', $servicePackage->id) }}"
                                                    class="btn btn-info ms-2">Edit</a>
                                                <a wire:click="confirmDelete({{ $servicePackage->id }})"
                                                    class="btn btn-danger ms-2 text-white">Delete</a>

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
