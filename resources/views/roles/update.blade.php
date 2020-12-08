@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('roles/update', ['id' => $roles->id])}}" method="post" novalidate>
                    @csrf 
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required value="{{$roles->name}}">
                    </div>
                    <div class="form-group">
                        <label>Status_id</label>
                        <input type="text" name="status_id" class="form-control" value="{{$roles->status_id}}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">Envíar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
@endsection