<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Descrição</label>
    <div class="col-lg-8">
        <input name="descricao" id="descricao" value="{{$classe->descricao}}" 
        class="form-control border-input" required aria-required="true">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Parcelas</label>
    <div class="col-lg-8">
        <input type="number" name="parcelas" id="parcelas" value="{{$classe->parcelas}}" 
        class="form-control border-input" required aria-required="true">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Periodicidade</label>
    <div class="col-lg-8">
        <select name="type" id="type" class="selectpicker" data-size="7" data-style="btn btn-danger" required aria-required="true" title="Selecione">
            <option value="mensal" @if($classe->type=='mensal') selected @endif>Mensal</option>
            <option value="anual" @if($classe->type=='anual') selected @endif>Anual</option>
        </select>
    </div>
</div>
<div class="form-group bmd-form-group is-filled">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Data 1ª Parcela</label>
    <div class="col-lg-8">
        <input type="text" class="form-control date datepicker" name="vencimento" 
            id="vencimento" required aria-required="true" value="{{date('d/m/Y', strtotime($classe->vencimento))}}">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Valor Parcela (R$)</label>
    <div class="col-lg-4">
        <input name="valor" id="valor" value="{{$classe->valor}}" 
            class="form-control border-input money" required aria-required="true">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Desconto (R$)</label>
    <div class="col-lg-4">
        <input name="desconto" id="desconto" value="{{$classe->desconto}}" 
            class="form-control border-input money">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Juros (%)</label>
    <div class="col-lg-4">
        <input name="juros" id="juros" value="{{$classe->juros}}" 
            class="form-control border-input percent">
    </div>
</div>

<div class="form-group">
    <label class="col-lg-offset-1 col-lg-1 col-form-label">Multa (%)</label>
    <div class="col-lg-4">
        <input name="multa" id="multa" value="{{$classe->multa}}" 
            class="form-control border-input percent">
    </div>
</div>
<!--Botões-->
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <button class="btn btn-danger" type="submit">Salvar</button>
        <a class="btn btn-white" href="{{ route('planopagamento.index') }}">Voltar</a>
    </div>
</div>