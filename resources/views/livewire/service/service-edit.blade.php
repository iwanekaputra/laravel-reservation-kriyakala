<div>
    <div class="section-header">
        <h1>Edit Service</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-6">
                <form wire:submit.prevent="update">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Studio</label>
                                @error('studio')
                                <div class="text-danger">
                                    {{ $message }}</div>
                                @enderror
                                <select class="form-control @error('studio')
                                border-danger
                            @enderror" wire:model="studio">
                                    <option>------Pilih Studio-------   </option>

                                @foreach ($studios as $studio)
                                  <option value="{{ $studio->id }}">{{ $studio->name }}</option>
                                @endforeach
                                </select>
                            </div>
                          <div class="form-group">
                            <label>Name Service</label>
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control @error('name')
                                border-danger
                            @enderror " placeholder="self-foto" wire:model="name">
                          </div>

                          <div class="form-group">
                            <label>Status Payment</label>
                            @error('statusPayment')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <select class="form-control @error('statusPayment')
                            border-danger
                        @enderror" wire:model="statusPayment">
                                <option>------Pilih Status Payment-------   </option>
                                <option value="Full Payment">Full Payment</option>
                                <option value="Dp 50%">Dp 50%</option>

                            </select>
                        </div>
                        <button class="btn btn-primary text-right" type="submit">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
