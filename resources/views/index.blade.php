@extends('layouts.app')


@section('content')
    <link rel="stylesheet" href="{{asset('indexstyle.css')}}">
    <div style="margin-top: 10px" class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h2>Bem vindo ao sistema gerenciador de Condomínios!</h2>
                    <h4>Escolha sua opção:</h4>
                    <div class="d-flex align-items-center">
                        <a data-toggle="modal" data-target="#condominioModal" href="{{route('condominios')}}"
                           class="btn btn-success">Cadastrar Condomínio</a>
                        <a data-toggle="modal" data-target="#condominoModal" class="btn btn-success">Cadastrar
                            Condomíno</a>
                        <a class="btn btn-success">Cadastrar Condomíno</a>
                        <a class="btn btn-primary">Listar Espaços de reserva</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
    </div>
    <!-- Button trigger modal -->


    <form method="post" enctype="multipart/form-data" action="{{route('condominios.salvar')}}">
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
                            <div class="col-md-12">
                                <label class="text-semibold"></label>
                                <input>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

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
                        <button type="submit" class="btn btn btn-primary form">Salvar</button>
                    </div>
                </div>

            </div>
        </div>

    </form>

    <form method="POST"  enctype="multipart/form-data">
        <div id="condoinioModal" class="modal fade">
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

                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    </form>

    <form>
        <div id="condoinioModal" class="modal fade">
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

                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
