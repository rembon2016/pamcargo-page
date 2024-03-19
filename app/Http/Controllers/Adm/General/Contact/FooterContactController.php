<?php

declare(strict_types=1);

namespace App\Http\Controllers\Adm\General\Contact;

use App\Http\Controllers\Controller;
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
        return view('adm.general.contacts.footer.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $actions = [
            'url' => '',
            'method' => '',
            'act' => 'Submit',
        ];

        return view('adm.general.contacts.footer.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $actions = [
            'url' => '',
            'method' => '',
            'act' => 'Update',
        ];

        return view('adm.general.contacts.footer.form', [
            'actions' => $actions,
        ]);
    }

    /**
     * @param Request $request
     * @param string $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * @param string $id
     * @return RedirectResponse
     */
    public function delete(string $id): RedirectResponse
    {
        //
    }
}
