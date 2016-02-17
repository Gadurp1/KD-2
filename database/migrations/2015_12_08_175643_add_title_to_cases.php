<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToCases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coupons', function (Blueprint $table) {
          $table->string('title')->nullable();
          $table->string('date')->nullable();
          $table->string('size')->nullable();
          $table->string('settlement')->nullable();
          $table->string('p1')->nullable();
          $table->string('p2')->nullable();
          $table->string('case_type')->nullable();
          $table->string('case_number')->nullable();
          $table->string('case_status')->nullable();
          $table->string('industry')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coupons', function (Blueprint $table) {
          $table->dropColumn('title');
          $table->dropColumn('date');
          $table->dropColumn('size');
          $table->dropColumn('settlement');
          $table->dropColumn('p1');
          $table->dropColumn('p2');
          $table->dropColumn('case-type');
          $table->dropColumn('case-number');
          $table->dropColumn('case-status');
          $table->dropColumn('industry');
        });
    }
}
