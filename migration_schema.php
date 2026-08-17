<?php
    // Migration in Laravel
            
        // Route the laravel into Migrations
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

        return new class extends Migration
        {
            public function up(): void
            {
                              // table name + function of table
                Schema::create('posts', function (Blueprint $table) {
                    $table->id();
                    $table->foreignId('user_id')->constrained()->onDelete('cascade');
                    $table->string('title');
                    $table->text('body');
                    $table->timestamp('published_at')->nullable();
                    $table->timestamps();
                });
            }

            public function down(): void
            {
                Schema::dropIfExists('posts');
            }
            
            
            public function show(): void
            {
                Schema::create('employee', function (Blueprint $tables) {
                    $tables->id();
                    $tables->foreignId('user_id')->constrained()->onDelete('cascade');
                    $tables->string('name');
                    $tables->string('title');
                    $tables->text('body');
                    $tables->timestamp('published_at')->nullable();
                    $tables->softDeletes();
                });
            }
            
            public function drop() : void
            {
                Schema::dropIfExists('employee');
            }
            
            public function client(): void
            {
                    Schema::create('clients', function (Blueprint $schema) {
                        $schema->bigIncrements('id');
                        $schema->string('name');
                        $schema->string('title');
                        $schema->text('body');
                        $schema->timestamp('published_at')->nullable();
                        $schema->softDeletes();
                        $schema->foreignId('client_id')->constrained()->onDelete('cascade');
                        $schema->timestamp();
                        
                        
                    } );
            }
            
            public function display(): void
            {
                Schema::dropIfExists('clients');
            }
            
            
            
        };

       





?>
