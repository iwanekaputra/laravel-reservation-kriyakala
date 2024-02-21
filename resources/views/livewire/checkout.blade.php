<div>
    <div class="container">
        <div class="section-body p-0">
            <div class="invoice p-2">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-12 col-lg-12 ">
                    <div class="invoice-title">
                      <h2>Order  {{ $invoice->order_id }}</h2>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <address>
                          <strong>Billed To:</strong><br>
                            {{ $invoice->name }}<br>
                            {{ $invoice->email }}<br>
                            {{ $invoice->nowa }}<br>
                        </address>
                      </div>

                    </div>
                    {{-- <div class="row">
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Order Date:</strong><br>
                          September 19, 2018<br><br>
                        </address>
                      </div>
                    </div> --}}
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col-12 col-md-12">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover table-md ">
                        <tr>
                            <th>Package/Additional</th>
                            <th class="text-center">Price</th>
                          </tr>
                          <tr>
                            @php
                               $date =  \Carbon\Carbon::parse(strtotime($invoice->in_date));
                            @endphp
                            <th>{{ $invoice->package }}</th>
                            @if ($date->isWeekend())
                                @if ($invoice->discount_package)
                                    <th class="text-center"><span  style="text-decoration: line-through" class="mr-3">Rp. {{ number_format((int) $priceNormal->price_weekend, 0,",",'.') }} </span> Rp. {{ number_format((int) $invoice->price_package, 0,",",'.') }}</th>
                                @else
                                    <th class="text-center">Rp. {{ number_format((int) $invoice->price_package, 0,",",'.') }}</th>
                                @endif
                            @elseif ($date->isWeekday())
                                @if ($invoice->discount_package)
                                    <th class="text-center"><span  style="text-decoration: line-through" class="mr-3">Rp. {{ number_format((int) $priceNormal->price_weekday, 0,",",'.') }} </span> Rp. {{ number_format((int) $invoice->price_package, 0,",",'.') }}</th>
                                @else
                                    <th class="text-center">Rp. {{ number_format((int) $invoice->price_package, 0,",",'.') }}</th>
                                @endif
                            @else
                                <th class="text-center">Rp. {{ number_format((int) $invoice->price_package, 0,",",'.') }}</th>
                            @endif


                        </tr>
                        @foreach ($invoice->additional as $key => $value)
                        <tr>
                            <th>{{ $key }}</th>

                            @php
                                $additional = DB::table('service_additionals')->where('name', $key)->first();

                                if($date->isWeekday()) {
                                    if($additional->discount_weekday != 0) {
                                        $promo = $additional->price_weekday;
                                    } else {
                                        $promo = false;
                                    }
                                } elseif($date->isWeekend()) {
                                    if($additional->discount_weekend != 0) {
                                        $promo = $additional->price_weekend;
                                    } else {
                                        $promo = false;
                                    }
                                }
                            @endphp

                            @if ($value == "FREE")
                                <th class="text-center">{{ $value }}</th>
                            @else
                                @if($promo)
                                    <th class="text-center"><span style="text-decoration: line-through">Rp. {{ number_format((int) $promo, 0,",",'.') }}</span> Rp. {{ number_format((int) $value, 0,",",'.') }}</th>
                                @else
                                    <th class="text-center">Rp. {{ number_format((int) $value, 0,",",'.') }}</th>
                                @endif
                            @endif
                        </tr>
                        @endforeach
                      </table>
                    </div>
                    <div class="row mt-4 justify-content-beetwen">
                        <div class="col-lg-8 text-end">
                            <hr class="mt-2 mb-2">
                            <div class="invoice-detail-item">
                              <div class="invoice-detail-name">Total</div>
                              <div class="invoice-detail-value invoice-detail-value-lg">Rp. {{ number_format((int) $invoice->price_total, 0,',','.') }}</div>
                            </div>
                          </div>
                      <div class="col-lg-4 text-right">
                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                            @if ($invoice->dp != null )
                                <div class="invoice-detail-name">Lakukan Dp 50% sebesar :</div>
                                <div class="invoice-detail-value invoice-detail-value-lg">Rp. {{ number_format((int) $invoice->dp, 0,',','.') }}</div>
                            @else
                                <div class="invoice-detail-name">Lakukan pembayaran full sebesar :</div>
                                <div class="invoice-detail-value invoice-detail-value-lg">Rp. {{ number_format((int) $invoice->price_total, 0,',','.') }}</div>
                            @endif

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="text-md-right">
                <a class="btn btn-primary btn-icon icon-left text-white" href="{{ $invoice->link_payment }}"><i class="fas fa-credit-card"></i> Process Payment</a>
              </div>
            </div>
          </div>
    </div>
</div>
