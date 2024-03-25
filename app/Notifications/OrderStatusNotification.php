<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
use App\Models\Admin;
use App\Models\Order;

class OrderStatusNotification extends Notification
{
    use Queueable;

    public $order;
    public $newStatus;

    public function __construct($order, $newStatus)
    {
        $this->order = $order;
        $this->newStatus = $newStatus;
    }

    public function toDatabase($notifiable)
    {
        return [
            'order_id' => $this->order->id,
            'new_status' => $this->newStatus,
        ];
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];    }
}
