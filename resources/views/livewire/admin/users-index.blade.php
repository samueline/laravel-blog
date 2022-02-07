<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card">

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Escriba el nombre del usuario">
        </div>
    @if ($users->count())
        <div class="card-body">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10px">
                                <a class="btn btn-dark" href="{{route('admin.users.edit',$user)}}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$users->links()}}
        </div>
        
    @else
    
    <div class="card-body">
        <strong>No hay registros</strong>    
    </div>  

    @endif

    </div>
</div>
