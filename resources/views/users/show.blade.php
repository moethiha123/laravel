<x-app-layout>


    <div class="card bg-red-500 rounded-md shadow-lg  ">
        <div class="md:flex">
            <div class="p-5">
                <img src="https://images.unsplash.com/photo-1719339837887-cfa3987bc322?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90b3MtZmVlZHwxNXx8fGVufDB8fHx8fA%3D%3D"
                    alt="pic" width="200">
            </div>
            <div class="p-5">
                <div>
                    <h1>Welcome {{ $user->name }} <span> Wrotes</span></h1>
                </div>
                @foreach ($user->posts as $post)
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->description }}</p>
                @endforeach
            </div>
        </div>




        <div class="card bg-white rounded-md shadow-lg ">
            <div class="md:flex">
                <div class="p-5">
                    <img src="https://images.unsplash.com/photo-1719339837887-cfa3987bc322?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90b3MtZmVlZHwxNXx8fGVufDB8fHx8fA%3D%3D"
                        alt="pic" width="200">
                </div>
                <div class="p-5">
                    <div>
                        <h1>Welcome {{ $user->name }} <span> Wrotes</span></h1>
                    </div>
                    @foreach ($user->posts as $post)
                        <p class="flex justify-between ">{{ $post->created_at->format('d-m-Y') }}

                        <p>{{ $post->description }}</p>
                        <a href="" class="text-blue-600">!Read More</a>
                    @endforeach
                </div>
            </div>




            <div class="card bg-white rounded-md shadow-lg min-w-screen">
                <div class="md:flex">
                    <div class="p-5">
                        <img src="https://images.unsplash.com/photo-1719339837887-cfa3987bc322?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90b3MtZmVlZHwxNXx8fGVufDB8fHx8fA%3D%3D"
                            alt="pic" width="200">
                    </div>
                    <div class="p-5">
                        <div>
                            <h1>Welcome {{ $user->name }} <span> Wrotes</span></h1>
                        </div>
                        @foreach ($user->posts as $post)
                            <p>{{ $post->description }}</p>
                            <a href="" class="text-blue-600">!Read More</a>
                        @endforeach
                    </div>
                </div>




                <div class="card bg-white rounded-md shadow-lg min-w-screen">
                    <div class="md:flex">
                        <div class="p-5">
                            <img src="https://images.unsplash.com/photo-1719339837887-cfa3987bc322?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90b3MtZmVlZHwxNXx8fGVufDB8fHx8fA%3D%3D"
                                alt="pic" width="200">
                        </div>
                        <div class="p-5">
                            <div>
                                <h1>Welcome {{ $user->name }} <span> Wrotes</span></h1>
                            </div>
                            @foreach ($user->posts as $post)
                                <p>{{ $post->description }}</p>
                                <a href="" class="text-blue-600">!Read More</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="card bg-white rounded-md shadow-lg ">
                        <div class="md:flex">
                            <div class="p-5">
                                <img src="https://images.unsplash.com/photo-1719339837887-cfa3987bc322?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90b3MtZmVlZHwxNXx8fGVufDB8fHx8fA%3D%3D"
                                    alt="pic" width="200">
                            </div>
                            <div class="p-5">
                                <div>
                                    <h1>Welcome {{ $user->name }} <span> Wrotes</span></h1>
                                </div>
                                @foreach ($user->posts as $post)
                                    <p class="flex justify-between ">{{ $post->created_at->format('d-m-Y') }}

                                    <p>{{ $post->description }}</p>
                                    <a href="" class="text-blue-600">!Read More</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="card bg-white rounded-md shadow-lg ">
                            <div class="md:flex">
                                <div class="p-5">
                                    <img src="https://images.unsplash.com/photo-1719339837887-cfa3987bc322?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90b3MtZmVlZHwxNXx8fGVufDB8fHx8fA%3D%3D"
                                        alt="pic" width="200">
                                </div>
                                <div class="p-5">
                                    <div>
                                        <h1>Welcome {{ $user->name }} <span> Wrotes</span></h1>
                                    </div>
                                    @foreach ($user->posts as $post)
                                        <p>{{ $post->description }}</p>
                                        <p class="flex justify-between ">{{ $post->created_at->format('d-m-Y') }}
                                            <a href="" class="text-blue-600">!Read More</a>
                                    @endforeach
                                </div>
                            </div>









</x-app-layout>
