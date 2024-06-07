<div>
    <div class="container-fluid mt-5">
        <div class="row" style="margin: 200px 0">

            <div class="col-12 col-sm-3 col-lg-3 ">
                <div class="row">
                    <div class="col-12 shadow-sm border p-4">
                        <div class="">
                            <h6 class="">Services</h6>
                            <select class="form-select w-100" aria-label="Default select example" wire:model="serviceId">
                                <option value="0">---Choose Service---</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8 col-lg-8 p-4">
                <div class="row justify-content-between">

                    @foreach ($packages as $package)
                        <div class="col-6 col-lg-4 mt-3">
                            <a href="{{ route('product.show', $package->id) }}" class="text-decoration-none">
                                <div class="card">
                                    @if ($package->galleries->count())
                                        <div class="card-img border"
                                            style="background-image: url({{ Storage::url('galleries/' . $package->galleries->first()->image) }}); background-size : contain; background-repeat : no-repeat; background-position :center; border-radius : 10px 10px 1px 1px;">
                                        </div>
                                    @endif

                                    {{-- <img src="{{ Storage::url('galleries/' .$package->galleries->first()->image); }}"
                                    class="card-img-top" alt="..."> --}}
                                    <div class="card-body text-center p-2">
                                        <h5 class="">{{ $package->name }}
                                            {{ $package->service->id == 1 || $package->service->id == 8 ? '-' . $package->service->name : '' }}
                                        </h5>
                                        <p class="card-text">Rp.
                                            {{ number_format($package->price_weekday, 0, ',', '.') }} (Weekday)
                                            <span class="d-block">Rp.
                                                {{ number_format($package->price_weekend, 0, ',', '.') }}
                                                (Weekend)
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="row justify-content-end mt-5">
                    <div class="col-12 col-lg-2">
                        {{ $packages->links() }}
                    </div>
                </div>


            </div>
        </div>


    </div>


</div>
