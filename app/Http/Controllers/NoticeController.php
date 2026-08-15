<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    // Notice List

    public function notice()
    {
        $notices = DB::table('publish_notice')
            ->orderBy('id', 'desc')
            ->get();

        $total = DB::table('publish_notice')->count();

        $active = DB::table('publish_notice')
            ->where('status', 'Published')
            ->count();

        $expired = DB::table('publish_notice')
            ->whereNotNull('expiry_date')
            ->whereDate('expiry_date', '<', today())
            ->count();

        return view(
            'admin.notices.notice',
            compact(
                'notices',
                'total',
                'active',
                'expired'
            )
        );
    }


    // Publish Notice Page

    public function publish_notice()
    {
        return view('admin.notices.publish_notice');
    }


    // Store Notice

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:150',
            'publish_date' => 'required',
            'expiry_date' => 'nullable',
            'audience' => 'required|max:50',
            'status' => 'required|max:50',
            'description' => 'required'
        ]);

        $attachment = null;

        if ($request->hasFile('attachment')) {

            $file = $request->file('attachment');

            $filename =
                time() . '_' .
                $file->getClientOriginalName();

            $file->move(
                public_path('notice_files'),
                $filename
            );

            $attachment =
                'notice_files/' .
                $filename;
        }

        DB::table('publish_notice')->insert([

            'title' => $request->title,
            'category' => $request->category,
            'publish_date' => $request->publish_date,
            'expiry_date' => $request->expiry_date,
            'audience' => $request->audience,
            'status' => $request->status,
            'description' => $request->description,
            'attachment' => $attachment,
            'created_at' => now(),
            'updated_at' => now()

        ]);

        return redirect('/notice')
            ->with(
                'success',
                'Notice Published Successfully'
            );
    }


    // View Notice

    public function view($id)
    {
        $notice = DB::table('publish_notice')
            ->where('id', $id)
            ->first();

        if (!$notice) {
            return redirect('/notice')
                ->with(
                    'error',
                    'Notice Not Found'
                );
        }

        return view(
            'admin.notices.view_notice',
            compact('notice')
        );
    }


    // Edit Notice

    public function edit($id)
    {
        $notice = DB::table('publish_notice')
            ->where('id', $id)
            ->first();

        if (!$notice) {
            return redirect('/notice')
                ->with(
                    'error',
                    'Notice Not Found'
                );
        }

        return view(
            'admin.notices.edit_notice',
            compact('notice')
        );
    }


    // Update Notice

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:150',
            'publish_date' => 'required',
            'expiry_date' => 'nullable',
            'audience' => 'required|max:50',
            'status' => 'required|max:50',
            'description' => 'required'
        ]);

        $notice = DB::table('publish_notice')
            ->where('id', $id)
            ->first();

        if (!$notice) {
            return redirect('/notice')
                ->with(
                    'error',
                    'Notice Not Found'
                );
        }

        $attachment = $notice->attachment;

        if ($request->hasFile('attachment')) {

            if (
                $notice->attachment &&
                file_exists(public_path($notice->attachment))
            ) {
                unlink(public_path($notice->attachment));
            }

            $file = $request->file('attachment');

            $filename =
                time() . '_' .
                $file->getClientOriginalName();

            $file->move(
                public_path('notice_files'),
                $filename
            );

            $attachment =
                'notice_files/' .
                $filename;
        }

        DB::table('publish_notice')
            ->where('id', $id)
            ->update([

                'title' => $request->title,
                'category' => $request->category,
                'publish_date' => $request->publish_date,
                'expiry_date' => $request->expiry_date,
                'audience' => $request->audience,
                'status' => $request->status,
                'description' => $request->description,
                'attachment' => $attachment,
                'updated_at' => now()

            ]);

        return redirect('/notice')
            ->with(
                'success',
                'Notice Updated Successfully'
            );
    }


    // Delete Notice

    public function delete($id)
    {
        $notice = DB::table('publish_notice')
            ->where('id', $id)
            ->first();

        if (!$notice) {
            return redirect('/notice')
                ->with(
                    'error',
                    'Notice Not Found'
                );
        }

        if (
            $notice->attachment &&
            file_exists(public_path($notice->attachment))
        ) {
            unlink(public_path($notice->attachment));
        }

        DB::table('publish_notice')
            ->where('id', $id)
            ->delete();

        return redirect('/notice')
            ->with(
                'success',
                'Notice Deleted Successfully'
            );
    }
}