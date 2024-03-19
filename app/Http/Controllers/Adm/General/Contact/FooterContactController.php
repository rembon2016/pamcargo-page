<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\Contact;

use App\Actions\Contact\FooterContactAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\AddFooterContactRequest;
use App\Http\Requests\Contact\UpdateFooterContactRequest;
use App\Models\FooterContact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FooterContactController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $footerContacts = FooterContact::latest()->get();

        return view('adm.general.contacts.footer.index', [
            'footerContacts' => $footerContacts,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.general.contact.footer.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.general.contacts.footer.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddFooterContactRequest $request
     * @return RedirectResponse
     */
    public function store(AddFooterContactRequest $request): RedirectResponse
    {
        $footerContactAction = new FooterContactAction();
        $footerContactAction->createFooterContact([
            'name' => $request->name,
            'icon' => $request->icon,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('admin.general.contact.footer.index')
            ->with('success', __('actions.stored', ['prop' => 'Footer Contact']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.general.contact.footer.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $footerContact = FooterContact::find($id);

        return view('adm.general.contacts.footer.form', [
            'actions' => $actions,
            'footerContact' => $footerContact,
        ]);
    }

    /**
     * @param UpdateFooterContactRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateFooterContactRequest $request, string $id): RedirectResponse
    {
        $footerContactAction = new FooterContactAction();
        $footerContactAction->updateFooterContact([
            'name' => $request->name,
            'icon' => $request->icon,
            'description' => $request->description,
            'footer_contact_id' => $id,
        ]);

        return redirect()
            ->route('admin.general.contact.footer.index')
            ->with('success', __("actions.updated", ['prop' => 'Footer Contact']));
    }

    /**
     * @param Request $request
     * @param string $id
     * @return RedirectResponse
     */
    public function setUsageStatus(Request $request, string $id): RedirectResponse
    {
        $footerContactAction = new FooterContactAction();
        $footerContactAction->setFooterContactStatus($request->except('_token') + ['footer_contact_id' => $id]);

        return redirect()
            ->route('admin.general.contact.footer.index')
            ->with('success', 'Status was Changed!');
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $footerContactAction = new FooterContactAction();
        $footerContactAction->deleteFooterContact(['footer_contact_id' => $id]);

        return redirect()
            ->route('admin.general.contact.footer.index')
            ->with('success', __('actions.deleted', ['prop' => 'Footer Contact']));
    }
}
