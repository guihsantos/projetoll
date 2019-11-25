@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection

@section('conteudo-view')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<nav class="navbar navbar-dark bg-primary">
       <h3>Lanches</h3>
       
    </nav>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Produto</th>
                    <th style="width:10%">Preço</th>
                    <th style="width:8%">Quantidade</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="../assets/image/xsalada.jpg" class="img-responsive"/></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">X-Salada</h4>
                                <p>Pão, hamburguer, maionese, tomate, alface, queijo e presunto.</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">R$ 5.00</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="0">
                    </td>
                    <td data-th="Subtotal" class="text-center">R$ </td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                    </td>
                </tr>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="../assets/image/xfrango.png" class="img-responsive"/></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">X-Frango</h4>
                                <p>Pão, hamburguer de Frango, maionese, tomate, alface, queijo e presunto.</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">R$ 5.00</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="0">
                    </td>
                    <td data-th="Subtotal" class="text-center"></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                    </td>
                </tr>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="../assets/image/xbacon.png" class="img-responsive"/></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">X-Bacon</h4>
                                <p>Pão, hamburguer, Bacon, maionese, tomate, alface, cebola, queijo e presunto.</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">R$ 5.50</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="0">
                    </td>
                    <td data-th="Subtotal" class="text-center"></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                    </td>
                </tr>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="../assets/image/xegg.jpg" class="img-responsive"/></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">X-Egg</h4>
                                <p>Pão, hamburguer, Ovo, maionese, tomate, alface, queijo e presunto.</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">R$ 5.00</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="0">
                    </td>
                    <td data-th="Subtotal" class="text-center"></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                    </td>
                </tr>
                
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="../assets/image/xcalabresa.jpg" class="img-responsive"/></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">X-Calabresa</h4>
                                <p>Pão, hamburguer, Ovo, Calabresa, maionese, tomate, alface, queijo e presunto.</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">R$ 6.50</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="0">
                    </td>
                    <td data-th="Subtotal" class="text-center"></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total : </strong></td>
                </tr>
                <tr>
                    <td><a href="{{ route('pedidos.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total R$ </strong></td>
                    <td><a href="index.php" class="btn btn-success btn-block">Adicionar<i class="fa fa-angle-right"></i></a></td>
                </tr>
            </tfoot>
        </table>
    </div>

@endsection