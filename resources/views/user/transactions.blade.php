{{-- @props(['reqCsv'])

@php
    $requirements = explode(',', $reqCsv);    
@endphp --}}

<x-user_layout>

    <body>
        <div class="container-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Case</th>
                        <th scope="col">Case Description</th>
                        <th scope="col">Requirements</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <th scpope=col>{{ $transaction['name'] }}</th>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias dolore sit
                                deserunt explicabo delectus voluptatem unde. Itaque repellendus est temporibus vitae
                                pariatur, magnam vel quos, nihil aliquid, quibusdam porro.</td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#Modal{{ $transaction['id'] }}">
                                    Open
                                </button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    @foreach ($transactions as $transaction)
        <!-- Scrollable modal -->
        <div>hi</div>
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal fade" id="Modal{{ $transaction['id'] }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $transaction['name'] }} Requirements</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @php
                                $requirements = explode(',', $transaction['requirements']);
                            @endphp
                            @foreach ($requirements as $requirement)
                            <p class="text-uppercase">{{$loop->iteration . '. ' . $requirement}}</p>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-user_layout>
