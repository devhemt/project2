<div class="card-body">
    <h5 class="card-title">Table with stripped rows</h5>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Demo image</th>
            <th scope="col">Batch new</th>
            <th scope="col">Batch old</th>
            <th scope="col">Created at</th>
            <th scope="col">Update at</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $p)
        <tr>
            <th scope="row">{{$p->prd_id}}</th>
            <td>{{$p->name}}</td>
            <td><img src="{{asset('images/'.$p->demoimage)}}" alt=""></td>
            <td>{{$stocklast[$p->prd_id]}} about {{$percentlast[$p->prd_id]}}%</td>
            <td>
                @if(isset($stockfirst[$p->prd_id]))
                {{$stockfirst[$p->prd_id]}} about {{$percentfirst[$p->prd_id]}}%
                @else
                    Don't have
                @endif
            </td>
            <td>{{$p->created_at}}</td>
            <td>{{$p->updated_at}}</td>
            <td>
                <a href="#"><i class="fas fa-trash "></i></a>
                <a href="#"><i class="fas fa-eye "></i></a>
                <a href="#"><i class="fas fa-edit "></i></a>
                <a href="#"><i class="fa-solid fa-circle-plus "></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>
