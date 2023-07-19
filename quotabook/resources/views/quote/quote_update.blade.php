@extends('components.header')
<style>
    h1 {
        color: var(--click, #CAC0A8);
        font-size: 2.11vw;
        font-weight: 600;
        padding: 0;
        margin: 0;

        /* background: wheat; */
    }

    .form_frame {
        display: flex;
        flex-direction: column;

        width: 100%;
        padding: 0;
        margin: 0;
        margin-top: 2.11vw;

        /* background: pink; */
    }

    .form_frame form{
        display: flex;
        flex-direction: column;
        align-items: center;

        width: 100%;
        padding: 0;
        margin: 0;

        gap: 1.05vw;
        /* background: green; */
    }

    .input_unit {
        display: grid;
        grid-template-columns: 29.49vw 23vw 28.43vw;

        width: 100%;
        padding: 0;
        margin: 0;

        gap: 1.05vw;
        /* background: red; */
    }

    .input_unit h2 {
        font-size: 1.05vw;
        text-align: right;
        color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
    }

    .input_input {
        display: flex;
        align-items: center;

        /* background: blue; */
    }

    .input_input input {
        width: 100%;
        height: 100%;
        padding: 0.52vw 0.92vw;
        outline: none;

        font-family: "K2D";
        font-size: 0.79vw;
        color: var(--click, #CAC0A8);;
        border-radius: 0.26vw;
        border: 0.13vw solid var(--click, #CAC0A8);
    }

    .input_input textarea {
        padding: 0.52vw 0.92vw;
        outline: none;

        font-family: "K2D";
        font-size: 0.79vw;
        color: var(--click, #CAC0A8);;
        border-radius: 0.26vw;
        border: 0.13vw solid var(--click, #CAC0A8);
    }

    .input_input input:focus {
        border: 0.2vw solid var(--click, #CAC0A8);
    }

    .input_input textarea:focus {
        border: 0.2vw solid var(--click, #CAC0A8);
    }

    .submit {
        display: flex;
        padding: 1.05vw 4.23vw;
        align-items: center;
        margin-top: 1.05vw;

        color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
        font-family: K2D;
        font-size: 1.58vw;

        border-radius: 0.26vw;
        border: none;
        border-bottom: 0.13vw solid var(--click, #CAC0A8);
        background: #FEFEFE;
    }

    .submit:hover {
        color: var(--font-white, #EAEAEA);
        background: var(--click, #CAC0A8);
    }

    .submit:active {
        color: var(--click, #CAC0A8);
        background: var(--font-white, #EAEAEA);
    }

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
    <h1>Update Quote</h1>
    <div class="form_frame">
        <form method="POST" action="{{ route('quote_update_post', $quote->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="input_unit">
                <h2>Quote</h2>
                <div class="input_input">
                    <textarea name="quote" required placeholder="Quote" cols="47" rows="5">{{ $quote->quote }}</textarea>
                </div>
            </div>
            <div class="input_unit">
                <h2>Book</h2>
                <div class="input_input">
                    <input name="book" value="{{ $book_quote->title }}" type="text" required placeholder="Select or create new book." list="books">
                    <datalist id="books">
                        @if(isset($books))
                            @foreach ($books as $book)
                                <option value="{{ $book->title }}">
                            @endforeach
                        @endif
                    </datalist>
                </div>
            </div>
            <div class="input_unit">
                <h2>Page</h2>
                <div class="input_input">
                    <input name="chapter" value="{{ $quote->chapter }}" type="text" required placeholder="Chapter">
                </div>
            </div>
            <div class="input_unit">
                <h2>Page</h2>
                <div class="input_input">
                    <input name="page" value="{{ $quote->page }}" type="number" required placeholder="Page">
                </div>
            </div>
            <div class="input_unit">
                <h2>Comment</h2>
                <div class="input_input">
                    <textarea name="comment" placeholder="Comment" cols="47" rows="5">{{ $quote->comment }}</textarea>
                </div>
            </div>
            <button type="submit" class="submit">Save</button>
        </form>
    </div>
@endsection

