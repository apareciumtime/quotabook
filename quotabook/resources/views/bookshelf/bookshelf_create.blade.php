@extends('components.header')

<style>
.bookshelf_create_playground{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4.23vw;
    align-self: stretch;

    /* border:1px red solid; */
}

.bookshelf_form_frame{
    display: flex;
    flex-direction: column;
    align-items: center;

    gap: 1.05vw;

    /* border:1px red solid; */
}

.topic{
    color: var(--click, #CAC0A8);
    font-size: 2.11vw;
    font-weight: 600;
    padding: 0;
    margin: 0;
    /* border:1px red solid; */
}

.input_unit{
    display: grid;
    grid-template-columns: 29.49vw 23vw 28.43vw;

    width: 100%;
    padding: 0;
    margin: 0;

    gap: 1.05vw;
}

.input_unit_topic{
    font-size: 1.05vw;
    text-align: right;
    padding:0.925vw 0px;
    color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
    /* border:1px red solid;     */
}

.input_unit_input{
    display: flex;
    align-items: center;
}

.input_unit_input textarea {
    padding: 0.52vw 0.92vw;
    outline: none;

    font-family: "K2D";
    font-size: 0.79vw;
    color: var(--click, #CAC0A8);;
    border-radius: 0.26vw;
    border: 0.13vw solid var(--click, #CAC0A8);
}

.input_unit_input input {
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

.input_unit_input select {
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

.bookshelf_form_frame {
    display: flex;
    flex-direction: column;

    width: 100%;
    padding: 0;
    margin: 0;
    margin-top: 2.11vw;

    /* background: pink; */
}

.bookshelf_form_frame form{
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
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        align-items: center;
        font-size: 1.05vw;
        margin: 0;
        color: var(--font-secondary-black, rgba(14, 14, 14, 0.50));
        /* background: blue; */
    }

    .input_input {
        display: flex;
        align-items: center;

        /* background: blue; */
    }

    .input_input input {
        width: 100%;
        height: 100%;
        padding: 0.79vw 0.92vw;
        outline: none;

        font-family: "K2D";
        font-size: 0.79vw;
        color: var(--click, #CAC0A8);
        border-radius: 0.26vw;
        border: 0.13vw solid var(--click, #CAC0A8);
    }

    .additional_books {
        display: flex;
        flex-direction: column;
        align-items: center;

        width: 100%;
        padding: 0.52vw 0;
        margin: 0;

        gap: 1.05vw;
        /* background: green; */
        border-top: 0.13vw solid var(--click, #CAC0A8);
        border-bottom: 0.13vw solid var(--click, #CAC0A8);
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

    <form method="POST" action="{{ route('book_shelf_create_post') }}" enctype="multipart/form-data">
        <div class="bookshelf_form_frame">
            @csrf
            <div class="input_unit">
                <h2>Book Shelf Name</h2>
                <div class="input_input">
                    <input name="bookshelf_name" type="text" placeholder="Book Shelf Name">
                </div>
            </div>

            <div class="input_unit">
                <h2>Floor 1</h2>
                <div class="input_input">
                    <input required name="f1books[]" type="text" placeholder="Select or create new book" list="books">
                </div>
            </div>
            <div class="additional_books" id="additional_books1" data-floor="1"></div>
            <button class="add_book" data-floor="1" type="button">Add Book</button>

            <div class="input_unit">
                <h2>Floor 2</h2>
                <div class="input_input">
                    <input required name="f2books[]" type="text" placeholder="Select or create new book" list="books">
                </div>
            </div>
            <div class="additional_books" id="additional_books2" data-floor="2"></div>
            <button class="add_book" data-floor="2" type="button">Add Book</button>

            <div class="input_unit">
                <h2>Floor 3</h2>
                <div class="input_input">
                    <input required name="f3books[]" type="text" placeholder="Select or create new book" list="books">
                </div>
            </div>
            <div class="additional_books" id="additional_books3" data-floor="3"></div>
            <button class="add_book" data-floor="3" type="button">Add Book</button>

            <datalist id="books">
                @if (is_null($books))
                    @foreach ($books as $book)
                        <option value="{{ $book->title }}">
                    @endforeach
                @endif
            </datalist>

            <button type="submit" class="submit">Save</button>
        </div>
        </form>

    </div>


    

    


<!-- <textarea name="quote" required placeholder="" cols="47" rows="5"></textarea> -->
</div>
<script>
    $(document).ready(function() {
        var bookCounts = [1, 1, 1];
        $(".add_book").click(function() {
            var floor = $(this).data("floor");

            if (bookCounts[floor - 1] < 3) {
                bookCounts[floor - 1]++;
                var bookCount = bookCounts[floor - 1];

                var additionalBook = `
                    <div class="input_unit">
                        <h2></h2>
                        <div class="input_input">
                            <input required name="f${floor}books[]" type="text" placeholder="Select or create new book" list="books">
                        </div>
                        <button type="button" class="remove_book" data-book-count="${bookCount}" data-floor="${floor}">Remove</button>
                    </div>
                `;

                $(`#additional_books${floor}`).append(additionalBook);
            } else {
                alert("The shelf is full");
            }
        });

        $(".additional_books").on("click", ".remove_book", function() {
            var bookCountToRemove = $(this).data("book-count");
            var floor = $(this).data("floor");

            if (bookCountToRemove > 1) {
                $(this).closest(".input_unit").remove();
                bookCounts[floor - 1]--;
            }
        });
    });
</script>
@endsection