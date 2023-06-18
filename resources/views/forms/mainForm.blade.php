<div class="container">
    <div class="row">
        <div class="col">
            @if (is_null($ejsDocument['eCar']))
                <div class="mb-3">
                    <label class="form-label"><strong>BIR eCAR</strong></label>
                    <input name="eCar" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>BIR eCAR</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='eCar'>
                </div>
            @endif
        </div>

        <div class="col">
            @if (is_null($ejsDocument['dupTitle']))
                <div class="mb-3">
                    <label class="form-label"><strong>Owner's Duplicate Copy of Title</strong></label>
                    <input name="dupTitle" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>Owner's Duplicate Copy of Title</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='dupTitle'>
                </div>
            @endif
        </div>

        <div class="col">
            @if (is_null($ejsDocument['RTax']))
                <div class="mb-3">
                    <label class="form-label"><strong>Realty Tax Clearance</strong></label>
                    <input name="RTax" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>Realty Tax Clearance</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='RTax'>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            @if (is_null($ejsDocument['TaxDec']))
                <div class="mb-3">
                    <label class="form-label"><strong>Current Tax Declaration</strong></label>
                    <input name="TaxDec" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>Current Tax Declaration</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='TaxDec'>
                </div>
            @endif
        </div>

        <div class="col">
            @if (is_null($ejsDocument['TaxReceipt']))
                <div class="mb-3">
                    <label class="form-label"><strong>Transfer Tax Receipt</strong></label>
                    <input name="TaxReceipt" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>Transfer Tax Receipt</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='TaxReceipt'>
                </div>
            @endif
        </div>

        <div class="col">
            @if (is_null($ejsDocument['DAR']))
                <div class="mb-3">
                    <label class="form-label"><strong>DAR Clearance</strong></label>
                    <input name="DAR" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>DAR Clearance</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='DAR'>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            @if (is_null($ejsDocument['SPA']))
                <div class="mb-3">
                    <label class="form-label"><strong>Special Power of Attorney</strong></label>
                    <input name="SPA" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>Special Power of Attorney</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='SPA'>
                </div>
            @endif
        </div>
        <div class="col">
            @if (is_null($ejsDocument['sepia']))
                <div class="mb-3">
                    <label class="form-label"><strong>Sepia</strong></label>
                    <input name="sepia" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>Sepia</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='sepia'>
                </div>
            @endif
        </div>
        <div class="col">
            @if (is_null($ejsDocument['bPrint']))
                <div class="mb-3">
                    <label class="form-label"><strong>Blueprint</strong></label>
                    <input name="bPrint" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>Blueprint</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='bPrint'>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            @if (is_null($ejsDocument['techDesc']))
                <div class="mb-3">
                    <label class="form-label"><strong>Technical Description</strong></label>
                    <input name="techDesc" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><strong>Technical Description</strong> already submitted</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='techDesc'>
                </div>
            @endif
        </div>
        <div class="col">
            @if (is_null($ejsDocument['writtenReq']))
                <div class="mb-3">
                    <label class="form-label"><strong>Written Request</strong></label>
                    <input name="writtenReq" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><div class="text-success"><strong>Written Request</strong> already submitted</label></div>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='writtenReq'>
                </div>
            @endif
        </div>
        <div class="col">
            @if (is_null($ejsDocument['cadCost']))
                <div class="mb-3">
                    <label class="form-label"><strong>Cadastral Cost</strong></label>
                    <input name="cadCost" type="file" class="form-control"
                        accept="application/pdf">
                </div>
            @else
                <div class="mb-3">
                    <label for="formFileDisabled" class="form-label"><div class="text-success"><strong>Cadastral Cost</strong> already submitted</label></div>
                    <input class="form-control" type="file" id="formFileDisabled" disabled
                        name='cadCost'>
                </div>
            @endif
        </div>
    </div>
</div>