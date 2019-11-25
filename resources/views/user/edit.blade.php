@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')


    @if(session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    {!! Form::model($user, ['route'=>['user.update',$user->id],'method' => 'put', 'class' => 'form-padrao']) !!}

    @include('templates.formulario.input', ['input' => 'nome','atributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.input',['input' => 'cpf','atributes' => ['placeholder' => 'CPF']])
    @include('templates.formulario.input',['input' => 'email','atributes' => ['placeholder' => 'E-mail']])
    @include('templates.formulario.select',['select' => 'permissao', 'data'=> $permissao_list, 'atributes' => ['placeholder' => 'Permissão']])
    @include('templates.formulario.password',['input' => 'password','atributes' => ['placeholder' => 'Senha']])
    @include('templates.formulario.submit', ['input' => 'Atualizar'])
  
    {!! Form::close() !!}

  

@endsection


          