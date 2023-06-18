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
                <label class="form-label"><strong>{{ $requirement }}</strong></label>
                <input name="{{ $requirement }}" type="file" class="form-control"
                    accept="application/pdf">
            @endforeach
        </div>
    </div>
@endfor
                    </div>
                    <div class="d-grid gap-2 mb-5 d-md-flex justify-content-md-end">
                        <button type="button" onclick="goBack()" class="btn btn-primary" type="button">Back</button>
                        <button type="submit" name="submit" class="btn btn-secondary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </form>

    </body>


</x-user_layout>
