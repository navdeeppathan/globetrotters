<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactMessage;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalBlogs = Blog::count();
        $publishedBlogs = Blog::where('status', 'published')->count();
        $draftBlogs = Blog::where('status', 'draft')->count();
        $totalMessages = ContactMessage::count();

        return view('admin.dashboard', compact(
            'totalBlogs',
            'publishedBlogs',
            'draftBlogs',
            'totalMessages'
        ));
    }
}