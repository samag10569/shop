<div class="container">
    <h1> ثبت نظر</h1>
    {{-- {!!Form::open(['method'=>'POST','url'=>route('postcreate'),'enctype'=>'multipart/form-data'])!!} --}}
    {{-- {!!Form::open(['method'=>'POST','action'=>['PostController@create'],'enctype'=>'multipart/form-data'])!!} --}}

{!! Form::open(['method' => 'POST','action'=>'PostController@store','files'=>true]) !!}
    @csrf
    {!!Form::label('title', 'عنوان')!!}
<br><br>
    {!! Form::text('title',old('title'), ['id'=>'title','class'=>'form-control','autocomplete'=>'title']) !!}
<br><br>
{!!Form::label('content', 'نظر')!!}
    <br><br>
    {!! Form::textarea('content', old('content'), ['id'=>'content','class'=>'form-control','autocomplete'=>'content']) !!}
    <br><br>
    {!! Form::submit('ثبت') !!}

    {!! Form::close() !!}



{{-- ======================================== --}}
