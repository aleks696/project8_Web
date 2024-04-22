Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->float('price');
    $table->timestamps();
});
