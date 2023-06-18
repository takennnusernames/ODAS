<div class="container">
    <div class="row">
        @php
            $requirements = explode(',', $transaction['requirements']);
            $totalRequirements = count($requirements);
            $columnSize = ceil($totalRequirements / 3); // Calculate the number of requirements per column
        @endphp

        @for ($i = 0; $i < 3; $i++)
            <div class="col">
                <div class="mb-3">
                    @foreach (array_slice($requirements, $i * $columnSize, $columnSize) as $requirement)
                        <label class="form-label"><strong>{{ $requirement }}</strong></label>
                        <input name="{{ $requirement }}" type="file" class="form-control" accept="application/pdf">
                    @endforeach
                </div>
            </div>
        @endfor
    </div>
</div>