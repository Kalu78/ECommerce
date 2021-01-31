@include('header')

@include('flash::message')
<table class="table">
<thead>
    <tr>
        <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
    </tr>
@foreach($utilisateurs as $utilisateur)
    <tr>
        <th scope="col">{{ $utilisateur->id }}</th>
        <th scope="col">{{ $utilisateur->email }}</th>
        <th scope="col">{{ $utilisateur->username }}</th>
        <form action="{{ route('deleteUser', $utilisateur->id)}}" method="POST">
            @csrf         
            <th scope="col"><button type="submit" class="btn btn-danger">Delete</button></th>
        </form>
    </tr>
  </thead>
@endforeach
</table>
