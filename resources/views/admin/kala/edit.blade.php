<form action="/update-kala/{{$kala->id}}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
نام: <input type="text"  name="name"     value="{{$kala->name}}"><br/><br/>
{{-- نوع: <input type="text" name="category_id" value="{{$kala->category_id}}" ><br><br> --}}
قیمت: <input type="text" name="price"  value="{{$kala->price}}"><br><br>
عکس کالا:<input type="file" name='pathfileimage'><br><br>
 <input type="submit" value="ثبت">


</form>
