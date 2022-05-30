<?php
    use Illuminate\Database\Eloquent\Model;

    class Libro extends Model
    {
        protected $table = "libros";

        public $timestamps = false;
    }