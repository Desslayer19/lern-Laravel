<x-content :title="$title">

  @foreach ( $blogs as $blog )
    <article class="mt-2 mb-5 text-gray-900 border-2 border-gray-300 rounded-xl p-5 shadow-xl">
      <a href="/blog/{{ $blog['slag'] }}" class="hover:underline">
        <h2 class="text-lg my-2 font-bold">{{ $blog['judul'] }}</h2>
      </a>
      <div class="text-gray-600 mb-2 flex mt-1">
        <h4 class="text-gray-700"><a href="{{ $blog->pembuat->name }}" class="hover:underline"> {{ $blog->pembuat->name }} </a> | </h4> {{ $blog['tanggal'] }}
      </div>
      <p>{{ Str::limit($blog['article'], 200) }}</p>
      <a href="/blog/{{ $blog['slag'] }}" class="text-sky-900">Read more... &raquo;</a>
    </article>
  @endforeach
  <div class="flex mt-2">
    @for ($i = 1; $i <= 10; $i++)
      <div class="bg-sky-500 p-0 me-1 grid place-items-center w-8 h-8 text-white text-sm">{{ $i }}</div>
    @endfor
  </div>
</x-content>