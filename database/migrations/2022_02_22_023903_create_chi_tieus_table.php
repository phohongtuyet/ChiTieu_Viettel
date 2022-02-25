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
        Schema::create('chitieu', function (Blueprint $table) {
            $table->id();
            $table->double('thang')->nullable();
            $table->double('doanhthudichvu')->nullable();
            $table->double('tytrongdoanhthudichvu')->nullable();
            $table->double('tongdoanhthu')->nullable();
            $table->double('tytrongtongdoanhthu')->nullable();
            $table->double('duan')->nullable();
            $table->double('tytrongduan')->nullable();
            $table->double('kenhtruyen')->nullable();
            $table->double('tytrongkenhtruyen')->nullable();
            $table->double('giaoduc')->nullable();
            $table->double('tytronggiaoduc')->nullable();
            $table->double('yte')->nullable();
            $table->double('tytrongyte')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitieu');
    }
};
