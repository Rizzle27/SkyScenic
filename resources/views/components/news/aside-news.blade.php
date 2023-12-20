@php
    use App\Models\User;
    use Carbon\Carbon;
@endphp

@foreach ($news as $new)
    @php
        $user = User::find($new->id_user);
        $username = $user->username;
        $formattedDate = Carbon::parse($new->date)->format('d/m/Y');
    @endphp
    <a class="text-decoration-none" href="{{ url('noticias/' . $new->id) }}">
        <div class="d-flex flex-column justify-content-between gap-2 h-100">

            <div class="photo-view-new-card-body d-flex flex-column">
                <div class="d-flex justify-content-between">
                    <p class="text-secondary fs-6 m-0">Por: <span class="text-ultramarine">{{ $username }}</span></p>
                    <p class="text-secondary fs-6 m-0">{{ $formattedDate }}</p>
                </div>
                <h3 class="text-light fs-5 m-0">
                    {{ strlen($new->title) > 90 ? substr($new->title, 0, 90) . '...' : $new->title }}</h3>
                <h4 class="text-secondary fs-6 m-0">
                    {{ strlen($new->subtitle) > 32 ? substr($new->subtitle, 0, 32) . '...' : $new->subtitle }}
                </h4>
            </div>

            <div class="photo-view-new-card-image">
                <img class="w-100 h-100 object-fit-cover rounded-3"
                    src="{{ asset('uploads/news_uploads/' . $new->img_path) }}" alt="{{ $new->title }}">
            </div>

        </div>
    </a>
@endforeach
