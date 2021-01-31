@include('header')

<div class="addGame">
    <a href="/admin/addProduct"><button class="ui button" type="submit">Add a new game !</button></a>
</div>

@include('flash::message')

<table class="table">
<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
    </tr>
@foreach($produits as $produit)
    <tr>
        <th scope="col">{{ $produit->id }}</th>
        <th scope="col">{{ $produit->name }}</th>
        <th scope="col"><a href="{{route('editProduct', $produit->id) }}"><button class="btn btn-primary">Edit</button></a></th>
        <form action="{{ route('deleteProduct', $produit->id)}}" method="POST">
            @csrf         
            <th scope="col"><button type="submit" class="btn btn-danger">Delete</button></th>
        </form>
    </tr>
  </thead>
@endforeach
</table>


