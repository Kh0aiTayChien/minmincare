<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    protected $fillable = ['title', 'description', 'canonical_url', 'og_description', 'og_title', 'og_url', 'og_type', 'og_image', 'twitter_title', 'twitter_site', 'jsonld_description', 'jsonld_image'];
}
