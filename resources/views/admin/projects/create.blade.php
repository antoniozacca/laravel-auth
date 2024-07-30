@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="header-page d-flex justify-content-between align-items-center">

        <h1>Crea un nuovo progetto</h1>
        
      </div>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('admin.project.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titolo del post:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Contenuto del post:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea> 
        </div>
        <button class="btn btn-primary">Crea progetto</button>
    </form>
    <button type="button" class="btn btn-secondary"><a href="{{route('admin.project.index')}}">Torna alla Home</a></button>
    </div>

@endsection