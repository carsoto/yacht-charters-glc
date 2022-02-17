<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            /*`id` int(10) UNSIGNED NOT NULL,
            `razon_social` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
            `ruc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
            `direccion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
            `telefono_1` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
            `telefono_2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `banco_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
            `cuenta_bancaria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
            `acuerdo_comercial` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
