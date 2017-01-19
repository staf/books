<div class="card">
    <div class="card-header">
        <div class="card-header-title">Login</div>
    </div>
    <div class="card-content">
        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <label for="email" class="label">E-mail</label>
            <p class="control">
                <input type="email"
                       class="input{{ $errors->has('email') ? ' is-danger' : '' }}"
                       id="email"
                       name="email"
                       placeholder="Email"
                       value="{{ old('email') }}"
                       required>
                @if ($errors->has('email'))
                    <span class="help is-danger">{{ $errors->first('email') }}</span>
                @endif
            </p>

            <label for="password" class="label">Password</label>
            <p class="control">
                <input type="password"
                       class="input{{ $errors->has('password') ? ' is-danger' : '' }}"
                       id="password"
                       name="password"
                       placeholder="Password"
                       required>
                @if ($errors->has('password'))
                    <span class="help is-danger">{{ $errors->first('password') }}</span>
                @endif
            </p>

            <p class="control">
                <label class="checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
                    Remember me
                </label>
            </p>

            <div class="control is-grouped">
                <p class="control">
                    <button class="button is-primary">
                        Login
                    </button>
                </p>
                <p class="control">
                    <a class="button is-link" href="{{ url('/password/reset') }}">
                        Forgot Your Password?
                    </a>
                </p>
            </div>

        </form>
    </div>
</div>