<h1>Listagem de Produtos</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Ativado/Desativado</th>
    </tr>
    @foreach ( $products as $product )
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->amount}}</td>
            <td>{{$product->active}}</td>
        </tr>
    @endforeach
</table>

