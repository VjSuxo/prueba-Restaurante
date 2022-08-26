
<x-layouts.app
                title="blog"
                metaDescrip="blog"
                >
    <h1>blog</h1>
    @foreach ( $posts as $posts )
        <h2>{{ $posts->title }}</h2>
    @endforeach
</x-layouts.app>
