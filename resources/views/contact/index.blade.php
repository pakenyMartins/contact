@extends('layouts.app')

@section('title','List Contact')
@section('content')

@if(Auth::check() )
    <a class="btn btn-light mb-2" href="{{route('contact.logout')}}" role="button">Logout</a>
    @endif
<h3 class="text-center mb-4">List Contact</h3>

@if(session('message'))
<div class="alert alert-{{session('type')}}" role="alert">
    {{session('message')}}
</div>


@endif

<a class="btn btn-primary" href="{{route('contact.create')}}" role="button">New Contact</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Edit</th>
            <th scope="col">Detail</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>

        @foreach($contacts as $contact)
        <tr>
            <th>{{$contact->id}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->contact}}</td>
            <td><a class="btn btn-success" href="{{route('contact.edit', $contact->id)}}" role="button">Edit</a></td>
            <td><a class="btn btn-info" href="{{route('contact.show', $contact->id)}}" role="button">Detail</a></td>
            <td>
                <form action="{{route('contact.destroy', $contact->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>