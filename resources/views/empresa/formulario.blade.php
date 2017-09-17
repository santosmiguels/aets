@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Registro de novas empresas
                <a href="{{ url('adminemp/')}}" class="btn btn-primary">Pag Inicial da empresa</a></p>    
                </div>
                <div class="panel-body">


                @if(Request::is('*/alteraempresa'))                    
                    
                    {{'ALTERAÇÃO DE DADOS'}} 
                     <form class="form-horizontal" role="form" method="PATCH" action="{{ url('adminemp/'.$empresa->id) }}">
                @else
                    {{'NOVO CADASTRO'}} 
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('empresasalvar') }}">


                @endif
                    
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome da Empresa</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $empresa->name or old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail da Empresa</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $empresa->email or old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma a Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('empresaResponsavel') ? ' has-error' : '' }}">
                            <label for="empresaResponsavel" class="col-md-4 control-label">Responsável pela Empesa</label>

                            <div class="col-md-6">
                                <input id="empresaResponsavel" type="text" class="form-control" name="empresaResponsavel" value="{{ $empresa->empresaResponsavel or old('empresaResponsavel') }}" required autofocus>

                                @if ($errors->has('empresaResponsavel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('empresaResponsavel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--<div class="form-group{{ $errors->has('eCNPJ') ? ' has-error' : '' }}">
                            <label for="eCNPJ" class="col-md-4 control-label">CNPJ</label>

                            <div class="col-md-6">
                                <input id="eCNPJ" type="text" class="form-control" name="eCNPJ" value="{{ $empresa->eCNPJ or  old('eCNPJ') }}" required autofocus>

                                @if ($errors->has('eCNPJ'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eCNPJ') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->


                        <div class="form-group{{ $errors->has('empresaTelefone') ? ' has-error' : '' }}">
                            <label for="empresaTelefone" class="col-md-4 control-label">Telefone fixo</label>

                            <div class="col-md-6">
                                <input id="empresaTelefone" type="text" class="form-control" name="empresaTelefone" value="{{ $empresa->empresaTelefone or old('empresaTelefone') }}" required autofocus>

                                @if ($errors->has('empresaTelefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('empresaTelefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!--<div class="form-group{{ $errors->has('eTelefone2') ? ' has-error' : '' }}">
                            <label for="eTelefone2" class="col-md-4 control-label">Telefone Celular</label>

                            <div class="col-md-6">
                                <input id="eTelefone2" type="text" class="form-control" name="eTelefone2" value="{{ $empresa->eTelefone2 or old('eTelefone2') }}" required autofocus>

                                @if ($errors->has('eTelefone2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eTelefone2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                       

                        <!--<div class="form-group{{ $errors->has('eEndereco') ? ' has-error' : '' }}">
                            <label for="eEndereco" class="col-md-4 control-label">Endereço</label>

                            <div class="col-md-6">
                                <input id="eEndereco" type="text" class="form-control" name="eEndereco" value="{{ $empresa->eEndereco or old('eEndereco') }}" required autofocus>

                                @if ($errors->has('eEndereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eEndereco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                        <!--<div class="form-group{{ $errors->has('ePontoRef') ? ' has-error' : '' }}">
                            <label for="ePontoRef" class="col-md-4 control-label">Ponto de Referência</label>

                            <div class="col-md-6">
                                <input id="ePontoRef" type="text" class="form-control" name="ePontoRef" value="{{ $empresa->eMarkers or old('eMarkers') }}" required autofocus>

                                @if ($errors->has('ePontoRef'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ePontoRef') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                        <!--<div class="form-group{{ $errors->has('eMarkers') ? ' has-error' : '' }}">
                            <label for="eMarkers" class="col-md-4 control-label">Markers</label>

                            <div class="col-md-6">
                                <input id="eMarkers" type="text" class="form-control" name="eMarkers" value="{{ $empresa->eMarkers or old('eMarkers') }}" required autofocus>

                                @if ($errors->has('eMarkers'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eMarkers') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                        <!--<div class="form-group{{ $errors->has('eFormaPagamento') ? ' has-error' : '' }}">
                            <label for="eFormaPagamento" class="col-md-4 control-label">Forma de pagamento</label>

                            <div class="col-md-6">
                                <input id="eFormaPagamento" type="text" class="form-control" name="eFormaPagamento" value="{{ $empresa->eFormaPagamento or old('eFormaPagamento') }}" required autofocus>

                                @if ($errors->has('eFormaPagamento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eFormaPagamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->



                        <!--<div class="form-group{{ $errors->has('eFoto') ? ' has-error' : '' }}">
                            <label for="eFoto" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <input id="eFoto" type="text" class="form-control" name="eFoto" value="{{ $empresa->eFoto or old('eFoto') }}" required autofocus>

                                @if ($errors->has('eFoto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eFoto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->






                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
