@extends('layouts.app')

@section('content')

    <div class="section is-medium">
        <div class="container">
            <div class="columns">
                <div class="column is-4 is-offset-4">

                    <h2 class="page-title">Register</h2>

                    <div class="card">
                        <div class="card-content">
                            <form action="/register" method="POST">
                                {{ csrf_field() }}

                                <label for="name" class="label">Name</label>
                                <p class="control">
                                    <input type="text"
                                           class="input{{ $errors->has('name') ? ' is-danger' : '' }}"
                                           id="name"
                                           name="name"
                                           placeholder="Email"
                                           value="{{ old('name') }}"
                                           required>
                                    @if ($errors->has('name'))
                                        <span class="help is-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </p>

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

                                <label for="password_confirmation" class="label">Confirm Password</label>
                                <p class="control">
                                    <input type="password"
                                           class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}"
                                           id="password_confirmation"
                                           name="password_confirmation"
                                           placeholder="Password"
                                           required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help is-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </p>

                                <br>

                                <p class="control">
                                    <button class="button is-primary">
                                        Create account
                                    </button>
                                </p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
