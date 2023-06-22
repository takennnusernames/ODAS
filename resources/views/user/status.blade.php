<x-user_layout>

    <body>
        @php
            $filecount = $documents->count();
        @endphp
        <div class="container-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Case</th>
                        <th scope="col">Submission Status</th>
                        <th scope="col">Feedback</th>
                        <th scope="col">Documents</th>
                    </tr>
                </thead>
                <tbody>
                    @unless ($filecount == 0)
                        @foreach ($transactions as $transaction)
                            <tr>
                                @php
                                    $documents = auth()->user()->documents();
                                    $count = $documents->where('transaction_info_id', $transaction['id'])->count();
                                    $assessment_count = $documents->where('assessment', 'accepted')->count();
                                @endphp
                                @unless ($count == 0)
                                    <td>{{ $transaction['name'] }} </td>
                                    <td>
                                        {{ $count }} Submitted Documents
                                    </td>
                                    <td>
                                        {{ $assessment_count }} Accepted Documents
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/user_documents/{{$transaction['id']}}">Open
                                        </a>
                                    </td>
                                @endunless
                            </tr>
                        @endforeach
                    @else
                        <th colspan="5" class="text-center">NO DOCUMENTS SUBMITTED</th>
                    @endunless
                </tbody>
            </table>
        </div>
    </body>
</x-user_layout>
