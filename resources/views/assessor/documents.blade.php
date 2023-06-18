<x-assessor_layout>

    <body>
        <div class="container-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Document Name</th>
                        <th scope="col">File</th>
                        <th scope="col">Feedback</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($document['ESE']))
                        <tr>
                            <th scope="col">Extrajudicial Settle of Estate</th>
                            @if (is_null($document['ESE']))
                                No Document Submitted
                            @else
                                <td><a href="/storage/{{ $document['ESE'] }} " target="_blank">{{ $document['ESE'] }}</a>
                                </td>
                            @endif
                            <td><input type="text" name="feedback"></td>
                            <td>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">Accepted</option>
                                    <option value="2">Denied</option>
                                  </select>
                            </td>
                        </tr>
                    @endif
                    @if (isset($document['DAS']))
                        <tr>
                            <th scope="col">Deed of Absolute Sale</th>
                            @if (is_null($document['DAS']))
                                No Document Submitted
                            @else
                                <td><a href="/storage/{{ $document['DAS'] }} " target="_blank">{{ $document['DAS'] }}</a>
                                </td>
                            @endif
                        </tr>
                    @endif
                    @if (isset($document['AoP']))
                        <tr>
                            <th scope="col">Affidavit of Publication</th>
                            @if (is_null($document['AoP']))
                                No Document Submitted
                            @else
                                <td><a href="/storage/{{ $document['AoP'] }} "
                                        target="_blank">{{ $document['AoP'] }}</a></td>
                            @endif
                        </tr>
                    @endif
                    <tr>
                        <th scope="col">BIR eCAR</th>
                        @if (is_null($document['eCar']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['eCar'] }} " target="_blank">{{ $document['eCar'] }}</a>
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Owner's Duplicate Copy of Title</th>
                        @if (is_null($document['dupTitle']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['dupTitle'] }} "
                                    target="_blank">{{ $document['dupTitle'] }}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Realty Tax Clearance</th>
                        @if (is_null($document['RTax']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['RTax'] }} "
                                    target="_blank">{{ $document['RTax'] }}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Current Tax Declaration</th>
                        @if (is_null($document['TaxDec']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['TaxDec'] }} "
                                    target="_blank">{{ $document['TaxDec'] }}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Transfer Tax Receipt</th>
                        @if (is_null($document['TaxReceipt']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['TaxReceipt'] }} "
                                    target="_blank">{{ $document['TaxReceipt'] }}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">DAR Clearance</th>
                        @if (is_null($document['DAR']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['DAR'] }} " target="_blank">{{ $document['DAR'] }}</a>
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Special Power of Attorney</th>
                        @if (is_null($document['SPA']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['SPA'] }} " target="_blank">{{ $document['SPA'] }}</a>
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Sepia</th>
                        @if (is_null($document['sepia']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['sepia'] }} "
                                    target="_blank">{{ $document['sepia'] }}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Blueprint</th>
                        @if (is_null($document['bPrint']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['bPrint'] }} "
                                    target="_blank">{{ $document['bPrint'] }}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Technical Description</th>
                        @if (is_null($document['techDesc']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['techDesc'] }} "
                                    target="_blank">{{ $document['techDesc'] }}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Written Request</th>
                        @if (is_null($document['writtenReq']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['writtenReq'] }} "
                                    target="_blank">{{ $document['writtenReq'] }}</a></td>
                        @endif
                    </tr>
                    <tr>
                        <th scope="col">Cadastral Cost</th>
                        @if (is_null($document['cadCost']))
                            <td>No document submitted</td>
                        @else
                            <td><a href="/storage/{{ $document['cadCost'] }} "
                                    target="_blank">{{ $document['cadCost'] }}</a></td>
                        @endif
                    </tr>
                </tbody>
            </table>

        </div>
    </body>
</x-assessor_layout>
