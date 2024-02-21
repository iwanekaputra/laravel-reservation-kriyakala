<div>
    <div class="section-header">
        <h1>Add Package</h1>
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
                                <select
                                    class="form-control @error('service')
                                border-danger
                            @enderror"
                                    wire:model="service">
                                    <option>------Pilih Service------- </option>

                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">

                                <label>Name Package</label>
                                @error('name')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <input type="text"
                                    class="form-control @error('name')
                                border-danger
                            @enderror "
                                    placeholder="One Man" wire:model="name">
                            </div>
                            <div class="form-group">

                                <label>Price Weekday</label>
                                @error('priceWeekday')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <input type="text"
                                    class="form-control @error('priceWeekday')
                                border-danger
                            @enderror "
                                    placeholder="1000" wire:model="priceWeekday">
                            </div>
                            <div class="form-group">

                                <label>Price Weekend</label>
                                @error('priceWeekend')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <input type="text"
                                    class="form-control @error('priceWeekend')
                                border-danger
                            @enderror "
                                    placeholder="1000" wire:model="priceWeekend">
                            </div>
                            <div class="form-group">

                                <label>Discount Weekday</label>
                                @error('discountWeekday')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <input type="number"
                                    class="form-control @error('discountWeekday')
                                border-danger
                            @enderror "
                                    placeholder="10" wire:model="discountWeekday">
                            </div>
                            <div class="form-group">

                                <label>Discount Weekend</label>
                                @error('discountWeekend')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <input type="number"
                                    class="form-control @error('discountWeekend')
                                border-danger
                            @enderror "
                                    placeholder="100" wire:model="discountWeekend">
                            </div>
                            <div class="form-group">

                                <label>Image</label>
                                @if ($image)
                                    <div class="mb-2 mt-2">
                                        <img src="{{ $image->temporaryUrl() }}" alt="" class="w-50">
                                    </div>
                                @endif
                                @error('image')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <input type="file"
                                    class="form-control @error('image')
                                border-danger
                            @enderror "
                                    placeholder="100" wire:model="image">
                            </div>

                            <div class="form-group mb-4">
                                <label>Description</label>
                                @error('description')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <div wire:ignore>
                                    <textarea wire:model="description" class="min-h-fit h-48 " name="description" id="description">{{ $description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Additional Description</label>
                                @error('additionalDescription')
                                    <div class="text-danger">
                                        {{ $message }}</div>
                                @enderror
                                <div wire:ignore>
                                    <textarea wire:model="additionalDescription" class="min-h-fit h-48 " name="additionalDescription"
                                        id="additionalDescription">{{ $additionalDescription }}</textarea>
                                </div>
                            </div>

                            <button class="btn btn-primary text-right">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script>
        let $ref = $('#description');
        ClassicEditor
            .create($ref[0], {

            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('description', editor.getData());
                })
                $('<style type="text/css" scoped>.ck-editor .ck-editor__editable_inline {min-height: 200px !important;}</style>')
                    .insertAfter($ref);
            })
            .catch(error => {
                console.error(error);
            });

        let $lef = $('#additionalDescription');
        ClassicEditor
            .create($lef[0], {

            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('additionalDescription', editor.getData());
                })
                $('<style type="text/css" scoped>.ck-editor .ck-editor__editable_inline {min-height: 200px !important;}</style>')
                    .insertAfter($lef);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</div>
