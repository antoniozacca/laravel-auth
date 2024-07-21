@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="header-page d-flex justify-content-between align-items-center">

        <h1>Lista dei progetti</h1>
        <div>
          <button class="btn btn-primary">Crea nuovo progetto</button>
        </div>
      </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Slug</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($project as $i)
                
              <tr>
                <th scope="row">{{$i->id}}</th>
                <td>{{$i->title}}</td>
                <td>{{$i->content}}</td>
                <td>{{$i->slug}}</td>
                <td>
                  <div class="d-flex gap-2">
                    <a href="#" class="btn btn-info" as="button"><i class="fab fa-searchengin"></i></a>
                    <a href="#" class="btn btn-warning" as="button"><i class="fas fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger" as="button"><i class="fas fa-bomb"></i></a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection