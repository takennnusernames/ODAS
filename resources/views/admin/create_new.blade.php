<x-assessor_layout>


    <style>
        .top {
            width: 100%;
            margin: 50px auto 0px;
            color: white;
            background: #5F9EA0;
            text-align: center;
            border: 1px solid #B0C4DE;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding: 20px;
        }
    </style>

    <script>
        function goBack() {
            window.location.href = "/create";
        }
    </script>

    <form method="POST" action="/save_new">
        @csrf
        <div class="container w-50">
            <div class="top">
                <h2>{{ request('name') }} Requirements</h2>
            </div>
            <input type="hidden" name="name" value="{{ request('name') }}">
            <input type="hidden" name="quantity" value="{{ request('quantity') }}">
            <input type="hidden" name="description" value="{{ request('description') }}">
            @for ($i = 1; $i <= request('quantity'); $i++)
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input name="requirement{{ $i }}" type="text" class="form-control"
                            id="floatingInput" placeholder="Transaction" value={{ old("requirement$i") }}>
                        <label for="floatingInput"
                            class="form-label @error("requirement$i") is-invalid @enderror">Requirement
                            #{{ $i }}</label>

                        @error('requirement' . $i)
                            <div class="invalid-feedback">
                                <p>{{ str_replace('The requirement' . $i, 'This', $message) }}</p>
                            </div>
                        @enderror
                    </div>
                </div>
            @endfor
            <div class="d-grid gap-2 mb-5 d-md-flex justify-content-md-end">
                <button type="button" onclick="goBack()" class="btn btn-primary" type="button">Back</button>
                <button type="submit" name="submit" class="btn btn-secondary" type="button">Submit</button>
            </div>
        </div>
    </form>
    </form>







</x-assessor_layout>
