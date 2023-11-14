<x-layouts.guest>
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="bg-light text-dark shadow">
            <div class="d-flex justify-content-center py-3" style="border-bottom: 2px solid black;">
                <h4 class="fw-bold">Login</h4>
            </div>
            <div class="px-4 pt-3 pb-5">
                <form action="{{ route('dashboard.login.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" id="email" class="form-control"
                            id="exampleFormControlInput1" placeholder="name@example.com" style="width:350px;">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex align-items-center my-2">
                        <input type="checkbox" class="me-2">
                        <label for="">Forgot Password?</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" style="width: 100%">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layouts.guest>
