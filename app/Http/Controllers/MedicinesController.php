<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Category;
use App\Models\Order;
use Validator;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    //________________________________________________________________________________________________________________________
    public function addMedication(Request $request)
{
    $input = $request->all();
    $validator = Validator::make($input, [
        'Scientific_name' => 'required',
        'Trade_name' => 'required',
        'category' => 'required',
        'Manufacturer' => 'required',
        'Available_Quantity' => 'required',
        'Expiration_date' => 'required',
        'Price' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => trans('message.medicine_created'),
            'errors' => $validator->errors()
        ]);
    }

    $category = Category::where('name', $input['category'])->first();

    if (!$category) {
        $category = Category::create(['name' => $input['category']]);
    }

    $medicine = Medicine::create([
        'scientific_name' => $input['Scientific_name'],
        'Trade_name' => $input['Trade_name'],
        'category_id'=>$category->id,
        'category' => $input['category'],
        'Manufacturer' => $input['Manufacturer'],
        'Available_Quantity' => $input['Available_Quantity'],
        'Expiration_date' => $input['Expiration_date'],
        'price' => $input['Price'],
    ]);

    $medicine->categories()->attach($category->id);

    return response()->json([
        'success' => true,
        'message' => trans('message.medicine_created'),
        'medicine' => $medicine
    ]);
}
    //_______________________________________________________________________________________________________________________
    public function getMedicineCategory($id)
{
    $medicines = Medicine::where('category_id', $id)->get();

    if ($medicines->isEmpty()) {
        return response()->json([
            'success' => false,
            'message' => 'medicine not found',
        ]);
    }

    return response()->json([
        'success' => true,
        'message' => 'medicine found',
        'medicine' => $medicines
    ]);
}
 //________________________________________________________________________________________________________________________
public function searchMedicine($word)
{
    $medicines = Medicine::where('Trade_name', $word)
        ->orWhere('Scientific_name', $word)
        ->orWhere('category', $word)
        ->get();

    if ($medicines->isNotEmpty()) {
        return response()->json([
            'success' => true,
            'message' => 'medicine found',
            'medicine' => $medicines
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'medicine not found',
    ]);
}
//________________________________________________________________________________________________________________________

public function showMedicine($id)
{
    $medicine = Medicine::find($id);

    if ($medicine) {
        return response()->json([
            'success' => true,
            'message' => 'medicine details retrieved',
            'medicine' => $medicine,
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'medicine not found',
        ], 404);
    }
}

//________________________________________________________________________________________________________________________
    public function addToWishlist(Request $request, Medicine $medicine)
    {
        $pharmacist = auth('user-api')->user();

        if ($pharmacist) {
            $pharmacist->wishlist()->toggle($medicine);

            return response()->json(['message' => 'medicine added to wishlist' ]);
        }

        return response()->json(['error' =>'pharmacist not authenticated'], 401);
    }
}
