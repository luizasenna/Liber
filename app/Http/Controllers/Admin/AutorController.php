<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Repositories\AutorRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Autor;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AutorController extends InfyOmBaseController
{
    /** @var  AutorRepository */
    private $autorRepository;

    public function __construct(AutorRepository $autorRepo)
    {
        $this->autorRepository = $autorRepo;
    }

    /**
     * Display a listing of the Autor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->autorRepository->pushCriteria(new RequestCriteria($request));
        $autors = $this->autorRepository->orderBy('nome')->get();
        return view('admin.autors.index')
            ->with('autors', $autors);
    }

    /**
     * Show the form for creating a new Autor.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.autors.create');
    }

    /**
     * Store a newly created Autor in storage.
     *
     * @param CreateAutorRequest $request
     *
     * @return Response
     */
    public function store(CreateAutorRequest $request)
    {
        $input = $request->all();

        $autor = $this->autorRepository->create($input);

        Flash::success('Autor salvo com sucesso.');

        return redirect(route('admin.autors.index'));
    }

    /**
     * Display the specified Autor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $autor = $this->autorRepository->findWithoutFail($id);

        if (empty($autor)) {
            Flash::error('Autor not found');

            return redirect(route('autors.index'));
        }

        return view('admin.autors.show')->with('autor', $autor);
    }

    /**
     * Show the form for editing the specified Autor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $autor = $this->autorRepository->findWithoutFail($id);

        if (empty($autor)) {
            Flash::error('Autor não encontrado.');

            return redirect(route('autors.index'));
        }

        return view('admin.autors.edit')->with('autor', $autor);
    }

    /**
     * Update the specified Autor in storage.
     *
     * @param  int              $id
     * @param UpdateAutorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAutorRequest $request)
    {
        $autor = $this->autorRepository->findWithoutFail($id);



        if (empty($autor)) {
            Flash::error('Autor não encontrado.');

            return redirect(route('autors.index'));
        }

        $autor = $this->autorRepository->update($request->all(), $id);

        Flash::success('Autor atualizado com sucesso.');

        return redirect(route('admin.autors.index'));
    }

    /**
     * Remove the specified Autor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.autors.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Autor::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.autors.index'))->with('success', Lang::get('message.success.delete'));

       }

}
