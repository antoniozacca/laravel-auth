@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="header-page d-flex justify-content-between align-items-center">

        <h1>{{$project->title}}</h1>
        
      </div>
       <p>{{$project->content}}</p>
       <button type="button" class="btn btn-secondary"><a href="{{route('admin.project.index')}}">Torna alla Home</a></button>
    </div>

@endsection