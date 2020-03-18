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
                <div class="card-header">Posts</div>
{{-- ============================================================================== --}}
{{-- @foreach ($posts as $post)
{{$post->name}}
{{$post->email}}
@endforeach --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">content</th>
        {{-- <th scope="col">image</th> --}}
        <th scope="col">name tag</th>


        <th scope="col">delete or update</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        {{-- {{$post=Post::findOrfail($id)}}
        {{$tags=$post->tag}} --}}

          @foreach ($posts as $post)

        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>

      {{-- <td><img src="" style="height: 100px; width: 100px;"></td> --}}
      {{-- <td><a  class="btn btn-success" href="/showtag/">tag</a></td> --}}
{{-- <td> {{$post->Tag()->get()->['name']}}   </td> --}}
<td>
{{-- {{$tags=$post->tag}} --}}
@foreach($post->tag as $tag)

{{ $tag->name}}
@endforeach
</td>
<td>  <a class="btn btn-success" href="/edit-post/{{$post->id}}">update</a>
       <a  class="btn btn-danger"href="/delete-post/{{$post->id}}">delete</a> </td>
      </tr>

      @endforeach
      <td> <a href="/show-form-post/" class="btn btn-success">Create</a></td>
    </tbody>
  </table>

{{-- ================================================================================ --}}



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
