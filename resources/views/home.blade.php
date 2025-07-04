@extends('layouts.app')

@section('content')
<div class="text-center my-5">
    <h1 class="display-4 mb-3">Bem-vindo ao BSM Workspace!</h1>
    <p class="lead mb-4">Organize projetos, times e tarefas de forma colaborativa, visual e simples.<br>Gerencie boards,
        cards, times e acompanhe o progresso do seu time como no Jira, mas do seu jeito!</p>
    <a href="" class="btn btn-primary btn-lg me-2">Entrar</a>
    <a href="" class="btn btn-outline-secondary btn-lg">Criar Conta</a>
</div>

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Quadros Kanban</h5>
                <p class="card-text">Visualize e mova tarefas entre colunas, como em um quadro Jira.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Times & Permissões</h5>
                <p class="card-text">Crie times, convide membros e defina permissões para cada papel.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Relatórios & Progresso</h5>
                <p class="card-text">Acompanhe o andamento dos projetos e visualize métricas de produtividade.</p>
            </div>
        </div>
    </div>
</div>
@endsection
