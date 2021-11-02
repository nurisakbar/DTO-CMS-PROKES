<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Title']) !!}
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="exampleInputEmail1">Category</label>
        {!! Form::select('category_id',$category, null, ['class'=>'form-control type']) !!}
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label for="exampleInputEmail1">Content</label>
        {!! Form::textarea('content',null,['id'=>'editor','rows'=>10]) !!}
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tags</label>
    {!! Form::text('tags', null, ['class'=>'form-control','placeholder'=>'Example : tagsA,TagsB,TagsC']) !!}
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
  <a href="/admin/faq" class="btn btn-primary">Kembali</a>


  @push('scripts')
  <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
  @endpush