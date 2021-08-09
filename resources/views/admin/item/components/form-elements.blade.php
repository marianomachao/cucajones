<div class="form-check row" :class="{'has-danger': errors.has('active'), 'has-success': this.fields.active && this.fields.active.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="active" type="checkbox" v-model="form.active" v-validate="''" data-vv-name="active" name="active_fake_element">
        <label class="form-check-label" for="active">
            {{ trans('admin.item.columns.active') }}
        </label>        
        <input type="hidden" name="active" :value="form.active">
        <div v-if="errors.has('active')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('active') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': this.fields.type && this.fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.item.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <select class="form-control" v-model="form.type" v-validate="'required'" :class="{'form-control-danger': errors.has('type'), 'form-control-success': this.fields.type && this.fields.type.valid}" id="type" name="type">
            <option value>Seleccionar</option>
            <option value="bandcamp" :selected="form.type == 'bandcamp'">Bandcamp</option>
            <option value="spotify" :selected="form.type == 'spotify'">Spotify</option>
            <option value="imagen" :selected="form.type == 'imagen'">Imagen</option>
            <option value="youtube" :selected="form.type == 'youtube'">Youtube</option>
            <option value="texto" :selected="form.type == 'texto'">Texto</option>
            <option value="tweet" :selected="form.type == 'tweet'">Tweet</option>
        </select>
        <!-- <input type="text" v-model="form.type" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': this.fields.type && this.fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.item.columns.type') }}"> -->
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': this.fields.title && this.fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.item.columns.title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': this.fields.title && this.fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.item.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

<!-- <div class="form-group row align-items-center" :class="{'has-danger': errors.has('url'), 'has-success': this.fields.url && this.fields.url.valid }" v-if="form.type == 'youtube'">
    <label for="url" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.item.columns.url') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.url" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('url'), 'form-control-success': this.fields.url && this.fields.url.valid}" id="url" name="url" placeholder="{{ trans('admin.item.columns.url') }}">
        <div v-if="errors.has('url')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('url') }}</div>
    </div>
</div> -->

<!-- WYSIWYG para texto -->
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('text'), 'has-success': this.fields.text && this.fields.text.valid }"
    v-if="form.type == 'texto'">
    <label for="text" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.item.columns.text') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.text" v-validate="'required'" id="text" name="text" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('text')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('text') }}</div>
    </div>
</div>

<!-- HTML Embed -->
<div class="form-group row align-items-center"
    :class="{'has-danger': errors.has('text'), 'has-success': this.fields.text && this.fields.text.valid }" 
    v-if="form.type == 'youtube'"
>
    <label for="text" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Link</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.text" class="form-control" v-validate="'required'" id="text" name="text" style="font-family: courier;">
        <div v-if="errors.has('text')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('text') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{'has-danger': errors.has('text'), 'has-success': this.fields.text && this.fields.text.valid }" 
    v-if="form.type == 'tweet' || form.type == 'bandcamp' || form.type == 'spotify' "
>
    <label for="text" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">HTML Embed Code</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <textarea v-model="form.text" class="form-control" v-validate="'required'" id="text" name="text" style="font-family: courier;"></textarea>
        <div v-if="errors.has('text')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('text') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{'has-danger': errors.has('text'), 'has-success': this.fields.text && this.fields.text.valid }" 
    v-if="form.type == 'imagen'"
>
    <label for="text" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Imagen</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="hidden" name="image" id="image">
        <input type="file" onchange="encodeImageFileAsURL(this)">
        <!-- <textarea v-model="form.text" class="form-control" v-validate="'required'" id="text" name="text" style="font-family: courier;"></textarea> -->
        <div v-if="errors.has('text')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('image') }}</div>
        <div>
            <img id="preview-image" class="img-fluid" style="display:none">
        </div>
    </div>
</div>

<script>
    let encodeImageFileAsURL = function(element) {
        let file = element.files[0];
        let reader = new FileReader();
        reader.onloadend = function() {
            console.log('RESULT', reader.result)
            document.getElementById('image').value = reader.result;
            document.getElementById('preview-image').src = 'data:image/jpeg;charset=utf-8;base64, ' + reader.result;
            document.getElementById('preview-image').style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
</script>