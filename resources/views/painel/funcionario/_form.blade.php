<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Nome</label>
    <div class="col-lg-8">
        <input name="name" id="name" value="{{$classe->name}}" 
        class="form-control border-input" required aria-required="true">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">E-mail</label>
    <div class="col-lg-8">
        <input type="email" name="email" id="email" value="{{$classe->email}}" 
            class="form-control border-input" required aria-required="true">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">CPF</label>
    <div class="col-lg-8">
        <input name="cpf" id="email" value="{{$classe->cpf}}" 
            class="form-control border-input cpf" required aria-required="true">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Data de Nascimento</label>
    <div class="col-lg-8">
        <input name="nascimento" id="nascimento" value="{{date('d/m/Y', strtotime($classe->nascimento))}}" 
            class="form-control border-input date datepicker" required aria-required="true">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Tipo Acesso</label>
    <div class="col-lg-8">
        <select name="type" id="type" class="selectpicker" data-size="7" data-style="btn btn-danger" title="Selecione">
            <option value="atend" @if($classe->type=='atend') selected @endif>Atendente</option>
            <option value="prof" @if($classe->type=='prof') selected @endif>Professor</option>
            <option value="admin" @if($classe->type=='admin') selected @endif>Administrador</option>
        </select>
    </div>
</div>
<!--Botões-->
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button class="btn btn-danger" type="submit">Salvar</button>
        <a class="btn btn-white" href="{{ route('funcionario.index') }}">Voltar</a>
    </div>
</div>