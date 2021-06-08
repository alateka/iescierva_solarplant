<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LoadMeter
 *
 * @property int $id
 * @property float|null $rst_e
 * @property float|null $r_e
 * @property float|null $s_e
 * @property float|null $t_e
 * @property string $date
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter whereRE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter whereRstE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter whereSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoadMeter whereTE($value)
 * @mixin \Eloquent
 */
class LoadMeter extends Model
{
    protected $table = 'load_meter';

    use HasFactory;
}
