@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p>Sistema Saúde Sempre - Área do usuário</p>
                
                <ul>

                <p><a href="{{ url('admin/')}}" class="btn btn-primary">Pag Inicial do usuário</a></p>


                <!--<p><a href="admin/{{Auth::user()->id}}/alteracliente" class="btn btn-primary">Alterar usuário</a>
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Remover usuário (pendente)</a>
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Pag Inicial</a></p>
                 </ul>
                 <ul>
                 <p>

                <a href="{{ url('admin/avaliaempresa')}}" class="btn btn-primary">Avaliar serviços das lanchonetes</a>
                <a href="{{ url('admin/listacliente')}}" class="btn btn-primary">Lista de lanchonetes cadastradas</a>
                </p>-->
                  
                </ul>
                 </div>   

                <div class="panel-body">               
                    Empresas Cadastradas.<br>
                    <table class="table table-striped">
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Avaliar</th>
                    <th>Menu de opções</th>
                    <th>Avaliações recebidas</th>
                    <tbody>
                    @foreach($empresas as $empresa)
                        <tr>
                            <td>{{ $empresa->name }}</td>
                            <td>{{ $empresa->eEndereco }}</td>
                            <td>{{ $empresa->eTelefone1 }}</td>
                            <td><a href="{{ url('admin/avaliaempresa')}}" class="btn btn-primary">Avaliar</td>
                            <td><button class="btn btn-sm">Editar</td></button></td>
                            <td><button class="btn btn-sm">Ver avaliações</td></button></td>
                        </tr>
                    @endforeach    
                    </tbody>    
                   

                   </table>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection