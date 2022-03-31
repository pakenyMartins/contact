@extends('layouts.app')

@section('title','List Contact')
@section('content')


<div class="card">
    <h5 class="card-header">Detail Contact </h5>
    <div class="card-body">
        <h6 class="card-title">ID: {{$contact->id}}</h6>
        <h6 class="card-title">Name: {{$contact->name}}</h6>
        <h6 class="card-title">Email: {{$contact->email}}</h6>
        <h6 class="card-title">Contact: {{$contact->contact}}</h6>

        <a class="btn btn-success mb-2" href="{{route('contact.show', $contact->id)}}" role="button">Edit</a>

        <form action="{{route('contact.destroy', $contact->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>


    </div>
</div>