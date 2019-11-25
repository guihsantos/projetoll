@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')


    @if(session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    {!! Form::open(['route'=>'produtos.store','method' => 'post', 'class' => 'form-padrao']) !!}

    @include('templates.formulario.input', ['label' =>'Nome','input' => 'nome','atributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.input', ['label' =>'Descrição','input' => 'descricao','atributes' => ['placeholder' => 'descricao']])
    @include('templates.formulario.select',['label' =>'Tipo Produto','select' => 'tipoProduto', 'data'=> $tipoProduto_list])
    @include('templates.formulario.input1', ['label' =>'Preço','input' => 'preco','atributes' => ['placeholder' => 'preco']])
    @include('templates.formulario.input', ['label' =>'Quantidade','input' => 'qtde','atributes' => ['placeholder' => 'quantidade']])
    @include('templates.formulario.submit', ['input' => 'Cadastrar'])

    {!! Form::close() !!}




    <table class="default-table">
        <thead>
            <tr>
                <td>#</td>
                
                <td>Nome</td>
                <td>descricao</td>
                <td>tipo Produto</td>
                <td>preco</td>
                <td>qtde</td>
                <td>Menu</td>
            </tr>
        </thead>
        <tbody>
            
     
        @foreach($produtos as $produto)
            
            <tr>
                <td>{{$produto->id }}</td>
                <td>{{$produto->nome }}</td>
                <td>{{$produto->descricao }}</td>
                <td>{{$produto->tipoProduto }}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->qtde}}</td>
                
                <td>
                        {!! Form::open(['route' => ['produtos.destroy', $produto->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Remover')!!}
                        {!! Form::close() !!}
                        <button><a href="{{ route('produtos.edit',$produto->id) }}">Atualizar</a></button>

                </td>    
                    
               
            
            </tr>
      
        </tbody>
        @endforeach
    </table>

@endsection


          