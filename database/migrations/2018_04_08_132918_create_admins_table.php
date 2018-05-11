<?php

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Admin::$tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('account')->unique()->comment('账号');
            $table->string('password')->comment('密码');
            $table->string('name')->nullable()->comment('名称');
            $table->string('email')->nullable()->unique()->comment('邮箱');
            $table->string('phone')->nullable()->unique()->comment('手机');
            $table->string('avatar')->nullable()->comment('头像');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement("ALTER TABLE `" . Admin::$tableName . "` COMMENT '后台用户'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Admin::$tableName);
    }
}
