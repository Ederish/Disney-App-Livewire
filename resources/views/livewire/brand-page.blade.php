<main class="brandPage">
  <div class="brandPage__background">
    <img src="{{ asset($brandArray[0]) }}" alt="{{ $brand }} background" />
  </div>
  <div class="brandPage__image">
      <img src="{{ asset($brandArray[1]) }}" alt="{{ $brand }} logo" />
  </div>

  <div class="brandPage__movies movieRows__container">
    <article class="singleRow" id="carousel-1">
      <h2 class="singleRow__title">Continue Watching</h2>
      <livewire:single-row :list="$brandArray[2]" />
    </article>
    <article class="singleRow" id="carousel-2">
      <h2 class="singleRow__title">{{ ucfirst($brand) }} Movies</h2>
      <livewire:single-row :list="$brandArray[3]" />
    </article>
    @if ($brand === 'starwars')
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">Star Wars</h2>
        <livewire:single-row :list="$brandArray[4]" />
      </article>
    @elseif ($brand === 'disney')
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">Disney Shows</h2>
        <livewire:single-row :list="$brandArray[4]" />
      </article>
    @elseif ($brand === 'pixar')
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">Pixar Shorts</h2>
        <livewire:single-row :list="$brandArray[4]" />
      </article>
    @elseif ($brand === 'marvel')
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">Marvel Series</h2>
        <livewire:single-row :list="$brandArray[4]" />
      </article>
    @elseif ($brand === 'national')
      <article class="singleRow" id="carousel-3">
        <h2 class="singleRow__title">National Geographic Documentaries</h2>
        <livewire:single-row :list="$brandArray[4]" />
      </article>
    @endif
  </div>
</main>