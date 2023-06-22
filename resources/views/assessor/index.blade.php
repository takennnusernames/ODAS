<x-assessor_layout>

    <body>
        <div class="container-md">
            <table class="table table-striped">
                <thead>
                    <th colspan="5" class="text-center">USERS</th>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Transactions</th>
                        <th scope="col">Cases</th>
                    </tr>
                </thead>
                <tbody>
                    @unless (count($users) == 0)
                        @foreach ($users as $user)
                            @if ($user['role'] === 'user')
                                <tr>
                                    @php
                                        $file = $documents->where('user_id', $user['id']);
                                        $count = $file->groupBy('transaction_info_id')->count();
                                    @endphp
                                    <th scope="row">{{ $user['id'] }}</th>
                                    <th>{{ $user['name'] }}</th>
                                    
                                    <td>
                                        {{ $count }} Pending Transactions
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/documents/{{ $user['id'] }}">Open
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
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
