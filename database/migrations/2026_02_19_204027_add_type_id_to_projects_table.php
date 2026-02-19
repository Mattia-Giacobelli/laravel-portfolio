<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            //Remove types column

            $table->dropColumn('front_end');
            $table->dropColumn('back_end');

            //Add the foreign key column

            $table->foreignId('type_id')->default(1)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            //Remove foreign key column

            $table->dropForeign('projects_type_id_foreign');

            $table->dropColumn('type_id');

            //Add type columns

            $table->boolean('front_end');
            $table->boolean('back_end');
        });
    }
};
