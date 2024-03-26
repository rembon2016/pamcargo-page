<?php

declare(strict_types=1);

namespace App\Http\Controllers\LandingPage\ContactUs;

use App\Actions\CustomerMessageAction;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
    /**
     * @return void
     */
    public function __construct(
        protected CustomerMessageAction $customerMessageAction
    ) {}

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function sendCustomerMessage(Request $request): RedirectResponse
    {
        $this->customerMessageAction->createCustomerMessage($request->validate([
            'firstname' => ['required', 'string', 'max:100'],
            'lastname' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'digits_between:1,15'],
            'message' => ['required', 'string']
        ]));

        return redirect()
            ->back()
            ->with('success', __('actions.stored', ['prop' => 'Customer Message']));
    }
}
