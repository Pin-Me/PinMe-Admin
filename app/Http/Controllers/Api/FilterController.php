<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Filter;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function show($id)
    {
        $filter = Filter::with(['order.client', 'ars'])->find($id);

        if (!$filter) {
            return response()->json([
                'error' => true,
                'message' => 'Filter tidak ditemukan',
                'data' => null
            ]);
        }

        if (!$filter->order->isActive) {
            return response()->json([
                'error' => true,
                'message' => 'Filter telah kadaluarsa, hubungi admin untuk memperpanjang',
                'data' => null
            ]);
        }

        $responseData = [
            'clientId' => $filter->order->client->id ?? null,
            'namaFilter' => $filter->namaFilter,
            'marker' => $filter->marker ? url('storage/' . $filter->marker) : null,
            'sound' => $filter->sound ? url('storage/' . $filter->sound) : null,
            'preview' => $filter->preview ? url('storage/' . $filter->preview) : null,
            'isActive' => $filter->order->isActive,
            'expiredDate' => $filter->order->expiredDate,
            'createdAt' => $filter->created_at,
            'updatedAt' => $filter->updated_at,
            'id' => $filter->id,
            'ar' => $filter->ars->map(function ($ar) {
                return [
                    'ar' => $ar->ar ? url('storage/' . $ar->ar) : null,
                    'positionX' => $ar->positionX,
                    'positionY' => $ar->positionY,
                    'positionZ' => $ar->positionZ,
                    'createdAt' => $ar->created_at,
                    'updatedAt' => $ar->updated_at,
                    'id' => $ar->id,
                    'filterId' => $ar->filterId
                ];
            })
        ];

        return response()->json([
            'error' => false,
            'message' => 'Berhasil mengambil data',
            'data' => $responseData
        ]);
    }
}
