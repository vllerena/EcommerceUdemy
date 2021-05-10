<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\TableInfo\CategoryTableInfo;

class CreateCategoriesTable extends Migration
{
    private const TABLE_CATEGORY = CategoryTableInfo::TABLE_NAME;

    public function up()
    {
        Schema::create(self::TABLE_CATEGORY, function (Blueprint $table) {
            $table->id(CategoryTableInfo::ID);
            $table->string(CategoryTableInfo::NAME);
            $table->string(CategoryTableInfo::SLUG);
            $table->string(CategoryTableInfo::IMAGE);
            $table->string(CategoryTableInfo::ICON);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(self::TABLE_CATEGORY);
    }
}
