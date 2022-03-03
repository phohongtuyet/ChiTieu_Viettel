<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\thang;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thang', function (Blueprint $table) {
            $table->id();
            $table->string('thang');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        thang::create([
            'thang' => 'Tháng 01',
        ]);
        thang::create([
            'thang' => 'Tháng 02',
        ]);
        thang::create([
            'thang' => 'Tháng 03',
        ]);
        thang::create([
            'thang' => 'Tháng 04',
        ]);
        thang::create([
            'thang' => 'Tháng 05',
        ]);
        thang::create([
            'thang' => 'Tháng 06',
        ]);
        thang::create([
            'thang' => 'Tháng 07',
        ]);
        thang::create([
            'thang' => 'Tháng 08',
        ]);
        thang::create([
            'thang' => 'Tháng 09',
        ]);
        thang::create([
            'thang' => 'Tháng 10',
        ]);
        thang::create([
            'thang' => 'Tháng 11',
        ]);
        thang::create([
            'thang' => 'Tháng 12',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thang');
    }
};
