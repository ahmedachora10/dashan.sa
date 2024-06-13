<?php

namespace App\Exports;

use App\Exports\Helpers\CommonColumns;
use App\Models\BranchCertificate;
use App\Models\Corp;
use App\Traits\Exports\RTLDirection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CertificatesExport implements FromQuery, WithEvents, WithHeadings, ShouldAutoSize, WithMapping
{
    use RTLDirection, CommonColumns;

    public function __construct(protected int $corpId) {}

    public function query()
    {
        return BranchCertificate::with('branch.corp')->whereIn('corp_branch_id', Corp::find($this->corpId)?->branches()->pluck('id')->toArray());
    }

    public function headings(): array
    {
        return $this->columns([
            'رقم السجل التجاري',
            'رقم الرخصة',
            'النوع',
            'تاريخ الاصدار',
        ]);
    }

    public function map($item): array
    {
        return array_merge($this->mapCommonData($item), [
            $item->id,
            $item->branch?->corp->commercial_registration_number,
            $item->certificate_number,
            $item->type,
            $item->start_date->format('Y-m-d'),
            $item->end_date->format('Y-m-d'),
        ]);
    }
}