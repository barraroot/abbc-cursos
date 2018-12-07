<div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">Descrição</label>
        <div class="col-lg-8">
            <input name="descricao" id="descricao" value="{{$classe->descricao}}" 
            class="form-control border-input" required aria-required="true">
        </div>
    </div>
    <!--Botões-->
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-danger" type="submit">Salvar</button>
            <a class="btn btn-white" href="{{ route('curso.index') }}">Voltar</a>
        </div>
    </div>