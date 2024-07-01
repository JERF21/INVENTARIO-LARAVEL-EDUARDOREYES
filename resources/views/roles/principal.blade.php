<x-app-layout>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Lista de roles</h1>
    </div>
</header> 
<!-- component -->



    <div class="container m-auto size-11/12">
<br>
<button class="bg-blue-500 hover:bg-red-700 text-white font-bold
py-1 px-2 border border-blue-500 rounded"><a href="{{
route('role.crear') }}">Nuevo rol</a></button>
    <br>
    <br>
<table class="min-w-full border-collapse block md:table">
    <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">ID</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nombre</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Acciones</th>
        </tr>
    </thead>
    <tbody class="block md:table-row-group">
@foreach ($role as $roles)
        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nombre</span>{{$roles->id}}</a></td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Precio</span>{{$roles->nombre}}</td>

            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-green-500 rounded"><a href="{{ route('role.mostrar',$roles->id)}}">Ver</a></button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><a href="{{route('role.editar', $roles)}}">Editar</a></button>
{{--                 <form action="{{route('categoria.borrar', $cate)}}" method="POST">
                    @method('delete')
                    @csrf --}}

{{--                     @if($cate->deleted_at)
 <button type="submit" class="bg-orange-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-orange-500 rounded"><a href="{{route('activacat', $cate->id)}}">Activar</a></button>
                   <input type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded"
                     value="Borrar" onclick="if(!confirm('Desea eliminar a {{$cate->nombre}} ?')){return false}">
               --}}  
 {{--                    @else
<button type="submit" class="bg-purple-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-purple-500 rounded"><a href="{{route('desactivacat', $cate->id)}}">Desactivar</a></button>
@endif
              --}}      
{{--                   </form>
            </td> --}}
        </tr>
 @endforeach
    </tbody>
</table>
<br>
<br>
{{$role->links()}}

   
</ul>

</x-app-layout>
