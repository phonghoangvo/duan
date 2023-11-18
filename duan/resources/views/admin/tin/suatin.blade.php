<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >

<form action="/tin/suatin/{{$fix->id}}" method="post" class="col-7 m-auto">
<p> Tiêu đề: <input name="title" value="{{$fix->title}}" class="form-control"></p>
<p> Hình ảnh: <input type="file" value="{{$fix->img}}" name="img" class="form-control"></p>
<p> Diễn tả: <textarea name="description" value="{{$fix->description}}" class="form-control"></textarea></p>
</select>
</p>
<p><button type="submit" class="bg-warning p-2">Sua tin</button></p>
@csrf

{{-- @method('put') --}}
</form>