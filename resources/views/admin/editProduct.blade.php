@include('header')

<div class="title">
    <h1 class="ui center aligned icon header" id="titleEdit">
        Change informations for the game {{$name}}
    </h1>
</div>

<form id="edit" class="ui form" method="post" action="/admin/editProduct">
    @include('flash::message')
    {{ csrf_field() }}
    <input type="hidden" name="id" value={{$id}}>
    <div class="field">
        <label>Name</label>
        <input type="text" name="name" value={{$name}}>
        @if($errors->has('name'))
            <p class="errors"> {{ $errors->first('name') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Description</label>
        <input type="text" name="description" value={{$description}}>
        @if($errors->has('description'))
            <p class="errors"> {{ $errors->first('description') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Platform</label>
        <input type="text" name="platform" value={{$platform}} >
        @if($errors->has('platform'))
            <p class="errors"> {{ $errors->first('platform') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Type</label>
        <input type="text" name="type" value={{$type}}>
        @if($errors->has('type'))
            <p class="errors"> {{ $errors->first('type') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Price</label>
        <input type="number" name="price" value={{$price}}>
        @if($errors->has('price'))
            <p class="errors"> {{ $errors->first('price') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Image URL</label>
        <input type="text" name="image" value={{$image}}>
        @if($errors->has('image'))
            <p class="errors"> {{ $errors->first('image') }} </p>
        @endif
    </div>

    <button class="ui button" type="submit">Submit</button>

</form>