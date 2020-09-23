<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('product_name', 'Product Name') }}
    {{ Form::text('name',$product->name,['class'=>'form-control border-input','placeholder'=>'Enter name']) }}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    {{ Form::label('price', 'Price') }}
    {{ Form::text('price',$product->price,['class'=>'form-control border-input','placeholder'=>'Rs2500']) }}
    <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : '' }}</span>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description',$product->description,['class'=>'form-control border-input','placeholder'=>'Description','id'=>"summernoteone"]) }}
    <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
</div>
<div class="form-group {{ $errors->has('fulldescription') ? 'has-error' : '' }}">
    {{ Form::label('fulldescription', 'Full Description') }}
    {{ Form::textarea('fulldescription',$product->full_descript,['class'=>'form-control border-input','placeholder'=>'Full Description','id'=>"summernote"]) }}
    <span class="text-danger">{{ $errors->has('fulldescription') ? $errors->first('fulldescription') : '' }}</span>
</div>
{{--<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('studentprice', 'Student Price') }}
    {{ Form::text('studentprice',$product->studentprice,['class'=>'form-control border-input','placeholder'=>'Enter studentprice']) }}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>--}}

<div class="form-group">
    <label for="cover">Cover </label>
    <input type="file" name="image" id="image" class="form-control">
</div>
{{--<div class="form-group">
    <label for="images">Images</label>
    <input type="file" name="images[]" id="images" class="form-control" multiple>
    <small class="text-warning">You can use ctr (cmd) to select multiple images</small>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('website', 'Website') }}
    {{ Form::text('website',$product->website,['class'=>'form-control border-input','placeholder'=>'Website']) }}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('youtube', 'Youtube Link') }}
    {{ Form::text('youtube',$product->youtube,['class'=>'form-control border-input','placeholder'=>'Youtube Link']) }}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>--}}
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        // General options
        selector: '#summernote',
        plugins: ['lists advlist',' textcolor'],
       // plugins: ['lists advlist',' textcolor','link image code fullscreen imageupload','uploadimage'],
        //toolbar: "forecolor backcolor",
        //toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imageupload | code | fullscreen | print preview media | forecolor backcolor emoticons | codesample | mybutton',
        toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | forecolor backcolor emoticons | codesample | mybutton',
       // toolbar2: 'print preview media | forecolor backcolor emoticons | codesample | mybutton',
        height : "250"
    });

</script>
<script>
    tinymce.init({
        // General options
        selector: '#summernoteone',
        plugins: ['lists advlist',' textcolor'],
       // plugins: ['lists advlist',' textcolor','link image code fullscreen imageupload','uploadimage'],
        //toolbar: "forecolor backcolor",
        //toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imageupload | code | fullscreen | print preview media | forecolor backcolor emoticons | codesample | mybutton',
        toolbar: 'undo redo | insert | styleselect | fontselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | forecolor backcolor emoticons | codesample | mybutton',
       // toolbar2: 'print preview media | forecolor backcolor emoticons | codesample | mybutton',
        height : "250"
    });

</script>
