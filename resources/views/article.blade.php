<x-content :title="$title">
    <article class="mt-2 mb-5 text-gray-900 border-2 border-gray-300 rounded-xl p-5 shadow-xl">
        <h2 class="text-lg my-2 font-bold">{{ $blog['judul'] }}</h2>
        <div class="text-gray-600 mb-2 flex mt-1">
            <h4 class="text-gray-700">{{ $blog['pembuat'] }} | </h4> {{ $blog['tanggal'] }}
        </div>
        <p>{{ $blog['article'] }}</p>
        <a href="/blog" class="text-sky-900">&laquo; back..</a>
    </article>

</x-content>