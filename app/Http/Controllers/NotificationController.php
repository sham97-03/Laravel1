<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewOrderNotification;
use App\Notifications\OrderStatusNotification;
use App\Models\User;
use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Category;
use App\Models\Order;

class NotificationController extends Controller
{
    public function showUserNotifications(Request $request)
    {
        $pharmacist = Auth::guard('user-api')->user();

        if ($pharmacist) {
            $notifications = $pharmacist->notifications;

            if ($request->has('unread') && $request->input('unread')) {
                $notifications = $notifications->whereNull('read_at');
            }

            return response()->json(['notifications' => $notifications]);
        }

        return response()->json(['message' => 'pharmacist_not_authenticated'], 401);
    }

    public function showAdminNotifications(Request $request)
    {
        $admin = Auth::guard('admin-api')->user();

        if ($admin) {
            $notifications = $admin->notifications;

            if ($request->has('unread') && $request->input('unread')) {
                $notifications = $notifications->whereNull('read_at');
            }

            return response()->json(['notifications' => $notifications]);
        }

        return response()->json(['message' =>'admin_not_authenticated'], 401);
    }
 //________________________________________________________________________________________________________________________
    public function markAllUserAsRead()
    {
        $user = Auth::guard('user-api')->user();
        $user->unreadNotifications->markAsRead();

        return response()->json(['message' => 'all_notifications_marked_as_read']);
    }

    public function markSelectedUserAsRead(Request $request)
    {
        $user = Auth::guard('user-api')->user();
        $selectedNotificationIds = $request->input('notification_ids', []);

        if (!empty($selectedNotificationIds)) {
            $user->unreadNotifications()
            ->whereIn('id', $selectedNotificationIds)
            ->get()
            ->markAsRead();
        }

        return response()->json(['message' =>'selected_notifications_marked_as_read']);
    }

    public function markUserAsRead($notificationId)
    {
        $user = Auth::guard('user-api')->user();
        $user->unreadNotifications()->where('id', $notificationId)->get()->each->markAsRead();

        return response()->json(['message' => 'notification_marked_as_read']);
    }
 //________________________________________________________________________________________________________________________
    public function markAllAdminAsRead()
    {
        $admin = Auth::guard('admin-api')->user();
        $admin->unreadNotifications->markAsRead();

        return response()->json(['message' => 'all_notifications_marked_as_read']);
    }

    public function markSelectedAdminAsRead(Request $request)
    {
        $admin = Auth::guard('admin-api')->user();
        $selectedNotificationIds = $request->input('notification_ids', []);

        if (!empty($selectedNotificationIds)) {
            $admin->unreadNotifications()
            ->whereIn('id', $selectedNotificationIds)
            ->get()
            ->markAsRead();
        }

        return response()->json(['message' =>'selected_notifications_marked_as_read']);
    }

    public function markAdminAsRead($notificationId)
    {
        $admin = Auth::guard('admin-api')->user();
        $admin->unreadNotifications()->where('id', $notificationId)->get()->each->markAsRead();

        return response()->json(['message' => 'notification_marked_as_read']);
    }

}
