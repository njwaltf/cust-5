<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bookings.index', [
            'bookings' => Booking::where('user_id', auth()->user()->id)->get(),
            // 'all_bookings' => Booking::latest()->get(),
            'title' => 'Perpus | Peminjaman'
            // 'result' => $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        $validatedData = $request->validate([
            'user_id' => ['required'],
            'book_id' => ['required'],
            'status' => ['required'],
            'isDenda' => ['required'],
            'stock' => ['required']
        ]);

        // $validatedData['expired_date'] = Carbon::now()->addDays(7);
        $validatedData['book_at'] = now();

        // $validatedData['user_id'] = auth()->user()->id;
        Booking::create($validatedData);
        // Book::where('id', $request->book_id)->update([
        //     'stock' => $request->stock - 1
        // ]);
        return redirect('/dashboard/bookings')->with('success', 'Peminjaman diajukan silahkan ambil buku anda ke perpustakaan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', [
            'booking' => $booking,
            'title' => 'Detail Peminjaman'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function bookReturn($id)
    {
        Booking::where('id', $id)->update([
            'status' => 'Dikembalikan'
        ]);
        return redirect('/dashboard/bookings')->with('successReturn', 'Buku berhasil dikembalikan!');
    }
}
