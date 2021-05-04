<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHadithsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hadiths', function (Blueprint $table) {
            $table->id();
            $table->text('english');
            $table->text('arabic');
            $table->integer('active')->nullable();
            $table->timestamps();
        });

        DB::table('hadiths')->insert(
            array(
                'english' => 'English Text',
                'arabic' => 'Arabic Text'
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
        Schema::dropIfExists('hadith');
    }
}
