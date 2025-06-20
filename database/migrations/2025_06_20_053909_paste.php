<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pastes' ,function(Blueprint $table){
                $table->id();
                $table->text('judul')->default('');
                $table->longText('isi')->default('');
                $table->integer('use_password')->default(0);
                $table->text('password')->default('');
                $table->timestamp('updated_at');
                $table->timestamp('created_at');
                $table->bigInteger('views')->default(0);
                $table->bigInteger('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
