
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($blog)->title) }}" minlength="1" maxlength="255" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    <label for="slug" class="col-md-2 control-label">Slug</label>
    <div class="col-md-10">
        <input class="form-control" name="slug" type="text" id="slug" value="{{ old('slug', optional($blog)->slug) }}" minlength="1" placeholder="Enter slug here...">
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Blogcategory_id') ? 'has-error' : '' }}">
    <label for="Blogcategory_id" class="col-md-2 control-label">Blogcategory</label>
    <div class="col-md-10">
        <select class="form-control" id="Blogcategory_id" name="Blogcategory_id">
        	    <option value="" style="display: none;" {{ old('Blogcategory_id', optional($blog)->Blogcategory_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select blogcategory</option>
        	@foreach ($blogcategories as $key => $blogcategory)
			    <option value="{{ $key }}" {{ old('Blogcategory_id', optional($blog)->Blogcategory_id) == $key ? 'selected' : '' }}>
			    	{{ $blogcategory }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('Blogcategory_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($blog)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
    <label for="photo" class="col-md-2 control-label">Photo</label>
    <div class="col-md-10">
        <div class="input-group uploaded-file-group">
            <label class="input-group-btn">
                <span class="btn btn-default">
                    Browse <input type="file" name="photo" id="photo" class="hidden">
                </span>
            </label>
            <input type="text" class="form-control uploaded-file-name" readonly>
        </div>

        @if (isset($blog->photo) && !empty($blog->photo))
            <div class="input-group input-width-input">
                <span class="input-group-addon">
                    <input type="checkbox" name="custom_delete_photo" class="custom-delete-file" value="1" {{ old('custom_delete_photo', '0') == '1' ? 'checked' : '' }}> Delete
                </span>

                <span class="input-group-addon custom-delete-file-name">
                    {{ $blog->photo }}
                </span>
            </div>
        @endif
        {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('seoname') ? 'has-error' : '' }}">
    <label for="seoname" class="col-md-2 control-label">Seoname</label>
    <div class="col-md-10">
        <input class="form-control" name="seoname" type="text" id="seoname" value="{{ old('seoname', optional($blog)->seoname) }}" minlength="1" placeholder="Enter seoname here...">
        {!! $errors->first('seoname', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('metabody') ? 'has-error' : '' }}">
    <label for="metabody" class="col-md-2 control-label">Metabody</label>
    <div class="col-md-10">
        <input class="form-control" name="metabody" type="text" id="metabody" value="{{ old('metabody', optional($blog)->metabody) }}" minlength="1" placeholder="Enter metabody here...">
        {!! $errors->first('metabody', '<p class="help-block">:message</p>') !!}
    </div>
</div>

