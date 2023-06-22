<style>
    .top {
        width: 100%;
        margin: 50px auto 0px;
        color: white;
        background: #2d0cc0;
        text-align: center;
        border: 1px solid #B0C4DE;
        border-bottom: none;
        border-radius: 10px 10px 0px 0px;
        padding: 20px;
    }
</style>
<x-user_layout>
    <script>
        function goBack() {
            window.location.href = "/submission";
        }
    </script>

    <body>
        <form method="POST" action="/submitted" enctype="multipart/form-data">
            @csrf
            <div class="container w-70">
                <div class="top" id="header">
                    <input type="hidden" name="transac_name" value="{{ $transac->name }}">
                    <h2>{{ $transac->name }} Document Submission</h2>
                </div>
                <div class="container mt-3">
                    <div class="row">
                        <input type="hidden" name="transac_id" value="{{ $transac->id }}">

                        @php
                            $requirements = explode(',', $transac->requirements);
                            $totalRequirements = count($requirements);
                            $columnSize = ceil($totalRequirements / 3);
                        @endphp

                        @for ($i = 0; $i < 3; $i++)
                            <div class="col">
                                <div class="mb-3">
                                    @foreach (array_slice($requirements, $i * $columnSize, $columnSize) as $requirement)
                                        @if ($documents->where('requirement', $requirement)->isNotEmpty())
                                            <label class="form-label"><strong>{{ $requirement }}</strong> is already
                                                submitted</label>
                                            <input name="{{ $requirement }}" type="file" class="form-control"
                                                accept="application/pdf" disabled>
                                        @else
                                            <label class="form-label"><strong>{{ $requirement }}</strong></label>
                                            <input name="{{ $requirement }}" type="file" class="form-control"
                                                accept="application/pdf">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="d-grid gap-2 mb-5 d-md-flex justify-content-md-end">
                        <button type="button" onclick="goBack()" class="btn btn-secondary" type="button">Back</button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Submit
                        </button>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to submit?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Please note that once a document is submitted it cannot be changed until an assessor has given their feedback
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary"
                                type="button">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            
        </form>

    </body>




    <!-- Modal -->


</x-user_layout>
