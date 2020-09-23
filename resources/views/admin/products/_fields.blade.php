<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {{ Form::label('product_name', 'Product Name') }}
    {{ Form::text('name',$product->name,['class'=>'form-control border-input','placeholder'=>'Macbook pro']) }}
    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
    {{ Form::label('price', 'Price') }}
    {{ Form::text('price',$product->price,['class'=>'form-control border-input','placeholder'=>'$2500']) }}
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
{{--<div class="form-group">
    <label for="description">Description </label>
    <textarea id="summernoteone" name="description" placeholder=' Description'> </textarea>
</div>
<div class="form-group">
    <label for="fulldescription">Full Description </label>
    <textarea id="summernote" name="fulldescription" placeholder='Full Description'> </textarea>
</div>--}}

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    {{ Form::label('file','File') }}
    {{ Form::file('image', ['class'=>'form-control border-input', 'id' => 'image']) }}
    <div id="thumb-output"></div>
    <span class="text-danger">{{ $errors->has('image') ? $errors->first('description') : '' }}</span>
</div>
<div class="form-group">
    <label for="images">Multiple Images</label>
    <input type="file" name="images[]" id="images" class="form-control" multiple>
    <small class="text-warning">You can use ctr (cmd) to select multiple images</small>
</div>
<div class="form-group">
    <label for="studentprice">Student Price</label>
    <input type="text" name="studentprice" id="studentprice" class="form-control" >
    
</div>
<i class="fa fa-link"></i>

  <div class="form-group string optional profile_website">
    <input class="string optional form-control" placeholder="http://your-website.com" type="text" name="webste" id="profile_website">
  </div>
  <i class="fa fa-youtube"></i>
  <div class="form-group url optional profile_facebook_url">
    <input class="string url optional form-control" placeholder="http://youtube.com/your-account" type="url" name="youtube_url" id="profile_facebook_url">
  </div>
  <i class="fa fa-facebook"></i>
  <div class="form-group url optional profile_facebook_url">
    <input class="string url optional form-control" placeholder="http://facebook.com/your-account" type="url" name="profile[facebook_url]" id="profile_facebook_url">
  </div>

  <i class="fa fa-twitter"></i>
  <div class="form-group url optional profile_twitter_url">
    <input class="string url optional form-control" placeholder="http://twitter.com/your-account" type="url" name="profile[twitter_url]" id="profile_twitter_url">
  </div>

  <i class="fa fa-instagram"></i>
  <div class="form-group url optional profile_instagram_url">
    <input class="string url optional form-control" placeholder="http://instagram.com/your-account" type="url" name="profile[instagram_url]" id="profile_instagram_url">
  </div>
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