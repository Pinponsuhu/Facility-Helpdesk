<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestReply extends Model
{
    use HasFactory;

    protected $table = 'request_replies';
    protected $primaryKey = 'id';
    protected $fillable = ['request_id','sender_id','is_read','message'];
}
