<?php

namespace estoque\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;
    //protected $guarded = [ 'id' ];
    protected $fillable = array( 'nome', 'descricao', 'valor', 'quantidade' );
}
