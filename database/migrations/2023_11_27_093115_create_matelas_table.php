<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatelasTable extends Migration
{
    public function up()
    {
        Schema::create('matelas', function (Blueprint $table) {
            $table->id();
            $table->string('modele');
            $table->string('marque');
            $table->string('taille');
            $table->decimal('prix', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matelas');
    }
}
