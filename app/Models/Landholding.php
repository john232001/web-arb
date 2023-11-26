<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landholding extends Model
{
    use HasFactory;

    protected $table = 'landholdings';
    protected $fillable = [
        'lhid',
        'arbs_id',
        'awardtitle_id',
        'valuation_id',
        'firstname',
        'familyname',
        'middlename',
        'municipality',
        'barangay',
        'octNo',
        'lotNo',
        'surveyNo',
        'surveyArea',
        'taxNo',
        'modeOfAcquisition',
        'dfNo',
        'coverableArea',
        'carpableArea',
        'noncarpableArea',
        'retainedArea',
        'distributeArea',
        'landsize',
        'majorCrops',
        'phase',
        'upals',
        'yearAdded',
        'pipeline',
        'targetyear',
        'projectedDelivery',
        'maro_id',
        'paro_id',
        'file',
    ];
}
