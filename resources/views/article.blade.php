<x-content :title="$title">
    {{-- <article class="mt-2 mb-5 text-gray-900 border-2 border-gray-300 rounded-xl p-5 shadow-xl">
        <h2 class="text-lg my-2 font-bold">{{ $blog->judul }}</h2>
        <div class="text-gray-600 mb-2 flex mt-1">
            <h4 class="text-gray-700">{{ $blog->pembuat->name }} | </h4> {{ $blog['tanggal'] }}
        </div>
        <p>{{ $blog['article'] }}</p>
        <a href="/blog" class="text-sky-900">&laquo; back..</a>
    </article> --}}

    <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-2xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white gap-1">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="/userBlog/{{ $blog->pembuat->name }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $blog->pembuat->name }}</a>
                                <a href="/category/{{ $blog->kategori->nama_slag }}" class="text-sm text-gray-500 dark:text-gray-400 px-5 rounded-xl {{ $blog->kategori->color_id }} my-2">{{ $blog->kategori->nama_slag }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $blog->tanggal }}</p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $blog->judul }}</h1>
                </header>
                <p>
                    {{ $blog->article }}
                </p>
            </article>
        </div>
    </main>    

</x-content>