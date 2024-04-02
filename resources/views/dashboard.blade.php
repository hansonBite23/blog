<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Discover') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="">
                <a href="{{route('post.create')}}" class="btn btn-primary">Post Blog</a>
            </div>
           
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   @foreach ($posts as $post)
                     



                    <div class="card m-3">
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <a href="{{ route('view', ['id' => $post->id]) }}"> <h2>{{$post->title}}</h2></a> 
                           </blockquote>
                           <span>Created By: {{$post->user->name}}</span>
                           <p>Post at: {{$post->created_at->format('M d, Y')}}</p>
                        </div>
                      </div>
                      
                  @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
