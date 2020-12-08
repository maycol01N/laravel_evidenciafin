@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('statuses/update', ['id' => $statuses->id])}}" method="post" novalidate>
                    @csrf 
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" required value="{{$statuses->name}}">
                    </div>
                    <div class="form-group">
                        <label>Tipo de estatus</label>
                        <input type="text" name="type_status_id" class="form-control" value="{{$statuses->type_status_id}}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">Envíar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
@endsection