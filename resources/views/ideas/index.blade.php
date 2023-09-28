<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3 px-2">
            <select name="categoria" id="categoria" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Categoría 1</option>
                <option value="2">Categoría 2</option>
                <option value="3">Categoría 3</option>
                <option value="4">Categoría 4</option>
            </select>
        </div>
        <div class="w-full md:w-1/3 px-2">
            <select name="otros_filtros" id="otros_filtros" class="w-full rounded-xl border-none px-4 py-2">
                <option value="1">Filtro 1</option>
                <option value="2">Filtro 2</option>
                <option value="3">Filtro 3</option>
                <option value="4">Filtro 4</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 px-2 relative">
            <input type="search" placeholder="Encontrar un idea" class="w-full rounded-xl bg-white placeholder-gray-400 border-none px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 text-gray-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </div> {{-- fin del filtros  --}}
    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)
            <div x-data
                @click="const clicked = $event.target
                    const target = clicked.tagName.toLowerCase()
                    const ignores = ['button', 'svg', 'path', 'a']
                    if( !ignores.includes(target) ){
                        clicked.closest('.idea-container').querySelector('.idea-link').click()
                    }
                "
                class="idea-container cursor-pointer flex bg-white rounded-xl hover:shadow-card transition duration-150 ease-in">
                <div class="hidden md:block border-r border-gray-200 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">
                            12
                        </div>
                        <div class="text-gray-500">
                            Votos
                        </div>
                    </div>
                    <div class="mt-8">
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 text-xxs font-bold uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                            Votar
                        </button>
                    </div>
                </div> {{-- fin votos  --}}
                <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                    <div class="flex-none mx-4 md:mx-0">
                        <a href="#">
                            <img src="{{ $idea->user->avatar }}" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div> {{-- fin avatar --}}
                    <div class="mx-4 w-full flex flex-col justify-between">
                        <h4 class="text-xl font-semibold mt-2 md:mt-0">
                            <a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">
                                {{ $idea->title }}
                            </a>
                        </h4>
                        <div class="text-gray-600 mt-3 line-clamp-3">
                            {{ $idea->description}}
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div>{{ $idea->categoria->nombre_categoria}}</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">3 comentarios</div>
                            </div>
                            {{-- estado container --}}
                            <div x-data="{ isOpen: false }"
                                class="flex items-center space-x-2 mt-2 md:mt-0"
                            >
                                {{-- estado de la idea --}}
                                <div class="{{$idea->estado->id == 1 ? 'bg-green text-white' : 'bg-gray-200' }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                    {{ $idea->estado->nombre }}
                                </div>
                                {{-- fin del estado --}}
                                {{-- acciones --}}
                                <button @click="isOpen = !isOpen"
                                    class="relative bg-gray-100  hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                    {{-- dialgo de opciones --}}
                                    <ul x-cloak
                                        x-show="isOpen"
                                        x-transition.origin.top.left
                                        @click.away="isOpen = false"
                                        @keydown.escape.window="isOpen = false"
                                        class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0">
                                        <li>
                                            <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                                Reportar Spam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">
                                                Borrar Idea
                                            </a>
                                        </li>
                                    </ul>
                                    {{-- fin de dialogo de opciones --}}
                                </button>
                                {{-- fin de acciones --}}
                            </div>
                            {{-- fin estado container --}}
                        </div> {{-- fin comentarios --}}
                    </div>
                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none">
                                12
                            </div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">
                                Votos
                            </div>
                        </div>
                        <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-5">
                            Votar
                        </button>
                    </div>
                </div> {{-- fin cuerpo idea --}}

            </div> {{-- fin contenedor idea  --}}
        @endforeach
    </div>
    {{ $ideas->links() }}
</x-app-layout>
