<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General;

use App\Actions\PrivacyPolicyAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\PrivacyPolicy\UpdatePrivacyPolicyRequest;
use App\Models\PrivacyPolicy;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $actions = [
            'url' => route('admin.general.privacy_policy.save'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        $privacyPolicy = PrivacyPolicy::first();

        return view('adm.general.privacypolicy.form', [
            'actions' => $actions,
            'privacyPolicy' => $privacyPolicy,
        ]);
    }

    /**
     * @param UpdatePrivacyPolicyRequest $request
     * @return RedirectResponse
     */
    public function createOrUpdate(UpdatePrivacyPolicyRequest $request): RedirectResponse
    {
        $privacyPolicy = PrivacyPolicy::first();
        $privacyPolicyAction = new PrivacyPolicyAction();

        if (empty($privacyPolicy)) {
            $message = __('actions.stored', ['prop' => 'Privacy Policy']);
            $privacyPolicyAction->createPrivacyPolicy([
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
            ]);
        } else {
            $message = __('actions.updated', ['prop' => 'Privacy Policy']);
            $privacyPolicyAction->updatePrivacyPolicy([
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
                'privacy_policy_id' => $privacyPolicy->id,
            ]);
        }

        return redirect()
            ->back()
            ->with('success', $message);
    }
}
