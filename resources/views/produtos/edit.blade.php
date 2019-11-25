@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')


    @if(session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    {!! Form::model($produto, ['route'=>['produtos.update',$produto->id],'method' => 'put', 'class' => 'form-padrao']) !!}
    
    @include('templates.formulario.input', ['label' =>'Nome','input' => 'nome','atributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.input', ['label' =>'Descrição','input' => 'descricao','atributes' => ['placeholder' => 'descricao']])
    @include('templates.formulario.select',['label' =>'Tipo Produto','select' => 'tipoProduto', 'data'=> $tipoProduto_list])
    @include('templates.formulario.input', ['label' =>'Preço','input' => 'preco','atributes' => ['placeholder' => 'preco']])
    @include('templates.formulario.input', ['label' =>'Quantidade','input' => 'qtde','atributes' => ['placeholder' => 'quantidade']])
    @include('templates.formulario.submit', ['input' => 'Atualizar'])
  
  
    {!! Form::close() !!}

  

@endsection


          