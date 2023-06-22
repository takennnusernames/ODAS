<x-user_layout>
    <script>
        function goBack() {
            window.location.href = "/status";
        }
    </script>
    <body>
        <div class="container-md">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">{{ $transac['name'] }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Document</th>
                        <th scope="col">File</th>
                        <th scope="col">Assessment</th>
                        <th scope="col">Feedback</th>
                    </tr>
                </thead>
                <tbody>
                        @php
                            $requirements = explode(',', $transac->requirements);
                        @endphp
                        @foreach ($requirements as $requirement)
                    <tr>
                        <th scope="col">{{ $requirement }}</th>

                        @if ($documents->where('requirement', $requirement)->isNotEmpty())
                            @php
                                $document = $documents->where('requirement', $requirement)->first();
                            @endphp
                            <td><a href="/storage/{{ $document->files }}" target="blank">Open File</a></td>
                            <td class="text-uppercase">{{$document->assessment}}
                            </td>
                            <td>{{$document->feedback}}</td>
                        @else
                            <td colspan="3">NO DOCUMENT SUBMITTED</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-grid gap-2 mb-5 d-md-flex justify-content-md-end">
                <button type="button" onclick="goBack()" class="btn btn-secondary" type="button">Back</button>
            </div>

        </div>
    </body>
</x-user_layout>
