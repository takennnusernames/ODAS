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

        <form method="POST" action="/user_login" class="needs-validation">
            @csrf
            <div class="container w-50">
                <div class="top">
                    <h2>Login</h2>
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
                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="modal-footer">
                    No Account Yet?
                    <a href="/user_register">Register Here</a>
                </div>
            </div>
        </form>

    </body>
</x-user_layout>
