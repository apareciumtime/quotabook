@extends('components.header')
<style>

</style>

@section('body')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form_frame">
        <form method="POST" action="{{ route('quote_create_post') }}" enctype="multipart/form-data">
            @csrf
            <div class="input_unit">
                <textarea name="quote" required placeholder="Quote" cols="30" rows="10"></textarea>
                <input name="book" type="text" required placeholder="Book">
                <input name="chapter" type="number" required placeholder="Chapter">
                <input name="page" type="number" required placeholder="Page">
                <textarea name="comment" required placeholder="Comment" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

