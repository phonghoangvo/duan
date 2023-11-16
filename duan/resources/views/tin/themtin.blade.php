<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
<form action="{{url('/tin/themtin')}}" method="post" class="col-7 m-auto">
<p> Tiêu đề: <input name="title" class="form-control"></p>
<p> Hình ảnh: <input type="file" name="img" class="form-control"></p>
<p> Diễn tả: <textarea name="description" class="form-control"></textarea></p>
</select>
</p>
<p><button type="submit" class="bg-warning p-2">Thêm tin</button></p>
@csrf
</form>