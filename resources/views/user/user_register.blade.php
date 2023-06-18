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
<x-user_layout>

    <body>

        <form method="POST" action="/user_registered" class="needs-validation">
            @csrf
            <div class="container w-50">
                <div class="top">
                    <h2>Register</h2>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                        placeholder="name@example.com" value={{ old('email') }}>
                    <label for="floatingInput" class="form-label">Email</label>
                    @error('email')
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input name="fName" type="text" class="form-control @error('fName') is-invalid @enderror" id="floatingInput"
                                placeholder="Name" value={{ old('fName') }}>
                            <label for="floatingInput" class="form-label">First Name</label>
                            @error('fName')
                            <div class="invalid-feedback">
                                <p>{{ str_replace('The f name', 'This', $message) }}</p>
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input name="mName" type="text" class="form-control @error('mName') is-invalid @enderror" id="floatingInput"
                                placeholder="Name" value={{ old('mName') }}>
                            <label for="floatingInput" class="form-label">Middle Name</label>
                            @error('mName')
                            <div class="invalid-feedback">
                                <p>{{ str_replace('The m name', 'This', $message) }}</p>
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input name="lName" type="text" class="form-control @error('lName') is-invalid @enderror" id="floatingInput"
                                placeholder="Name" value={{ old('lName') }}>
                            <label for="floatingInput" class="form-label">Last Name</label>
                            @error('lName')
                            <div class="invalid-feedback">
                                <p>{{ str_replace('The l name', 'This', $message) }}</p>
                            </div>
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input name="address" type="address" class="form-control @error('address') is-invalid @enderror"" id="floatingInput" placeholder="example"
                         value={{ old('address') }}>
                    <label for="floatingInput" class="form-label">Address</label>
                    @error('address')
                        <div class="invalid-feedback">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingInput"
                        placeholder="password">
                    <label for="floatingInput" class="form-label">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input name="password_confirmation" type="password" class="form-control" id="floatingInput"
                        placeholder="password">
                    <label for="floatingInput" class="form-label">Confirm Password</label>

                </div>
                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>
                <div class="modal-footer">
                    Already have an Account?
                    <a href="/login">Login Here</a>
                </div>
            </div>
        </form>

    </body>
</x-user_layout>
