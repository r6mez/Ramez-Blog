<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->longText("about");
            $table->timestamps();
        });


        DB::table('owners')->insert([
            [
                'name' => 'Ramez Medhat',
                'about' => 'كلام كتير ملوش داعي بحفر حفرة وادفن اوجاعي',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
