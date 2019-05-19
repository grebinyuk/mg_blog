<label class="text-secondary" for="">Status</label>
<select class="form-control" name="published">
  @if (isset($article->id))
    <option value="0" @if ($article->published == 0) selected="" @endif>Not published</option>
    <option value="1" @if ($article->published ==1) selected="" @endif>Published</option>
  @else
    <option value="0">Not published</option>
    <option value="1">Published</option>
  @endif
</select>
<br>

<label class="text-secondary" for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Post title" value="{{$article->title ?? ""}}" required>
<br>

<label class="text-secondary" for="">Slug</label>
<input class="form-control" type="text" name="slug" blaceholder="Automatic generation" value="{{$article->slug ?? ""}}" readonly="">
<br>

<label class="text-secondary" for="">Short description </label>
<textarea class="form-control" id = "description_short" name="description_short" required>{{$article->description_short ?? ""}}</textarea>
<br>

<label class="text-secondary" for="">Description</label>
<textarea class="form-control" id = "description" name="description" required>{{$article->description ?? ""}}</textarea>
<br>

<hr />

<label class="text-secondary" for="">Meta title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta title" value="{{$article->meta_title ?? ""}}" required>
<br>

<label class="text-secondary" for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta description" value="{{$article->meta_description ?? ""}}" required>
<br>

<label class="text-secondary" for="">Keywords</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Keywords" value="{{$article->meta_keyword ?? ""}}" required>
<br>

<input class="btn btn-primary" type="submit"  value="Save">
