<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Use App\Models\Order;
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->ondelete('cascade');
            $table->enum('status', [Order::PENDIENTE,Order::RECIBIDO,Order::ENVIADO,Order::ENTREGADO,Order::ANULADO])->default(Order::PENDIENTE);
            $table->enum('envio_type',[1,2]);
            $table->float('shipping_cost');
            $table->float('total');  
            $table->json('content');
            
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();

            $table->foreign('department_id')->references('id')->on('departments')->ondelete('set null');
            $table->foreign('city_id') ->references('id')->on('cities')->ondelete('cascade');
            $table->foreign('district_id')->references('id') ->on('districts')->ondelete('cascade');
            $table->string('address');
            
            $table->timestamps();

            

          

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
