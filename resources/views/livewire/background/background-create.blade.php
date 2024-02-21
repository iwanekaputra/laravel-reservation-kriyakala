<div>
    <div class="section-header">
        <h1>Add Background</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-6">
                <form wire:submit.prevent="save">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Service</label>
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
                            <label>Name Background</label>
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control @error('name')
                                border-danger
                            @enderror " placeholder="Putih  " wire:model="name">
                          </div>
                        <button class="btn btn-primary text-right" type="submit">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
