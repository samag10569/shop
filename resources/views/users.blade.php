@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
{{-- ============================================================================== --}}
{{-- @foreach ($users as $user)
{{$user->name}}
{{$user->email}}
@endforeach --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">image</th>

        <th scope="col">delete or update</th>

      </tr>
    </thead>
    <tbody>
      <tr>

          @foreach ($users as $user)
          {{-- {{$photos=$user->photo()->get()}} --}}
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>

      <td>
        @foreach($user->photo()->get() as $photo)
          <img src="{{$photo['name']}}" style="height: 100px; width: 100px;">
          {{-- {{$photo['name']}} --}}
          @endforeach
          {{-- <img src="{{$user->imageable['name']}}" style="height: 100px; width: 100px;"> --}}

        </td>

     <td>  <a class="btn btn-success" href="/edit/{{$user->id}}">update</a>
       <a  class="btn btn-danger"href="/delete/{{$user->id}}">delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>

{{-- ================================================================================ --}}
                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{-- You are logged in! --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
