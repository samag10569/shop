<div class="container">

    {{-- {!!Form::open(['method'=>'POST','url'=>route('postcreate'),'enctype'=>'multipart/form-data'])!!} --}}
    {{-- {!!Form::open(['method'=>'POST','action'=>['PostController@create'],'enctype'=>'multipart/form-data'])!!} --}}

{{-- {!! Form::open(['method' => 'POST','action'=>'PostController@update','files'=>true,$post->id]) !!} --}}
{!!Form::open(['method' => 'POST','action' => ['PostController@update', $post->id]])!!}
@csrf
{!!Form::label('title', 'عنوان')!!}
<br><br>
    {!! Form::text('title',$post->title,old('title'), ['id'=>'title','class'=>'form-control','autocomplete'=>'title']) !!}
    <br><br>
    {!!Form::label('content', 'نظر')!!}
    <br><br>
    {!! Form::textarea('content',$post->content, old('content'), ['id'=>'content','class'=>'form-control','autocomplete'=>'content']) !!}
    <br><br>
    {!! Form::submit('ثبت') !!}

    {!! Form::close() !!}



{{-- ======================================== --}}
