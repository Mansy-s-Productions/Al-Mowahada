<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('home') }}</loc>
        <lastmod>2024-05-06</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ route('about') }}</loc>
        <lastmod>2024-05-06</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ route('contact') }}</loc>
        <lastmod>2024-05-06</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ route('blog') }}</loc>
        <lastmod>2024-05-06</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ route('services') }}</loc>
        <lastmod>2024-05-06</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>{{ route('projects') }}</loc>
        <lastmod>2024-05-06</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    @forelse($Services as $Service)
        <url>
            <loc>{{route('services.single' , [$Service->id, $Service->slug])}}</loc>
            <lastmod>{{$Service->updated_at->format('Y-m-d')}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
    @empty
    @endforelse

    @forelse($Projects as $Project)
        <url>
            <loc>{{route('projects.single' , [$Project->id, $Project->slug])}}</loc>
            <lastmod>{{$Project->updated_at->format('Y-m-d')}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
    @empty
    @endforelse
    
    @forelse($Articles as $Article)
        <url>
            <loc>{{route('blog.single' , [$Article->id, $Article->slug])}}</loc>
            <lastmod>{{$Article->updated_at->format('Y-m-d')}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
    @empty
    @endforelse
</urlset>