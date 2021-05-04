<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->text('phone');
            $table->text('email');
            $table->text('address');
            $table->timestamps();
        });

        DB::table('contact_infos')->insert(
            array(
                'phone' => '0701 234 5678',
                'email' => 'info@alansar-masjid.com',
                'address' => '1 Gombole Road, Maiduguri'
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
        Schema::dropIfExists('contacts');
    }
}
