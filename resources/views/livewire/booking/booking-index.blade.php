<div>
    <div class="section-header">
        <h1>Booking</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  {{-- <h4>Basic DataTables</h4> --}}
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" >
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
                      <tbody >
                        @foreach ($bookings as $booking)
                        <tr>
                            <td>
                              {{ $loop->iteration }}
                            </td>
                            <td>{{ $booking->order_id }}</td>
                            <td>
                             {{ $booking->name }}
                            </td>
                            <td>
                              {{ $booking->nowa }}
                            </td>
                            <td>
                              {{ $booking->in_date }}
                            </td>
                            <td>Rp. {{ number_format((int)$booking->price_total, 0,',','.') }}</td>
                            <td>
                                @if ($booking->status_payment == "DP 50%")
                                    <div class="badge badge-info">{{ $booking->status_payment }}</div>
                                @elseif ($booking->status_payment == "Proses")
                                    <div class="badge badge-warning">{{ $booking->status_payment }}</div>
                                @elseif ($booking->status_payment == "Lunas")
                                    <div class="badge badge-success">{{ $booking->status_payment }}</div>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route("admin.booking.show", $booking->id) }}" class="btn btn-secondary">Detail</a>
                                <a href="{{ route("admin.booking.edit", $booking->id) }}" class="btn btn-info ms-2">Edit</a>
                                {{-- <a wire:click="confirmDelete({{ $booking->id }})" class="btn btn-danger ms-2 text-white">Delete</a> --}}
                                <a wire:click="confirmDelete({{ $booking->id }})" class="btn btn-danger ms-2 text-white">Delete</a>

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
</div>
