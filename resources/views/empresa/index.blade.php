@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p>Sistema A&TS - Área das Empresas</p>
                <ul>
                    <a href="adminemp/{{Auth::user()->id}}/alteraempresa" class="btn btn-primary">Alterar dados da empresa</a>
                    <a href="{{ url('adminemp/')}}" class="btn btn-primary">Remover a empresa</a>
                    <a href="{{ url('adminemp/')}}" class="btn btn-primary">Pag Inicial da emrpesa</a>
                </ul>   
                <ul>
                <a href="{{ url('adminemp/alteraempresa')}}" class="btn btn-primary">Minhas avaliações recebidas</a>
                <a href="{{ url('adminemp/listaempresa')}}" class="btn btn-primary">Listar Empresas cadastradas</a>
                    <!--<a href="{{ url('/usuarios')}}">Remover a empresa</a>
                    <a href="{{ url('/home')}}">Pag Inicial</a></li>-->
                </ul>  
                </div>    

                <div class="panel-body"> 
                <img src="images/dnaazul.jpg" width="700" alt="Imagem de um dna cor azul." />
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

