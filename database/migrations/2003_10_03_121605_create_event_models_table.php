<?php

use App\Models\EventModel;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('date',32);
            $table->foreignId('agency_id')->references('agency_id')->on('agents');
            $table->integer('limit')->default(50);
            $table->timestamps();
        });
        EventModel::create([ 'date' => '2023-05-06', 'country' => 'America', 'agency_id' => 1,'limit'=> 20]);
        EventModel::create([ 'date' => '2023-04-09 ', 'country' => 'Hungary','agency_id' => 2, 'limit'=> 22]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_models');
    }
};
