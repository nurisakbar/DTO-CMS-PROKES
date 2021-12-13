<div class="form-group">
    <label for="exampleInputEmail1">Category Name ( ID )</label>
    {!! Form::text('category', null, ['class'=>'form-control','placeholder'=>'Category Name']) !!}
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Category Name ( Eng )</label>
  {!! Form::text('category_eng', null, ['class'=>'form-control','placeholder'=>'Category Name']) !!}
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    {!! Form::textarea('description',null,['id'=>'editor','rows'=>10,'class'=>'form-control']) !!}
  </div>
<div class="form-group">
  <label for="exampleInputEmail1">Icon</label>
  {!! Form::file('icon',['class'=>'form-control']) !!}
</div>
  <button type="submit" class="btn btn-primary">Save Category</button>
  <a href="/admin/category" class="btn btn-primary">Back</a>


  @push('scripts')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script>
    $(document).ready(function (e) {      
    });
    CKEDITOR.replace( 'editor' );
</script>
  @endpush