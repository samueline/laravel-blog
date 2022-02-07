<div class="card">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un post">
    </div>
    @if ($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td width="10px">
                            <a class="btn btn-dark btn-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form method="POST" action="{{route('admin.posts.destroy',$post)}}">
                            @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="carf-footer">
        {{$posts->links()}}
    </div>
    
    @else
    <div class="card-body">
        <strong>No hay ningun registro</strong>

    </div>
    @endif
    
</div>
 