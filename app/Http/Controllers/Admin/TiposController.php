<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateTiposRequest;
use App\Http\Requests\UpdateTiposRequest;
use App\Repositories\TiposRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Tipos;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TiposController extends InfyOmBaseController
{
    /** @var  TiposRepository */
    private $tiposRepository;

    public function __construct(TiposRepository $tiposRepo)
    {
        $this->tiposRepository = $tiposRepo;
    }

    /**
     * Display a listing of the Tipos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->tiposRepository->pushCriteria(new RequestCriteria($request));
        $tipos = $this->tiposRepository->all();
        return view('admin.tipos.index')
            ->with('tipos', $tipos);
    }

    /**
     * Show the form for creating a new Tipos.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.tipos.create');
    }

    /**
     * Store a newly created Tipos in storage.
     *
     * @param CreateTiposRequest $request
     *
     * @return Response
     */
    public function store(CreateTiposRequest $request)
    {
        $input = $request->all();

        $tipos = $this->tiposRepository->create($input);

        Flash::success('Tipos saved successfully.');

        return redirect(route('admin.tipos.index'));
    }

    /**
     * Display the specified Tipos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipos = $this->tiposRepository->findWithoutFail($id);

        if (empty($tipos)) {
            Flash::error('Tipos not found');

            return redirect(route('tipos.index'));
        }

        return view('admin.tipos.show')->with('tipos', $tipos);
    }

    /**
     * Show the form for editing the specified Tipos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipos = $this->tiposRepository->findWithoutFail($id);

        if (empty($tipos)) {
            Flash::error('Tipos not found');

            return redirect(route('tipos.index'));
        }

        return view('admin.tipos.edit')->with('tipos', $tipos);
    }

    /**
     * Update the specified Tipos in storage.
     *
     * @param  int              $id
     * @param UpdateTiposRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTiposRequest $request)
    {
        $tipos = $this->tiposRepository->findWithoutFail($id);

        

        if (empty($tipos)) {
            Flash::error('Tipos not found');

            return redirect(route('tipos.index'));
        }

        $tipos = $this->tiposRepository->update($request->all(), $id);

        Flash::success('Tipos updated successfully.');

        return redirect(route('admin.tipos.index'));
    }

    /**
     * Remove the specified Tipos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.tipos.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Tipos::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.tipos.index'))->with('success', Lang::get('message.success.delete'));

       }

}
