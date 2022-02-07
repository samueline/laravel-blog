<x-app-layout>
    <div class="container py-8">
       <h1 class="text-4xl font-bold text-gray">
           {{$post->name}}
       </h1>
       <div class="text-lg font-semibold text-gray-500 mb-12">
           {!!$post->extract!!}
       </div>
       <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
           {{-- contenido principal --}}
           <div class="lg:col-span-2">
               <figure>
                @if ($post->image)
                <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                 
             @else
                <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/04/09/19/45/galata-4115381__340.jpg" alt="">
                 
             @endif   
            
                </figure>
                <div class="text-base text-gray-600 mt-4">
                    {!!$post->body!!}
                </div>
           </div>
           {{-- contenido relacionado --}}
           <aside>

            <h2 class="text-2xl text-bold text-gray-500 mb-4"> Mas en {{$post->category->name}}</h2>
            
            <ul>
                @foreach ($similares as $similar)
                    <li class="mb-4">
                        <a  class="flex"href="{{route('posts.show',$similar)}}">
                            @if ($similar->image)
                            <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                             
                         @else
                            <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/04/09/19/45/galata-4115381__340.jpg" alt="">
                             
                         @endif
                        <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                    </a>
                    </li>
                @endforeach
            </ul>
        
        
        </aside>
       </div>
    </div>
</x-app-layout>