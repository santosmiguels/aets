@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p>Sistema Saúde Sempre - Área do usuário</p>
                <ul>
                <p><a href="admin/{{Auth::user()->id}}/alteracliente" class="btn btn-primary">Alterar usuário</a>
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Remover usuário</a>
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Pag Inicial do usuário</a>
                 
                

                <a href="{{ url('admin/avaliaempresa')}}" class="btn btn-primary">Avaliar serviços da Empresa</a>
                <a href="{{ url('admin/listacliente')}}" class="btn btn-primary">Listar Empresas cadastradas</a></p>
                </ul>
                 </div>   

                <div class="panel-body">
                <img src="images/frequenciacardiaca.png" width="700" alt="Imagem de frequencia cardíaca." />

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

