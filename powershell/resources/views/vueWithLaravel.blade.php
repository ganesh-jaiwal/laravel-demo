@extends('layout')

@section('title', 'Vue With Laravel')

@section('heading')
<div class="heading">
    <h1>
        Vue Demo
    </h1>
</div>
@endsection

@section('content')
<example-component></example-component>
@endsection
@section('scripts')
<script type="text/javascript" src="{!! asset('/js/vue.js') !!}"></script>
@endsection
