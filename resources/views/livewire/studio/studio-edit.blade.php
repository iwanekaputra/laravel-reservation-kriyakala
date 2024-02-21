<div>
    <div class="section-header">
        <h1>Edit Studio</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <form wire:submit.prevent="update">
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
                        <button class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
