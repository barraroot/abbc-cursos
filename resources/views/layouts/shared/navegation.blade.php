<div class="sidebar-wrapper animated fadeInUp">
    <div class="user">
        <div class="photo">
            <img src="{{asset('img/avatar.jpg')}}" />
        </div>
        <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                <span>
                    <!-- Usuário Logado -->
                    {{Auth::user()->name}}
                    <b class="caret"></b>
                </span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample">
                <ul class="nav">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="sidebar-mini">SR</span>
                            <span class="sidebar-normal">Sair</span>
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-mini">AS</span>
                            <span class="sidebar-normal">Alterar Senha</span>
                        </a>
                        <hr>
                    </li>
                    <li id="munidade">
                        <a href="{{route('unidade.index')}}">
                            <span class="sidebar-mini">UN</span>
                            <span class="sidebar-normal">Unidade</span>
                        </a>
                    </li>                    
                    <li id="mcurso">
                        <a href="{{route('curso.index')}}">
                            <span class="sidebar-mini">CS</span>
                            <span class="sidebar-normal">Curso</span>
                        </a>
                    </li>
                    <li id="mturma">
                        <a href="{{route('turma.index')}}">
                            <span class="sidebar-mini">TM</span>
                            <span class="sidebar-normal">Turma</span>
                        </a>
                    </li>
                    <li id="mplanoPag">
                        <a href="{{route('planopagamento.index')}}">
                            <span class="sidebar-mini">PP</span>
                            <span class="sidebar-normal">Plano Pagamento</span>
                        </a>
                    </li>
                    <li id="mfuncionario">
                        <a href="{{route('funcionario.index')}}">
                            <span class="sidebar-mini">FC</span>
                            <span class="sidebar-normal">Funcionario</span>
                        </a>
                    </li>
                    <li id="mfinanceiro">
                            <a href="{{route('painel.financeiro')}}">
                                <span class="sidebar-mini">FN</span>
                                <span class="sidebar-normal">Financeiro</span>
                            </a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="nav">
        <li id="mdash">
            <a href="{{route('dashboard')}}">
                <i class="material-icons">dashboard</i>
                <p>Painel</p>
            </a>
        </li>
        <li id="maluno">
            <a href="{{ route('aluno.index') }}">
                <i class="fa fa-users"></i>
                <p>Alunos</p>
            </a>
        </li>
    </ul>
</div>