@extends('companies.base_edit')

@section('form_buttons')
    {!! submit_button('icon-floppy') !!}
@endsection

@section('content')
    @include('companies.tabs', [
        'currentRoute' => 'bookkeeper.companies.edit',
        'currentKey' => $company->getKey()
    ])

    @include('partials.form')
@endsection