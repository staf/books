@extends('layouts.app')

@section('content')
    <div class="section is-medium">
        <div class="container content">
            <div class="columns">
                <div class="column is-half">
                    <br>
                    <h1>Read all the books!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis, ipsum libero maxime quibusdam quis quo repellat? Accusantium consectetur illum laudantium libero numquam odit, perspiciatis quae quasi repudiandae rerum voluptates?</p>
                    <br>
                    <a class="button is-primary is-outlined is-large" href="/register">
                        <span class="icon">
                            <i class="fa fa-user-o"></i>
                        </span>
                        <span>Register an account!</span>
                    </a>
                </div>
                <div class="column is-half">
                    @include('partials.login-form')
                </div>
            </div>
        </div>
    </div>
@endsection
