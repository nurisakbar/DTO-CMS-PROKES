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
        {!! Form::textarea('content',null,['id'=>'editor','rows'=>10,'class'=>'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tags</label>
    {!! Form::text('tags', null, ['class'=>'form-control','placeholder'=>'Example : tagsA,TagsB,TagsC']) !!}
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input type="file" class="form-control" name="image" id="image">
      </div>
    </div>
    <div class="col-md-8 mb-5">
      <div class="mx-auto">
        <img id="preview-image-before-upload" src="{{ (isset($article->image)) ? asset('storage/article/' . $article->image) : "https://www.riobeauty.co.uk/images/product_image_not_found.gif" }}" alt="preview image" style="width: 350px;height:200px">
      </div>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Simpan</button>
  <a href="/admin/article" class="btn btn-primary">Kembali</a>

  @push('scripts')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script>
    $(document).ready(function (e) {
 
      $('#image').change(function(){
                
        let reader = new FileReader();

        reader.onload = (e) => { 

          $('#preview-image-before-upload').attr('src', e.target.result); 
        }

        reader.readAsDataURL(this.files[0]); 
      
      });
      
    });
    CKEDITOR.replace( 'editor' );
</script>
  @endpush