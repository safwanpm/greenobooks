<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('school_name')->nullable()->default(null);
            $table->string('phone_no')->nullable()->default(null);
            $table->string('place')->nullable()->default(null);
            $table->string('pin')->nullable()->default(null);
            $table->string('school_logo')->nullable()->default(null);
            $table->string('school_banner')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('school_name');
            $table->dropColumn('phone_no');
            $table->dropColumn('place');
            $table->dropColumn('pin');
            $table->dropColumn('school_logo');
            $table->dropColumn('school_banner');
        }); //
    }
};
