<!-- https://laracasts.com/discuss/channels/laravel/displaying-a-rating-as-stars?page=0 -->
@php $rating = $wine->getAverageRatingAttribute(); @endphp
@foreach(range(1,5) as $i)

       @if($rating >0)
            @if($rating >0.5)
                <i class="fas fa-star"></i>
            @else
                <i class="fas fa-star-half-alt"></i>
            @endif
        @endif
        @php $rating--; @endphp
@endforeach
