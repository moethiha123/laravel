<x-app-layout>
    <div class="shadow-md bg-white">

        @foreach ($categories as $item)
            <a href="{{ route('category.show', $item->id) }}"
                class="inline-block py-1 m-1 rounded-lg bg-red-100 hover:bg-red-500 hover:text-white p-2 border-2 text-sm">{{ $item->name }}>
            </a>
        @endforeach

    </div>




    <div class="grid md:grid-cols-4 min-h-screen">
        <div class="col-span-3 bg-red-50 p-5 ">
            @foreach ($posts as $post)
                <div class="card bg-white rounded-md shadow-lg">
                    <div class="md:flex">
                        <div class="p-5">
                            <img src="{{ asset('storage/' . $post->user->photo) }}" alt="pic" width="200">

                        </div>
                        <div class="p-5 w-full">
                            <div>
                                <a href="{{ route('users.show', $post->user->id) }}"
                                    class="font-bold uppercase text-red-600">{{ $post->user->name }}</a>
                                <span>Wrote's</span>
                                <a href="" class="font-bold uppercase text-red-600">{{ $post->user->name }}</a>
                                <span>Wrote's</span>
                            </div>
                            <h2>{{ $post->title }}</h2>
                            <p class="flex justify-between ">{{ $post->created_at->format('d-m-Y') }} <span><a
                                        href="{{ route('category.show', $post->category->id) }}"
                                        class="font-bold text-red-600">{{ $post->category->name }}</a></span></p>
                        </div>
                    </div>
                    <div class="bottom p-5">
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-span-1">
            <div>
                <div class="card p-5 bg-green-300 mb-5">
                    <h2 class="text-xl text-green-700">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum qui iusto vel laboriosam
                        tempora nostrum libero eaque! Distinctio ipsam cumque, ut repudiandae quia ipsum incidunt non
                        blanditiis eius earum.</p>
                    <button class="py-2 px-4 bg-green-800 text-white rounded-md">Click</button>
                </div>
                <div class="card p-5 bg-green-300 mb-5">
                    <h2 class="text-xl text-green-700">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum qui iusto vel laboriosam
                        tempora nostrum libero eaque! Distinctio ipsam cumque, ut repudiandae quia ipsum incidunt non
                        blanditiis eius earum.</p>
                    <button class="py-2 px-4 bg-green-800 text-white rounded-md">Click</button>
                </div>
                <div class="card p-5 bg-green-300">
                    <h2 class="text-xl text-green-700">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum qui iusto vel laboriosam
                        tempora nostrum libero eaque! Distinctio ipsam cumque, ut repudiandae quia ipsum incidunt non
                        blanditiis eius earum.</p>
                    <button class="py-2 px-4 bg-green-800 text-white rounded-md">Click</button>
                </div>

            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-4 min-h-screen">
        <div class="col-span-3 bg-red-50 p-5 ">
            <div class="card bg-white rounded-md shadow-lg">
                <div class="md:flex">
                    <div class="p-5">
                        <img src="https://images.unsplash.com/photo-1719339837887-cfa3987bc322?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90b3MtZmVlZHwxNXx8fGVufDB8fHx8fA%3D%3D"
                            alt="pic" width="200">
                    </div>
                    <div class="p-5">
                        <div>
                            <a href="">bobo</a> <span>Wrote's</span>
                        </div>
                        <h2>Post Title</h2>
                        <p>20.7.2024</p>
                    </div>
                </div>
                <div class="bottom p-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam molestias incidunt voluptate
                        autem vitae earum numquam minima tempora. Porro facere rem aspernatur consequuntur deleniti, quo
                        quam, doloribus quia repellat adipisci, quibusdam quae ullam maiores rerum ipsa culpa optio ad!
                        Quisquam ratione autem dicta dolores sunt ab inventore neque sed facilis.</p>
                </div>
            </div>
            <div class="bottom p-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam molestias incidunt voluptate
                    autem vitae earum numquam minima tempora. Porro facere rem aspernatur consequuntur deleniti, quo
                    quam, doloribus quia repellat adipisci, quibusdam quae ullam maiores rerum ipsa culpa optio ad!
                    Quisquam ratione autem dicta dolores sunt ab inventore neque sed facilis.</p>
            </div>

            {{-- @foreach ($posts as $post)

        @endforeach --}}
        </div>
        <div class="col-span-1">
            <div>
                <div class="card p-5 bg-green-300 mb-5">
                    <h2 class="text-xl text-green-700">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum qui iusto vel laboriosam
                        tempora nostrum libero eaque! Distinctio ipsam cumque, ut repudiandae quia ipsum incidunt non
                        blanditiis eius earum.</p>
                    <button class="py-2 px-4 bg-green-800 text-white rounded-md">Click</button>
                </div>
                <div class="card p-5 bg-green-300 mb-5">
                    <h2 class="text-xl text-green-700">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum qui iusto vel laboriosam
                        tempora nostrum libero eaque! Distinctio ipsam cumque, ut repudiandae quia ipsum incidunt non
                        blanditiis eius earum.</p>
                    <button class="py-2 px-4 bg-green-800 text-white rounded-md">Click</button>
                </div>
                <div class="card p-5 bg-green-300">
                    <h2 class="text-xl text-green-700">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rerum qui iusto vel laboriosam
                        tempora nostrum libero eaque! Distinctio ipsam cumque, ut repudiandae quia ipsum incidunt non
                        blanditiis eius earum.</p>
                    <button class="py-2 px-4 bg-green-800 text-white rounded-md">Click</button>
                </div>

            </div>
        </div>

</x-app-layout>
