<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    //
    Schema::create('autors', function (Blueprint $table) {
      $table->engine = "InnoDB";
      $table->bigIncrements('id');
      $table->string('nombres');
      $table->string('apellidos');
      $table->date('nacimiento');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    //
  }
};
