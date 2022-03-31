@extends('layouts.app')

@section('title','Create Contact')
@section('content')

<h3 class="text-center mb-4">Create Contact</h3>

<form action="{{route('contact.store')}}" method="post" class="row g-3">
   
   @include('contact._partials.form')
</form>