<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\Contact;

use App\Actions\Contact\ContentContactAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\AddContentContactRequest;
use App\Http\Requests\Contact\UpdateContentContactRequest;
use App\Models\ContentContact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContentContactController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $contentContacts = ContentContact::latest()->get();

        return view('adm.general.contacts.content.index', [
            'contentContacts' => $contentContacts,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => route('admin.general.contact.content.store'),
            'method' => 'POST',
            'act' => 'Submit',
        ];

        return view('adm.general.contacts.content.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param AddContentContactRequest $request
     * @return RedirectResponse
     */
    public function store(AddContentContactRequest $request): RedirectResponse
    {
        $contentContactAction = new ContentContactAction();
        $contentContactAction->createContentContact([
            'mark' => $request->mark,
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description
        ]);

        return redirect()
            ->route('admin.general.contact.content.index')
            ->with('success', __('actions.stored', ['prop' => 'Content Contact']));
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => route('admin.general.contact.content.update', $id),
            'method' => 'PUT',
            'act' => 'Update',
        ];

        $contentContact = ContentContact::find($id);

        return view('adm.general.contacts.content.form', [
            'actions' => $actions,
            'contentContact' => $contentContact,
        ]);
    }

    /**
     * @param UpdateContentContactRequest $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(UpdateContentContactRequest $request, string $id): RedirectResponse
    {
        $contentContactAction = new ContentContactAction();
        $contentContactAction->updateContentContact([
            'mark' => $request->mark,
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
            'content_contact_id' => $id,
        ]);

        return redirect()
            ->route('admin.general.contact.content.index')
            ->with('success', __('actions.updated', ['prop' => 'Content Contact']));
    }

    /**
     * @param Request $request
     * @param string $id
     * @return RedirectResponse
     */
    public function setUsageStatus(Request $request, string $id): RedirectResponse
    {
        $contentContactAction = new ContentContactAction();
        $contentContactAction->setContentContactStatus($request->except('_token') + ['content_contact_id' => $id]);

        return redirect()
            ->route('admin.general.contact.content.index')
            ->with('success', 'Status was Changed!');
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        $contentContactAction = new ContentContactAction();
        $contentContactAction->deleteContentContact(['content_contact_id' => $id]);

        return redirect()
            ->route('admin.general.contact.content.index')
            ->with('success', __('actions.deleted', ['prop' => 'Content Contact']));
    }
}
