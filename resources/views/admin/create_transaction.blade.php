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

    <form method="POST" action="/new">
        @csrf
        <div class="container w-50">
            <div class="top">
                <h2>Create new transaction</h2>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input name="name" type="text" class="form-control" id="floatingInput"
                            placeholder="Transaction" required value={{ old('name') }}>
                        <label for="floatingInput" class="form-label">Transaction Name</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control id="quantity" name="quantity" min="1"
                            max="100" step="1" required>
                        <label for="floatingInput" class="form-label">Number of Documents</label>
                    </div>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Next</button>
            </div>
        </div>
    </form>
    </form>







</x-assessor_layout>
