@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('msg'))
    <div class="alert alert-success">
        {{session('msg')}}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kalas</div>
{{-- ============================================================================== --}}
{{-- @foreach ($kalas as $kala)
{{$kala->name}}
{{$kala->email}}
@endforeach --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">category_id</th>
        <th scope="col">price</th>
        {{-- <th scope="col">num</th> --}}
        <th scope="col">image</th>


        <th scope="col">delete or update</th>

      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach ($kalas as $kala)
        <th scope="row">{{$kala->id}}</th>
        <td>{{$kala->name}}</td>
        <td>{{$kala->category_id}}</td>
        <td>{{$kala->price}}</td>
        {{-- <td>{{$kala->num}}</td> --}}
      <td><img src="images/kalas/{{$kala->fileimage}}" style="height: 100px; width: 100px;"></td>


     <td>  <a class="btn btn-success" href="/edit-kala/{{$kala->id}}">update</a>
       <a  class="btn btn-danger"href="/delete-kala/{{$kala->id}}">delete</a> </td>

      </tr>

      @endforeach
      <td> <a href="/show-form-kala/" class="btn btn-success">Create</a></td>
    </tbody>
  </table>

{{-- ================================================================================ --}}
                {{-- <div class="card-body"> --}}
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
