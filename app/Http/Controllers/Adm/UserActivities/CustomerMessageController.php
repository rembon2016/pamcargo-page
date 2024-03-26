<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\UserActivities;

use App\Actions\CustomerMessageAction;
use App\Http\Controllers\Controller;
use App\Models\CustomerMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $customerMessages = CustomerMessage::orderBy('is_read', 'desc')->latest()->get();

        return view('adm.user-activities.customer-message.index', [
            'customerMessages' => $customerMessages,
        ]);
    }

    /**
     * @param string $id
     * @return View
     */
    public function show(string $id): View
    {
        $customerMessage = CustomerMessage::find($id);

        return view('adm.user-activities.customer-message.show', [
            'customerMessage' => $customerMessage,
        ]);
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function read(string $id): RedirectResponse
    {
        $customerMessageAction = new CustomerMessageAction();
        $customerMessageAction->readMessageById(['customer_message_id' => $id]);

        return redirect()
            ->route('admin.ua.customer_message.index')
            ->with('success', 'Customer Message has been read Successfully!');
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $customerMessageAction = new CustomerMessageAction();
        $customerMessageAction->deleteCustomerMessage(['customer_message_id' => $id]);

        return redirect()
            ->route('admin.ua.customer_message.index')
            ->with('success', __('actions.deleted', ['prop' => 'Customer Message']));
    }
}
