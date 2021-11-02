<div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    {!! Form::text('category', null, ['class'=>'form-control','placeholder'=>'Category Name']) !!}
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Icon</label>
  {!! Form::file('icon',['class'=>'form-control']) !!}
</div>
  <button type="submit" class="btn btn-primary">Save Category</button>
  <a href="/admin/category" class="btn btn-primary">Back</a>