<x-assessor_layout>
    <script>
        function goBack() {
            window.location.href = "/assessor";
        }
    </script>
    <body>
        <div class="container-md">
            <table class="table table-striped">
                <thead>
                    <tr><th colspan="5" class="text-center">{{$user->name}}</th></tr>
                    <tr>
                        <th scope="col">Case</th>
                        <th scope="col">Status</th>
                        <th scope="col">Documents</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    @php
                        $count = $document->where('transaction_info_id', $transaction->id)->count();
                        $assessment_count = $document->where('assessment', 'pending')->count();
                    @endphp
                    @unless ($count == 0)
                    <tr>
                        <td>{{$transaction->name}}</td>
                        <td>{{$count}} Documents Submitted</td>
                        <td>
                            <a class="btn btn-info" href="/files/{{$transaction->name}}/{{ $user['id'] }}">Open
                            </a>
                        </td>
                    </tr>
                @endunless
                    
                @endforeach
                </tbody>
            </table>
            <div class="d-grid gap-2 mb-5 d-md-flex justify-content-md-end">
                <button type="button" onclick="goBack()" class="btn btn-primary" type="button">Back</button>
            </div>

        </div>
    </body>
</x-assessor_layout>
