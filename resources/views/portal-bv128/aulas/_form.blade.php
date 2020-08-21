<h6 class="heading-small text-muted mb-4">Informações da notícia</h6>

{{-- Título --}}
<div class="col-lg-12 col-md-6">
    <div class="form-group">
        <label class="form-control-label">
            Título</label> <span style="color:#f5365c ">*</span>
        <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome"
            value="{{ isset($aula) && $aula->nome && !old('nome') != null ? $aula->nome : old('nome') }}"
            placeholder="Informe o Título da Aula Aqui" autofocus="">

        @if ($errors->has('nome'))
        <span class="invalid-feedback" style="display: block;" role="alert">
            <strong>{{ $errors->first('nome') }}</strong>
        </span>
        @endif

    </div>
</div>
{{-- Chamada/Resumo --}}
<div class="col-lg-12 col-md-6">
    <div class="form-group">
        <label class="form-control-label ">
            Resumo/Descrição</label> <span style="color:#f5365c ">*</span>
        <textarea name="descricao" class="form-control {{ $errors->has('descricao') ? 'is-invalid' : '' }}" rows="4"
            style="height:auto" placeholder=""
            autofocus="">{{ isset($aula) && $aula->descricao && !old('descricao') != null ? $aula->descricao : old('descricao') }}</textarea>

        @if ($errors->has('descricao'))
        <span class="invalid-feedback" style="display: block;" role="alert">
            <strong>{{ $errors->first('descricao') }}</strong>
        </span>
        @endif


    </div>
</div>
{{-- Corpo --}}
<div class="col-lg-12 col-md-6">
    <div class="form-group">
        <label class="form-control-label ">
            Corpo</label> <span style="color:#f5365c ">*</span>
        <textarea id="editor" name="corpo" class="form-control {{ $errors->has('corpo') ? 'is-invalid' : '' }}"
            rows="100" style="height:auto" placeholder=""
            autofocus="">{{ isset($aula) && $aula->corpo && !old('corpo') != null ? $aula->corpo : old('corpo') }}</textarea>

        @if ($errors->has('corpo'))
        <span class="invalid-feedback" style="display: block;" role="alert">
            <strong>{{ $errors->first('corpo') }}</strong>
        </span>
        @endif


    </div>
</div>
{{-- Imagem --}}
<div class="col-lg-12 col-md-6">
    <label class="form-control-label ">
        Imagem Destaque</label> <span style="color:#f5365c ">*</span>
    <div class="input-group">
        <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                <i class="fa fa-picture-o"></i> Selecione
            </a>
        </span>
        <input id="thumbnail" class="form-control {{ $errors->has('imagem') ? 'is-invalid' : '' }}" type="text"
            name="imagem" value="{{ isset($aula) && $aula->imagem ? $aula->imagem : '' }}">
    </div>

    @if ($errors->has('imagem'))
    <span class="invalid-feedback" style="display: block;" role="alert">
        <strong>{{ $errors->first('imagem') }}</strong>
    </span>
    @endif

    <div id="holder" style="max-width:200px;"> <img style="max-width:100px;" src="{{ isset($aula) && $aula->thumb ? $aula->thumb : '' }}" alt="">
    </div>

</div>



@push('scripts')

{{-- Botão de imagem --}}
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

{{-- Import do Tiny --}}
<script src="{{ asset('admin/js/tinymce/tinymce.min.js') }}"></script>

{{-- Js do botão de imagem --}}
<script>
    var route_prefix = "/filemanager";
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });

</script>

{{-- TinyMCE4 --}}
<script>
    var editor_config = {
            language: 'pt_BR',
            height: "400",
            path_absolute: "/",
            selector: 'textarea#editor',
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | forecolor backcolor | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);

</script>


@endpush