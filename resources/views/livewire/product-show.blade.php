<div>
    <div class="container" style="margin-top: 150px; margin-bottom : 150px">
        <div class="row">
            <div class="col-12 col-lg-6" style="height: 400px">
                @if ($package->galleries->count())
                    <div class="img-show border"
                        style="background-image: url({{ Storage::url('galleries/' . $package->galleries->first()->image) }}); background-size : contain; background-repeat : no-repeat; background-position :center; border-radius : 10px 10px 1px 1px;">
                    </div>
                @endif

            </div>
            <div class="col-12 col-lg-6 mt-3">
                <h3>{{ $package->name }}</h3>
                <div>
                    <p>Price<span class="d-block">Rp.
                            {{ number_format((int) $package->price_weekday, 0, ',', '.') }}</span></p>

                </div>

                <hr>
                <div class="desc color-grey">
                    {!! $package->description !!}
                </div>
                <hr>
                <div>
                    <button class="btn w-100 btn-secondary" wire:click="showForm">
                        Online Reservation
                    </button>
                    @if ($isShowForm)
                        <div class="mt-4">
                            <p class="font-bold">Online Reservation</p>
                            <form wire:submit.prevent="save">
                                <div class="did-floating-label-content">
                                    <input class="did-floating-input" type="text" placeholder="" wire:model="name">
                                    <label class="did-floating-label">Name</label>
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="did-floating-label-content">


                                    <input class="did-floating-input" type="email" placeholder="" wire:model="email">
                                    <label class="did-floating-label">Email</label>
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="did-floating-label-content">


                                    <input class="did-floating-input" type="number" placeholder="" wire:model="nowa">
                                    <label class="did-floating-label">No. Whatsapp</label>
                                    @error('nowa')
                                        <div class="text-danger">
                                            {{ $message }}</div>
                                    @enderror
                                    <div class="text-danger">Note : Informasi pesanan akan kami kirim lewat wa</div>

                                </div>

                                <div class="form-group">
                                    <label class="d-block color-salmon">Additional</label>
                                    @error('selectedServiceAdditional')
                                        <div class="text-danger">
                                            {{ $message }}</div>
                                    @enderror
                                    <div class="row">
                                        @foreach ($serviceAdditionals as $serviceAdditional)
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input @error('selectedServiceAdditional')
                                border-danger
                            @enderror"
                                                        type="checkbox" id="{{ $serviceAdditional->name }}"
                                                        wire:model="selectedServiceAdditional.{{ $serviceAdditional->id }}"
                                                        value="{{ $serviceAdditional->name }}">
                                                    <label class="form-check-label color-grey"
                                                        for="{{ $serviceAdditional->name }}">
                                                        {{ $serviceAdditional->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                    <div class="form-group mt-3">
                                        <label class="d-block color-salmon">Main Background</label>
                                        @error('mainBackground')
                                            <div class="text-danger">
                                                {{ $message }}</div>
                                        @enderror
                                        <div class="row">
                                            @foreach ($backgroundColors as $backgroundColor)
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input @error('mainBackground')
                                border-danger
                            @enderror"
                                                            type="radio" name="{{ $backgroundColor->name }}"
                                                            id="{{ $backgroundColor->name }}"
                                                            value="{{ $backgroundColor->name }}"
                                                            wire:model="mainBackground">
                                                        <label class="form-check-label color-grey"
                                                            for="{{ $backgroundColor->name }}">
                                                            {{ $backgroundColor->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>


                                </div>

                                <div class="form-group">
                                    <label class="d-block color-salmon">Additional Background</label>
                                    @error('additionalBackground')
                                        <div class="text-danger">
                                            {{ $message }}</div>
                                    @enderror
                                    <div class="row">
                                        @foreach ($backgroundColors as $backgroundColor)
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input @error('additionalBackground')
                                        border-danger
                                    @enderror"
                                                        type="radio" name="{{ $backgroundColor->name }}-additional"
                                                        id="{{ $backgroundColor->name }}-additional"
                                                        value="{{ $backgroundColor->name }}"
                                                        wire:model="additionalBackground">
                                                    <label class="form-check-label color-grey"
                                                        for="{{ $backgroundColor->name }}-additional">
                                                        {{ $backgroundColor->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="Tidak Perlu-additional" id="Tidak Perlu-additional"
                                                    value="0" wire:model="additionalBackground">
                                                <label class="form-check-label" for="Tidak Perlu-additional">
                                                    Tidak Perlu
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="color-salmon">Appointment</label>
                                    @error('appointment')
                                        <div class="text-danger">
                                            {{ $message }}</div>
                                    @enderror
                                    <input type="date"
                                        class="form-control color-grey @error('appointment')
                                border-danger
                            @enderror"
                                        wire:model="appointment">
                                </div>

                                @if ($times)
                                    <div class="form-group">
                                        <label class="form-label color-salmon">Hour</label>
                                        @error('time')
                                            <div class="text-danger">
                                                {{ $message }}</div>
                                        @enderror

                                        <div class="selectgroup w-100">
                                            <div class="row">
                                                @foreach ($times as $time)
                                                    <div class="col-3">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="{{ $time->hour }}"
                                                                value="{{ $time->hour }}" class="selectgroup-input"
                                                                wire:model="time">
                                                            <span
                                                                class="selectgroup-button">{{ $time->hour }}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                @endif

                                <button class="btn w-100 btn-secondary" type="submit">
                                    Reserve Now
                                </button>
                            </form>
                        </div>
                    @endif

                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-5">
            <div class="col-12">
                <h4>Additional Information</h4>
                <div class="desc color-grey">
                    {!! $package->additional_description !!}

                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-12">
                <h4>Related Products</h4>

            </div>

        </div>
        <div class="row justify-content-between">
            @foreach ($relatedProducts as $relatedProduct)
                <div class="col-6 col-lg-4 mt-3">
                    <a href="{{ route('product.show', $relatedProduct->id) }}" class="text-decoration-none">
                        <div class="card">
                            @if ($relatedProduct->galleries->count())
                                <div class="card-img border"
                                    style="background-image: url({{ Storage::url('galleries/' . $relatedProduct->galleries->first()->image) }}); background-size : contain; background-repeat : no-repeat; background-position :center; border-radius : 10px 10px 1px 1px;">
                                </div>
                            @endif
                            {{-- <img src="{{ Storage::url('galleries/' .$relatedProduct->galleries->first()->image); }}"
                            class="card-img-top" alt="..."> --}}
                            <div class="card-body text-center p-2">
                                <h5 class="">{{ $relatedProduct->name }}</h5>
                                <p class="card-text">Rp.
                                    {{ number_format((int) $relatedProduct->price_weekday, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</div>
