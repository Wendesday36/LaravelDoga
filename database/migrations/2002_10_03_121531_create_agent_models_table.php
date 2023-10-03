<?php

use App\Models\AgentModel;
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
        Schema::create('agents', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name',32);
            $table->string('country',150);
            $table->string('type',150);
            $table->timestamps();
        });
         AgentModel::create([ 'name' => 'Colin Hoover', 'country' => 'America', 'type'=> '20']);
        AgentModel::create([ 'name' => 'Monica Murphy', 'country' => 'Hungary', 'type'=> '22']); 
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_models');
    }
};
