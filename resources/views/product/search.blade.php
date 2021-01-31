@include('header')

<div class="divider"><span></span><span>ALL PRODUCTS</span><span></span></div>
<div class="ui grid container">

    @foreach($produits as $produit)
    <div class="four wide column">
        <a class="test" href="{{route('showProduit', ['id' => $produit->id]) }}">
        <img src="{{ $produit->image }}" width="250px" height="250px">
        <div class="text">
            <a href="{{route('showProduit', ['id' => $produit->id]) }}"> <h3> {{ $produit->name }} </h3></a>
        </div>
    </div>
    @endforeach
</div>

