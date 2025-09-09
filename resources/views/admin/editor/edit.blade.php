<textarea  id="editor" name="body" class="form-control" required  cols="30" rows="5">{{ html_entity_decode($book->body) }}</textarea>
@include('admin.editor.js.index')
