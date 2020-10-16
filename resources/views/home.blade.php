@extends('layouts.app')

@section('content')
<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Bonjour, {{ Auth::user()->name }} {{ Auth::user()->lastname }}</h2>
                    <h1>Bienvenu sur votre page!</h1>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
