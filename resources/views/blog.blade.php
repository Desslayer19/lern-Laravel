<x-content :title="$title">
 
  <div class="w-6xl mx-auto p-5 grid gap-2 md:grid-cols-3">
    @foreach ( $blogs as $blog )
      <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-xl shadow-xs">
        <div class="flex mb-3 justify-between">
            <div class="px-5 rounded-xl {{ $blog->kategori->color_id }}">
              <a href="/category/{{ $blog->kategori->nama_slag }}" class="text-sm text-sky-700 font-semibold"> {{ $blog->kategori->jenis_slag }}</a>
            </div>
            <h3 class="text-gray-500">{{ $blog->tanggal }}</h3>
        </div>
          <a href="/blog/{{ $blog['slag'] }}">
              <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading"> {{ $blog->slag }}</h5>
          </a>
          <p class="mb-3 text-body"> {{ Str::limit($blog->article, 100) }}</p>
          <div class="flex justify-evenly mt-5">
            <di class="flex flex-1 items-center gap-1">
              <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Rounded avatar">
              <a href="/userBlog/{{ $blog->pembuat->name }}" class="text-sm text-gray-500 mt-3">{{ $blog->pembuat->name }}</a>
            </di>
            <a href="/blog/{{ $blog['slag'] }}" class="inline-flex font-medium items-center text-fg-brand hover:underline">
              See our guideline
              <svg class="w-4 h-4 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/></svg>
          </a>
          </div>
      </div>
    @endforeach
  </div>
</x-content>