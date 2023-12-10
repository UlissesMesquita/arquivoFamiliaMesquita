<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tela de Cadastro</title>

        <!-- Fonts -->
        
        <!-- Styles -->
        <style>
        </style>

    </head>
    <body>

    <form action="{{ route('arquivo.create') }}" method="GET">
    @csrf

    <div class="form-group">
        <label for="data_vencimento">Data de Vencimento</label>
        <input type="date" name="dataVencimento" id="dataVencimento" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="data_pagamento">Data de Pagamento</label>
        <input type="date" name="dataPagamento" id="dataPagamento" class="form-control">
    </div>

    <div class="form-group">
        <label for="nome_conta">Nome da Conta</label>
        <input type="text" name="nomeConta" id="nomeConta" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria" class="form-control">
            <option value="">Selecione uma categoria</option>
            <option value="1">Categoria 1</option>
            <option value="2">Categoria 2</option>
            <option value="3">Categoria 3</option>
        </select>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control">
    </div>

    <div class="form-group">
        <label for="status_pagamento">Status de Pagamento</label>
        <input type="checkbox" name="statusPagamento" id="statusPagamento" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="reset" class="btn btn-secondary">Cancelar</button>
</form>
    
    </body>
</html>
