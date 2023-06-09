<style>
    .top {
        width: 70%;
        margin: 50px auto 0px;
        color: white;
        background: #5F9EA0;
        text-align: center;
        border: 1px solid #B0C4DE;
        border-bottom: none;
        border-radius: 10px 10px 0px 0px;
        padding: 20px;
    }

    #register {
        width: 70%;
        margin: 0px auto;
        padding: 20px;
        border: 1px solid #B0C4DE;
        background: white;
        border-radius: 0px 0px 10px 10px;
    }
</style>
@extends('layout')
<script>
    function showHideForm() {
        var selectOption = document.getElementById("floatingSelect").value;
        

        // Show or hide the form based on the selected option
        if (selectOption === "0") {
            var form = document.getElementById("ejForm");
            form.style.display = "none";
            var form = document.getElementById("ssForm");
            form.style.display = "none";
        } else if (selectOption === "1") {
            var form = document.getElementById("ejForm");
            form.style.display = "block";
            var form = document.getElementById("ssForm");
            form.style.display = "none";
        } else if (selectOption === "2") {
            var form = document.getElementById("ejForm");
            form.style.display = "none";
            var form = document.getElementById("ssForm");
            form.style.display = "block";
        }
        
    }
</script>
@section('content')


    <body>

        <div class="top">
            <h2>Submission</h2>
        </div>

        
        <form id="register" method="POST" class="form-floating">
            
            <div class="form-floating mb-3">
                <select name="Type" id="floatingSelect" class="form-select" onchange="showHideForm()" required>
                    <option value="0">Select</option>
                    <option value="1">Extrajudical Settlement</option>
                    <option value="2">Simple Sale</option>
                </select>
                <label for="floatingInput">Case Type</label>
            </div>

            <div id="ejForm" style="display: none;">
                @include('ejForm')
            </div>

            <div id="ssForm" style="display: none;">
                @include('ssForm')
            </div>

            <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

    </body>
@endsection
