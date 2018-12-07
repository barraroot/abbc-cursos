<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Cidade / UF</label>
    <div class="col-lg-6">
        <input name="cidade" id="cidade" value="{{$classe->cidade}}" 
        class="form-control border-input">
    </div>
    <div class="col-lg-2">
        <select id="estado" name="estado" required class="form-control border-input">
            @foreach(estados_brasileiros() as $sigla=>$estado)
                <option value="{{$sigla}}" @if($sigla == $classe->resp_estado) selected @endif>{{$estado}}</option>
            @endforeach;
        </select>
    </div>
</div>  
<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Nome</label>
    <div class="col-lg-8">
        <input name="nome" id="nome" value="{{$classe->nome}}" 
        class="form-control border-input" required aria-required="true">
    </div>
</div>
<!--Botões-->
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button class="btn btn-danger" type="submit">Salvar</button>
        <a class="btn btn-white" href="{{ route('turma.index') }}">Voltar</a>
    </div>
</div>