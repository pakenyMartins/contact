@extends('layouts.app')

@section('title','Create Contact')
@section('content')

<h3 class="text-center mb-4">Edit Contact</h3>

<form action="{{route('contact.update', $contact->id)}}" method="post" class="row g-3">
    @method('put')
    @include('contact._partials.form')
</form>