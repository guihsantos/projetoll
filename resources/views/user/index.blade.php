@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')


    @if(session('success'))
        <h3>{{ session('success')['messages'] }}</h3>
    @endif

    {!! Form::open(['route'=>'user.store','method' => 'post', 'class' => 'form-padrao']) !!}

    @include('templates.formulario.input', ['label'=>'Nome','input' => 'nome','atributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.input',['label'=>'CPF','input' => 'cpf','atributes' => ['placeholder' => 'CPF']])
    @include('templates.formulario.input',['label'=>'E-mail','input' => 'email','atributes' => ['placeholder' => 'E-mail']])
    @include('templates.formulario.select',['label'=>'Permissão','select' => 'permissao', 'data'=> $permissao_list, 'atributes' => ['placeholder' => 'Permissão']])
    @include('templates.formulario.password',['label'=>'Senha','input' => 'password','atributes' => ['placeholder' => 'Senha']])
    @include('templates.formulario.submit', ['input' => 'Cadastrar'])
  
    {!! Form::close() !!}

    <table class="default-table">
        <thead>
            <tr>
                <td>#</td>
                <td>CPF</td>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Permissão</td>
                <td>Status</td>
                <td>Menu</td>
            </tr>
        </thead>
        <tbody>
           
            @foreach($users as $user)
            
            <tr>
                <td>{{$user->id }}</td>
                <td>{{$user->cpf}}</td>
                <td>{{$user->nome }}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->permissao}}</td>
                <td>{{$user->status}}</td>
                <td>
                    {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Remover')!!}
                    {!! Form::close() !!}
                    
                <button><a href="{{ route('user.edit',$user->id) }}">Atualizar</a></button>
                    
                </td>
            
            </tr>
           
        </tbody>
        @endforeach
      
    </table>

@endsection


          