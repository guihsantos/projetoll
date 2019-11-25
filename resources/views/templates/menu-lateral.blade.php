<nav id="principal">
   <ul>
       <li>
           
            <a href="  "> 
            <i class="fas fa-chart-bar"></i>
               <h3>Dashboard</h3>
            </a>

           <a href="{{ route('user.index') }}"> 
           <i class="far fa-address-card"></i>
               <h3>Usuarios</h3>
           </a>
           <a href="{{ route('produtos.index') }} "> 
           <i class="fas fa-hamburger"></i>
               <h3>Produtos</h3>
           </a>
           <a href=" {{ route('pedidos.index') }} "> 
           <i class="fas fa-cart-plus"></i>
               <h3>Pedidos</h3>
           </a>
           <a href=" {{ route('user.login') }} "> 
                <i class="fas fa-exclamation-triangle"></i>
                    <h3>Sair</h3>
                </a>
       </li>
   </ul> 

</nav>