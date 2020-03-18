<div class="container">
    <h3> ثبت کالا</h3>
    <form action="/kalacreate/" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}


     نام کالا:<input type="text" name='name'><br><br>
    قیمت کالا:<input type="text" name='price'><br><br>
    {{-- نوع کالا:<input type="text" name='category_id'><br><br> --}}
     عکس کالا:<input type="file" name='pathfileimage'><br><br>


    <input type="submit" name='submit' value="ثبت"><br><br>
    </form>



    </div>
    {{-- {{Route('showkala.kala')}} --}}
