<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('givenName', 50);
            $table->string('middleName', 50);
            $table->string('lastName', 50)->nullable();
            
            $table->string('email', 50)->nullable();
            $table->string('position', 50)->nullable();
            
            $table->string('gender', 50);
            $table->string('employeeId', 50)->nullable();
            
            $table->date('hiredDate')->nullable();
            
            $table->boolean('isActive');
            
            $table->integer('addressId')->nullable();
            $table->integer('departmentId');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
