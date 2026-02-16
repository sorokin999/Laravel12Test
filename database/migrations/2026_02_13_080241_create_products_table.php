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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
//            $table->string('article');
            $table->decimal('price',10,2);
            $table->integer('power');
            $table->integer('multicharge');
            $table->enum('charge_type',['Медленная AC','Быстрая DC']);
            $table->enum('connectors',['Type-1','Type-2', 'GB/T', 'CCS2','CHAdeMO']);
            $table->tinyInteger('connectors_flags')->unsigned()->default(0);
            $table->enum('ground_system', ['TN-S','TN-C-S']);
            $table->enum('network_interface', ['Ethernet','3G/4G','Ethernet, 3G/4G']);
            $table->enum('version',['Навесное','Напольное', 'Напольное, Навесное']);
            $table->tinyInteger('types')->default(0)->index();
            $table->timestamps();

//            $table->boolean('is_builtin_electorate')->default(false);
//            $table->boolean('is_custom_connector')->default(false);
//            $table->boolean('is_dynamic_power_balance')->default(false);
//            $table->boolean('is_emergency_stop_button')->default(false);
//            $table->boolean('is_fire_alarm_sensor')->default(false);
//            $table->boolean('is_flood_sensor')->default(false);
//            $table->boolean('is_gsm_counter')->default(false);
//            $table->boolean('is_heatable')->default(false);
//            $table->boolean('is_input_fire_alarm_control_unit')->default(false);
//            $table->boolean('is_protected_from_power_overcurrent')->default(false);
//            $table->boolean('is_tilt_sensor')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
