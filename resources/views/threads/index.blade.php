@extends('layouts.default')

@section('content')
<div class="container">
    <h3>{{ __('Most rescent threads') }}</h3>
    <threads>
        Carregando...
    </threads>

    <hr>

    <threads>
        Carregando...
    </threads>
</div>
@endsection

@section('scripts')
    <script src="/js/threads.js"></script>
@endsection