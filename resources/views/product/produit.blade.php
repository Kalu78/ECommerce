@include('header')

<body>
    <div class="product">

        <div class="images">
            <div class="ui large rounded image">
                <img src="{{ $image }}" height="450px" width="500px">
            </div>
        </div>
        <div class="content">
            <h1> {{$name}} </h1>
            <div class="description">
                <p>{{$description}}</p>
            </div>
            <div class="platform">
                <p>Platform : {{$platform}}</p>
            </div>
            <div class="price">
                Prix : {{$price}}€
            </div>
            <div class="quantité">
                Quantité : 
                <select name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="buy">
                <!-- <form action="{{ route('emails.order') }}" method="POST"> -->
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <input type="hidden" name="name" value="{{ $name }}">
                <input type="hidden" name="description" value="{{ $description }}">
                <input type="hidden" name="price" value="{{ $price }}">
                    <button class="ui button" type='submit'> Ajouter au panier </button>
                </form>
            </div>
        </div>

    </div>

</body>

