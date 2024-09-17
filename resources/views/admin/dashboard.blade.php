<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css"
          rel="stylesheet">
</head>
<body>
<main>
    <br>
    <section class="ui container">
        {{--    Display form errors    --}}
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="ui error message">
                    <p>{{ $error }}</p>
                </div>
            @endforeach
        @endif
        @if(session('success'))
            <div class="ui success message">
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </section>
    <form class="ui form segment"
          action="/admin/menu-item"
          method="post">
        @csrf
        <div class="field">
            <label>Menu Item</label>
            <input type="text"
                   name="menu_item"
                   placeholder="Menu Item"
                   value="{{ old('menu_item') }}"
                   onblur="generateSlug(this)">
        </div>
        <div class="field">
            <label>Menu Slug</label>
            <input type="text"
                   name="menu_slug"
                   value="{{ old('menu_slug') }}"
                   placeholder="Menu Slug"
                   id="slug-input">
        </div>
        <div class="field">
            <label>Menu Order</label>
            <input type="number"
                   name="menu_seqno"
                   value="{{ old('menu_seqno', 1) }}"
                   placeholder="Menu Order">
        </div>
        <button class="ui button"
                type="submit">Submit
        </button>
    </form>
    <div class="ui segment">
        <div class="ui four item stackable tabs menu">
            @foreach($menuItems as $menu)
                <a class="item {{ request('tab') == $menu->slug ? 'active' : '' }}"
                   data-tab="{{ $menu->slug }}">{{ $menu->name }}</a>
            @endforeach
        </div>
        @foreach($menuItems as $menu)
            <div class="ui tab {{ request('tab') == $menu->slug ? 'active' : '' }}"
                 data-tab="{{ $menu->slug }}">
                <div>
                    <form class="ui form segment"
                          action="/admin/menu-item/{{ $menu->id }}/update"
                          method="post">
                        @csrf
                        <div class="field">
                            <label>Menu Item</label>
                            <input type="text"
                                   name="menu_item"
                                   placeholder="Menu Item"
                                   value="{{ $menu->name }}"
                                   onblur="generateSlug(this)">
                        </div>
                        <div class="field">
                            <label>Menu Slug</label>
                            <input type="text"
                                   name="menu_slug"
                                   value="{{ $menu->slug }}"
                                   placeholder="Menu Slug"
                                   id="slug-input">
                        </div>
                        <div class="field">
                            <label>Menu Order</label>
                            <input type="number"
                                   name="menu_seqno"
                                   value="{{ $menu->seqno }}"
                                   placeholder="Menu Order">
                        </div>
                        <button class="ui button"
                                type="submit">Update
                        </button>
                    </form>
                    <form action="/admin/menu-item/{{ $menu->id }}/delete"
                          method="post"
                          onsubmit="return confirm('Are you sure?')">
                        @csrf
                        <button class="ui red button">
                            Delete {{ $menu->name }}
                        </button>
                    </form>
                </div>
                <br>
                @forelse($menu->posts as $post)
                    @if(request('post') == $post->id)
                        @include('admin.post_edit', ['edit' => true])
                    @else
                        <p>
                            {{ $post->title }}
                            <a class="ui blue button" href="/admin?tab={{ $menu->slug }}&post={{ $post->id }}">
                                Edit
                            </a>
                        </p>
                        <div>
                            {!! $post->content !!}
                        </div>
                    @endif
                @empty
                    <p>No posts found</p>
                @endforelse
                @unless(request('post'))
                    @include('admin.post_edit')
                @endunless
            </div>
        @endforeach
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>

    function generateSlug(element) {
        let slug = element.value
            .toLowerCase()
            .replace(/ /g, '-')
            .replace(/[^\w-]+/g, '');
        $('#slug-input').val(slug);
    }

    $(function () {
        $('.menu .item').tab({
            onVisible(slug) {
                history.pushState({}, '', `?tab=${slug}`);
            }
        });
        $('.summernote-content').each(function () {
            $(this).summernote({
                height: 300
            });
        });
    });
</script>
</body>
</html>
