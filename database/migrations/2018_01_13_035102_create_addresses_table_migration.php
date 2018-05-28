<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('country', 50);
            $table->string('region', 50);
            $table->string('city', 50);
            
            $table->string('subCity', 50)->nullable();
            $table->string('woreda', 50)->nullable();
            
            $table->string('officePhoneNumber', 50)->nullable();
            $table->string('mobilePhoneNumber', 50)->nullable();
            $table->string('address', 150)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
