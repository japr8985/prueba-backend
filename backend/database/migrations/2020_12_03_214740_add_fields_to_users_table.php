<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('age');
            $table->boolean('married');
            $table->foreignId('gender_id')->constrained();
            $table->date('birthday');
            $table->text('info');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            Schema::enableForeignKeyConstraints();
            $table->dropForeign('users_gender_id_foreign');
            Schema::disableForeignKeyConstraints();

            $table->dropColumn(['age', 'married', 'gender_id', 'info']);
        });
    }
}
