@extends('site.layouts.basico')
@section('titulo', 'Login')
@section('conteudo')
<div class="flex justify-center">
    @component('site.layouts._components.form_login')
@endcomponent
</div>
@endsection
