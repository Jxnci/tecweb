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
    Schema::create('multas', function (Blueprint $table) {
      $table->engine = "InnoDB";
      $table->bigIncrements('id');
      $table->text('asunto');
      $table->decimal('monto', 8, 2);
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
