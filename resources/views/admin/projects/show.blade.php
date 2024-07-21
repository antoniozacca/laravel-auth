@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="header-page d-flex justify-content-between align-items-center">

        <h1>{{$project->title}}</h1>
        
      </div>
       <p>{{$project->content}}</p>
    </div>

@endsection