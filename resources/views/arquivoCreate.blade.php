@extends('layouts.layout')

@section('title', 'Criando Arquivo')

@section('content')
    <div class="container-fluid">
        
        {{-- File --}}
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
          </div>
    </div>
@endsection