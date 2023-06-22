<x-assessor_layout>
    <script>
        function goBack() {
            window.location.href = "/documents/{{ $user->id }}";
        }
    </script>

    <body>
        <div class="container-md">
            <table class="table table-striped table-bordered border-dark">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">{{ $transac->name }} of {{ $user->name }} </th>
                    </tr>
                    <tr>
                        <th scope="col">Requirement</th>
                        <th scope="col">File</th>
                        <th scope="col">Assessment</th>
                        <th scope="col" colspan="2">Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $requirements = explode(',', $transac->requirements);
                    @endphp
                    <tr>
                        @foreach ($requirements as $requirement)
                            <th scope="col">{{ $requirement }}</th>

                            @if ($documents->where('requirement', $requirement)->isNotEmpty())
                                @php
                                    $document = $documents->where('requirement', $requirement)->first();
                                @endphp
                                <td><a href="/storage/{{ $document->files }}" target="blank">Open File</a></td>
                                <form action="/assessment" id="assessment_form_{{ $requirement }}" method="POST">
                                    <div class="container w-50">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <input type="hidden" name="transac_name" value="{{ $transac->name }}">
                                        <input type="hidden" name="document_id" value="{{ $document->id }}">
                                        <input type="hidden" name="table_id"
                                            value="assessment_form_{{ $requirement }}">

                                        @if ($document->assessment == 'pending')
                                            <td>
                                                <div class="form-floating mb-3">
                                                    <select
                                                        class="form-select @error('assessment_{{ $requirement }}') is-invalid @enderror"
                                                        aria-label="Default select example"
                                                        name="assessment_{{ $requirement }}"
                                                        value={{ old('assessment_' . $requirement) }}>
                                                        <option selected value="pending">Select Assessment</option>
                                                        <option value="accepted">Accepted</option>
                                                        <option value="denied">Denied</option>
                                                    </select>
                                                    @error('assessment_{{ $requirement }}')
                                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                                            <p>{{ $message }}</p>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="text-center text-uppercase">
                                                    {{ $document->assessment }}
                                                </div>
                                            </td>
                                        @endif
                                        @if (is_null($document->feedback))
                                            <td>
                                                <div class="form-floating mb-3">
                                                    <input name="feedback_{{ $requirement }}" type="text"
                                                        class="form-control @error('feedback_{{ $requirement }}') is-invalid @enderror"
                                                        id="floatingInput" placeholder="feedback"
                                                        value={{ old('feedback_' . $requirement) }}>
                                                    <label for="floatingInput" class="form-label">Feedback</label>
                                                    @error('feedback_{{ $requirement }}')
                                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                                            <p>{{ $message }}</p>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </td>
                                        @else
                                            <td colspan="2">
                                                <div class="text-center">{{ $document->feedback }}</div>
                                            </td>
                                        @endif
                                        @if (is_null($document->feedback))
                                            <td>
                                                <button class="btn btn-primary" type="submit"
                                                    form="assessment_form_{{ $requirement }}">Save</button>
                                            </td>
                                        @endif
                                    </div>
                                </form>
                            @else
                                <td colspan="4" class="text-center">NO DOCUMENT SUBMITTED</td>
                            @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-5">
                <button type="button" onclick="goBack()" class="btn btn-secondary" type="button">Back</button>
            </div>

        </div>
    </body>
</x-assessor_layout>
