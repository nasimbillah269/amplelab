@extends(welcomeTheme().'layouts.app') 

@section('title')
<title>{{ $page->seo_title ?: websiteTitle($page->name) }}</title>
@endsection 

@section('SEO')
<meta name="title" property="og:title" content="{{ $page->seo_title ?: websiteTitle($page->name) }}" />
<meta name="description" property="og:description" content="{!! $page->seo_description ?: general()->meta_description !!}" />
<meta name="keywords" content="{{ $page->seo_keyword ?: general()->meta_keyword }}" />
<meta name="image" property="og:image" content="{{ assetUrl($page->image()) }}" />
<meta name="url" property="og:url" content="{{ route('pageView', $page->slug ?: 'no-title') }}" />
<link rel="canonical" href="{{ route('pageView', $page->slug ?: 'no-title') }}">
@endsection

@push('css')
<style>


/* =========================================================
   Ample Lab — Lab Categories Page
   Design language: lab spec-sheet / specimen-label aesthetic
   ========================================================= */

/* ---------- Tokens ---------- */
:root {
  --color-bg: #F5F6F1;
  --color-surface: #FFFFFF;
  --color-ink: #1C2B2A;
  --color-ink-soft: #55645F;
  --color-line: #DBE1D6;

  --color-primary: #2F7A55;
  --color-primary-dark: #1F5A3D;
  --color-primary-tint: #E7F1EA;

  --color-accent: #B85C28;
  --color-accent-tint: #F4E7DA;

  --font-display: "Space Grotesk", "Segoe UI", sans-serif;
  --font-body: "IBM Plex Sans", "Segoe UI", sans-serif;
  --font-mono: "IBM Plex Mono", "Courier New", monospace;

  --radius-sm: 4px;
  --radius-md: 8px;

  --space-xs: 0.5rem;
  --space-sm: 1rem;
  --space-md: 1.75rem;
  --space-lg: 3rem;
  --space-xl: 4.5rem;

  --max-width: 1200px;
}


h1, h2 {
  font-family: var(--font-display);
  color: var(--color-ink);
  margin: 0;
}

p {
  margin: 0;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

dl, dd {
  margin: 0;
}

a {
  color: var(--color-primary-dark);
}

/* ---------- Intro ---------- */
.intro {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  max-width: 46rem;
}

.eyebrow {
  font-family: var(--font-mono);
  font-size: 0.75rem;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-primary-dark);
}

.intro h1 {
  font-size: clamp(2rem, 4vw, 2.75rem);
  font-weight: 600;
  line-height: 1.15;
}

.intro-text {
  color: var(--color-ink-soft);
  font-size: 1.05rem;
  max-width: 40rem;
}

.intro-stats {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  margin-top: var(--space-xs);
  padding-top: var(--space-md);
  border-top: 1px solid var(--color-line);
}

.stat {
  display: flex;
  flex-direction: column-reverse;
  gap: 0.15rem;
}

.stat dt {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  letter-spacing: 0.04em;
  color: var(--color-ink-soft);
}

.stat dd {
  font-family: var(--font-display);
  font-size: 1.6rem;
  font-weight: 600;
  color: var(--color-primary-dark);
}

/* ---------- Filter bar ---------- */
.filter-section {
  border: 1px solid var(--color-line);
  border-radius: var(--radius-md);
  background-color: var(--color-surface);
  padding: var(--space-md);
}

.filter-bar {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-sm);
}

.field {
  display: flex;
  flex-direction: column;
  gap: 0.35rem;
}

.field label {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--color-ink-soft);
}

.field input,
.field select {
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: var(--color-ink);
  background-color: var(--color-bg);
  border: 1px solid var(--color-line);
  border-radius: var(--radius-sm);
  padding: 0.6rem 0.75rem;
}

.field input:focus,
.field select:focus {
  outline: 2px solid var(--color-primary);
  outline-offset: 1px;
}

/* ---------- Results ---------- */
.results-section {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}

.category-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-md);
}

/* ---------- Category card ---------- */
.category-card {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
  background-color: var(--color-surface);
  border: 1px solid var(--color-line);
  border-radius: var(--radius-md);
  padding: var(--space-sm);
  border-left: 3px solid var(--color-primary);
  overflow: hidden;
  margin-bottom: 20px;
}

/* Pure HTML Tag Selector: Image Wrapper */
.category-card > div {
  width: 100%;
  height: 200px;
  overflow: hidden;
  border-radius: var(--radius-sm);
  background-color: var(--color-bg);
}

/* Pure HTML Tag Selector: Image */
.category-card > div > img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.3s ease;
}

.category-card:hover > div > img {
  transform: scale(1.03);
}

/* Pure HTML Tag Selector: Download Button */
.category-card > a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  font-family: var(--font-mono);
  font-size: 0.85rem;
  font-weight: 500;
  color: var(--color-surface);
  background-color: var(--color-primary);
  border: 1px solid var(--color-primary-dark);
  padding: 0.6rem 1rem;
  border-radius: var(--radius-sm);
  text-decoration: none;
  transition: all 0.2s ease;
  width: 100%;
  text-align: center;
}

.category-card > a:hover {
  background-color: var(--color-primary-dark);
  color: #ffffff;
  text-decoration: none;
}

/* ---------- Grid footer ---------- */
.grid-footer {
  display: flex;
  justify-content: center;
  padding-top: var(--space-sm);
}

.grid-count {
  font-family: var(--font-mono);
  font-size: 0.8rem;
  color: var(--color-ink-soft);
}

/* =========================================================
   Responsive breakpoints
   ========================================================= */

/* Tablet */
@media (min-width: 600px) {
  .filter-bar {
    grid-template-columns: 1fr 1fr;
  }

  .field--search {
    grid-column: 1 / -1;
  }

  .category-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* Desktop */
@media (min-width: 1024px) {
  .filter-bar {
    grid-template-columns: 2fr 1fr 1fr;
    align-items: end;
  }

  .field--search {
    grid-column: auto;
  }

  .category-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

</style>
@endpush 

@section('contents')

<!-- ===================== Breadcrumb ===================== -->
<div class="breadcrumb-strip">
  <div class="container">
    <a href="{{ route('index') }}">Home</a><span class="sep">&gt;</span><span class="text-muted">{{ $page->name }}</span>
  </div>
</div>

 <main class="categories-page">
   <div class="container">
 
      <!-- ===== Category Grid ===== -->
      <section class="results-section" aria-label="Category results">
   
        <ul class="row">
   
   @foreach($clients as $client) 
          <li class="col-md-4">
            <article class="category-card">
              <!--<div>-->
              <!--  <img src="{{ assetUrl($client->image()) }}" alt="Civil Engineering Lab" loading="lazy">-->
              <!--</div>-->
              
              
              @if($client->bannerFile)
                                    @php  
                                        $certImgUrl = assetUrl($client->bannerFile->file_url); 
                                        // ফাইলের আসল নাম বা পাথ থেকে এক্সটেনশন বের করা (যেমন: .pdf, .jpg, .png)
                                        $extension = pathinfo($client->bannerFile->file_url, PATHINFO_EXTENSION);
                                    @endphp
                                    <div style="flex: 0 0 100%; text-align: center;">
                                
                                        <img src="{{ assetUrl($client->bannerFile->image()) }}" alt="Certificate" style="max-width: 100%; max-height: 400px; border: 1px solid #ccc; border-radius: 4px; padding: 2px;" />
                                        
                                        <div style="margin-top: 8px;">
                                            <!-- ডাইনামিক এক্সটেনশন সহ ডাউনলোড অ্যাট্রিবিউট -->
                                            <a href="{{ $certImgUrl }}" download="{{ $client->name }}-Certificate.{{ $extension }}" class="btn btn-sm btn-success" style="padding: 10px 10px; font-size: 12px; text-decoration: none; display: inline-block; width: 100%;">
                                                <i class="fa fa-download"></i> Download
                                            </a>
                                        </div>
                                    </div>
                                @endif
              
              
              
              <!--<a href="#" download>-->
              <!--  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>-->
              <!--  Download-->
              <!--</a>-->
            </article>
          </li>
   @endforeach

   
        </ul>
   
   
      </section>
   </div>
  </main>
 

@endsection 

@push('js') 

@endpush