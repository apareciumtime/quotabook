@extends('components.header')

<style>
.bookshelf_create_playground{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4.23vw;
    align-self: stretch;

    border:1px red solid;
}

.topic{
    color: var(--click, #CAC0A8);
    font-size: 2.11vw;
    font-weight: 600;
    padding: 0;
    margin: 0;
    border:1px red solid;
}
</style>

@section('body')

<div class="bookshelf_create_playground">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="topic">
        Create new Bookshelf
    </div>

    <div class="bookshelf_form_frame">
        <form method="POST" action="{{ route('book_shelf_create_post') }}" enctype="multipart/form-data">
            @csrf
            <div class="input_unit">
                <h2>Quote</h2>
                <div class="input_input">
                    <textarea name="quote" required placeholder="Quote" cols="47" rows="5"></textarea>
                </div>
            </div>
            <button type="submit" class="submit">Save</button>
        </form>
    </div>

    



</div>

@endsection