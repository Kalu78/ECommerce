@include('header')

<div class="title">
    <h1 class="ui center aligned icon header" id="titleEdit">
        Add a new game !
    </h1>
</div>

<form id="edit" class="ui form" method="post" action="/admin/addProduct">
    @include('flash::message')
    {{ csrf_field() }}
    <div class="field">
        <label>Name</label>
        <input type="text" name="name">
        @if($errors->has('name'))
            <p class="errors"> {{ $errors->first('name') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Description</label>
        <input type="text" name="description">
        @if($errors->has('description'))
            <p class="errors"> {{ $errors->first('description') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Platform</label>
        <input type="text" name="platform">
        @if($errors->has('platform'))
            <p class="errors"> {{ $errors->first('platform') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Type</label>
        <input type="text" name="type">
        @if($errors->has('type'))
            <p class="errors"> {{ $errors->first('type') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Price</label>
        <input type="number" name="price">
        @if($errors->has('price'))
            <p class="errors"> {{ $errors->first('price') }} </p>
        @endif
    </div>

    <div class="field">
        <label>Image URL</label>
        <input type="text" name="image">
        @if($errors->has('image'))
            <p class="errors"> {{ $errors->first('image') }} </p>
        @endif
    </div>

    <button class="ui button" type="submit">Submit</button>

</form>