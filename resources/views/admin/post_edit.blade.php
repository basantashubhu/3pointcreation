@isset($edit)
    <div class="ui segment">
        <form class="ui form"
              action="/admin/menu-post/{{ $post->id }}/update"
              method="post">
            @csrf
            <div class="field">
                <label>Post Title</label>
                <input type="text"
                       name="post[title]"
                       placeholder="Post Title"
                       value="{{ $post->title }}">
            </div>
            <div class="field">
                <label>Post Sequence</label>
                <input type="text"
                       name="post[seqno]"
                       placeholder="Post Sequence"
                       value="{{ $post->seqno }}">
            </div>
            <div class="field">
                <label>Post Content</label>
                <textarea name="post[content]"
                          class="summernote-content"
                          placeholder="Post Content">{{ $post->content }}</textarea>
            </div>
            <button class="ui button"
                    type="submit">Update
            </button>
            <a class="ui button" href="/admin?tab={{ $menu->slug }}">Cancel
            </a>
        </form>
        <form action="/admin/menu-post/{{ $post->id }}/delete" method="post" class="ui form" style="margin-top: 10px"
            onsubmit="return confirm('Are you sure?')">
            @csrf
            <button class="ui red button"
                    type="submit">Delete Post
            </button>
        </form>
    </div>
@else
    <form class="ui form segment"
          action="/admin/menu-item/{{ $menu->id }}"
          method="post">
        @csrf
        <div class="field">
            <label>Post Title</label>
            <input type="text"
                   name="post[title]"
                   placeholder="Post Title"
                   value="{{ old('post.title') }}">
        </div>
        <div class="field">
            <label>Post Sequence</label>
            <input type="text"
                   name="post[seqno]"
                   placeholder="Post Sequence"
                   value="{{ old('post.seqno', 1) }}">
        </div>
        <div class="field">
            <label>Post Content</label>
            <textarea name="post[content]"
                      class="summernote-content"
                      placeholder="Post Content">{{ old('post.content') }}</textarea>
        </div>
        <button class="ui button"
                type="submit">Submit
        </button>
    </form>
@endisset
