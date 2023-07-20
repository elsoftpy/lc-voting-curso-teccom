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
    </div> {{-- fin del filtros  --}}
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container cursor-pointer flex bg-white rounded-xl hover:shadow-card transition duration-150 ease-in">
            <div class="border-r border-gray-200 px-5 py-8">
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
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div> {{-- fin avatar --}}
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        Un título cualquiera
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div> Hace 10 horas</div>
                            <div>&bull;</div>
                            <div>Categoría 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comentarios</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Abierta
                            </div>
                        </div> {{-- fin estado --}}
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                            <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
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
                        </button>
                    </div> {{-- fin comentarios --}}

                </div>
            </div> {{-- fin cuerpo idea --}}

        </div> {{-- fin contenedor idea  --}}
        <div class="idea-container cursor-pointer flex bg-white rounded-xl hover:shadow-card transition duration-150 ease-in">
            <div class="border-r border-gray-200 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-blue text-2xl">
                        12
                    </div>
                    <div class="text-gray-500">
                        Votos
                    </div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-blue text-white border border-gray-200 hover:border-gray-400 text-xxs font-bold uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                        Votado
                    </button>
                </div>
            </div> {{-- fin votos  --}}
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div> {{-- fin avatar --}}
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        Otro título cualquiera
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis possimus a quasi doloremque illum hic ut perferendis velit facere ad nostrum tempora quae natus error vitae amet consequuntur, eligendi quibusdam, odit dolorum distinctio eveniet fugiat! Nulla, doloremque aspernatur maiores est quidem labore porro tempore! Earum provident dignissimos dolore ea minus iure autem veniam harum voluptatem laborum mollitia, hic debitis eaque a quisquam aliquid magnam distinctio dolorum adipisci. Impedit dolore dolores qui laborum temporibus inventore eos, dolorem sequi harum labore eveniet voluptatibus iure dignissimos odio voluptatum, autem neque explicabo. Deserunt nesciunt sit temporibus fugiat! Doloribus adipisci dolorem necessitatibus officiis beatae consequatur eaque. Ducimus esse pariatur ipsa deserunt omnis tenetur corrupti adipisci laudantium repellat fugit. Quo ut voluptatum quia incidunt perspiciatis, eum quidem et blanditiis, quas ipsam obcaecati. Dicta soluta iste sed reiciendis magni ullam eligendi at maiores velit dolore? Enim, voluptatem velit dolor harum sapiente aut at pariatur dolorem, hic voluptates officia. Voluptas suscipit, adipisci blanditiis voluptate sapiente perferendis voluptatem tempora sed deleniti quaerat et sint distinctio error facilis vero dolores veniam, libero quis accusantium minus dolorum. Ipsam quisquam iure doloribus recusandae dolorem id exercitationem modi tenetur. Voluptatum illum maiores molestiae natus nulla neque nemo. Ex rem obcaecati molestiae id doloremque?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div> Hace 10 horas</div>
                            <div>&bull;</div>
                            <div>Categoría 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comentarios</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-red text-xxs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Cerrada
                            </div>
                        </div> {{-- fin estado --}}
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>

                        </button>
                    </div> {{-- fin comentarios --}}
                </div>
            </div> {{-- fin cuerpo idea --}}
        </div> {{-- fin contenedor idea  --}}
        <div class="idea-container cursor-pointer flex bg-white rounded-xl hover:shadow-card transition duration-150 ease-in">
            <div class="border-r border-gray-200 px-5 py-8">
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
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div> {{-- fin avatar --}}
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        Un título cualquiera más
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div> Hace 10 horas</div>
                            <div>&bull;</div>
                            <div>Categoría 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comentarios</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Implementada
                            </div>
                        </div> {{-- fin estado --}}
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                            {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
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
                            </ul> --}}
                        </button>
                    </div> {{-- fin comentarios --}}

                </div>
            </div> {{-- fin cuerpo idea --}}

        </div> {{-- fin contenedor idea  --}}
        <div class="idea-container cursor-pointer flex bg-white rounded-xl hover:shadow-card transition duration-150 ease-in">
            <div class="border-r border-gray-200 px-5 py-8">
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
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div> {{-- fin avatar --}}
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        Otro título cualquiera random
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div> Hace 10 horas</div>
                            <div>&bull;</div>
                            <div>Categoría 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comentarios</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                En progreso
                            </div>
                        </div> {{-- fin estado --}}
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                        </button>
                    </div> {{-- fin comentarios --}}

                </div>
            </div> {{-- fin cuerpo idea --}}

        </div> {{-- fin contenedor idea  --}}
        <div class="idea-container cursor-pointer flex bg-white rounded-xl hover:shadow-card transition duration-150 ease-in">
            <div class="border-r border-gray-200 px-5 py-8">
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
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div> {{-- fin avatar --}}
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        Último título cualquiera
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div> Hace 10 horas</div>
                            <div>&bull;</div>
                            <div>Categoría 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comentarios</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Considerando
                            </div>
                        </div> {{-- fin estado --}}
                        <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                        </button>
                    </div> {{-- fin comentarios --}}

                </div>
            </div> {{-- fin cuerpo idea --}}

        </div> {{-- fin contenedor idea  --}}

    </div> {{-- fin contenedor de ideas  --}}
</x-app-layout>
