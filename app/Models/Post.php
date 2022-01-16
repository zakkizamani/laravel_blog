<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = [
    //     'title', 'excerpt', 'body'
    // ];

    protected $guarded = ['id'];


    protected $with = ['user', 'category'];

    // protected fillable berfungsi sebagai tanda field mana saja yang boleh di isi... ini berkaitan dengan proses mass asigment, jika pakai fillable maka kita harus menuliskan kolom mana saja yang boleh di isis, selain itu tidak boleh

    // protected guarded berfungsi sebagai tanda bahwa field yang di tulis tidak boleh di isi. misal guarded=['id'], maka hanya field id yang yang tidak boleh di isi, lainnya boleh


    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // $query->when(isset($fileters['search']) ? $filters['search'] : false);
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when(isset($filters['category']) ? $filters['category'] : false, function ($query, $category) {
            // eloquent join yang mencari sebuah postingan yag sesuai dengan kriteria yang dicari teteapi merupakan bagian dari kategori
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('user', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });

        // menggunakan arrow fucntion
        // $query->when(
        //     $filters['author'] ?? false,
        //     fn ($query, $author) =>
        //     $query->whereHas(
        //         'user',
        //         fn ($query) =>
        //         $query->where('username', $author)
        //     )
        // );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
