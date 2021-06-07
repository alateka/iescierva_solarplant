<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GridMeter
 *
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter query()
 * @mixin \Eloquent
 * @property int $id
 * @property float|null $rst_eimp
 * @property float|null $r_eimp
 * @property float|null $s_eimp
 * @property float|null $t_eimp
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter whereREimp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter whereRstEimp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter whereSEimp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter whereTEimp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GridMeter whereUpdatedAt($value)
 */


class GridMeter extends Model
{
    protected $table = 'grid_meter';

    use HasFactory;
}
