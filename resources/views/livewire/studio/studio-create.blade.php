<div>
    <div class="section-header">
        <h1>Add Studio</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-6">
                <form wire:submit.prevent="save">
                    <div class="card">
                        <div class="card-body">
                          <div class="form-group">
                            <label>Name Studio</label>
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control @error('name')
                                border-danger
                            @enderror " placeholder="Studio 1" wire:model="name">
                          </div>
                        <button class="btn btn-primary text-right">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
