@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')

@endsection

@section('conteudo-view')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <section id="tabs" class="project-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-lanches-tab" data-toggle="tab"
                                href="#nav-lanches" role="tab" aria-controls="nav-home" aria-selected="true">Lanches &
                                Hambúrguers</a>
                            <a class="nav-item nav-link" id="nav-refrigerantes-tab" data-toggle="tab"
                                href="#nav-refrigerantes" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Refrigerantes</a>
                            <a class="nav-item nav-link" id="nav-batata-tab" data-toggle="tab" href="#nav-batata"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Batata Frita</a>
                            <a class="nav-item nav-link" id="nav-combos-tab" data-toggle="tab" href="#nav-combos"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Combos</a>
                            <a class="nav-item nav-link" id="nav-sucos-tab" data-toggle="tab" href="#nav-sucos"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Sucos</a>
                            <a class="nav-item nav-link" id="nav-sorvetes-tab" data-toggle="tab" href="#nav-sorvetes"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Sorvetes</a>
                        </div>
                    </nav>
                 
              
                        
                                     
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-lanches" role="tabpanel"
                            aria-labelledby="nav-lanches-tab">


                            <nav class="navbar navbar-dark bg-primary">
                                <a class="navbar-brand text-light">Lanches</a>
                            </nav>
                            <div class="container">
                                <table id="cart" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Produto</th>
                                            <th style="width:10%">Preço</th>
                                            <th style="width:10%">Tipo Produto</th>
                                            <th style="width:8%">Quantidade</th>
                                            <th style="width:22%" class="text-center">Subtotal</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                       
                                    </thead>
                    
                                <tbody>
                                   
                                        @foreach($produtos as $prod)
                                        
                                            @if ($prod->tipoProduto == "lanches")
                                            <td data-th="Product">
                                                    <div class="row">
                                                        <div class="col-sm-10">
                                                            <h4 class="nomargin">{{$prod->nome}}</h4>
                                                            <p> {{$prod->descricao}} </p>
                                                        </div>
                                                    </div>
                                                    <td data-th="Price">R${{$prod->preco}}</td>
                                                    <td data-th="Price">{{$prod->tipoProduto}}</td>
                                            <td data-th="Quantity">
                                            <input type="number" class="form-control text-center" value="">
                                            </td>
                                            <td data-th="Subtotal" class="text-center">R$ </td>
                                           
                                            <td>
                                                 
                                            </td>
                                            @endif
                                            <button type="submit" formaction="#" value="Add">
                                        </tr>
                                    </tbody>
                                            
                                    @endforeach
                                </table>
                            </div>
                           
                        </div>
                    <!-- DIV REFRI -->
                        <div class="tab-pane fade" id="nav-refrigerantes" role="tabpanel"
                            aria-labelledby="nav-refrigerantes-tab">

                            <nav class="navbar navbar-dark bg-primary">
                                <a class="navbar-brand text-light">Refrigerantes</a>
                                <form class="form-inline">

                                </form>
                            </nav>
                            <div class="container">
                                <table id="cart" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Produto</th>
                                            <th style="width:10%">Preço</th>
                                            <th style="width:10%">Tipo Produto</th>
                                            <th style="width:8%">Quantidade</th>
                                            <th style="width:22%" class="text-center">Subtotal</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($produtos as $prod)
                                                @if ($prod->tipoProduto == "refrigerante")
                                                <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <h4 class="nomargin">{{$prod->nome}}</h4>
                                                                <p> {{$prod->descricao}} </p>
                                                            </div>
                                                        </div>
                                                        <td data-th="Price">R${{$prod->preco}}</td>
                                                        <td data-th="Price">{{$prod->tipoProduto}}</td>
                                                <td data-th="Quantity">
                                                    <input type="number" class="form-control text-center" value="0">
                                                </td>
                                                <td data-th="Subtotal" class="text-center">R$ </td>
                                                <td class="actions" data-th="">
                                                    <button class="btn btn-info btn-sm"><i
                                                            class="fa fa-refresh"></i></button>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                                @endif
                                                 
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                               
                            </div>
                            <!-- Batata-frita -->

                        <div class="tab-pane fade" id="nav-batata" role="tabpanel" aria-labelledby="nav-batata-tab">
                            <nav class="navbar navbar-dark bg-primary">
                                <a class="navbar-brand text-light">Batata-frita</a>
                            </nav>
                            <div class="container">
                                <table id="cart" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Produto</th>
                                            <th style="width:10%">Preço</th>
                                            <th style="width:10%">Tipo Produto</th>
                                            <th style="width:8%">Quantidade</th>
                                            <th style="width:22%" class="text-center">Subtotal</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($produtos as $prod)
                                                @if ($prod->tipoProduto == "batataFrita")
                                                <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <h4 class="nomargin">{{$prod->nome}}</h4>
                                                                <p> {{$prod->descricao}} </p>
                                                            </div>
                                                        </div>
                                                        <td data-th="Price">R${{$prod->preco}}</td>
                                                        <td data-th="Price">{{$prod->tipoProduto}}</td>
                                                <td data-th="Quantity">
                                                    <input type="number" class="form-control text-center" value="0">
                                                </td>
                                                <td data-th="Subtotal" class="text-center">R$ </td>
                                                <td class="actions" data-th="">
                                                    <button class="btn btn-info btn-sm"><i
                                                            class="fa fa-refresh"></i></button>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                                @endif
                                                 
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                               
                            </div>
                            <!-- DIV COMBOS -->
                        <div class="tab-pane fade" id="nav-combos" role="tabpanel" aria-labelledby="nav-combos-tab">
                            <nav class="navbar navbar-dark bg-primary">
                                <a class="navbar-brand text-light">Combos</a>
                            </nav>
                            <div class="container">
                                <table id="cart" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Produto</th>
                                            <th style="width:10%">Preço</th>
                                            <th style="width:10%">Tipo Produto</th>
                                            <th style="width:8%">Quantidade</th>
                                            <th style="width:22%" class="text-center">Subtotal</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($produtos as $prod)
                                                @if ($prod->tipoProduto == "combos")
                                                <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <h4 class="nomargin">{{$prod->nome}}</h4>
                                                                <p> {{$prod->descricao}} </p>
                                                            </div>
                                                        </div>
                                                        <td data-th="Price">R${{$prod->preco}}</td>
                                                        <td data-th="Price">{{$prod->tipoProduto}}</td>
                                                <td data-th="Quantity">
                                                    <input type="number" class="form-control text-center" value="0">
                                                </td>
                                                <td data-th="Subtotal" class="text-center">R$ </td>
                                                <td class="actions" data-th="">
                                                    <button class="btn btn-info btn-sm"><i
                                                            class="fa fa-refresh"></i></button>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                                @endif
                                                 
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>  
                            </div>
                            <!-- DIV SUCOS -->
                        <div class="tab-pane fade" id="nav-sucos" role="tabpanel" aria-labelledby="nav-sucos-tab">
                            <nav class="navbar navbar-dark bg-primary">
                                <a class="navbar-brand text-light">Sucos</a>
                            </nav>
                            <div class="container">
                                <table id="cart" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Produto</th>
                                            <th style="width:10%">Preço</th>
                                            <th style="width:10%">Tipo Produto</th>
                                            <th style="width:8%">Quantidade</th>
                                            <th style="width:22%" class="text-center">Subtotal</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($produtos as $prod)
                                                @if ($prod->tipoProduto == "sucos")
                                                <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <h4 class="nomargin">{{$prod->nome}}</h4>
                                                                <p> {{$prod->descricao}} </p>
                                                            </div>
                                                        </div>
                                                        <td data-th="Price">R${{$prod->preco}}</td>
                                                        <td data-th="Price">{{$prod->tipoProduto}}</td>
                                                <td data-th="Quantity">
                                                    <input type="number" class="form-control text-center" value="0">
                                                </td>
                                                <td data-th="Subtotal" class="text-center">R$ </td>
                                                <td class="actions" data-th="">
                                                    <button class="btn btn-info btn-sm"><i
                                                            class="fa fa-refresh"></i></button>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                                @endif
                                                 
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <!-- DIV SORVETEs  -->
                        <div class="tab-pane fade" id="nav-sorvetes" role="tabpanel" aria-labelledby="nav-sorvetes-tab">

                            <nav class="navbar navbar-dark bg-primary">
                                <a class="navbar-brand text-light">Sorvetes Italianos</a>
                                <form class="form-inline">

                                </form>
                            </nav>
                            <div class="container">
                                <table id="cart" class="table table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width:50%">Produto</th>
                                            <th style="width:10%">Preço</th>
                                            <th style="width:10%">Tipo Produto</th>
                                            <th style="width:8%">Quantidade</th>
                                            <th style="width:22%" class="text-center">Subtotal</th>
                                            <th style="width:10%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($produtos as $prod)
                                                @if ($prod->tipoProduto == "sorvetes")
                                                <td data-th="Product">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <h4 class="nomargin">{{$prod->nome}}</h4>
                                                                <p> {{$prod->descricao}} </p>
                                                            </div>
                                                        </div>
                                                        <td data-th="Price">R${{$prod->preco}}</td>
                                                        <td data-th="Price">{{$prod->tipoProduto}}</td>
                                                <td data-th="Quantity">
                                                    <input type="number" class="form-control text-center" value="0">
                                                </td>
                                                <td data-th="Subtotal" class="text-center">R$ </td>
                                                <td class="actions" data-th="">
                                                    <button class="btn btn-info btn-sm"><i
                                                            class="fa fa-refresh"></i></button>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                                @endif
                                                 
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>

                            </div>
                            <td><a href=" {{ route('pedidos.finalizar')}} " class="btn btn-ligh">Adicionar</a></td>

                            @endsection