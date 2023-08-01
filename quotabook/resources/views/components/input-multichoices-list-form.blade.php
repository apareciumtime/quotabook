<style>

</style>

<div class="input_unit_input">
    <!-- <select required name="floor1" type="text" placeholder="เลือกหนังสือ" list="book_choices"> -->

    <select required name="floor1[]" multiple placeholder="เลือกหนังสือ" list="book_choices">
    <!-- Loop through the list of books and create options -->
    @foreach ($books as $book)
        <option value="{{ $book->id }}">{{ $book->title }}</option>
    @endforeach
</select>
    
</div>

<datalist id="book_choices">
    @if(count($books)>0)
        @foreach($books as $book)
            <option value="{{$book->title}}">
        @endforeach
    @endif
</datalist>

<script>
    
</script>