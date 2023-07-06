<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="categoria" id="categoria" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Categoría 1</option>
                <option value="2">Categoría 2</option>
                <option value="3">Categoría 3</option>
                <option value="4">Categoría 4</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="otros_filtros" id="otros_filtros" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Filtro 1</option>
                <option value="2">Filtro 2</option>
                <option value="3">Filtro 3</option>
                <option value="4">Filtro 4</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Encontrar un idea" class="w-full rounded-xl bg-white placeholder-gray-400 border-none px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 text-gray-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>

        </div>
    </div>
</x-app-layout>
