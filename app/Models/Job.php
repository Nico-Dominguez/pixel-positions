<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tag');
    }

    public function tag(string $name)
{
    try {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
        return $this;  // Add this for method chaining
    } catch (\Exception $e) {
        // Handle error or rethrow
        throw $e;
    }
}
}
