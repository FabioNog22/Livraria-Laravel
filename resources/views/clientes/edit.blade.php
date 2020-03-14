<h3>Editar Cliente</h3>

<form action="{{route('clientes.update',$cliente['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="cliente_nome" value={{$cliente['cliente_nome']}}>
    <input type="submit" value="Save">
</form> 