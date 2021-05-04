<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salats', function (Blueprint $table) {
            $table->id();
            $table->string('salat');
            $table->time('adhan');
            $table->time('iqama');
            $table->timestamps();
        });

        DB::table('salats')->insert(
            array(
                'salat' => 'Fajr',
                'adhan' => '5:00',
                'iqama' => '5:30'
            )
        );

        DB::table('salats')->insert(        
            array(
                'salat' => 'Zuhr',
                'adhan' => '1:00',
                'iqama' => '1:30'
            )
        );

        DB::table('salats')->insert(        
            array(
                'salat' => 'Asr',
                'adhan' => '3:00',
                'iqama' => '3:30'
            ),
        );

        DB::table('salats')->insert(
            array(
                'salat' => 'Maghrib',
                'adhan' => '6:00',
                'iqama' => '6:30'
            )
        );

        DB::table('salats')->insert(
            array(
                'salat' => 'Isha',
                'adhan' => '7:00',
                'iqama' => '7:30'
            )
        );

        DB::table('salats')->insert(
            array(
                'salat' => "Juma'a",
                'adhan' => '1:00',
                'iqama' => '1:45'
            )
        ); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salats');
    }
}
