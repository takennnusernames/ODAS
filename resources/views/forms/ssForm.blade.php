<div class="container">
    <div class="row">
        <div class="col">

            @if (is_null($ssDocument['DAS']))
                <div class="mb-3">
                    <div class="mb-3">
                        <label class="form-label">
                            <strong>Deed of Absolute Sale</strong>
                        </label>
                        <input name="DAS" type="file" class="form-control">
                    </div>
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">
                        <div class="text-success"><strong>Deed of Absolute Sale</strong> already submitted</div>
                    </label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled name='DAS'>
                </div>
            @endif

            
        </div>
    </div>
</div>
