{{-- <div>
    <div class="section-header">
        <h1>Booking</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th>Invoice</th>
                                        <th>Nama</th>
                                        <th>No wa</th>
                                        <th>Date</th>
                                        <th>Total Price</th>
                                        <th>Status Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings->groupBy('order_id') as $booking => $value)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $booking }}</td>
                                            <td>
                                                {{ $value[0]->name }}
                                            </td>
                                            <td>
                                                {{ $value[0]->nowa }}
                                            </td>
                                            <td>
                                                {{ $value[0]->in_date }}
                                            </td>
                                            <td>Rp. {{ number_format((int) $value[0]->price_total, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($value[0]->status_payment == 'DP 50%')
                                                    <div class="badge badge-info">{{ $value[0]->status_payment }}</div>
                                                @elseif ($value[0]->status_payment == 'Proses')
                                                    <div class="badge badge-warning">{{ $value[0]->status_payment }}
                                                    </div>
                                                @elseif ($value[0]->status_payment == 'Lunas')
                                                    <div class="badge badge-success">{{ $value[0]->status_payment }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.booking.show', $value[0]->id) }}"
                                                    class="btn btn-secondary">Detail</a>
                                                <a href="{{ route('admin.booking.edit', $value[0]->id) }}"
                                                    class="btn btn-info ms-2">Edit</a>
                                                <a wire:click="confirmDelete({{ $value[0]->id }})"
                                                    class="btn btn-danger ms-2 text-white">Delete</a>
                                                <a wire:click="confirmDelete('{{ $booking }}')"
                                                    class="btn btn-danger ms-2 text-white">Delete</a>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="text-end">

                        {{ $bookings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}




<div>
    <div class="section-header">
        <h1>Booking</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-end">
                        {{-- <a class="btn btn-primary" href="{{ route('admin.package.create') }}">Add Package</a> --}}
                        <div class="col-5 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="">Periode</label>
                                <input type="text" name="datefilter" value="{{ $filterDate }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th>Invoice</th>
                                        <th>Nama</th>
                                        <th>No wa</th>
                                        <th>Date</th>
                                        <th>Total Price</th>
                                        <th>Status Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($bookings->count()); --}}
                                    @forelse ($bookings->groupBy('order_id') as $booking => $value)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>{{ $booking }}</td>
                                            <td>
                                                {{ $value[0]->name }}
                                            </td>
                                            <td>
                                                {{ $value[0]->nowa }}
                                            </td>
                                            <td>
                                                {{ $value[0]->in_date }}
                                            </td>
                                            <td>Rp. {{ number_format((int) $value[0]->price_total, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($value[0]->status_payment == 'DP 50%')
                                                    <div class="badge badge-info">{{ $value[0]->status_payment }}</div>
                                                @elseif ($value[0]->status_payment == 'Proses')
                                                    <div class="badge badge-warning">{{ $value[0]->status_payment }}
                                                    </div>
                                                @elseif ($value[0]->status_payment == 'Lunas')
                                                    <div class="badge badge-success">{{ $value[0]->status_payment }}
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.booking.show', $value[0]->id) }}"
                                                    class="btn btn-secondary">Detail</a>
                                                <a href="{{ route('admin.booking.edit', $value[0]->id) }}"
                                                    class="btn btn-info ms-2">Edit</a>
                                                <button class="btn btn-danger"
                                                    onclick="deleteBooking({{ $value[0]->id }})"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i>Hapus</button>

                                            </td>

                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        window.addEventListener('okelah', event => {
            window.location.href =
                `https://reservation.kriyakala.id/admin/bookings?startDate=${event.detail.startDate}&endDate=${event.detail.endDate}`;
        });

        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {

            window.livewire.emit('filter', {
                start: picker.startDate.format('YYYY-MM-DD'),
                end: picker.endDate.format('YYYY-MM-DD')
            });

            // window.livewire.emit('filter', {
            //     start: picker.startDate.format('MM/DD/YYYY'),
            //     end: picker.endDate.format('MM/DD/YYYY')
            // });
            console.log(picker.startDate.format('YYYY-MM-DD'));
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        function deleteBooking(id) {
            swal({
                    title: 'Yakin di hapus?',
                    text: '',
                    icon: 'error',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.livewire.emit('deleteBooking', id);

                    }
                });
        }
    </script>
</div>
