class Category extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
