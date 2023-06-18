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
        function showHideForm() {
            var selectOption = document.getElementById("floatingSelect").value;

            var header = document.getElementById("submit_button");
            var count = "{{ $count }}";

            if (selectOption === "0") {
                header.style.display = "none"
            } else {
                header.style.display = "block"
            }

        }
    </script>


    <body>

        <form method="POST" action="/submit">
            @csrf
            <div class="container w-70">
                <div class="top" id="header">
                    <h2>Select Transaction Type</h2>
                </div>
                <div class="top" id="ejsHeader" style="display:none;">
                    <h2>Extrajudicial Settlement Document Submission </h2>
                </div>
                <div class="form-floating mb-3">
                    <select name="transaction" id="floatingSelect" class="form-select" onchange="showHideForm()" required>
                        <option value="0">Select</option>
                        @foreach ($transactions as $transaction)
                            <option value="{{ $transaction->name }}">{{ $transaction->name }}</option>
                        @endforeach
                    </select>
                    <label for="floatingInput">Case Type</label>
                </div>
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-primary" id="submit_button"
                        style="display: none;">Next</button>
                </div>
            </div>
        </form>

    </body>


</x-user_layout>
