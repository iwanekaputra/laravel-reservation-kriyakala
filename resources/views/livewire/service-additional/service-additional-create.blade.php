<div>
    <div class="section-header">
        <h1>Add Additional</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-6">
                <form wire:submit.prevent="save">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name Service</label>
                                @error('service')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <select class="form-control @error('service')
                                border-danger
                            @enderror" wire:model="service">
                                    <option>------Pilih Service-------   </option>

                                @foreach ($services as $service)
                                  <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                                </select>
                            </div>
                          <div class="form-group">
                            <label>Name Additional</label>
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control @error('name')
                                border-danger
                            @enderror " placeholder="1 orang" wire:model="name">
                          </div>
                          <div class="form-group">
                            <label>Price Weekday</label>
                            @error('priceWeekday')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control @error('priceWeekday')
                                border-danger
                            @enderror " placeholder="10000" wire:model="priceWeekday">
                          </div>
                          <div class="form-group">
                            <label>Price Weekend</label>
                            @error('priceWeekend')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control @error('priceWeekend')
                                border-danger
                            @enderror " placeholder="10000" wire:model="priceWeekend">
                          </div>
                          <div class="form-group">
                            <label>Discount Weekday</label>
                            @error('discountWeekday')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="number" class="form-control @error('discountWeekday')
                                border-danger
                            @enderror " placeholder="100" wire:model="discountWeekday">
                          </div>
                          <div class="form-group">
                            <label>Discount Weekend</label>
                            @error('discountWeekend')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="number" class="form-control @error('discountWeekend')
                                border-danger
                            @enderror " placeholder="100" wire:model="discountWeekend">
                          </div>
                        <button class="btn btn-primary text-right">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
