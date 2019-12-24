<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateEditoraRequest;
use App\Http\Requests\UpdateEditoraRequest;
use App\Repositories\EditoraRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Editora;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EditoraController extends InfyOmBaseController
{
    /** @var  EditoraRepository */
    private $editoraRepository;

    public function __construct(EditoraRepository $editoraRepo)
    {
        $this->editoraRepository = $editoraRepo;
    }

    /**
     * Display a listing of the Editora.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->editoraRepository->pushCriteria(new RequestCriteria($request));
        $editoras = $this->editoraRepository->all();
        return view('admin.editoras.index')
            ->with('editoras', $editoras);
    }

    /**
     * Show the form for creating a new Editora.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.editoras.create');
    }

    /**
     * Store a newly created Editora in storage.
     *
     * @param CreateEditoraRequest $request
     *
     * @return Response
     */
    public function store(CreateEditoraRequest $request)
    {
        $input = $request->all();

        $editora = $this->editoraRepository->create($input);

        Flash::success('Editora saved successfully.');

        return redirect(route('admin.editoras.index'));
    }

    /**
     * Display the specified Editora.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $editora = $this->editoraRepository->findWithoutFail($id);

        if (empty($editora)) {
            Flash::error('Editora not found');

            return redirect(route('editoras.index'));
        }

        return view('admin.editoras.show')->with('editora', $editora);
    }

    /**
     * Show the form for editing the specified Editora.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $editora = $this->editoraRepository->findWithoutFail($id);

        if (empty($editora)) {
            Flash::error('Editora not found');

            return redirect(route('editoras.index'));
        }

        return view('admin.editoras.edit')->with('editora', $editora);
    }

    /**
     * Update the specified Editora in storage.
     *
     * @param  int              $id
     * @param UpdateEditoraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEditoraRequest $request)
    {
        $editora = $this->editoraRepository->findWithoutFail($id);

        

        if (empty($editora)) {
            Flash::error('Editora not found');

            return redirect(route('editoras.index'));
        }

        $editora = $this->editoraRepository->update($request->all(), $id);

        Flash::success('Editora updated successfully.');

        return redirect(route('admin.editoras.index'));
    }

    /**
     * Remove the specified Editora from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.editoras.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Editora::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.editoras.index'))->with('success', Lang::get('message.success.delete'));

       }

}
