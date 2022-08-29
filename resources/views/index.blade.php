@extends('layouts.app')


@section('content')
    <link rel="stylesheet" href="{{asset('indexstyle.css')}}">
    <div style="margin-top: 10px;    background-color: #121212;
" class="container">
        <div class="card1">
            <div class="card">
                <h2>Bem vindo ao sistema gerenciador de Condomínios!</h2>
                <h4>Escolha sua opção:</h4>
                <div class="d-flex align-items-center">
                    <a data-toggle="modal" data-target="#condominioModal"
                       class="btn btn-success">Cadastrar Condomínio</a>
                    <a data-toggle="modal" data-target="#condominoModal" class="btn btn-warning">Cadastrar
                        Usuário</a>
                    <a data-toggle="modal" data-target="#apartamentoModal" class="btn btn-danger">Cadastrar
                        Apartamento</a>
                    <a data-toggle="modal" data-target="#sindicoModal" class="btn btn-secondary">Cadastrar Síndico</a>

                    <a class="btn btn-primary">Listar Espaços de reserva</a>
                </div>
            </div>
        </div>
        <div class="card2">
            <div class="card">
                <h2>O sistema...</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                    words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                    classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                    written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                    section 1.10.32.</p>
            </div>

        </div>
        <div class="card3">
            <div class="card">
                <h2>O sistema...</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                    words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                    classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                    written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                    section 1.10.32.</p>
            </div>

        </div>
        <div class="card4">
            <div class="card">
                <h2>O sistema...</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                    words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                    classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                    written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                    section 1.10.32.</p>
            </div>

        </div>

    </div>

    <form method="post" enctype="multipart/form-data" action="{{route('condominios.salvar')}}">
        @csrf
        <div id="condominioModal" class="modal fade">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Cadastro de Condomínio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Nome do Empreendimento</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Síndico Responsável</label>
                                <select class="form-control" name="sindico">
                                    <option value=" ">Selecione uma opção</option>
                                    @foreach($sindicos as $pessoa)
                                        <option value="{{$pessoa->id}}">{{$pessoa->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Endereço do Condomínio</label>
                                <input class="form-control" type="text" name="endereco">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="POST" action="{{route('condominos.salvar')}}" enctype="multipart/form-data">
        @csrf
        <div id="condominoModal" class="modal fade">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Cadastro de Condomíno</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Nome</label>
                                <input name="nome" type="text" class="form-control">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-semibold">CPF do Condomíno</label>
                                <input type="number" name="cpf" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-semibold">Telefone</label>
                                <input type="number" name="telefone" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-semibold">Data de nascimento</label>
                                <input type="date" name="data_nasc" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-semibold">E-mail</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn btn-success">Salvar</button>
                    </div>
                </div>

            </div>
        </div>

    </form>

    <form action="{{route('apartamento.salvar')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div id="apartamentoModal" class="modal fade">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Cadastro de Apartamento/Unidade</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Condomínio</label>
                                <select name="condominio_id" class="form-control">
                                    @foreach($condominios as $condominio)
                                        <option value="{{$condominio->id}}">{{$condominio->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Número do andar </label>
                                <input type="number" name="andar" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Responsável pela unidade</label>
                                <select name="usuario_id" class="form-control" >
                                @foreach($pessoas as $pessoa)
                                    <option value="{{$pessoa->id}}">{{$pessoa->name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{route('sindico.salvar')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div id="sindicoModal" class="modal fade">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Selecionar Síndico</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Síndico</label>
                                <select name="pessoa" class="form-control">
                                    @foreach($pessoas as $pessoa)
                                        <option value="{{$pessoa->id}}">{{$pessoa->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-semibold">Condomínio</label>
                                <select class="form-control" name="condominio">
                                    @foreach($condominios as $condominio)
                                        <option value="{{$condominio->id}}">{{$condominio->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
