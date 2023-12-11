@extends('layouts.layout')

@section('title', 'Criando Arquivo')

@section('content')


    <form action="{{route('arquivo.store')}}" method="POST">
        @csrf
        <div class="container-fluid">   
            {{-- File --}}
            <div class="mb-3" style="width: 10cm">
                <label>Anexo: </label>
                <input class="form-control" type="file" id="formFileMultiple" name="anexo[]" multiple>
            </div>

            {{-- Nome --}}
            <label>Nome da Conta: </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nome" aria-label="nomeConta" aria-describedby="basic-addon1" name="nomeConta">
            </div>

            {{-- Descrição --}}
            <label>Descrição: </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Descição" aria-label="Descição" aria-describedby="basic-addon1" name="descricao">
            </div>

            {{-- Data Vencimento --}}
            <label>Data Vencimento: </label>
            <div class="input-group mb-3">
                <input type="date" class="form-control"  aria-label="dataVencimento" aria-describedby="basic-addon1" name="dataVencimento">
            </div>

            {{-- Data Pagamento --}}
            <label>Data Pagamento: </label>
            <div class="input-group mb-3">
                <input type="date" class="form-control"  aria-label="dataPagamento" aria-describedby="basic-addon1" name="dataPagamento">
            </div>

            {{-- Categoria --}}
            <label>Categoria: </label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Categoria</option>
                <option value="">One</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>
    </form>

@endsection