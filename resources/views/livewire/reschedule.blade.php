<div>
    <div class="container mt-5">
        <h2 class="text-center">Reschedule</h2>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-6 col-lg-6 ">
                <form wire:submit.prevent="searchBooking">
                    <div class="form-group">
                        <label>No Invoice</label>
                        <div class="d-flex">
                            <input type="text" class="form-control @error('search')
                            border-danger
                        @enderror " placeholder="INV-8021" wire:model="search">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>


                    </div>
                </form>
            </div>
        </div>

        @if ($booking)
            <p class="text-center">Invoice {{ $booking->order_id }} Ditemukan</p>

            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-6 ">
                    <form wire:submit.prevent="reschedule">
                        <div class="form-group">
                            <label>Appointment</label>
                            @error('appointment')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="date" class="form-control @error('appointment')
                            border-danger
                        @enderror" wire:model="appointment">
                          </div>

                          <div class="form-group">
                            <label class="form-label">Hour</label>
                            @error('time')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror

                                    <div class="selectgroup w-100">
                                        <div class="row">
                                            @foreach ($times as $time)
                                                <div class="col-3">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="{{ $time->hour }}" value="{{ $time->hour }}" class="selectgroup-input" wire:model="time">
                                                        <span class="selectgroup-button">{{ $time->hour }}</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                          </div>

                          <button type="submit" class="btn btn-primary w-100">Reschedule
                          </button>
                    </form>

                </div>
            </div>
        @elseif ($message)
        <div class="text-center">Invoice tidak ditemukan</div>
        @endif

    </div>


</div>
