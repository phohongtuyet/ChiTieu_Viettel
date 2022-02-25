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
        Schema::create('ctrinhhd', function (Blueprint $table) {
            $table->id();
            $table->double('doanhthudichvu');
            $table->double('tytrongdoanhthudichvu');
            $table->double('tongdoanhthu');
            $table->double('tytrongtongdoanhthu');
            $table->double('duan');
            $table->double('tytrongduan');
            $table->double('kenhtruyen');
            $table->double('tytrongkenhtruyen');
            $table->double('giaoduc');
            $table->double('tytronggiaoduc');
            $table->double('yte');
            $table->double('tytrongyte');
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
        Schema::dropIfExists('ctrinhhd');
    }
};
