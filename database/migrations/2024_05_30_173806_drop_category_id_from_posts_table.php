<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCategoryIdFromPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Check for foreign key existence before dropping
            if (Schema::hasColumn('posts', 'category_id')) {
                $foreignKeys = $table->getConnection()->getDoctrineSchemaManager()->listTableForeignKeys($table->getTable());
                foreach ($foreignKeys as $foreignKey) {
                    if (in_array('category_id', $foreignKey->getLocalColumns())) {
                        $table->dropForeign(['category_id']);
                    }
                }
                $table->dropColumn('category_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            if (!Schema::hasColumn('posts', 'category_id')) {
                $table->foreignId('category_id')->constrained();
            }
        });
    }
}
