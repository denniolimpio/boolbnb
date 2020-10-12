@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica il tuo indirizzo E-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link di verifica è stato inviato al tuo indirizzo e-mail.') }}
                        </div>
                    @endif

                    {{ __('Prima di procedere, per favore verifica la tua e-mail tramite il link che ti abbiamo inviato alla tua casella di posta.') }}
                    {{ __('Se non hai ricevuto l\'e-mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clicca qui per inviarla ancora') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
