<h1>Listagem dos Produtos</h1>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
