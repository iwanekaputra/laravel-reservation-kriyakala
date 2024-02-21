<div>
    <div class="container mt-5">
        <h2 class="text-center">Form Booking</h2>
        <div class="row mt-5 justify-content-center">

            <div class="col-12 col-sm-6 col-lg-6 ">
                <form wire:submit.prevent="save">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                @error('name')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                {{-- <div class="text-danger">asdasd</div> --}}
                                <input type="text" class="form-control @error('name')
                            border-danger
                        @enderror " placeholder="Kriyakala *" wire:model="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                @error('email')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control @error('email')
                        border-danger
                    @enderror" placeholder="abdul@gmail.com" wire:model="email">
                            </div>
                            <div class="form-group">
                                <label>No. Whatsapp</label>
                                <div class="text-danger">Note : Informasi pesanan akan kami kirim lewat wa</div>
                                @error('nowa')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control @error('nowa')
                        border-danger
                    @enderror" placeholder="081363728192" wire:model="nowa">
                            </div>

                            <div class="form-group">
                                <label class="d-block">Studio</label>
                                @error('studio')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                @foreach ($studios as $studio)
                                <div class="form-check">
                                    <input class="form-check-input @error('studio')
                                border-danger
                            @enderror" type="radio" name="{{ $studio->name }}" id="{{ $studio->name }}"
                                        value="{{ $studio->name }}" wire:model="studio">
                                    <label class="form-check-label" for="{{ $studio->name }}">
                                        {{ $studio->name }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                            @if ($services)
                            <div class="form-group">
                                <label class="d-block">Studio Service</label>
                                @error('selectService')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <div class="row">
                                    @foreach ($services as $service)
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input @error('selectService')
                            border-danger
                        @enderror" type="radio" name="{{ $service->name }}" id="{{ $service->name }}1"
                                                value="{{ $service->name }}" wire:model="selectService">
                                            <label class="form-check-label" for="{{ $service->name }}1">
                                                {{ $service->name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                            @endif

                            @if ($servicePackages)
                            <div class="form-group">
                                <label class="d-block">Package</label>
                                @error('package')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <div class="row">
                                    @foreach ($servicePackages as $servicePackage)
                                    <div class="col-6">


                                        <div class="form-check">
                                            <input class="form-check-input @error('package')
                            border-danger
                        @enderror" type="radio" name="{{ $servicePackage->name }}" id="{{ $servicePackage->name }}1"
                                                value="{{ $servicePackage->name }}" wire:model="package">
                                            <label class="form-check-label" for="{{ $servicePackage->name }}1">
                                                {{ $servicePackage->name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif



                            @if ($serviceAdditionals)
                            <div class="form-group">
                                <label class="d-block">Additional</label>
                                @error('selectedServiceAdditional')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <div class="row">
                                    @foreach ($serviceAdditionals as $serviceAdditional)
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input @error('selectedServiceAdditional')
                                border-danger
                            @enderror" type="checkbox" id="{{ $serviceAdditional->name }}"
                                                wire:model="selectedServiceAdditional.{{ $serviceAdditional->id }}"
                                                value="{{ $serviceAdditional->name }}">
                                            <label class="form-check-label" for="{{ $serviceAdditional->name }}">
                                                {{ $serviceAdditional->name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>


                            </div>
                            @endif

                            @if ($backgroundColors)
                            <div class="form-group">
                                <label class="d-block">Main Background</label>
                                @error('mainBackground')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <div class="row">
                                    @foreach ($backgroundColors as $backgroundColor)
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input @error('mainBackground')
                                border-danger
                            @enderror" type="radio" name="{{ $backgroundColor->name }}"
                                                id="{{ $backgroundColor->name }}" value="{{ $backgroundColor->name }}"
                                                wire:model="mainBackground">
                                            <label class="form-check-label" for="{{ $backgroundColor->name }}">
                                                {{ $backgroundColor->name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="d-block">Additional Background</label>
                                @error('additionalBackground')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <div class="row">
                                    @foreach ($backgroundColors as $backgroundColor)
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input @error('additionalBackground')
                                border-danger
                            @enderror" type="radio" name="{{ $backgroundColor->name }}-additional"
                                                id="{{ $backgroundColor->name }}-additional"
                                                value="{{ $backgroundColor->name }}" wire:model="additionalBackground">
                                            <label class="form-check-label"
                                                for="{{ $backgroundColor->name }}-additional">
                                                {{ $backgroundColor->name }}
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Tidak Perlu-additional"
                                                id="Tidak Perlu-additional" value="0" wire:model="additionalBackground">
                                            <label class="form-check-label" for="Tidak Perlu-additional">
                                                Tidak Perlu
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endif

                            @if ($isShowAppointment)
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
                            @endif


                            @if ($times)
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
                                                <input type="radio" name="{{ $time->hour }}" value="{{ $time->hour }}"
                                                    class="selectgroup-input" wire:model="time">
                                                <span class="selectgroup-button">{{ $time->hour }}</span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            @endif

                            <button type="submit" class="btn btn-primary w-100">Simpan
                                @if ($isShowLoading)
                                <img src="/stisla/dist/assets/img/spinner-white.svg" alt="">
                                @endif
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>