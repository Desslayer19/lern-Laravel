<x-content :title="$title">

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="p-2 ml-20 bg-sky-500 rounded-xl shadow-xs w-35">
            <a href="/blog" class="text-white text-semibold">&laquo&laquo Back to Posts</a>
        </div>
        <div class="flex justify-between px-4 mx-auto max-w-2xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white gap-1">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="/blog?pembuat={{ $blog->pembuat->slug_name }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $blog->pembuat->name }}</a>
                                <a href="/blog?kategori={{ $blog->kategori->nama_slag }}" class="text-sm text-gray-500 dark:text-gray-400 px-5 rounded-xl {{ $blog->kategori->color_id }} my-2">{{ $blog->kategori->nama_slag }}</a>
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