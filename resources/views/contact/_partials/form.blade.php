@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-warning" role="alert">{{$error}}</div>
@endforeach
@endif

@csrf
<div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input required type="text" class="form-control" id="name" name="name" value="{{$contact->name ?? old('name') }}">
</div>
<div class="col-md-6">
    <label for="contact" class="form-label">Contact</label>
    <input required type="text" class="form-control" id="contact" name="contact" value="{{$contact->contact ?? old('contact') }}">
</div>

<div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input required type="email" class="form-control" id="email" name="email" value="{{$contact->email ?? old('email') }}">
</div>


<div class="d-grid gap-2 col-12 col-sm-6 col-lg-3 ">

    <button type="submit" class="btn btn-primary">Save</button>
</div>