@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Add a Review for {{ $book->title }}</h1>

    <form action="{{ route('books.reviews.store', $book) }}" method="post">
        @csrf
        {{-- REVIEW --}}
        <label for="review">Review</label>
        <textarea name="review" id="review" required class="input mb-4"></textarea>

        {{-- RATING --}}
        <label for="rating">Rating</label>
        <select name="rating" id="rating" class="input mb-4" required>
            <option value="" disabled selected>Select a rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection
