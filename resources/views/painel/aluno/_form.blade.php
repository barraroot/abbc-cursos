<div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">Nome</label>
        <div class="col-lg-8">
            <input name="nome" id="nome" value="{{$classe->nome}}" 
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
            <input name="cpf_cnpj" id="cpf_cnpj" value="{{$classe->cpf_cnpj}}" 
            class="form-control border-input cpf" required aria-required="true">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">RG / Expedidor</label>
        <div class="col-lg-5">
            <input name="rg" id="rg" value="{{$classe->rg}}" 
            class="form-control border-input" required aria-required="true">
        </div>
        <div class="col-lg-3">
            <input name="orgex" id="orgex" value="{{$classe->orgex}}" 
            class="form-control border-input" required aria-required="true">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">Data de Nascimento</label>
        <div class="col-lg-8">
            <input name="nasc" id="nasc" value="{{date('d/m/Y', strtotime($classe->nasc))}}" 
            class="form-control border-input date datepicker" required aria-required="true">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">Telefone de Contato</label>
        <div class="col-lg-8">
            <input name="tel" id="tel" value="{{$classe->tel}}" 
            class="form-control border-input phone" required aria-required="true">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">Celular</label>
        <div class="col-lg-8">
            <input name="cel" id="cel" value="{{$classe->cel}}" 
            class="form-control border-input phone" required aria-required="true">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">CEP / Endereço</label>
        <div class="col-lg-2">
            <input name="end_cep" id="end_cep" value="{{$classe->end_cep}}" 
            class="form-control border-input cep" required aria-required="true">
        </div>
        <div class="col-lg-6">
            <input name="end_rua" id="end_rua" value="{{$classe->end_rua}}" 
            class="form-control border-input" required aria-required="true">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">Número / Bairro</label>
        <div class="col-lg-2">
            <input name="end_num" id="end_num" value="{{$classe->end_num}}" 
            class="form-control border-input" required aria-required="true">
        </div>
        <div class="col-lg-6">
            <input name="end_bairro" id="end_bairro" value="{{$classe->end_bairro}}" 
            class="form-control border-input" required aria-required="true">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">Complemento</label>
        <div class="col-lg-8">
            <input name="end_compl" id="end_compl" value="{{$classe->end_compl}}" 
            class="form-control border-input" required aria-required="true">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-offset-1 col-lg-1 col-form-label">Cidade / Estado</label>
        <div class="col-lg-6">
            <input name="end_cidade" id="end_cidade" value="{{$classe->end_cidade}}" 
            class="form-control border-input" required aria-required="true">
        </div>
        <div class="col-lg-2">
            <select id="end_estado" name="end_estado" required class="form-control border-input" required aria-required="true">
                @foreach(estados_brasileiros() as $sigla=>$estado)
                    <option value="{{$sigla}}" @if($sigla == Auth::user()->end_estado) selected @endif>{{$estado}}</option>
                @endforeach;
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-8">
            <input type="checkbox" name="responsavel" id="responsavel" class="border-input"> 
            <label for="responsavel">Informar dados do responsavel</label>
        </div>
    </div>
    <!-- Informações do responsavel -->
    <div id="dados-responsavel">
        <div class="col-lg-12">
            <h3>Informações do Responsavel</h3>
            <hr>
        </div>
        <div class="form-group">
            <label class="col-lg-offset-1 col-lg-1 col-form-label">Nome</label>
            <div class="col-lg-8">
                <input name="resp_nome" id="resp_nome" value="{{$classe->resp_nome}}" 
                class="form-control border-input">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-offset-1 col-lg-1 col-form-label">CPF</label>
            <div class="col-lg-8">
                <input name="resp_cpf_cnpj" id="resp_cpf_cnpj" value="{{$classe->resp_cpf_cnpj}}" 
                class="form-control border-input cpf">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-offset-1 col-lg-1 col-form-label">RG / Expedidor</label>
            <div class="col-lg-5">
                <input name="resp_rg" id="resp_rg" value="{{$classe->resp_rg}}" 
                class="form-control border-input">
            </div>
            <div class="col-lg-3">
                <input name="resp_orgex" id="resp_orgex" value="{{$classe->resp_orgex}}" 
                class="form-control border-input">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-offset-1 col-lg-1 col-form-label">Data de Nascimento</label>
            <div class="col-lg-8">
                <input name="resp_nasc" id="resp_nasc" value="{{date('d/m/Y', strtotime($classe->resp_nasc))}}" 
                class="form-control border-input date datepicker">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-offset-1 col-lg-1 col-form-label">CEP / Endereço</label>
            <div class="col-lg-2">
                <input name="resp_cep" id="resp_cep" value="{{$classe->resp_cep}}" 
                class="form-control border-input cep">
            </div>
            <div class="col-lg-6">
                <input name="resp_rua" id="resp_rua" value="{{$classe->resp_rua}}" 
                class="form-control border-input">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-offset-1 col-lg-1 col-form-label">Número / Bairro</label>
            <div class="col-lg-2">
                <input name="resp_num" id="resp_num" value="{{$classe->resp_num}}" 
                class="form-control border-input">
            </div>
            <div class="col-lg-6">
                <input name="resp_bairro" id="resp_bairro" value="{{$classe->resp_bairro}}" 
                class="form-control border-input">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-offset-1 col-lg-1 col-form-label">Complemento</label>
            <div class="col-lg-8">
                <input name="resp_compl" id="resp_compl" value="{{$classe->resp_compl}}" 
                class="form-control border-input">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-offset-1 col-lg-1 col-form-label">Cidade / Estado</label>
            <div class="col-lg-6">
                <input name="resp_cidade" id="resp_cidade" value="{{$classe->resp_cidade}}" 
                class="form-control border-input">
            </div>
            <div class="col-lg-2">
                <select id="resp_estado" name="resp_estado" required class="form-control border-input">
                    @foreach(estados_brasileiros() as $sigla=>$estado)
                        <option value="{{$sigla}}" @if($sigla == $classe->resp_estado) selected @endif>{{$estado}}</option>
                    @endforeach;
                </select>
            </div>
        </div>           
    </div>

    <!--Botões-->
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-danger" type="submit">Salvar</button>
            <a class="btn btn-white" href="{{ route('aluno.index') }}">Voltar</a>
        </div>
    </div>