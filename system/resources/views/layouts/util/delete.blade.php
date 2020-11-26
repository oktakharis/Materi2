<form action="{{$url}}" method="post" class="form-inlane" onsubmit="return confirm('Mau Menghapus Data Ini?')">
@csrf
@method("delete")
<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>