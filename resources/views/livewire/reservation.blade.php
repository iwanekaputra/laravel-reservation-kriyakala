<div>
    <div class="container" style="margin-top: 100px; margin-bottom : 100px">
        <div class="row align-items-center p-4">
            <div class="col-4 col-lg-4 {{ $currentStep == 1 ? 'bg-salmon' : '' }}">
                <h5 class="text-center {{ $currentStep == 1 ? 'text-white' : 'text-dark' }}">Packages</h5>
            </div>
            <div class="col-4 col-lg-4 {{ $currentStep == 2 ? 'bg-salmon' : '' }}">
                <h5 class="text-center {{ $currentStep == 2 ? 'text-white' : 'text-dark' }}">Booking Detail</h5>

            </div>
            <div class="col-4 col-lg-4 ">
                <h5 class="text-center text-dark">Confirmation</h5>
            </div>
        </div>

        <div class="row mt-2 justify-content-center p-4 {{ $currentStep != 1 ? 'd-none' : '' }}">
            <div class="col-lg-8 border  p-4">
                <h4>Detail Product</h4>
                <div class="d-flex align-items-center mt-3" style="gap: 10px">
                    <i class="bi bi-box-seam color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Package Type <span class="d-block font-bold"
                                style="font-size: 16px">{{ $invoice->package }}</span> </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-tag color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Price <span class="d-block font-bold" style="font-size: 16px">Rp.
                                {{ number_format((int) $invoice->price_package, 0, ',', '.') }}</span> </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-camera-fill color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Studio <span class="d-block font-bold" style="font-size: 16px">{{ $invoice->studio }}</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-boxes color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Additional Package
                            @foreach ($invoice->additional as $key => $value)
                                <span class="d-block font-bold" style="font-size: 16px">
                                    {{ $value[1] }} x {{ $key }}
                                </span>
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-calendar-date color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Date <span class="d-block font-bold" style="font-size: 16px">{{ $invoice->in_date }}</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-alarm color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Time <span class="d-block font-bold" style="font-size: 16px">{{ $invoice->time }} -
                                {{ $invoice->out_time }}</span>
                        </p>
                    </div>
                </div>

                <button class="btn w-100" wire:click="changeStep(2)">Next</button>
            </div>
        </div>


        <div class="row mt-2 p-4 {{ $currentStep != 2 ? 'd-none' : '' }}">
            <div class="col-lg-6 border mt-3 p-4">
                <h4>Detail User</h4>
                <div class="d-flex align-items-center mt-3" style="gap: 10px">
                    <i class="bi bi-people color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Name <span class="d-block font-bold" style="font-size: 16px">{{ $invoice->name }}</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-phone color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>No Whatsapp <span class="d-block font-bold"
                                style="font-size: 16px">{{ $invoice->nowa }}</span> </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-envelope color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Email <span class="d-block font-bold" style="font-size: 16px">{{ $invoice->email }}</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 border mt-3 p-4">
                <h4>Detail Product</h4>
                <div class="d-flex align-items-center mt-3" style="gap: 10px">
                    <i class="bi bi-box-seam color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Package Type <span class="d-block font-bold"
                                style="font-size: 16px">{{ $invoice->package }}</span> </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-tag color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Price <span class="d-block font-bold" style="font-size: 16px">Rp.
                                {{ number_format((int) $invoice->price_package, 0, ',', '.') }}</span> </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-camera-fill color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Studio <span class="d-block font-bold" style="font-size: 16px">{{ $invoice->studio }}</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-boxes color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Additional Package
                            @foreach ($invoice->additional as $key => $value)
                                <span class="d-block font-bold" style="font-size: 16px">{{ $key }}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-calendar-date color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Date <span class="d-block font-bold" style="font-size: 16px">{{ $invoice->in_date }}</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center" style="gap: 10px">
                    <i class="bi bi-alarm color-salmon" style="font-size: 30px"></i>
                    <div>
                        <p>Time <span class="d-block font-bold" style="font-size: 16px">{{ $invoice->time }}</span>
                        </p>
                    </div>
                </div>

                <hr>

                <table class="table border-0 table-md ">

                    <tr>
                        @php
                            $date = \Carbon\Carbon::parse(strtotime($invoice->in_date));
                        @endphp
                        <th>{{ $invoice->package }}</th>
                        @if ($date->isWeekend())
                            @if ($invoice->discount_package)
                                <th class="" style="text-align: end"><span
                                        style="text-decoration: line-through" class="mr-3">Rp.
                                        {{ number_format((int) $priceNormal->price_weekend, 0, ',', '.') }} </span> Rp.
                                    {{ number_format((int) $invoice->price_package, 0, ',', '.') }}</th>
                            @else
                                <th class="" style="text-align: end">Rp.
                                    {{ number_format((int) $invoice->price_package, 0, ',', '.') }}</th>
                            @endif
                        @elseif ($date->isWeekday())
                            @if ($invoice->discount_package)
                                <th class="" style="text-align: end"><span
                                        style="text-decoration: line-through" class="mr-3">Rp.
                                        {{ number_format((int) $priceNormal->price_weekday, 0, ',', '.') }} </span> Rp.
                                    {{ number_format((int) $invoice->price_package, 0, ',', '.') }}</th>
                            @else
                                <th class="" style="text-align: end">Rp.
                                    {{ number_format((int) $invoice->price_package, 0, ',', '.') }}</th>
                            @endif
                        @else
                            <th class="" style="text-align: end">Rp.
                                {{ number_format((int) $invoice->price_package, 0, ',', '.') }}</th>
                        @endif


                    </tr>
                    @foreach ($invoice->additional as $key => $value)
                        <tr>
                            <th>{{ $value[1] }} x {{ $key }}</th>

                            @php
                                $additional = DB::table('service_additionals')->where('name', $key)->first();

                                if ($date->isWeekday()) {
                                    if ($additional->discount_weekday != 0) {
                                        $promo = $additional->price_weekday;
                                    } else {
                                        $promo = false;
                                    }
                                } elseif ($date->isWeekend()) {
                                    if ($additional->discount_weekend != 0) {
                                        $promo = $additional->price_weekend;
                                    } else {
                                        $promo = false;
                                    }
                                }
                            @endphp

                            @if ($value[0] == 'FREE')
                                <th class="" style="text-align: end">{{ $value[0] }}</th>
                            @else
                                @if ($promo)
                                    <th class="" style="text-align: end"><span
                                            style="text-decoration: line-through">Rp.
                                            {{ number_format((int) $promo, 0, ',', '.') }}</span> Rp.
                                        {{ number_format((int) $value[0], 0, ',', '.') }}</th>
                                @else
                                    <th class="" style="text-align: end">Rp.
                                        {{ number_format((int) $value[0], 0, ',', '.') }}</th>
                                @endif
                            @endif
                        </tr>
                    @endforeach


                </table>

                <table class="table border-0 table-md text-end">
                    <tr>
                        <th class="">Total</th>
                        <th style="text-align: end"><span>Rp.
                                {{ number_format((int) $invoice->price_total, 0, ',', '.') }}</th>

                        {{-- <th>Rp. {{ number_format((int) $invoice->price_total, 0,',','.') }}</th> --}}
                    </tr>
                </table>
                <table class="table border-0 table-md text-end mt-5">
                    <tr>

                        @if ($invoice->dp != null)
                            <th>Lakukan Dp 50% sebesar :</th>
                            <th class="" style="text-align: end">Rp.
                                {{ number_format((int) $invoice->dp, 0, ',', '.') }}</th>
                        @else
                            <th>Lakukan pembayaran full sebesar :</th>
                            <th class="" style="text-align: end">Rp.
                                {{ number_format((int) $invoice->price_total, 0, ',', '.') }}</th>
                        @endif

                    </tr>
                </table>

                <div style="text-align: end" class="mt-5">
                    <a class="p-3 rounded bg-salmon text-white" href="{{ $invoice->link_payment }}"><i
                            class="bi bi-credit-card"></i> Process Payment</a>
                </div>
            </div>
        </div>
    </div>

</div>
