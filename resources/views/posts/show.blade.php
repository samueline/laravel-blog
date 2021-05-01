<x-app-layout>
    <div class="container py-8">
       <h1 class="text-4xl font-bold text-gray">
           {{$post->name}}
       </h1>
       <div class="text-lg font-semibold text-gray-500 mb-12">
           {{$post->extract}}
       </div>
       <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
           {{-- contenido principal --}}
           <div class="lg:col-span-2">
               <figure>
                   <img class="w-full h-80 object-cover object-center"src="{{Storage::url($post->image->url)}}" alt="">
               </figure>
                <div class="text-base text-gray-600 mt-4">
                    {{$post->body}}
                </div>
           </div>
           {{-- contenido relacionado --}}
           <aside>

            <h2 class="text-2xl text-bold text-gray-500 mb-4"> Mas en {{$post->category->name}}</h2>
            
            <ul>
                @foreach ($similares as $similar)
                    <li class="mb-4">
                        <a  class="flex"href="{{route('posts.show',$similar)}}">
                        
                        <img class="w-36 h-20 bg-gray-600 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                    
                        <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                    </a>
                    </li>
                @endforeach
            </ul>
        
        
        </aside>
       </div>
    </div>
</x-app-layout>