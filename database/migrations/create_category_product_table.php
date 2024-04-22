Schema::create('category_product', function (Blueprint $table) {
    $table->foreignId('category_id')->constrained();
    $table->foreignId('product_id')->constrained();
    $table->primary(['category_id', 'product_id']);
});
