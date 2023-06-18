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
                        <th scope="col">Assessment Status</th>
                        <th scope="col">Extrajudical Documents</th>
                        <th scope="col">Simple Sale Documents</th>
                    </tr>
                </thead>
                <tbody>
                    @unless (count($users) == 0)
                        @foreach ($users as $user)
                            @if ($user['role'] === 'user')
                                <tr>
                                    <th scope="row">{{ $user['id'] }}</th>
                                    <th>{{ $user['name'] }}</th>
                                    @php
                                        $ejs = $ejsDocuments->where('user_id', $user['id']);
                                        $ss = $ssDocuments->where('user_id', $user['id']);
                                    @endphp

                                    @if ($ejs->value('nullCount') === 14 && $ss->value('nullCount') === 13)
                                        <td class="text-center">No Transaction</td>
                                    @elseif ($ejs->value('nullCount') < 14)
                                        @if ($ss->value('nullCount') < 13)
                                            <td class="text-center">EJS & SS </td>
                                        @else
                                            <td class="text-center">EJS Transaction</td>
                                        @endif
                                    @else
                                        <td class="text-center">SS Transaction</td>
                                    @endif
                                    <td></td>
                                    <td>
                                        <a class="btn btn-info" href="/documents/ejs/{{ $user['id'] }}">Open
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/documents/ss/{{ $user['id'] }}">Open
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
