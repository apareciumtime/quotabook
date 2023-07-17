@extends('components.header')
<style>

</style>

@section('body')
    This is quote UPDATE
    This quote is from {{ $quote->book }}
    the content is {{ $quote->quote }}
    {{ $quote->chapter }}
    {{ $quote->page }}
    {{ $quote->comment }}
@endsection

