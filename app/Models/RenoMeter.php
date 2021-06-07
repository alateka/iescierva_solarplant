<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RenoMeter
 *
 * @property int $id
 * @property float|null $rst_e
 * @property float|null $r_e
 * @property float|null $s_e
 * @property float|null $t_e
 * @property string $date
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter query()
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter whereRE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter whereRstE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter whereSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RenoMeter whereTE($value)
 * @mixin \Eloquent
 */
class RenoMeter extends Model
{
    protected $table = 'reno_meter';

    use HasFactory;
}
