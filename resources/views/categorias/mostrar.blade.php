<x-app-layout>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Los datos de la categoria son:</h1>
    </div>
</header> 
<!-- component -->

<div class="container m-auto size-11/12">


<div>

  <div class="mt-6 border-t border-gray-100">
    <dl class="divide-y divide-gray-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-center font-medium leading-6 text-red-900">ID:</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$categoria->id}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-center font-medium leading-6 text-red-900">Nombre:</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$categoria->nombre}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-center font-medium leading-6 text-red-900">Descripcion:</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$categoria->descripcion}}</dd>
      </div>



    </dl>
  </div>
</div>


<br>
    <button class="bg-green-500 hover:bg-red-700 text-white font-bold
py-1 px-2 border border-green-500 rounded"><a href="{{route('categoria.principal') }}">Volver</a></button>  
<button class="bg-yellow-500 hover:bg-red-700 text-white font-bold
py-1 px-2 border border-yellow-500 rounded"><a href="{{route('categoria.editar', $categoria)}}">Editar</a></button>  
    <button class="bg-blue-500 hover:bg-red-700 text-white font-bold
    py-1 px-2 border border-blue-500 rounded"><a href="{{
    route('categoria.crear') }}">Nueva categoria</a></button>

    <div class="container m-auto size-11/12">


        
    </x-app-layout>