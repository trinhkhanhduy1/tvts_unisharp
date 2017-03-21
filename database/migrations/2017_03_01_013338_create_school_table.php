<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration {

    private $_table = NULL;
    private $fileds = NULL;

    public function __construct() {
        $this->_table = 'school';
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        /**
         * Existing table
         */
        if (!Schema::hasTable($this->_table)) {
            Schema::create($this->_table, function (Blueprint $table) {
                $table->increments('school_id');
                $table->string('school_name');
            });
        }

        /**
         * Existing fields
         */
        //school_id
        if (!Schema::hasColumn($this->_table, 'school_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->increments('school_id');
            });
        }
        //sample_name
        if (!Schema::hasColumn($this->_table, 'school_name')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('school_name', 255);
            });
        }
        //category_id
        if (!Schema::hasColumn($this->_table, 'school_category_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('school_category_id');
            });
        }

        //sample_image
        if (!Schema::hasColumn($this->_table, 'school_image')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('school_image', 255);
            });
        }
        //status_id
        if (!Schema::hasColumn($this->_table, 'school_status_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('school_status_id');
            });
        }
		
		//school_emails
		if (!Schema::hasColumn($this->_table, 'school_emails')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('school_emails',255);
            });
        }
		
		//school_phone
		if (!Schema::hasColumn($this->_table, 'school_phones')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('school_phones',255);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('samples');
    }

}
