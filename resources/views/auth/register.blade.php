<x-auth title="Register">
    <div class="container d-flex justify-content-center" style="margin-top: 100px;">
        <div class="card shadow-lg p-3" style="width: 380px;">
            <h4 class="text-center mb-3">Register</h4>

            <form method="POST" action="/register">
                @csrf

                <div class="mb-2">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" 
                           class="form-control @error('name') is-invalid @enderror" 
                           id="name" 
                           name="name" 
                           value="{{ old('name') }}" 
                           required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           id="password" 
                           name="password" 
                           required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" 
                           class="form-control" 
                           id="password_confirmation" 
                           name="password_confirmation" 
                           required>
                </div>

                <button type="submit" class="btn btn-success w-100">Register</button>
            </form>

            <div class="text-center mt-2">
                <a href="{{ route('login') }}">Already have an account? Login</a>
            </div>
        </div>
    </div>
</x-auth>
