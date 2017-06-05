@extends('layout.' . ((isset($_withForm) && $_withForm === false) ? 'content' : 'form'))

@php
$currentSection = 'finance';
$currentRoute = 'bookkeeper.companies.index';
@endphp

@section('header_content')
    @include('partials.header', [
        'headerTitle' => $bankaccount->name . ': ' . currency_string_for($bankaccount->getBalance(), $bankaccount),
        'headerHint' => link_to_route('bookkeeper.companies.index', uppercase(trans('companies.title')))
    ])
@endsection