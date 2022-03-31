@extends('layouts.app')

@section('title','List Contact')
@section('content')


<a class="btn btn-primary" href="" role="button">New Contact</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
        </tr>
    </thead>
    <tbody>

        @foreach($contacts as $contact)
        <tr>
            <th>{{$contact->id}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->contact}}</td>
        </tr>
        @endforeach

    </tbody>
</table>