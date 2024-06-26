<x-app-layout>
    <div class="shadow-md bg-white">
        @foreach ($categories as $item)
            <span
                class="inline-block py-2 m-1 rounded-lg bg-red-500 hover:bg-red-500 hover:text-white p-3 border-2">{{ $item->name }}</span>
        @endforeach
    </div>
    <div class="grid md:grid-cols-4 min-h-screen">
        <div class="col-span-3 bg-red-700">
            @foreach ($posts as $post)
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


</x-app-layout>
