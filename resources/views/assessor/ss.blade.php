<x-assessor_layout>

    <body>
        <div class="container-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">Simple Sale</th>
                    </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Submission Status</th>
                        <th scope="col">Assessment Status</th>
                        <th scope="col">Documents</th>
                    </tr>
                </thead>
                <tbody>
                    @unless (count($users) == 0)
                        @if ($ssDocuments->where('nullCount', 13)->count() === $users->where('role', 'user')->count())
                            <td colspan="5" class="text-center">No Documents submitted for Simple Sale</td>
                        @else
                            @foreach ($users as $user)
                                <tr>
                                    @foreach ($ssDocuments as $ssDocument)
                                        @if ($user['id'] == $ssDocument['user_id'])
                                            @if (13 - $ssDocument['nullCount'] > 0)
                                                <th scope="row">
                                                    {{ $user['id'] }}
                                                </th>
                                                <th>
                                                    {{ $user['name'] }}
                                                </th>

                                                <td>
                                                    {{ 13 - $ssDocument['nullCount'] }} Documents submitted
                                                </td>
                                                <td></td>
                                                <td>
                                                    <a class="btn btn-info"
                                                        href="/documents/ss/{{ $user['id'] }}">Open</a>
                                                </td>
                                            @endif
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    @else
                        <tr>
                            <th colspan="5" class="text-center">No Users found</th>
                        </tr>
                    @endunless
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item {{ $users->previousPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $users->previousPageUrl() }}" tabindex="-1"
                            aria-disabled="true">Previous</a>
                    </li>
                    @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                        <li class="page-item {{ $users->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
                    <li class="page-item {{ $users->nextPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </body>
</x-assessor_layout>
