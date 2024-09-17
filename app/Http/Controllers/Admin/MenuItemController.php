<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use App\Models\Post;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'menu_item' => 'required',
            'menu_slug' => 'required',
            'menu_seqno' => 'required|numeric|min:1',
        ]);

        MenuItem::query()->create([
            'name' => $request->menu_item,
            'slug' => $request->menu_slug,
            'seqno' => $request->menu_seqno,
        ]);

        return back()->with('success', 'Menu item created successfully');
    }

    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();

        return back()->with('success', 'Menu item deleted successfully');
    }

    public function update(Request $request, MenuItem $menuItem)
    {
        $request->validate([
            'menu_item' => 'required',
            'menu_slug' => 'required',
            'menu_seqno' => 'required|numeric|min:1',
        ]);

        $menuItem->update([
            'name' => $request->menu_item,
            'slug' => $request->menu_slug,
            'seqno' => $request->menu_seqno,
        ]);

        return back()->with('success', 'Menu item updated successfully');
    }

    public function destroyPost(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post deleted successfully');
    }

    public function storePost(Request $request, MenuItem $menuItem)
    {
        $request->validate([
            'post.title' => 'required',
            'post.content' => 'required',
            'post.seqno' => 'required|numeric|min:1',
        ]);

        $menuItem->posts()->create([
            'title' => $request->input('post.title'),
            'content' => $request->input('post.content'),
            'seqno' => $request->input('post.seqno'),
        ]);

        return back()->with('success', 'Post created successfully');
    }

    public function updatePost(Request $request, Post $post)
    {
        $request->validate([
            'post.title' => 'required',
            'post.content' => 'required',
            'post.seqno' => 'required|numeric|min:1',
        ]);

        $post->update([
            'title' => $request->input('post.title'),
            'content' => $request->input('post.content'),
            'seqno' => $request->input('post.seqno'),
        ]);

        return back()->with('success', 'Post updated successfully');
    }
}
