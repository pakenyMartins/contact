@extends('layouts.app')

@section('title','List Contact')
@section('content')

<h3 class="text-center mb-4">List Contact</h3>
<a class="btn btn-primary" href="{{route('contact.create')}}" role="button">New Contact</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Detail</th>
        </tr>
    </thead>
    <tbody>

        @foreach($contacts as $contact)
        <tr>
            <th>{{$contact->id}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->contact}}</td>
            <td><button type="button" class="btn btn-light">Details</button></td>
            
        </tr>
        @endforeach

    </tbody>
</table>