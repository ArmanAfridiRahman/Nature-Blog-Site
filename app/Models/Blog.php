<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        self::$image = $request->file('blog_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "assets/img/upload/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$directory.self::$imageName;
    }

    public static function newBlog($request)
    {
        self::$imageUrl = self::uploadImage($request);
        self::$blog = new Blog();
        self::$blog->blog_title = $request->blog_title;
        self::$blog->blog_author = $request->blog_author;
        self::$blog->blog_image = self::$imageUrl;
        self::$blog->blog_description = $request->blog_description;
        self::$blog->save();
    }
    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if($request->file('blog_image'))
        {
            if(file_exists(self::$blog->blog_image))
            {
                unlink(self::$blog->blog_image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else{
            self::$imageUrl = self::$blog->blog_image;
        }
        self::$blog->blog_title = $request->blog_title;
        self::$blog->blog_author = $request->blog_author;
        self::$blog->blog_image = self::$imageUrl;
        self::$blog->blog_description = $request->blog_description;
        self::$blog->save();
    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if(file_exists(self::$blog->blog_image))
        {
            unlink(self::$blog->blog_image);
        }
        self::$blog->delete();

    }

}
