<x-app-layout>
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Aqui se editara el rol</h1>
    </div>
</header> 

<div class="container m-auto size-11/12">

<br>

<div class="min-h-screen flex  justify-center w-full">
	<div class="bg-white shadow-md rounded-lg px-8 py-6 max-w-md">
		

		<form action="{{route('role.update', $role)}}" method="POST">
@csrf
@method('put')


<h1 class="text-2xl font-bold text-center mb-4">Actualizar datos del rol {{$role->id}}</h1>
			<div class="mb-4">
				<label class="block text-sm font-medium text-gray-700 mb-2">Nombre del rol
				<input type="text" name="nombre" value="{{$role->nombre}}" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ingrese el nombre">
            </label>    
            </div>
			<div class="mb-4">
 

 {{--                <label class="block text-sm font-medium text-gray-700 mb-2">Descripción
				<input type="text" name="descripcion" value="{{$categoria->descripcion}}"  class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ingrese la descripción">
			</label> --}}

	
			</div>

            <input type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" value="Guardar">
			
		</form>
        <br>
        <button class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><a href="{{route('role.principal') }}">Cancelar</a></button>
       
            <br>
        
	</div>
</div>




</x-app-layout>